<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//pages
$route['default_controller'] = 'C_pages/index';
$route['prokda'] = 'C_pages/prokda';
$route['kepengurusan'] = 'C_pages/kepengurusan';
// admin
$route['admin'] = 'C_admin/login';
$route['admin/beranda'] = 'C_admin/Beranda';
$route['admin/berita_tampil'] = 'C_admin/berita_tampil';
$route['admin/view'] = 'C_admin/view';
$route['admin/lupapassword'] = 'C_admin/lupapassword';
$route['admin/manajemen_home'] = 'C_admin/manajemen_home';
$route['admin/manajemen_kepengurusan'] = 'C_admin/manajemen_kepengurusan';
$route['admin/berita_update/(:any)'] = 'C_admin/berita_update/$1';
$route['admin/delete/(:any)'] = 'C_admin/delete/$1';
$route['admin/create'] = 'C_admin/create';
$route['admin/home_update/(:any)'] = 'C_admin/home_update/$1';
$route['admin/home_delete/(:any)'] = 'C_admin/home_delete/$1';
// berita
$route['berita/view/(:any)'] = 'C_berita/view/$1';
$route['berita'] = 'C_berita/index';
$route['berita/(:any)'] = 'C_berita/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
