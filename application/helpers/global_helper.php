<?php
if (!function_exists('client_session_val')) {
	function client_session_val(){
		$CI =& get_instance();
		return $CI->session->userdata('user');
	}
}

if (!function_exists('global_logo')) {
	function global_logo(){
		$CI =& get_instance();
		return base_url().'assets/image/achievers.png';
	}
}


if(!function_exists('redirect_session_agent')){
	function redirect_session_agent(){
		$CI =& get_instance();
		if(!$CI->session->userdata('agent')){
			redirect(base_url().'agent/login', 'location');
		}
	}
}

if(!function_exists('get_available_months2')){
	function get_available_months2($w)
	{
		$arrayName = array(
			'60','120','180','240' );
		return $arrayName;
	}
}

if(!function_exists('apiplans')){
	function apiplans($post){
		$CI =& get_instance();





		// insert
			// $arrayName = array(
			// 	'column_1' => 'column 1',
			// 	'column_2' => 'column 2'
			// );
			// $result = $CI->db->insert('table',$arrayName);

		// update
			// $CI->db->where('user_id', $post['id']);
			// $arrayName = array(
			// 	'column_1' => 'column 1',
			// 	'column_2' => 'column 2'
			// );
			// $result = $CI->db->update('table',$arrayName);
		// delete
			// $CI->db->where(array('id'=> $post['id']));
			// $result = $CI->db->delete('table');
		// get
			// $CI->db->select('*');
			// $CI->db->from('table');
			// $result = $CI->db->get()->result_array();
			// return $result;
		// get_id

			// $CI->db->select('*');
			// $CI->db->from('table');
			// $CI->db->where('id',$post['id']);
			// $result = $CI->db->get()->result_array();
			// return current($result);


		// if($result){
		// 	return 1;
		// }else{
		// 	return 0;
		// }
	}
}

