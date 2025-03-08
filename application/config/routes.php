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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['home'] = 'welcome/home';
$route['form-mahasiswa'] = 'welcome/form_mahasiswa';
$route['form-edit-mahasiswa/(:num)']['GET'] = "welcome/form_edit_mahasiswa/$1";
$route['form-edit-mahasiswa/(:num)(:num)']['GET'] = "welcome/form_edit_mahasiswa/$2";
$route['form-edit-mahasiswa/(:num)(:num)(:num)']['GET'] = "welcome/form_edit_mahasiswa/$3";
$route['form-edit-mahasiswa/(:num)(:num)(:num)(:num)']['GET'] = "welcome/form_edit_mahasiswa/$4";
$route['insert-mahasiswa']['POST'] = 'welcome/insert_mahasiswa';
$route['edit-mahasiswa']['POST'] = "welcome/edit_mahasiswa";
$route['hapus-mahasiswa/(:num)']['GET']=  'mahasiswa/deleteUser/$1';
$route['view-mahasiswa']['GET'] = 'welcome/view_mahasiswa';
///////////////////////////////////////////////////////////////
$route['form-dosen'] = 'welcome/form_dosen';
$route['form-edit-dosen/(:num)']['GET'] = "welcome/form_edit_dosen/$1";
$route['insert-dosen']['POST'] = 'welcome/insert_dosen';
$route['edit-dosen']['POST'] = "welcome/edit_dosen";
$route['hapus-dosen/(:num)']['GET']=  'dosen/deleteUser/$1';
$route['view-dosen']['GET'] = 'welcome/view_dosen';
/////////////////////////////////////////////////////////////
$route['form-kelas'] = 'welcome/form_kelas';
$route['form-edit-kelas/(:num)']['GET'] = "welcome/form_edit_kelas/$1";
$route['insert-kelas']['POST'] = 'welcome/insert_kelas';
$route['edit-kelas']['POST'] = "welcome/edit_kelas";
$route['hapus-kelas/(:num)']['GET']=  'kelas/deleteUser/$1';
$route['view-kelas']['GET'] = 'welcome/view_kelas';
/////////////////////////////////////////////////////////////
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
