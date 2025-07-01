<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->model('Functions_class');
		$this->load->model('file');
	}

	public function resetpass(){
		$data = array(
				'title'	=> 'Reset Password | '.myadmintitle(),
				'page'	=> 'resetpass',
		);
		$this->load->view('agent/resetpass',$data);
	}

	public function set_password(){
		$post = $this->input->post();
		if(count_avail_email_employee($post['email']) == '1'){
			// update password
			if(updateemployeepassword($post)){
				echo json_encode(
						array(
							'is_correct' => 1,
							'message' => 'Password successfully reset',
						)
				);
			}else{
				echo json_encode(
						array(
							'is_correct' => 0,
							'message' => 'error in query',
						)
				);
			}


		}
		else{
			echo json_encode(
					array(
						'is_correct' => 0,
						'message' => 'email is not exists',
					)
			);
		}
	}

	public function forgetpassword(){
		$post = $this->input->post();

		if(count_avail_email_employee($post['email']) == '1'){
			$message = "<center><h3>Password Reset</h3><center>";

			$message .= "<center><h6>If you've lost your password or wish to reset it use the link below to get started</h6><center>";

			$message .= "<center><a href='".base_url()."resetpass?email=".$post['email']."'>Reset your password</a><center>";


			$maildata = array(
				'message' 	=>  $message,
				'email'	  	=> 	$post['email'],
				'cc' 				=> 	'',
				'subject'		=> 'forget Password'
			);
			if(sendMail($maildata)){
				echo '<script>alert("Email send");';
				echo 'window.location = `'.base_url().'agent`;</script>';
			}
		}else{
			echo '<script>alert("Email not found");';
			echo 'window.location = `'.base_url().'agent`;</script>';
		}
		// echo '<script>alert("house updated");';
		// echo 'window.location = `'.base_url().'admin/houselist`;</script>';
		// echo json_encode($post['email']);
	}

	public function getBarChartAgent() {
			$post = $this->input->post();
            $currentYear = '2021';
            $currentMonth = 12;

            $newBarData = array();
            $json = array();

			$monthName = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
			for($x = 0; $x <= 11; $x++) {
				$x2 = $x+1;
				if($x2 != '10' && $x2 != '11' && $x2 != '12'){
                    $monthData = "0".$x2;
                } else {
                    $monthData = $x2;
                }


                array_push($newBarData, _list_sales_users(($currentYear),$monthData));

            }


            echo json_encode($newBarData);
    }

	public function update()
	{

		$name = $this->input->post('name');
		$message = $this->input->post('message');
		$html_redirect = $this->input->post('html_redirect');
		$to_user = $this->input->post('to_user');

		$arrayName = array(
			'message' 	=> $message,
			'user_id'	=> mysession_agent(),
			'user_type'	=> '1',
			'user_to'	=> $to_user,
			'time_date'	=> current_ph_date_time(),
		);
		insertMsg2($arrayName);
		// $current = new DateTime();
		// insertMsg2($name, $message, $to_user, $current->getTimestamp());

	}


	public function json_backend($id)
	{
		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');

		$query = getMsg2($id);


		echo json_encode($query);
	}

	public function index()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'dashboard',
				'subd'	=> my_get_houselisting(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/dashboard',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function create_email_campaign()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'create_email_campaign',
				'subd'	=> my_get_houselisting(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/create_email_campaign',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function lead_demographics()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'lead_demographics',
				'subd'	=> my_get_houselisting(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/lead_demographics',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function agent_performance()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'agent_performance',
				'subd'	=> my_get_houselisting(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/agent_performance',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function add_leads()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Leads | '.myadmintitle(),
				'page'	=> 'add_leads'
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/add_leads',$data);
		$this->load->view('agent/global/footer',$data);
	}

	function myplans($id){
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'myplans',
				'subd'	=> get_all_plans_bysalesid($id),
				'id'	=> $id
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/plan',$data);
		$this->load->view('agent/global/footer',$data);
		// echo $id;
	}

	public function message()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'message',
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/message',$data);
		$this->load->view('agent/global/footer',$data);
	}



	public function image()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'file',
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/file',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function leads(){
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'leads',
				'subd'	=> my_get_houselisting_admin(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/leads',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function file_management(){
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'file_management',
				'subd'	=> my_get_houselisting_admin(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/file_management',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function fman()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'file_m',
				'subd'	=> get_imagefile(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/filemanager',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function news()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'news',
				'subd'	=> get_news(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/news',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function houselist()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'houselist',
				'subd'	=> get_houselisting(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/housing',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function sellhouse()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'sellhouse',
				'subd'	=> my_get_houselisting(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/sellhouse',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function users()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'users',
				'subd'	=> get_userslisst(),
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/users',$data);
		$this->load->view('agent/global/footer',$data);
	}




	public function addagent(){
		$post = $this->input->post();
		$data = array(
			'fname' 				=> $post['fname'],
			'mname' 				=> $post['mname'],
			'lname' 				=> $post['lname'],
			'contact_number' 		=> $post['contact_number'],
			'email' 				=> $post['email'],
			'password' 				=> $post['password'],
			'date_added'			=> get_time_now(),
		);
		$val = addagent($data);
			if($val){
				redirect(base_url().'agent/agents', 'location');
			}

	}

	public function add_leads_function(){
		$post = $this->input->post();
		$val = add_leads_function($post);
		echo json_encode($val);
	}

	public function buyhouse(){
		$post = $this->input->post();
		$data = array(
			'house_id' 				=> $post['house_id'],
			'user_id' 				=> $post['user_id'],
			'agent_id' 				=> mysession_agent(),
			'curr_price' 			=> $post['tota_contart_price'],
			'date_added_agent'		=> get_time_now(),
		);
		$val = buyhouse($data,$post);
			if($val){
				redirect(base_url().'agent', 'location');
			}

	}

	public function addnews(){
		$post = $this->input->post();
		$data = array(
			'news_title' 			=> $post['news_title'],
			'news_subtitle' 		=> $post['news_subtitle'],
			'news_author' 			=> $post['news_author'],
			'news_date' 			=> $post['news_date'],
			'news_category' 		=> $post['news_category'],
			'news_description' 		=> $post['news_description'],
			'news_image'			=> $post['news_image'],
		);
		$val = addnews($data);
			if($val){
				echo json_encode(1);
			}else{
				echo json_encode(0);
			}

	}

	public function add_house()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'addhouse',
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/add_home',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function add_housing_submit(){
		$post = $this->input->post();
		$data = array(
			'house_name' => $post['house_name'],
			'house_decs' => $post['house_decs'],
			'house_decs_id' => $post['house_decs_id'],
			'house_model' => $post['house_model'],
			'house_type' => $post['house_type'],
			'village' => $post['village'],
			'address' => $post['address'],
			'lot_area' => $post['lot_area'],
			'floor_area' => $post['floor_area'],
			'bed_rooms' => $post['bed_rooms'],
			'bath_rooms' => $post['bath_rooms'],
			'storeys' => $post['storeys'],
			'car_garage' => $post['car_garage'],
			'with_balcony' => $post['with_balcony'],
			'tota_contart_price' => $post['tota_contart_price'],
			'video' => $post['video'],
			'image' => $post['image'],
			'date_added' => get_time_now(),
			);
		$val = insert_house($data);
		redirect(base_url().'agent/houselist', 'location');
	}


	public function myprofile()
	{
		redirect_session_agent();
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'profile',
		);

		$this->load->view('agent/global/header',$data);
		$this->load->view('agent/global/nav',$data);
		$this->load->view('agent/adminprofile',$data);
		$this->load->view('agent/global/footer',$data);
	}

	public function login(){
		$data = array(
				'title'	=> 'Agent | '.myadmintitle(),
				'page'	=> 'login',
		);
		$this->load->view('agent/login',$data);
	}

	public function login_submit(){
		$post = $this->input->post();
			$data = array(
				'email'	=>	$post['email'],
				'password'	=>	$post['psw'],
			);
		$val = login_agent($data);
		if($val == '1'){
			redirect(base_url().'agent','location');
		}else{
			echo "
			<script>
				alert('wrong username or password');
				window.location = '../agent/login';
			</script>
			";
			// redirect(base_url().'agent/login','location');
		}
	}


	public function submittedprofile(){
		$post = $this->input->post();
			$data = array(
				'email'			=>	$post['email'],
				'contact_number'=>	$post['contact_number'],
				'password'		=>	$post['pwd'],
				'fname'			=>	$post['fname'],
				'lname'			=>	$post['lname'],
				'mname'			=> $post['mname'],
				'emp_type'			=> $post['emp_type'],

				'date_updated'	=> current_ph_date_time(),
			);
		$val = updateagentprofile($data);
		if($val == '1'){
			redirect(base_url().'agent/profile','location');
		}else{
			redirect(base_url().'agent/profile','location');
		}
	}

	public function logout(){
		$this->session->unset_userdata('agent');
		redirect(base_url().'agent/login','location');
	}


	public function delete_image(){
		$get = $this->input->get();
		unlink('./uploads/'.$get['name']);
		$val = delete_image($get['id']);
		redirect(base_url().'agent/fman','location');
	}


	public function delete_news(){
		$get = $this->input->get();
		unlink('./uploads_news/'.$get['name']);
		$val = delete_news($get['id']);
		redirect(base_url().'agent/news','location');
	}

	public function delete_house(){
		$get = $this->input->get();
		unlink('./uploads/'.$get['name']);
		$val = delete_house($get['id']);
		redirect(base_url().'agent/houselist','location');
	}

	function dragDropUpload(){
        if(!empty($_FILES)){
            // File upload configuration
            $uploadPath = 'uploads/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = '*';

            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to the server
            if($this->upload->do_upload('file')){
                $fileData = $this->upload->data();
                $uploadData['image_name'] = $fileData['file_name'];
                $uploadData['image_date'] = date("Y-m-d H:i:s");

                // Insert files info into the database
                $insert = $this->file->insert($uploadData);
            }
        }
    }

    public function upload_resume()
    {
        $user_dir_resume    = './uploads';
        if(!file_exists($user_dir_resume)){
            mkdir( $user_dir_resume, 0755 );
        }

        $file_path = 'uploads/';

        //Upload Config
        $config['upload_path'] = $file_path;
        $config['allowed_types'] = 'png|jpeg|jpg';//'png|jpeg|jpg';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = (1024*15); //15 MB
        // ./Upload Config

        $this->upload->initialize($config);

        if (isset($_FILES['file']['name'])) {

            // Get Image Size
            //list($width, $height) = getimagesize($_FILES['file']['tmp_name']);
            // ./ Get Image Size

            if (0 < $_FILES['file']['error']) {
                $result = array(
                    'status'    => 'error',
                    'msg'       => 'Error occured during file upload.',
                    'file_data' => ''
                );
            } else {
                if (file_exists($file_path. $_FILES['file']['name'])) {
                    $result = array(
                        'status'    => 'existing',
                        'msg'       => 'File already exists.',
                        'file_data' => ''
                    );
                } else {

                    if (!$this->upload->do_upload('file')) {
                        $result = array(
                            'status'    => 'error',
                            'msg'       => $this->upload->display_errors(),
                            'file_data' => ''
                        );
                    } else {

                        //Unlink Thumb
                       // $this->Files_class->unlink_banner($thumbfile);

                        $upload_data = $this->upload->data();
                        $result = array(
                            'status'    => 'success',
                            'msg'       => 'File successfully uploaded.',
                            'file_data' => $upload_data,
                        );
                        $this->session->set_userdata('last_uploaded_banner', $upload_data['file_name']);
                    }
                }
            }
        } else {
            $result = array(
                'status'    => 'blank',
                'msg'       => 'Please choose a file.',
                'file_data' => ''
            );
        }
        echo json_encode($result);
    }






    public function upload_resume2()
    {
        $user_dir_resume    = './uploads_news';
        if(!file_exists($user_dir_resume)){
            mkdir( $user_dir_resume, 0755 );
        }

        $file_path = 'uploads_news/';

        //Upload Config
        $config['upload_path'] = $file_path;
        $config['allowed_types'] = 'png|jpeg|jpg';//'png|jpeg|jpg';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = (1024*15); //15 MB
        // ./Upload Config

        $this->upload->initialize($config);

        if (isset($_FILES['file']['name'])) {

            // Get Image Size
            //list($width, $height) = getimagesize($_FILES['file']['tmp_name']);
            // ./ Get Image Size

            if (0 < $_FILES['file']['error']) {
                $result = array(
                    'status'    => 'error',
                    'msg'       => 'Error occured during file upload.',
                    'file_data' => ''
                );
            } else {
                if (file_exists($file_path. $_FILES['file']['name'])) {
                    $result = array(
                        'status'    => 'existing',
                        'msg'       => 'File already exists.',
                        'file_data' => ''
                    );
                } else {

                    if (!$this->upload->do_upload('file')) {
                        $result = array(
                            'status'    => 'error',
                            'msg'       => $this->upload->display_errors(),
                            'file_data' => ''
                        );
                    } else {

                        //Unlink Thumb
                       // $this->Files_class->unlink_banner($thumbfile);

                        $upload_data = $this->upload->data();
                        $result = array(
                            'status'    => 'success',
                            'msg'       => 'File successfully uploaded.',
                            'file_data' => $upload_data,
                        );
                        $this->session->set_userdata('last_uploaded_banner', $upload_data['file_name']);
                    }
                }
            }
        } else {
            $result = array(
                'status'    => 'blank',
                'msg'       => 'Please choose a file.',
                'file_data' => ''
            );
        }
        echo json_encode($result);
    }

    public function remove_cropped_thumbnail()
    {
        $filename = $this->input->get('thumb_image');


            $unlink = @unlink('./uploads/'.$filename);

        if($unlink){
            $result = array(
                'status'    => 'success',
            );
        } else {
            $result = array(
                'status'    => 'error',
            );
        }
        echo json_encode($result);
    }

    public function remove_cropped_thumbnail2()
    {
        $filename = $this->input->get('thumb_image');


            $unlink = @unlink('./uploads_news/'.$filename);

        if($unlink){
            $result = array(
                'status'    => 'success',
            );
        } else {
            $result = array(
                'status'    => 'error',
            );
        }
        echo json_encode($result);
    }

    public function del_user($id){
    	$val = del_user($id);
		if($val){
			redirect(base_url().'agent/users', 'location');
		}
    }

    public function pay_sale($id){
    	$get = $this->input->get();
    	$val = tagaspaid($id);
		if($val){
			redirect(base_url().'agent/plans/'.$get['id'], 'location');
		}
    }


    public function del_agent($id){
    	$val = del_agent($id);
		if($val){
			redirect(base_url().'agent/agents', 'location');
		}
    }


    public function upload_image()
    {

        //upload file


        $user_dir_resume    = './Upload_only';
        if(!file_exists($user_dir_resume)){
            mkdir( $user_dir_resume, 0755 );
        }



        $file_path = './Upload_only'.'/';

        //Upload Config
        $config['upload_path'] = $file_path;
        $config['allowed_types'] = '*';//'png|jpeg|jpg';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        // $config['max_size'] = (1024*15); //15 MB
        // ./Upload Config

        $this->upload->initialize($config);

        if (isset($_FILES['file']['name'])) {

            if (0 < $_FILES['file']['error']) {
                $result = array(
                    'status'    => 'error',
                    'msg'       => 'Error occured during file upload.',
                    'file_data' => ''
                );
            } else {
                if (file_exists($file_path. $_FILES['file']['name'])) {
                    $result = array(
                        'status'    => 'existing',
                        'msg'       => 'File already exists.',
                        'file_data' => ''
                    );
                } else {

                    if (!$this->upload->do_upload('file')) {
                        $result = array(
                            'status'    => 'error',
                            'msg'       => $this->upload->display_errors(),
                            'file_data' => ''
                        );
                    } else {


                        $upload_data = $this->upload->data();
                        $result = array(
                            'link'      => base_url().'Upload_only/'.$upload_data['file_name'],
                            'filepath'  => $file_path,
                            'filename'  => $upload_data['file_name']
                        );

                        $file = './Upload_only';


                        $this->session->set_userdata('last_uploaded_banner', $upload_data['file_name']);
                    }
                }
            }
        } else {
            $result = array(
                'status'    => 'blank',
                'msg'       => 'Please choose a file.',
                'file_data' => ''
            );
        }
        echo json_encode($result);
    }

    public function uploaduserimage(){
        $get = $this->input->get();
      $user_dir_resume4    = './users';
      if(!file_exists($user_dir_resume4)){
          mkdir( $user_dir_resume4, 0755 );
      }

      $user_dir_resume    = './users/'.$get['user_id'];
      if(!file_exists($user_dir_resume)){
          mkdir( $user_dir_resume, 0755 );
      }

      $file_path = 'users/'.$get['user_id'].'/';

      $config['upload_path'] = $file_path;
      $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';//'png|jpeg|jpg';
      $config['encrypt_name'] = TRUE;

      $this->upload->initialize($config);

      if (isset($_FILES['file']['name'])) {

              if (file_exists($file_path. $_FILES['file']['name'])) {
                  $result = array(
                      'status'    => 'existing',
                      'msg'       => 'File already exists.',
                      'file_data' => ''
                  );
              } else {

                  if (!$this->upload->do_upload('file')) {
                      $result = array(
                          'status'    => 'error',
                          'msg'       => $this->upload->display_errors(),
                          'file_data' => ''
                      );
                  } else {

                      $upload_data = $this->upload->data();
                      $result = array(
                          'status'    => 'success',
                          'msg'       => 'File successfully uploaded.',
                          'file_data' => $upload_data,
                      );
                      $this->session->set_userdata('last_uploaded_banner', $upload_data['file_name']);
                        $path_image    = './users/'.$get['user_id'].'/'.$get['old_file_name'];
                        if(file_exists($path_image)){
                          $unlink = @unlink($path_image);
                        }
                      $data = array(
                        'image'    => $upload_data['file_name'],
                      );
                      $val = upload_image_agent($data);
                  }
              }
          // }
      } else {
          $result = array(
              'status'    => 'blank',
              'msg'       => 'Please choose a file.',
              'file_data' => ''
          );
      }
      echo json_encode($result);
    }

    public function submit_email_campaign_function(){
		$post = $this->input->post();
		foreach ($post['to'] as $key => $value) {
			$maildata = array(
				'message' 	=>  $post['content_data'],
				'email'	  	=> $value,
				'cc' 		=> $post['cc'],
				'subject'	=> 'Email Campaign'
			);
			sendMail($maildata);
			if(count($post['to']) == ($key+1)){
				echo json_encode(1);
			}
		}

		// echo json_encode(sendMail($maildata));
	}
}
