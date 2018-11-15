<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Viewpages';


$route['admin-dashboard'] = 'Admin_controller';




$route['contact-us'] = 'Viewpages/redirection/contact_us';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
