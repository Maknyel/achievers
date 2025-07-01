<?php
if(!function_exists('my_get_houselisting_admin')){
	function my_get_houselisting_admin(){
		$CI =& get_instance();
		$CI->db->select('sales.*,house.*,users.*,users_employee.fname as ffname,users_employee.mname as mmname,users_employee.lname as llname');
		$CI->db->from('sales');
		$CI->db->join('house', 'sales.house_id = house.house_id', 'left');
		$CI->db->join('users', 'sales.user_id = users.user_id', 'left');
		$CI->db->join('users_employee', 'sales.agent_id = users_employee.emp_id', 'left');
		return $query = $CI->db->get()->result_array();
	}
}

if(!function_exists('_list_sales_users_all')){
	function _list_sales_users_all($year,$month)
	{
	    $CI =& get_instance();
	    $CI->db->select("*");
			$CI->db->from("sales_plan");
			$CI->db->where(array('YEAR(date_payed)'=> $year,'MONTH(date_payed)'=> $month, 'is_payed'));
			$query = $CI->db->get()->result_array();
			// $result = $CI->db->get();
			// return $result->num_rows();
			$valueprice = 0;
			foreach ($query as $key => $value) {
				$valueprice = $value['price'] + $valueprice;
			}
			return $valueprice;
	}
}

if(!function_exists('leadsdatas')){
	function leadsdatas($year,$month)
	{
	    $CI =& get_instance();
	    $CI->db->select("*");
			$CI->db->from("leads");
			$CI->db->where(array('YEAR(date_added)'=> $year,'MONTH(date_added)'=> $month));
			$query = $CI->db->get()->result_array();
			return count($query);
	}
}

if(!function_exists('leadsdatas2')){
	function leadsdatas2($year,$month)
	{
	    $CI =& get_instance();
	    $CI->db->select("*");
			$CI->db->from("leads");
			$CI->db->where(array('agent_id' => mysession_agent(),'YEAR(date_added)'=> $year,'MONTH(date_added)'=> $month));
			$query = $CI->db->get()->result_array();
			return count($query);
	}
}

if(!function_exists('login_crm')){
	function login_crm($post){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('admin');
		$CI->db->where(array('username'=>$post['username'],'password'=>$post['password']));
		$query = $CI->db->get()->result_array();
		$query = current($query);
		if($query){
			$CI->session->set_userdata('admin',$query['admin_id']);
			return '1';
		}else{
			return '0';
		}
	}
}

if(!function_exists('myadmintitle')){
	function myadmintitle(){
		return 'Achievers Land Marketing';
	}
}

if(!function_exists('mysession_admin')){
	function mysession_admin(){
		$CI =& get_instance();
		return $CI->session->userdata('admin');
	}
}


if(!function_exists('redirect_session_admin')){
	function redirect_session_admin(){
		$CI =& get_instance();
		if(!$CI->session->userdata('admin')){
			redirect(base_url().'admin/login', 'location');
		}
	}
}


if(!function_exists('get_admin_data_field')){
	function get_admin_data_field($field){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('admin');
		$CI->db->where(array('admin_id'=>mysession_admin()));
		$query = $CI->db->get()->result_array();
		$query = current($query);
		return $query[$field];
	}
}


if(!function_exists('get_subdivision_field')){
	function get_subdivision_field($id,$field){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('subdivision');
		$CI->db->where(array('sub_id'=>$id));
		$query = $CI->db->get()->result_array();
		$query = current($query);
		return $query[$field];
	}
}


