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
$route['default_controller'] = 'pages/view';
$route['admin/editsite'] = 'admin/editsite';
$route['admin/editsitedefault'] = 'admin/editsitedefault';
$route['admin/editpage'] = 'admin/editpage';
$route['admin/progtracker'] = 'admin/progtracker';
$route['admin/progtrack_edit'] = 'admin/progtrack_edit';
$route['admin/progcadetadd'] = 'admin/progcadetadd';
$route['admin/progcadetdelete'] = 'admin/progcadetdelete';
$route['admin/progbadgeadd'] = 'admin/progbadgeadd';
$route['admin/progbadgedelete'] = 'admin/progbadgedelete';
$route['admin/editcadet'] = 'admin/editcadet';
$route['admin/loa'] = 'admin/loa';
$route['admin/archivedloa'] = 'admin/archivedloa';
$route['admin/logout'] = 'admin/logout';
$route['admin/users'] = 'admin/users';
$route['admin/userpass'] = 'admin/userpass';
$route['admin/userdelete'] = 'admin/userdelete';
$route['admin/upload'] = 'admin/upload';
$route['admin/(:any)'] = 'admin/view/$1';
$route['admin'] = 'admin/view/dash';
$route[LOGIN_PAGE] = 'pages/login';
$route['contact'] = 'pages/contact';
$route['join'] = 'pages/join';
$route['(:any)'] = 'pages/view/$1';

