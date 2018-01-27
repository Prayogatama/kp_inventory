<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news/delete/(:any)'] = 'news/delete/$1';
$route['news/update/(:any)'] = 'news/update/$1';
// $route['news/create'] = 'news/create';
$route['news'] = 'news';
$route['news/(:any)'] = 'news/view/$1';

// admin
// $route['admin'] = 'admin';
$route['admin'] = 'admin';
$route['auth'] = 'auth';
$route['chat'] = 'chat';
// $route['admin/(:any)'] = 'C_admin/$1';
// $route['admin/inputbarang'] = 'admin/inputbarang/$1';


// index
$route['default_controller'] = 'Welcome';
$route['(:any)'] = 'Welcome/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
