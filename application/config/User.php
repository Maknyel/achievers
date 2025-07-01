<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->model('Functions_class');
		// $this->load->model('file');
	}

	public function set_pass(){
		$post = $this->input->post();
		if(count_avail_email_users($post['email']) == '1'){
			// update password
			if(updateuserpassword($post)){
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

		// if(count_avail_email_users($post['email']) == '1'){
		// 	$message = "<center><h3>Password Reset</h3><center>";
		//
		// 	$message .= "<center><h6>If you've lost your password or wish to reset it use the link below to get started</h6><center>";
		//
		// 	$message .= "<center><a href='".base_url()."resetpassword?email=".$post['email']."'>Reset your password</a><center>";
		//
		//
		// 	$maildata = array(
		// 		'message' 	=>  $message,
		// 		'email'	  	=> 	$post['email'],
		// 		'cc' 				=> 	'',
		// 		'subject'		=> 'forget Password'
		// 	);
		// 	if(sendMail($maildata)){
		// 		echo '<script>alert("Email send");';
		// 		echo 'window.location = `'.base_url().'`;</script>';
		// 	}
		// }else{
		// 	echo '<script>alert("Email not found");';
		// 	echo 'window.location = `'.base_url().'`;</script>';
		// }
		echo $post['email'];
		// echo '<script>alert("house updated");';
		// echo 'window.location = `'.base_url().'admin/houselist`;</script>';
		// echo json_encode($post['email']);
	}

	public function resetpassword(){
		// redirect_session_admin();
		$data = array(
				'title'	=> myadmintitle(),
				'page'	=> 'resetpassword',
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('resetpassword',$data);
		$this->load->view('global/footer',$data);
	}

	public function privacy_policy(){
		// redirect_session_admin();
		$data = array(
				'title'	=> myadmintitle(),
				'page'	=> 'dashboard',
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('privacy_policy',$data);
		$this->load->view('global/footer',$data);
	}

	public function terms_and_conditions(){
		// redirect_session_admin();
		$data = array(
				'title'	=> myadmintitle(),
				'page'	=> 'dashboard',
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('terms_and_conditions',$data);
		$this->load->view('global/footer',$data);
	}

	public function login_user(){
        $val = $this->input->post();
        $data = array(
            'email'          => $val['email'],
            'password'          => $val['password'],
        );

        $return = login($data);


            if($return){
            	$this->session->set_userdata('user',$return);
                echo '<script>alert("Loggedin");window.location = "'.base_url().'";</script>';
            }else{
                echo '<script>alert("Wrong Username or Password");window.location = "'.base_url().'";</script>';
            }

    }

    public function register(){
        $post = $this->input->post();
        $data = array(
            'fname'             => $post['fname'],
            'mname'             => $post['mname'],
            'lname'             => $post['lname'],
            'contact_number'    => $post['contact_number'],
            'email'             => $post['email'],
            'password'          => $post['password'],
        );
        $val = register($data);
        if($val == '1'){
            echo '<script>alert("Registered!");window.location = "'.base_url().'";</script>';
        }else if($val == '2'){
            echo '<script>alert("Email Already Exist");window.location = "'.base_url().'";</script>';
        }else{
            echo '<script>alert("Invalid Request!");window.location = "'.base_url().'";</script>';
        }
    }

    public function register_ajax(){
        $post = $this->input->post();
        $data = array(
            'fname'             => $post['fname'],
            'mname'             => $post['mname'],
            'lname'             => $post['lname'],
            'contact_number'    => $post['contact_number'],
            'email'             => $post['email'],
            'password'          => $post['password'],
            'gender'          => $post['gender'],
            'address'          => $post['address'],
            'birthdate'          => $post['birthdate'],
        );
        $val = register($data);
        echo json_encode($val);
        // if($val == '1'){
        //     echo '<script>alert("Registered!");window.location = "'.base_url().'";</script>';
        // }else if($val == '2'){
        //     echo '<script>alert("Email Already Exist");window.location = "'.base_url().'";</script>';
        // }else{
        //     echo '<script>alert("Invalid Request!");window.location = "'.base_url().'";</script>';
        // }
    }

    public function add_leads(){

    	$post = $this->input->post();
    	if(insert_leadsdata($post)){
    		echo "Successfully Submitted";
    	}else{
    		echo "Please Refresh your page";
    	}

    }

	public function logout(){
        $this->session->unset_userdata('user');
        redirect(base_url(), 'location');
    }

	public function update()
	{

		$name = $this->input->post('name');
		$message = $this->input->post('message');
		$html_redirect = $this->input->post('html_redirect');

		$current = new DateTime();
		$arrayName = array(
			'message' 	=> $message,
			'user_id'	=> client_session_val(),
			'user_type'	=> '0',
			'user_to'	=> (current_agent(client_session_val()))?current_agent_field(client_session_val(),'agent_id'):'0',
			'time_date'	=> current_ph_date_time(),
		);
		insertMsg($arrayName);

	}


	public function json_backend()
	{

		$query = getMsg();

		echo json_encode($query);
	}

	public function index()
	{
		// redirect_session_admin();
		$data = array(
				'title'	=> myadmintitle(),
				'page'	=> 'dashboard',
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('global/footer',$data);

	}

	public function contact()
	{
		// redirect_session_admin();
		$data = array(
				'title'	=> myadmintitle(),
				'page'	=> 'contact',
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('contact',$data);
		$this->load->view('global/footer',$data);

	}

	public function about()
	{
		// redirect_session_admin();
		$data = array(
				'title'	=> myadmintitle(),
				'page'	=> 'about',
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('about',$data);
		$this->load->view('global/footer',$data);

	}

	public function news()
	{
		// redirect_session_admin();
		$get = $this->input->get();
		$data['total_page'] = 0;

		  //pagination

		  $total_rows = count(get_news_arraay());

					$base_url = base_url().'news';

					$config = array(
						'page_query_string' => TRUE,
						'base_url' => $base_url,
						'total_rows' => $total_rows,
						'per_page' => 6,
						'num_links' => 2,
						'full_tag_open' => '<ul class="pagination">',
						'full_tag_close' => '</ul>',
						'prev_link' => '<i class="fa fa-angle-left"></i> '.'Prev',
						'prev_tag_open' => '<li>',
						'prev_tag_close' => '</li>',
						'next_tag_open' => '<li>',
						'next_tag_close' => '</li>',
						'cur_tag_open' => '<li class="active"><a href="javascript:;">',
						'cur_tag_close' => '</a></li>',
						'num_tag_open' => '<li>',
						'num_tag_close' => '</li>',
						'next_link' => 'Next'.' <i class="fa fa-angle-right"></i>',
						'first_link' => '<button class="firstbuttonpage"> <i class="fa fa-angle-double-left"></i> First</button>',
						'last_link' => '<button class="lastbuttonpage">Last <i class="fa fa-angle-double-right"></i></button>'
					);

					$this->pagination->initialize($config);
                    $offset = !empty($get['per_page']) ? $get['per_page'] : 0;
                    $data['total_page'] = 0;



		$data = array(
				'title'	=> myadmintitle(),
				'page'	=> 'news',
				'listofprop' 	=> get_news_arraay($config['per_page'], $offset),
				'page_links'    => explode('&nbsp;', $this->pagination->create_links()),
	            'total_page'    => ceil($config['total_rows'] / $config['per_page']),
	            'curr_num_page' => (ceil($offset/$config['per_page'])-$data['total_page'])+1,
	            'total_row'		=> $total_rows,
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('news',$data);
		$this->load->view('global/footer',$data);

	}

	public function newssingle($id)
	{
		// redirect_session_admin();
		$data = array(
				'title'	=> myadmintitle(),
				'page'	=> 'view_news',
				'list' 	=> get_newslisting_only($id),
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('newsingle',$data);
		$this->load->view('global/footer',$data);

	}

	public function agent($id)
	{
		// redirect_session_admin();
		$get = $this->input->get();
		$data['total_page'] = 0;

		  //pagination

		  $total_rows = count(get_houselisting2_agent($id));

					$base_url = base_url().'agent';

					$config = array(
						'page_query_string' => TRUE,
						'base_url' => $base_url,
						'total_rows' => $total_rows,
						'per_page' => 6,
						'num_links' => 2,
						'full_tag_open' => '<ul class="pagination">',
						'full_tag_close' => '</ul>',
						'prev_link' => '<i class="fa fa-angle-left"></i> '.'Prev',
						'prev_tag_open' => '<li>',
						'prev_tag_close' => '</li>',
						'next_tag_open' => '<li>',
						'next_tag_close' => '</li>',
						'cur_tag_open' => '<li class="active"><a href="javascript:;">',
						'cur_tag_close' => '</a></li>',
						'num_tag_open' => '<li>',
						'num_tag_close' => '</li>',
						'next_link' => 'Next'.' <i class="fa fa-angle-right"></i>',
						'first_link' => '<button class="firstbuttonpage"> <i class="fa fa-angle-double-left"></i> First</button>',
						'last_link' => '<button class="lastbuttonpage">Last <i class="fa fa-angle-double-right"></i></button>'
					);

					$this->pagination->initialize($config);
                    $offset = !empty($get['per_page']) ? $get['per_page'] : 0;
                    $data['total_page'] = 0;

		// redirect_session_admin();


		$data = array(
				'title'	=> myadmintitle(),
				'page'	=> 'agent',
				'list' 	=> get_agent_only($id),
				'listofprop' 	=> get_houselisting2_agent($id,$config['per_page'], $offset),
				'page_links'    => explode('&nbsp;', $this->pagination->create_links()),
	            'total_page'    => ceil($config['total_rows'] / $config['per_page']),
	            'curr_num_page' => (ceil($offset/$config['per_page'])-$data['total_page'])+1,
	            'total_row'		=> $total_rows,
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('agentlist',$data);
		$this->load->view('global/footer',$data);

	}



	public function property()
	{
		$get = $this->input->get();
		$data['total_page'] = 0;

		  //pagination

		  $total_rows = count(get_houselisting2(((isset($get['subdivision']))?$get['subdivision']:'')));

					$base_url = base_url().'property';

					$config = array(
						'page_query_string' => TRUE,
						'base_url' => $base_url,
						'total_rows' => $total_rows,
						'per_page' => 6,
						'num_links' => 2,
						'full_tag_open' => '<ul class="pagination">',
						'full_tag_close' => '</ul>',
						'prev_link' => '<i class="fa fa-angle-left"></i> '.'Prev',
						'prev_tag_open' => '<li>',
						'prev_tag_close' => '</li>',
						'next_tag_open' => '<li>',
						'next_tag_close' => '</li>',
						'cur_tag_open' => '<li class="active"><a href="javascript:;">',
						'cur_tag_close' => '</a></li>',
						'num_tag_open' => '<li>',
						'num_tag_close' => '</li>',
						'next_link' => 'Next'.' <i class="fa fa-angle-right"></i>',
						'first_link' => '<button class="firstbuttonpage"> <i class="fa fa-angle-double-left"></i> First</button>',
						'last_link' => '<button class="lastbuttonpage">Last <i class="fa fa-angle-double-right"></i></button>'
					);

					$this->pagination->initialize($config);
                    $offset = !empty($get['per_page']) ? $get['per_page'] : 0;
                    $data['total_page'] = 0;

		// redirect_session_admin();
		$data = array(
				'title'			=> myadmintitle(),
				'page'			=> 'property',
				'listofprop' 	=> get_houselisting2(((isset($get['subdivision']))?$get['subdivision']:''),$config['per_page'], $offset),
				'page_links'    => explode('&nbsp;', $this->pagination->create_links()),
	            'total_page'    => ceil($config['total_rows'] / $config['per_page']),
	            'curr_num_page' => (ceil($offset/$config['per_page'])-$data['total_page'])+1,
	            'total_row'		=> $total_rows,
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('property',$data);
		$this->load->view('global/footer',$data);

	}

	public function view($id)
	{
		// redirect_session_admin();
		$get_houselisting_only = get_houselisting_only($id);
		$data = array(
				'title'	=> $get_houselisting_only['house_name'].' | '.myadmintitle(),
				'page'	=> 'view',
				'list' 	=> $get_houselisting_only,
		);
		$this->load->view('global/header',$data);
		$this->load->view('global/nav',$data);
		$this->load->view('view',$data);
		$this->load->view('global/footer',$data);

	}

	public function upload_image()
    {

        //upload file


        $user_dir_resume    = './Announcement';
        if(!file_exists($user_dir_resume)){
            mkdir( $user_dir_resume, 0755 );
        }



        $file_path = './Announcement'.'/';

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
                            'link'      => base_url().'Announcement/'.$upload_data['file_name'],
                            'filepath'  => $file_path,
                            'filename'  => $upload_data['file_name']
                        );

                        $file = './Announcement';


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
