<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->model('Functions_class');
		$this->load->model('file');
	}

	public function get_plans(){
		$post = $this->input->post();
		echo json_encode(get_available_months($post['house_id']));
	}

	public function get_plan_available(){
		$post = $this->input->post();
		echo json_encode(get_plan_available($post['plan_id']));
	}

	public function leads(){
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'leads',
				'subd'	=> my_get_houselisting_admin(),
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/leads',$data);
		$this->load->view('admin/global/footer',$data);
	}

	public function file_management(){
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'file_management',
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/file_management',$data);
		$this->load->view('admin/global/footer',$data);
	}

	public function sellhouse()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'sellhouse',
				'subd'	=> my_get_houselisting_admin(),
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/sellhouse',$data);
		$this->load->view('admin/global/footer',$data);
	}

	public function getBarChartAgent() {
			$post = $this->input->post();
            $currentYear = $post['current_date'];
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


                array_push($newBarData, _list_sales_users_all(($currentYear),$monthData));

            }


            echo json_encode($newBarData);
    }

    public function getleads() {
			$post = $this->input->post();
            $currentYear = $post['current_date'];
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


                array_push($newBarData, leadsdatas(($currentYear),$monthData));

            }


            echo json_encode($newBarData);
    }

    public function getleads2() {
			$post = $this->input->post();
            $currentYear = $post['current_date'];
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


                array_push($newBarData, leadsdatas2(($currentYear),$monthData));

            }


            echo json_encode($newBarData);
    }

	public function update()
	{

		$name = $this->input->post('name');
		$message = $this->input->post('message');
		$html_redirect = $this->input->post('html_redirect');
		$to_user = $this->input->post('to_user');

		$current = new DateTime();
		insertMsg2($name, $message, $to_user, $current->getTimestamp());

	}


	public function json_backend($id)
	{
		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');

		$query = getMsg2($id);

		$data = $query->result_array();

		$jsonData = json_encode($data);

		echo $jsonData;
	}

	public function index()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'dashboard',
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/global/footer',$data);
	}

	public function subdivision()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'subdivision',
				'subd'	=> get_subdivision(),
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/subdivision',$data);
		$this->load->view('admin/global/footer',$data);
	}


	public function image()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'file',
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/file',$data);
		$this->load->view('admin/global/footer',$data);
	}



	public function fman()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'file_m',
				'subd'	=> get_imagefile(),
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/filemanager',$data);
		$this->load->view('admin/global/footer',$data);
	}

	public function news()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'news',
				'subd'	=> get_news(),
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/news',$data);
		$this->load->view('admin/global/footer',$data);
	}

	public function houselist()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'houselist',
				'subd'	=> get_houselisting(),
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/housing',$data);
		$this->load->view('admin/global/footer',$data);
	}

	public function houseimages($id)
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'houselist',
				'subd'	=> get_houselisting_image($id),
				'id'	=> $id,
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/housing_image',$data);
		$this->load->view('admin/global/footer',$data);
	}

	function dragDropUpload_images(){
        if(!empty($_FILES)){
        	$get = $this->input->get();

        	$user_dir_resume    = './houseimage';
		      if(!file_exists($user_dir_resume)){
		          mkdir( $user_dir_resume, 0755 );
		      }

		    $user_dir_resume2    = './houseimage/'.$get['house_id'];
		      if(!file_exists($user_dir_resume2)){
		          mkdir( $user_dir_resume2, 0755 );
		      }

            $uploadPath = 'houseimage/'.$get['house_id'].'/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|bmp|jpe';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){
                $fileData = $this->upload->data();
                $uploadData['image_name'] = $fileData['file_name'];
                $uploadData['house_id'] = $get['house_id'];
                $uploadData['image_date'] = date("Y-m-d H:i:s");

                // Insert files info into the database
                $insert = $this->file->insert($uploadData);
            }
        }
    }


	public function users()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'users',
				'subd'	=> get_userslisst(),
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/users',$data);
		$this->load->view('admin/global/footer',$data);
	}


	public function agents()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'agents',
				'subd'	=> get_agentlist(),
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/agents',$data);
		$this->load->view('admin/global/footer',$data);
	}

	public function addagent(){
		$post = $this->input->post();
		$data = array(
			'fname' 				=> $post['fname'],
			'mname' 				=> $post['mname'],
			'lname' 				=> $post['lname'],
			'contact_number' 		=> $post['contact_number'],
			'email' 				=> $post['email'],
			'emp_type' 				=> $post['emp_type'],
			'password' 				=> $post['password'],
			'date_added'			=> get_time_now(),
		);
		$val = addagent($data);
			if($val){
				redirect(base_url().'admin/agents', 'location');
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
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'addhouse',
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/add_home',$data);
		$this->load->view('admin/global/footer',$data);
	}

	public function edit_house($id)
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'addhouse',
				'house_info'	=> get_house_per_id($id),
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/edit_home',$data);
		$this->load->view('admin/global/footer',$data);
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
		$val = insert_house($data,$post);
		redirect(base_url().'admin/houselist', 'location');
	}

	public function edit_housing_submit(){
		$post = $this->input->post();
		$data = array(
			'house_id'		=> $post['house_id'],
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
		$val = edit_housing_submit($data,$post);
		echo '<script>alert("house updated");';
		echo 'window.location = `'.base_url().'admin/houselist`;</script>';
		// redirect(base_url().'admin/houselist', 'location');
	}

	public function addsubdivision(){
		$post = $this->input->post();
		$data = array(
			'sub_name' => $post['sub_name'],
			'sub_date' => get_time_now(),
			);
		if(name_sub_exist($post['sub_name']) == 0){
			$val = insert_subdivision($data);
			redirect(base_url().'admin/subdivision', 'location');
		}else{
			echo "
				<script>
					alert('Subdivision Exists');
					window.location = ('".base_url()."admin/subdivision');
				</script>
			";
			// redirect(base_url().'admin/subdivision', 'location');
		}

	}

	public function editsubdivision(){
		$post = $this->input->post();
		$data = array(
			'sub_name' => $post['sub_name']
			);
		if(name_sub_exist($post['sub_name'],$post['sub_id']) == 0){
			$val = edit_subdivision($data,$post['sub_id']);
			redirect(base_url().'admin/subdivision', 'location');
		}else{
			echo "
				<script>
					alert('Subdivision Exists');
					window.location = ('".base_url()."admin/subdivision');
				</script>
			";
			// redirect(base_url().'admin/subdivision', 'location');
		}
	}



	public function myprofile()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'profile',
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/adminprofile',$data);
		$this->load->view('admin/global/footer',$data);
	}

	public function login(){
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'login',
		);
		$this->load->view('admin/login',$data);
	}

	public function login_submit(){
		$post = $this->input->post();
			$data = array(
				'username'	=>	$post['uname'],
				'password'	=>	$post['psw'],
			);
		$val = login_crm($data);
		if($val == '1'){
			redirect(base_url().'admin','location');
		}else{
			echo "
			<script>
				alert('wrong username or password');
				window.location = '../admin/login';
			</script>
			";
			// redirect(base_url().'admin/login','location');
		}
	}


	public function submittedprofile(){
		$post = $this->input->post();
			$data = array(
				'username'		=>	$post['username'],
				'password'		=>	$post['pwd'],
				'fname'			=>	$post['fname'],
				'lname'			=>	$post['lname'],
				'mname'			=> $post['mname'],
			);
		$val = updateadminprofile($data);
		if($val == '1'){
			redirect(base_url().'admin/profile','location');
		}else{
			redirect(base_url().'admin/profile','location');
		}
	}

	public function logout(){
		$this->session->unset_userdata('admin');
		redirect(base_url().'admin/login','location');
	}

	public function delete_sub(){
		$get = $this->input->get();
		$val = delete_sub($get['id']);
		redirect(base_url().'admin/subdivision','location');
	}

	public function delete_image(){
		$get = $this->input->get();
		unlink('./uploads/'.$get['name']);
		$val = delete_image($get['id']);
		redirect(base_url().'admin/fman','location');
	}

	public function delete_image_house(){
		$get = $this->input->get();
		unlink('./houseimage/'.$get['house_id'].'/'.$get['image_name']);
		$val = delete_image($get['image_id']);
		redirect(base_url().'admin/houseimages/'.$get['house_id'],'location');
	}


	public function delete_news(){
		$get = $this->input->get();
		unlink('./uploads_news/'.$get['name']);
		$val = delete_news($get['id']);
		redirect(base_url().'admin/news','location');
	}

	public function delete_house(){
		$get = $this->input->get();
		unlink('./uploads/'.$get['name']);
		$val = delete_house($get['id']);
		redirect(base_url().'admin/houselist','location');
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

    public function message()
	{
		redirect_session_admin();
		$data = array(
				'title'	=> 'Admin | '.myadmintitle(),
				'page'	=> 'message',
		);

		$this->load->view('admin/global/header',$data);
		$this->load->view('admin/global/nav',$data);
		$this->load->view('admin/message',$data);
		$this->load->view('admin/global/footer',$data);
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

    public function upload_file()
    {
        $user_dir_resume    = './file_management';
        if(!file_exists($user_dir_resume)){
            mkdir( $user_dir_resume, 0755 );
        }

        $file_path = 'file_management/';

        //Upload Config
        $config['upload_path'] = $file_path;
        $config['allowed_types'] = '*';//'png|jpeg|jpg';
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
                       	insert_file(array(
                       		'user_id'			=> mysession_admin(),
                       		'file_name'			=> $upload_data['file_name'],
                       		'orig_name'			=> $upload_data['orig_name'],
                       		'date_added'		=> get_time_now(),
                       		'date_updated'		=> get_time_now(),
                       	));
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
			redirect(base_url().'admin/users', 'location');
		}
    }


    public function del_agent($id){
    	$val = del_agent($id);
		if($val){
			redirect(base_url().'admin/agents', 'location');
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
}