if(!function_exists('get_available_months')){
	function get_available_months($house_id)
	{
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('monthly_plans');
		$CI->db->where('house_id',$house_id);
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_all_file_management')){
	function get_all_file_management()
	{
		$CI =& get_instance();
		$CI->db->select('file_management.*,admin.fname,admin.lname');
		$CI->db->from('file_management');
		$CI->db->join('admin', 'file_management.user_id = admin.admin_id', 'inner');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_all_leads')){
	function get_all_leads()
	{
		$CI =& get_instance();
		$CI->db->select('leads.*, employment_industry.value as employment_industry1, source_of_income.value as source_of_income1, civil_status.value as civil_status1, employment_type.value as employment_type1, lead_source.value as lead_source1, income_bracket.value as income_bracket1,users_employee.fname,users_employee.lname');
		$CI->db->from('leads');
		$CI->db->join('employment_industry', 'leads.employment_industry = employment_industry.id', 'left');
		$CI->db->join('source_of_income', 'leads.source_of_income = source_of_income.id', 'left');
		$CI->db->join('civil_status', 'leads.civil_status = civil_status.id', 'left');
		$CI->db->join('employment_type', 'leads.employment_type = employment_type.id', 'left');
		$CI->db->join('lead_source', 'leads.lead_source = lead_source.id', 'left');
		$CI->db->join('income_bracket', 'leads.income_bracket = income_bracket.id', 'left');
		$CI->db->join('users_employee', 'leads.agent_id = users_employee.emp_id', 'left');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_agent_leads')){
	function get_agent_leads()
	{
		$CI =& get_instance();
		$CI->db->select('leads.*, employment_industry.value as employment_industry1, source_of_income.value as source_of_income1, civil_status.value as civil_status1, employment_type.value as employment_type1, lead_source.value as lead_source1, income_bracket.value as income_bracket1');
		$CI->db->from('leads');
		$CI->db->join('employment_industry', 'leads.employment_industry = employment_industry.id', 'inner');
		$CI->db->join('source_of_income', 'leads.source_of_income = source_of_income.id', 'inner');
		$CI->db->join('civil_status', 'leads.civil_status = civil_status.id', 'inner');
		$CI->db->join('employment_type', 'leads.employment_type = employment_type.id', 'inner');
		$CI->db->join('lead_source', 'leads.lead_source = lead_source.id', 'inner');
		$CI->db->join('income_bracket', 'leads.income_bracket = income_bracket.id', 'inner');
		$CI->db->where('leads.agent_id',mysession_agent());
		$result = $CI->db->get()->result_array();
		return $result;
	}
}


if(!function_exists('get_leads_industry')){
	function get_leads_industry()
	{
		$CI =& get_instance();
		$CI->db->select('leads.*, employment_industry.value as employment_industry1, COUNT(*) as count');
		$CI->db->from('leads');
		$CI->db->join('employment_industry', 'leads.employment_industry = employment_industry.id', 'inner');
		$CI->db->where('leads.agent_id',mysession_agent());
		$CI->db->group_by('leads.employment_industry');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_leads_gender')){
	function get_leads_gender()
	{
		$CI =& get_instance();
		$CI->db->select('*, COUNT(*) as count');
		$CI->db->from('leads');
		// $CI->db->join('gender', 'leads.gender = gender.id', 'inner');
		$CI->db->where('agent_id',mysession_agent());
		$CI->db->where('gender<>',"");
		$CI->db->group_by('gender');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_leads_age')){
	function get_leads_age()
	{
		$CI =& get_instance();
		$CI->db->select('*, YEAR(CURRENT_TIMESTAMP) - YEAR(birthday) - (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(birthday, 5)) as age, COUNT(*) as count');
		$CI->db->from('leads');
		// $CI->db->join('gender', 'leads.gender = gender.id', 'inner');
		$CI->db->where('agent_id',mysession_agent());
		$CI->db->where('birthday<>',"");
		$CI->db->group_by('YEAR(CURRENT_TIMESTAMP) - YEAR(birthday) - (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(birthday, 5))');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}


if(!function_exists('sendMail')){
	function sendMail($data){

		$CI =& get_instance();
		// insert_email_database($data);
		$message = $CI->load->view('email_template',$data,true);

		$config = array(
			// 'useragent' 	=> 'osau.com',
			'protocol' 		=> 'smtp',
			'smtp_host' 	=> 'smtp.hostinger.ph',
			'smtp_port' 	=> 587,
			'smtp_user' 	=> 'achievers@mwebsite.online',
			'smtp_pass' 	=> 'P@s$w0rd123!',
			'mailtype'  	=> 'html',
			'wordwrap'  	=> TRUE,
			'charset'   	=> 'utf-8',
// 			'auth' 			=> TRUE
		);

		$CI->email->set_newline("\r\n");
		$CI->email->initialize($config);
		$CI->email->from('achievers@mwebsite.online', myadmintitle());
		$CI->email->to( $data['email'] );
		$CI->email->cc( $data['cc'] );

		$CI->email->subject($data['subject']);
		$CI->email->message( $message );
		$CI->email->send();
		return 1;
	}
}

if(!function_exists('get_leads_email')){
	function get_leads_email()
	{
		$CI =& get_instance();
		$CI->db->select('email,agent_id');
		$CI->db->from('leads');
		$CI->db->where('agent_id',mysession_agent());
		$CI->db->group_by('email');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_leads_source')){
	function get_leads_source()
	{
		$CI =& get_instance();
		$CI->db->select('leads.*, source_of_income.value as source_of_income1, COUNT(*) as count');
		$CI->db->from('leads');
		$CI->db->join('source_of_income', 'leads.source_of_income = source_of_income.id', 'inner');
		$CI->db->where('leads.agent_id',mysession_agent());
		$CI->db->group_by('leads.source_of_income');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_civil_status')){
	function get_civil_status()
	{
		$CI =& get_instance();
		$CI->db->select('leads.*, civil_status.value as civil_status1, COUNT(*) as count');
		$CI->db->from('leads');
		$CI->db->join('civil_status', 'leads.civil_status = civil_status.id', 'inner');
		$CI->db->where('leads.agent_id',mysession_agent());
		$CI->db->group_by('leads.civil_status');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_leads_employment_type')){
	function get_leads_employment_type()
	{
		$CI =& get_instance();
		$CI->db->select('leads.*, employment_type.value as employment_type1, COUNT(*) as count');
		$CI->db->from('leads');
		$CI->db->join('employment_type', 'leads.employment_type = employment_type.id', 'inner');
		$CI->db->where('leads.agent_id',mysession_agent());
		$CI->db->group_by('leads.employment_type');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_leads_lead_source')){
	function get_leads_lead_source()
	{
		$CI =& get_instance();
		$CI->db->select('leads.*, lead_source.value as lead_source1, COUNT(*) as count');
		$CI->db->from('leads');
		$CI->db->join('lead_source', 'leads.lead_source = lead_source.id', 'inner');
		$CI->db->where('leads.agent_id',mysession_agent());
		$CI->db->group_by('leads.lead_source');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_leads_income_bracket')){
	function get_leads_income_bracket()
	{
		$CI =& get_instance();
		$CI->db->select('leads.*, income_bracket.value as income_bracket1, COUNT(*) as count');
		$CI->db->from('leads');
		$CI->db->join('income_bracket', 'leads.income_bracket = income_bracket.id', 'inner');
		$CI->db->where('leads.agent_id',mysession_agent());
		$CI->db->group_by('leads.income_bracket');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}




if(!function_exists('get_plan_available')){
	function get_plan_available($plan_id)
	{
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('monthly_plans');
		$CI->db->where('plan_id',$plan_id);
		$result = $CI->db->get()->result_array();
		$result = current($result);
		return $result;
	}
}

if(!function_exists('get_plan_available_field')){
	function get_plan_available_field($plan_id,$field)
	{
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('monthly_plans');
		$CI->db->where('plan_id',$plan_id);
		$result = $CI->db->get()->result_array();
		$result = current($result);
		return $result[$field];
	}
}

if(!function_exists('computefor_house')){
	function computefor_house($total,$downpayment,$months) {
		$todivide = $total - $downpayment;
		$interest = $todivide + ($todivide * .13);
		$toreturn = $interest/$months;
		return $toreturn;
	}
}

if(!function_exists('getMsg')){
	function getMsg($limit = null)
	{
		$myname = get_user_data('fname').'_'.get_user_data('mname').'_'.get_user_data('lname');
		$CI =& get_instance();
		$CI->db->select('messages.*,CONCAT(client.fname," ",client.mname," ",client.lname) as USERNAME,CONCAT(employee.fname," ",employee.mname," ",employee.lname) as EMPLOYEEUSERNAME,messages.user_to as user_id_messages_to,messages.user_id as user_id_messages');
		$CI->db->from('messages');

		$CI->db->join('users as client', 'messages.user_id = client.user_id', 'left');
		$CI->db->join('users_employee as employee', 'messages.user_id = employee.emp_id', 'left');

		$CI->db->order_by('id','asc');
		return $query = $CI->db->get()->result_array();
		// $sql = "SELECT * FROM messages WHERE (user='$myname' AND useroradmin = '0') OR (useroradmin = '1' AND to_user = '$myname') ORDER BY id ASC";
		// return $CI->db->query($sql);
	}
}

if(!function_exists('getMsg2')){
	function getMsg2($name = null)
	{
		$myname = get_user_data('fname').'_'.get_user_data('mname').'_'.get_user_data('lname');
		$CI =& get_instance();
		$CI->db->select('messages.*,CONCAT(client.fname," ",client.mname," ",client.lname) as USERNAME,messages.user_id as user_id_messages,,messages.user_to as user_id_messages_to');
		$CI->db->from('messages');

		$CI->db->join('users as client', 'messages.user_id = client.user_id', 'left');


		$CI->db->order_by('id','asc');
		return $query = $CI->db->get()->result_array();	}
}

if(!function_exists('insertMsg')){
	function insertMsg($post)
	{

		$CI =& get_instance();
		if(current_agent(client_session_val()) == 0){
			$arrayName = array('user_id' => client_session_val());
			$result = $CI->db->insert('current_agent',$arrayName);
		}
		$result = $CI->db->insert('messages',$post);
			if($result){
				return 1;
			}else{
				return 0;
			}
	}
}

if(!function_exists('insert_leadsdata')){
	function insert_leadsdata($post)
	{

		$CI =& get_instance();
		$data = array(
			'fullname'			=> $post['name'],
			'email'				=> $post['email'],
			'subject'			=> $post['subject'],
			'message'			=> $post['message'],
			'date_added'		=> get_time_now(),
		);

		$result = $CI->db->insert('leads',$data);
			if($result){
				return 1;
			}else{
				return 0;
			}
	}
}

if(!function_exists('sales_plan_data')){
	function sales_plan_data($sales_id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('sales_plan');
		$CI->db->where('sales_id',$sales_id);

		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('count_leads_datastatus')){
	function count_leads_datastatus($leads_status){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('leads');
		$CI->db->where('leads.agent_id',mysession_agent());
		$CI->db->where('leads_status',$leads_status);

		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('count_avail_email_employee')){
	function count_avail_email_employee($email){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users_employee');
		$CI->db->where('email',$email);

		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('count_avail_email_users')){
	function count_avail_email_users($email){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users');
		$CI->db->where('email',$email);

		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('count_leads_datastatus_inout')){
	function count_leads_datastatus_inout($leads_status, $from=null, $to=null){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('leads');
		$CI->db->where('leads.agent_id',mysession_agent());
		$CI->db->where('leads_status',$leads_status);
		if($from && $to){
			$CI->db->where('date_added>=',$from);
			$CI->db->where('date_added<=',$to);
		}
		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('get_agent_leads_number')){
	function get_agent_leads_number()
	{
		$CI =& get_instance();
		$CI->db->select('leads.*, employment_industry.value as employment_industry1, source_of_income.value as source_of_income1, civil_status.value as civil_status1, employment_type.value as employment_type1, lead_source.value as lead_source1, income_bracket.value as income_bracket1');
		$CI->db->from('leads');
		$CI->db->join('employment_industry', 'leads.employment_industry = employment_industry.id', 'inner');
		$CI->db->join('source_of_income', 'leads.source_of_income = source_of_income.id', 'inner');
		$CI->db->join('civil_status', 'leads.civil_status = civil_status.id', 'inner');
		$CI->db->join('employment_type', 'leads.employment_type = employment_type.id', 'inner');
		$CI->db->join('lead_source', 'leads.lead_source = lead_source.id', 'inner');
		$CI->db->join('income_bracket', 'leads.income_bracket = income_bracket.id', 'inner');
		$CI->db->where('leads.agent_id',mysession_agent());
		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('sales_plan_data_paid')){
	function sales_plan_data_paid($sales_id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('sales_plan');
		$CI->db->where('sales_id',$sales_id);
		$CI->db->where('is_payed',1);

		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('current_agent')){
	function current_agent($user_id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('current_agent');
		$CI->db->where('user_id',$user_id);

		$result = $CI->db->get();
		return $result->num_rows();
	}
}


if(!function_exists('current_agent_field')){
	function current_agent_field($user_id,$field){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('current_agent');
		$CI->db->where('user_id',$user_id);
		$result = $CI->db->get()->result_array();
		$result = current($result);
		return $result[$field];
	}
}


if(!function_exists('get_house_per_id')){
	function get_house_per_id($house_id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('house');
		$CI->db->where('house_id',$house_id);
		$result = $CI->db->get()->result_array();
		$result = current($result);
		return $result;
	}
}


if(!function_exists('insertMsg2')){
	function insertMsg2($post)
	{
		$CI =& get_instance();


			$CI->db->where('user_id', $post['user_to']);

			$arrayName = array('agent_id' => mysession_agent(),'is_ok'=> '1');
			$result = $CI->db->update('current_agent',$arrayName);

		$result = $CI->db->insert('messages',$post);
			if($result){
				return 1;
			}else{
				return 0;
			}
	}
}


if(!function_exists('updateemployeepassword')){
	function updateemployeepassword($post)
	{
		$CI =& get_instance();


			$CI->db->where('email', $post['email']);

			$result = $CI->db->update('users_employee',array('password'	=> $post['password']));

			if($result){
				return 1;
			}else{
				return 0;
			}
	}
}

if(!function_exists('updateuserpassword')){
	function updateuserpassword($post)
	{
		$CI =& get_instance();


			$CI->db->where('email', $post['email']);

			$result = $CI->db->update('users',array('password'	=> $post['password']));

			if($result){
				return 1;
			}else{
				return 0;
			}
	}
}

if(!function_exists('tagaspaid')){
	function tagaspaid($id)
	{
		$CI =& get_instance();


			$CI->db->where('id', $id);

			$arrayName = array('is_payed' => 1,'date_payed'=> current_ph_date_time());
			$result = $CI->db->update('sales_plan',$arrayName);

			if($result){
				return 1;
			}else{
				return 0;
			}
	}
}

if(!function_exists('get_houselisting_limit')){
	function get_houselisting_limit($limit){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('house');
		$CI->db->limit($limit);
		$CI->db->order_by('house_id','desc');
		return $query = $CI->db->get()->result_array();
	}
}

if(!function_exists('get_houselisting_limit_1')){
	function get_houselisting_limit_1(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('house');
		$CI->db->limit(1);
		$CI->db->order_by('house_id','desc');
		$query = $CI->db->get()->result_array();
		$query2 = current($query);
		return $query2['house_id'];
	}
}

if(!function_exists('get_sale_limit_1')){
	function get_sale_limit_1(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('sales');
		$CI->db->limit(1);
		$CI->db->order_by('sales_id','desc');
		$query = $CI->db->get()->result_array();
		$query2 = current($query);
		return $query2['sales_id'];
	}
}

if(!function_exists('get_all_message')){
	function get_all_message()
	{
		$CI =& get_instance();
		$CI->db->select('messages.*,CONCAT(client.fname," ",client.mname," ",client.lname) as USERNAME');
		$CI->db->from('messages');

		$CI->db->join('users as client', 'messages.user_id = client.user_id', 'left');
		$CI->db->group_by('messages.user_id');
		$CI->db->where(array('user_type'=>'0'));
		// $CI->db->where(array('messages.user_id' => client_session_val(), 'messages.user_type' => '0'));
		// $CI->db->or_where(array('messages.user_to' => client_session_val(), 'messages.user_type<>' => '0'));
		$CI->db->order_by('id','asc');
		return $query = $CI->db->get()->result_array();
	}
}

if(!function_exists('dashboardcount')){
	function dashboardcount($data){
		$CI =& get_instance();
		$CI->db->select('*');
		if($data == '1'){
			$CI->db->from('users_employee');
		}else if($data == '2'){
			$CI->db->from('users');
		}else if($data == '3'){
			$CI->db->from('house');
		}else if($data == '4'){
			$CI->db->from('news');
		}else if($data == '5'){
			$CI->db->from('sales');
			$CI->db->where('agent_id',mysession_agent());
		}else if($data == '6'){
			$CI->db->from('messages');
			$CI->db->where(array('user_id' => mysession_agent(), 'user_type' => '1'));
			$CI->db->group_by('user_to');
		}

		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('name_sub_exist')){
	function name_sub_exist($data,$where=null){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('subdivision');
		$CI->db->where('sub_name',$data);
		if($where){
			$CI->db->where('sub_id<>',$where);
		}

		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('login')){
	function login($data){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users');
		$CI->db->where(array('email'=>($data['email']),'password'=>($data['password'])));
		$query = $CI->db->get()->result_array();
		$query = current($query);
		if($query){

			return $query['user_id'];
		}else{
			return 0;
		}
	}
}


if(!function_exists('get_houselisting2')){
	function get_houselisting2($search=null,$limit=null,$offset=null){
		$CI =& get_instance();
		$CI->db->select('house.*,subdivision.sub_name');
		$CI->db->from('house');
		$CI->db->join('subdivision', 'subdivision.sub_id = house.house_decs_id', 'left');
		if($search){
			$CI->db->where('subdivision.sub_name',$search);
		}
		$CI->db->limit($limit,$offset);
		$CI->db->order_by('house.house_id','desc');
		return $query = $CI->db->get()->result_array();
	}
}

if(!function_exists('get_houselisting2_agent')){
	function get_houselisting2_agent($id,$limit=null,$offset=null){
		$CI =& get_instance();
		$CI->db->select('house.*,sales.*');
		$CI->db->from('sales');
		$CI->db->join('house', 'sales.house_id = house.house_id', 'left');
		$CI->db->where('sales.agent_id',$id);
		$CI->db->limit($limit,$offset);
		$CI->db->order_by('house.house_id','desc');
		return $query = $CI->db->get()->result_array();
	}
}


if(!function_exists('get_news_arraay')){
	function get_news_arraay($limit=null,$offset=null){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('news');
		$CI->db->limit($limit,$offset);
		$CI->db->order_by('news_date','desc');
		return $query = $CI->db->get()->result_array();
	}
}


if(!function_exists('get_news_arraaylimit')){
	function get_news_arraaylimit($limit=null){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('news');
		$CI->db->limit($limit);
		$CI->db->order_by('news_date','desc');
		return $query = $CI->db->get()->result_array();
	}
}



if(!function_exists('get_houselisting_only')){
	function get_houselisting_only($id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('house');
		$CI->db->where('house_id',$id);
		$query = $CI->db->get()->result_array();
		$query = current($query);
		return $query;
	}
}

if(!function_exists('get_newslisting_only')){
	function get_newslisting_only($id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('news');
		$CI->db->where('news_id',$id);
		$query = $CI->db->get()->result_array();
		$query = current($query);
		return $query;
	}
}


if(!function_exists('get_agent_only')){
	function get_agent_only($id){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users_employee');
		$CI->db->where('emp_id',$id);
		$query = $CI->db->get()->result_array();
		$query = current($query);
		return $query;
	}
}




if(!function_exists('get_employee_limit')){
	function get_employee_limit($limit){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users_employee');
		$CI->db->limit($limit);
		$CI->db->order_by('emp_id','desc');
		return $query = $CI->db->get()->result_array();
	}
}


if(!function_exists('get_employee_all')){
	function get_employee_all(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users_employee');
		$CI->db->order_by('emp_id','desc');
		return $query = $CI->db->get()->result_array();
	}
}


if(!function_exists('register')){
	function register($data){
		$CI =& get_instance();
		if(check_student_exist($data['email']) == 0){
			$result = $CI->db->insert('users',$data);
			if($result){
				$data2 = array(
					'fullname'	=> $data['fname'].' '.$data['lname'],
					'email'		=> $data['email'],
					'gender'	=> $data['gender'],
					'contact_number'	=> '+639'.$data['contact_number'],
					'birthday'	=> $data['birthdate'],
					'address'	=> $data['address'],
				);
				$result2 = $CI->db->insert('leads',$data2);
				if($result2){
					return 1;
				}else{
					return 0;
				}

			}else{
				return 0;
			}
		}else{
			return 2;
		}
	}
}

if(!function_exists('check_student_exist')) {
	function check_student_exist($field) {

		$CI =& get_instance();
		$CI->db->select("*");
		$CI->db->from("users");
		$CI->db->where(array('email'=>$field));
		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('check_current_agent_for_agent')) {
	function check_current_agent_for_agent($user_id) {

		$CI =& get_instance();
		$CI->db->select("*");
		$CI->db->from("current_agent");
		$CI->db->where("(user_id = ".$user_id." AND agent_id = ".mysession_agent()." AND is_ok = 1) OR (user_id = ".$user_id." AND is_ok = 0)");
		// $CI->db->or_where(array('user_id'=>$user_id,'is_ok'=>'0'));
		$result = $CI->db->get();
		return $result->num_rows();
	}
}

if(!function_exists('get_user_data')){
	function get_user_data($field){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('users');
		$CI->db->where('user_id', client_session_val());
		$query = $CI->db->get()->result_array();
		$query = current($query);

		return ($query[$field]);

	}
}


if(!function_exists('current_ph_date_time')){
	function current_ph_date_time(){
		date_default_timezone_set("Asia/Manila");
				return date("Y-m-d H:i:s");
	}
}

if(!function_exists('current_ph_date')){
	function current_ph_date(){
		date_default_timezone_set("Asia/Manila");
				return date("Y-m-d");
	}
}

if(!function_exists('get_all_gender')){
	function get_all_gender(){
		return array('Male','Female');
	}
}

if(!function_exists('get_all_employee_industry')){
	function get_all_employee_industry(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('employment_industry');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_all_source_of_income')){
	function get_all_source_of_income(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('source_of_income');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_all_civil_status')){
	function get_all_civil_status(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('civil_status');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_all_employment_type')){
	function get_all_employment_type(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('employment_type');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_all_lead_source')){
	function get_all_lead_source(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('lead_source');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}

if(!function_exists('get_all_income_bracket')){
	function get_all_income_bracket(){
		$CI =& get_instance();
		$CI->db->select('*');
		$CI->db->from('income_bracket');
		$result = $CI->db->get()->result_array();
		return $result;
	}
}
