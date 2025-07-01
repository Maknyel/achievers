<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route = array(
	'default_controller' 					=> 'User',
	'resetpass' 									=> 'Agent/resetpass',


	'set_password' 									=> 'Agent/set_password',
	'set_pass' 											=> 'User/set_pass',



	'privacy-policy' 						=> 'User/privacy_policy',
	'resetpassword' 						=> 'User/resetpassword',
	'terms-and-conditions' 			=> 'User/terms_and_conditions',

	'property'								=> 'User/property',
	'contact'								=> 'User/contact',
	'about'									=> 'User/about',
	'news'									=> 'User/news',
	'news/(:num)'							=> 'User/newssingle/$1',
	'agent/(:num)'							=> 'User/agent/$1',
	'view/(:num)'							=> 'User/view/$1',
	//admin

	'Admin/json_backend/(:any)'				=> 'Admin/json_backend/$1',
	'admin'									=> 'Admin',
	'admin/login'							=> 'Admin/login',
	'admin/logout'							=> 'Admin/logout',
	'admin/login_submit'					=> 'Admin/login_submit',
	'admin/profile'							=> 'Admin/myprofile',
	'admin/submittedprofile'				=> 'Admin/submittedprofile',
	'admin/subdivision'   					=> 'Admin/subdivision',
	'admin/leads'   						=> 'Admin/leads',

	'admin/addsubdivision'   				=> 'Admin/addsubdivision',
	'admin/editsubdivision'					=> 'Admin/editsubdivision',
	'admin/image'   						=> 'Admin/image',
	'admin/fman'   							=> 'Admin/fman',
	'admin/news'   							=> 'Admin/news',
	'admin/add_house'   					=> 'Admin/add_house',
	'admin/houselist'   					=> 'Admin/houselist',

	'admin/addagent'   						=> 'Admin/addagent',
	'admin/houseimages/(:num)'				=> 'Admin/houseimages/$1',


	'admin/users'   						=> 'Admin/users',
	'admin/del_user/(:num)'					=> 'Admin/del_user/$1',

	'admin/agents'   						=> 'Admin/agents',
	'admin/del_agent/(:num)'				=> 'Admin/del_agent/$1',

	'add_housing_submit'   					=> 'Admin/add_housing_submit',
	'cms/upload_resume'						=> 'Admin/upload_resume',
	'cms/remove_cropped_thumbnail' 			=> 'Admin/remove_cropped_thumbnail',

	'agent/profile'							=> 'Agent/myprofile',

	'agent/lead_demographic'				=> 'Agent/lead_demographics',
	'agent/lead_demographic'				=> 'Agent/lead_demographics',
	'agent/agent_performance'				=> 'Agent/agent_performance',

	'agent/create_email_campaign'			=> 'Agent/create_email_campaign',

	'agent/add_leads'						=> 'Agent/add_leads',

	'agent/plans/(:num)'   					=> 'Agent/myplans/$1',
	'agent/pay_sale/(:num)'   				=> 'Agent/pay_sale/$1',


	'404_override' 							=> '',
	'translate_uri_dashes' 					=> FALSE,
);
