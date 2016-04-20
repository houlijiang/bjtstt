<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['list'] = 'news';
$route['list/show/id/(:num)'] = 'news/show/$1';
$route['product/show/id/(:num)'] = 'product/show/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
