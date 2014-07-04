<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "guests_interface";
$route['404_override'] = '';

/*************************************************** AJAX INTRERFACE ***********************************************/
/******************guest interface ********************/
$route['send-feedback'] = "ajax_interface/sendFeedBack";
$route['admin/sign-in'] = "ajax_interface/loginIn";
/*********** events ***************/
$route['admin/rent/insert'] = "ajax_interface/insertRent";
$route['admin/rent/update'] = "ajax_interface/updateRent";
$route['admin/rent/delete'] = "ajax_interface/deleteRent";
$route['admin/rent/save/photo'] = "ajax_interface/updateRentPhoto";
$route['change-rent-status'] = "ajax_interface/changeRentStatus";

$route['load-corps-floor'] = "ajax_interface/loadCorpsFloor";
$route['load-floor-rent'] = "ajax_interface/loadFloorRent";
/*************************************************** USERS INTRERFACE ***********************************************/
/*************** pages ****************/
$route['admin'] = "guests_interface/loginIn";
$route['arenda-ofisa-ot-sobstvennika'] = "guests_interface/rent";
$route['arenda_ofisov_rostov'] = "guests_interface/page";
$route['contacts'] = "guests_interface/page";
$route['arenda-ofica-v-rostove'] = "guests_interface/page";
$route['ofisi-v-arendu-rostov'] = "guests_interface/page";

$route['log-off'] = "guests_interface/logoff";
/********** loading image *************/
$route['loadimage/:any/:num'] = "guests_interface/loadimage";
/*************************************************** ADMIN INTRERFACE ***********************************************/
$route[ADMIN_START_PAGE] = "admin_interface/rent";
$route[ADMIN_START_PAGE.'/add'] = "admin_interface/insertRent";
$route[ADMIN_START_PAGE.'/edit/:num'] = "admin_interface/editRent";
$route[ADMIN_START_PAGE.'/edit'] = "admin_interface/editRent";