if(!function_exists('updateadminprofile')){
	function updateadminprofile($post){
		$CI =& get_instance();
		$CI->db->where('admin_id',mysession_admin());
		$result = $CI->db->update('admin',$post);
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
}

if(!function_exists('get_subdivision')){
	function get_subdivision(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('subdivision');
		return $query = $CI->db->get()->result_array();
	}
}

if(!function_exists('get_imagefile')){
	function get_imagefile(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('image_file');
		return $query = $CI->db->get()->result_array();
	}
}


if(!function_exists('get_news')){
	function get_news(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('news');
		return $query = $CI->db->get()->result_array();
	}
}

if(!function_exists('get_houselisting')){
	function get_houselisting(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('house');
		return $query = $CI->db->get()->result_array();
	}
}

if(!function_exists('get_houselisting_image')){
	function get_houselisting_image($id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('image_file');
		$CI->db->where('house_id',$id);
		return $query = $CI->db->get()->result_array();
	}
}

if(!function_exists('get_userslisst')){
	function get_userslisst(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users');
		return $query = $CI->db->get()->result_array();
	}
}


if(!function_exists('get_agentlist')){
	function get_agentlist(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users_employee');
		return $query = $CI->db->get()->result_array();
	}
}

if(!function_exists('del_agent')) {
	function del_agent($data) {
		$CI =& get_instance();
			$CI->db->where(array('emp_id'=> $data));
			$result = $CI->db->delete('users_employee');
			return $result;
	}
}

if(!function_exists('get_time_now')){
	function get_time_now(){
		date_default_timezone_set("Asia/Manila");
			return date("Y-m-d H:i:s a");
	}
}

if(!function_exists('insert_file')){
	function insert_file($data){
		$CI =& get_instance();
		$result = $CI->db->insert('file_management',$data);
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
}

if(!function_exists('insert_subdivision')){
	function insert_subdivision($data){
		$CI =& get_instance();
		$result = $CI->db->insert('subdivision',$data);
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
}

if(!function_exists('add_leads_function')){
	function add_leads_function($data){
		$CI =& get_instance();
		$leads_add = array(
			'fullname'					=>$data['fullname'],
            'email'						=>$data['email'],
            'gender'					=>$data['gender'],
            'birthday'					=>$data['birthday'],
            'address'					=>$data['address'],
            'contact_number'			=>$data['contact_number'],
            'employment_industry'		=>$data['employment_industry'],
            'source_of_income'			=>$data['source_of_income'],
            'civil_status'				=>$data['civil_status'],
            'employment_type'			=>$data['employment_type'],
            'lead_source'				=>$data['lead_source'],
            'income_bracket'			=>$data['income_bracket'],
            'agent_id'					=>$data['agent_id'],
            'leads_status'				=>$data['leads_status'],
            'date_added'				=> get_time_now(),
		);
		$result = $CI->db->insert('leads',$leads_add);
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
}

if(!function_exists('insert_house')){
	function insert_house($data,$post){
		$CI =& get_instance();
		$result = $CI->db->insert('house',$data);
		$id = get_houselisting_limit_1();

		if(isset($post['per_month'])){
			foreach ($post['per_month'] as $key => $value) {
				$data_array = array(
					'house_id'				=> $id,
					'per_month'				=> $value,
					'price'					=> $post['price'][$key],
					'downpayment'			=> $post['downpayment'][$key],

					'type_of_entity'		=> $post['type_of_entity'][$key],
					'downpayment_term'		=> $post['downpayment_term'][$key],
					'loanable_amount'		=> $post['loanable_amount'][$key],
					'reservation_fee'		=> $post['reservation_fee'][$key],
				);

				



				$result = $CI->db->insert('monthly_plans',$data_array);
				if($key+1 == count($post['per_month'])){
					return 1;
				}
			}
		}else{
			if($result){
				return 1;
			}else{
				return 0;
			}	
		}
		
	}
}

if(!function_exists('edit_housing_submit')){
	function edit_housing_submit($data,$post){
		$CI =& get_instance();
		$CI->db->where('house_id',$data['house_id']);
		$result = $CI->db->update('house',$data);

		$CI->db->where(array('house_id'=> $data['house_id']));
		$result = $CI->db->delete('monthly_plans');

		if(isset($post['per_month'])){
			foreach ($post['per_month'] as $key => $value) {
				$data_array = array(
					'house_id'				=> $data['house_id'],
					'per_month'				=> $value,
					'price'					=> $post['price'][$key],
					'downpayment'			=> $post['downpayment'][$key],

					'type_of_entity'		=> $post['type_of_entity'][$key],
					'downpayment_term'		=> $post['downpayment_term'][$key],
					'loanable_amount'		=> $post['loanable_amount'][$key],
					'reservation_fee'		=> $post['reservation_fee'][$key],
				);
				$result = $CI->db->insert('monthly_plans',$data_array);
				if($key+1 == count($post['per_month'])){
					return 1;
				}
			}
		}else{
			if($result){
				return 1;
			}else{
				return 0;
			}	
		}
	}
}

if(!function_exists('addagent')){
	function addagent($data){
		$CI =& get_instance();
		$result = $CI->db->insert('users_employee',$data);
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
}

if(!function_exists('addnews')){
	function addnews($data){
		$CI =& get_instance();
		$result = $CI->db->insert('news',$data);
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
}


if(!function_exists('edit_subdivision')){
	function edit_subdivision($data,$id){
		$CI =& get_instance();
		$CI->db->where('sub_id',$id);
		$result = $CI->db->update('subdivision',$data);
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
}

if(!function_exists('delete_sub')){
	function delete_sub($data){
		$CI =& get_instance();
			$CI->db->where(array('sub_id'=> $data));
			$result = $CI->db->delete('subdivision');
	}
}


if(!function_exists('delete_image')){
	function delete_image($data){
		$CI =& get_instance();
			$CI->db->where(array('image_id'=> $data));
			$result = $CI->db->delete('image_file');
	}
}


if(!function_exists('delete_news')){
	function delete_news($data){
		$CI =& get_instance();
			$CI->db->where(array('news_id'=> $data));
			$result = $CI->db->delete('news');
	}
}


if(!function_exists('delete_house')){
	function delete_house($data){
		$CI =& get_instance();
			$CI->db->where(array('house_id'=> $data));
			$result = $CI->db->delete('house');
	}
}



if(!function_exists('del_user')) {
	function del_user($data) {
		$CI =& get_instance();
			$CI->db->where(array('user_id'=> $data));
			$result = $CI->db->delete('users');
			return $result;
	}
}