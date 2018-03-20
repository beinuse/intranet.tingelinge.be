<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users/'] = 'users/login';
$route['users/(any)'] = 'users/login/$1';

$route['staff/'] = 'staff/index';
$route['staff/create'] = 'staff/create';
$route['staff/edit'] = 'staff/edit/$1';
$route['staff/update'] = 'staff/update/$1';
$route['staff/schedule'] = 'staff/schedule';
$route['staff/(any)'] = 'staff/view/$1'; 

$route['(any)'] = 'dashboard/view/$1';

$route['default_controller'] = 'users/login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;