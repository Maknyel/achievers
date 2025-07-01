<?php
if(!function_exists('_list_sales_users')){
	function _list_sales_users($year,$month)
	{
	    $CI =& get_instance();
	    $CI->db->select("*");
			$CI->db->from("sales");
			$CI->db->where(array('YEAR(date_added_agent)'=> $year,'MONTH(date_added_agent)'=> $month,'agent_id'=>mysession_agent()));
			$query = $CI->db->get()->result_array();
			$returning = 0;
			foreach ($query as $key => $value) {
				$returning = $value['curr_price'] + $returning;
			}
			return $returning;
	}
}


if(!function_exists('login_agent')){
	function login_agent($post){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users_employee');
		$CI->db->where(array('email'=>$post['email'],'password'=>$post['password']));
		$query = $CI->db->get()->result_array();
		$query = current($query);
		if($query){
			$CI->session->set_userdata('agent',$query['emp_id']);
			return '1';
		}else{
			return '0';
		}
	}
}

if(!function_exists('mysession_agent')){
	function mysession_agent(){
		$CI =& get_instance();
		return $CI->session->userdata('agent');
	}
}


if(!function_exists('get_agent_data_field')){
	function get_agent_data_field($field){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users_employee');
		$CI->db->where(array('emp_id'=>mysession_agent()));
		$query = $CI->db->get()->result_array();
		$query = current($query);
		return $query[$field];
	}
}


if(!function_exists('updateagentprofile')){
	function updateagentprofile($post){
		$CI =& get_instance();
		$CI->db->where('emp_id',mysession_agent());
		$result = $CI->db->update('users_employee',$post);
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
}

if(!function_exists('upload_image_agent')) {
	function upload_image_agent($data) {
		$CI =& get_instance();
		$CI->db->where('emp_id', mysession_agent());
		$query = $CI->db->update('users_employee', $data);
		if($query){
			return 1;
		}else{
			return 0;
		}
	}
}


if(!function_exists('buyhouse')){
	function buyhouse($data,$post){
		$CI =& get_instance();
		$result = $CI->db->insert('sales',$data);
		if($result){
			for ($i=1;$i<=get_plan_available_field($post['my_plan'],'per_month');$i++) {
				$dataplan = array(
					'plan_id'		=> $post['my_plan'],
					'sales_id'		=> get_sale_limit_1(),
					'price'			=> get_plan_available_field($post['my_plan'],'price'),
					'is_payed'		=> 0,
					'date_payed'	=> '',
					'user_id'		=> $post['user_id'],
					'house_id'		=> $post['house_id'],
				);
				$result = $CI->db->insert('sales_plan',$dataplan);	
				if((get_plan_available_field($post['my_plan'],'per_month')) == $i){
					return 1;
				}
			}
			
			
		}else{
			return 0;
		}
	}
}


if(!function_exists('my_get_houselisting')){
	function my_get_houselisting(){
		$CI =& get_instance();
		$CI->db->select('sales.*,house.*,users.*');
		$CI->db->from('sales');
		$CI->db->join('house', 'sales.house_id = house.house_id', 'left');
		$CI->db->join('users', 'sales.user_id = users.user_id', 'left');
		$CI->db->where('sales.agent_id',mysession_agent());
		return $query = $CI->db->get()->result_array();
	}
}

if(!function_exists('get_all_plans_bysalesid')){
	function get_all_plans_bysalesid($sales_id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('sales_plan');
		$CI->db->where('sales_id',$sales_id);
		return $query = $CI->db->get()->result_array();
	}
}