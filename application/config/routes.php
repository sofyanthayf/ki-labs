<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['api/icd'] = 'k_api/icd';
$route['api/cbg'] = 'k_api/cbg';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
