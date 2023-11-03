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
$route['default_controller'] = 'welcome';
// $route['default_controller'] = 'welcome/index';
//Pune

$route['dashboard'] = 'welcome/dashboard';
$route['login'] = 'welcome';
$route['signup'] = 'welcome/signup';
$route['register'] = 'welcome/register';

$route['sale-invoice-list'] = 'welcome/sale_invoice_list';
$route['sale-invoice'] = 'welcome/sale_invoice';
$route['purchase-order-list'] = 'welcome/purchase_order_list';
$route['purchase-order'] = 'welcome/purchase_order';
$route['purchase-order-print'] = 'welcome/purchase_order_print';
$route['project'] = 'welcome/project';
$route['items'] = 'welcome/items';
$route['vandor'] = 'welcome/vandor';
$route['demo-requet'] = 'welcome/demo_requet';
$route['trial-info'] = 'welcome/trial_info';
$route['backup-to-drive'] = 'welcome/backup_to_drive';
$route['backup-to-computer'] = 'welcome/backup_to_computer';
$route['utilities'] = 'welcome/utilities';
$route['share'] = 'welcome/share';
$route['products'] = 'welcome/products';
$route['bank'] = 'welcome/bank';
$route['cash-in-hand'] = 'welcome/cash_in_hand';
$route['generete-barcode'] = 'welcome/generete_barcode';
$route['import-items'] = 'welcome/import_items';
$route['export-items'] = 'welcome/export_items';
$route['verify-my-data'] = 'welcome/verify_my_data';

$route['add-branch'] = 'welcome/add_branch';


$route['404_override'] = 'welcome/page_404';
$route['translate_uri_dashes'] = FALSE;
