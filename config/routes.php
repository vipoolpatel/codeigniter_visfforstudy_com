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

// Authentication
// $route['register'] = 'auth/register';
// $route['login'] = 'auth/login';

// $route['register/student'] = 'auth/student_register';
// $route['register/teacher'] = 'auth/teacher_register';
// $route['forgot-password'] = 'auth/forgot_password';
// $route['reset-password'] = 'auth/reset_password';



// $route['panel'] = 'auth/login';
// $route['student'] = 'auth/login';
// $route['teacher'] = 'auth/login';
// home controller

//Find A Student
// $route['find-a-student'] = 'findastudent/index';
// $route['find-a-student/(:any)'] = 'findastudent/index';
// $route['find-a-tutor'] = 'findatutor/index';
// $route['find-a-tutor/(:any)'] = 'findatutor/index/$1';
// $route['course-detail/(:any)'] = 'coursedetail/index/$1';
// $route['contact-us'] = 'contactus/index';
// $route['book-a-lesson'] = 'bookalesson/index';
// $route['payment'] = 'payment/index';
// $route['web'] = 'web/index';

$route['logout'] = 'home/logout';

$route['find-student'] 			= 'findstudent/find_student';
$route['find-student/(:any)'] 	= 'findstudent/find_student';

$route['find-tutor'] 		= 'findtutor/find_tutor';
$route['find-tutor/(:any)'] = 'findtutor/find_tutor';


$route['become-tutor'] 		= 'auth/become_tutor';

$route['signup'] = 'auth/signup';
$route['login'] = 'auth/login';
$route['forgot-password'] = 'auth/forgot_password';
$route['tutor-profile/(:any)'] = 'findtutor/tutor_profile/$1';
$route['student-profile/(:any)'] = 'findstudent/student_profile/$1';

$route['book-lesson'] = 'booklesson/book_lesson';
$route['become-student'] = 'auth/become_student';
$route['reset-password'] = 'auth/reset_password';



$route['default_controller'] = 'home';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
