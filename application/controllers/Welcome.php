<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->database();
	}


	public function head()
	{
		$this->load->view('basic/head');
	}
	public function header()
	{
        $this->head();
		$this->load->view('basic/header');
	}
	public function footer()
	{
		$this->load->view('basic/footer');
	}

	public function index()
	{
        $this->head();
		$this->load->view('sign-in');
		$this->footer();
	}
	public function dashboard()
	{
        $this->header();
		$this->load->view('dashboard');
		$this->footer();
	}
	public function signup()
	{
        $this->head();
		$this->load->view('sign-up');
		$this->footer();
	}
	
	public function register()
	{
        $this->header();
		$this->load->view('register');
		$this->footer();
	}
	
	public function sale_invoice_list()
	{
        $this->header();
		$this->load->view('sale-invoice-list');
		$this->footer();
	}
	
	public function sale_invoice()
	{
        $this->header();
		$this->load->view('sale-invoice');
		$this->footer();
	}
	
	public function purchase_order_list()
	{
        $this->header();
		$this->load->view('purchase-order-list');
		$this->footer();
	}
	
	public function purchase_order_print()
	{
        $this->header();
		$this->load->view('purchase-order-print');
		$this->footer();
	}
	
	public function purchase_order()
	{
        $this->header();
		$this->load->view('purchase-order');
		$this->footer();
	}
	
	public function project()
	{
        $this->header();
		$this->load->view('project');
		$this->footer();
	}
	public function vandor()
	{
        $this->header();
		$this->load->view('vandor');
		$this->footer();
	}
	public function items()
	{
        $this->header();
		$this->load->view('items');
		$this->footer();
	}
	public function demo_requet()
	{
        $this->header();
		$this->load->view('demo-requet');
		$this->footer();
	}
	public function trial_info()
	{
        $this->header();
		$this->load->view('trial-info');
		$this->footer();
	}
	public function backup_to_drive()
	{
        $this->header();
		$this->load->view('backup-to-drive');
		$this->footer();
	}
	public function backup_to_computer()
	{
        $this->header();
		$this->load->view('backup-to-computer');
		$this->footer();
	}
	public function utilities()
	{
        $this->header();
		$this->load->view('utilities');
		$this->footer();
	}
	public function share()
	{
        $this->header();
		$this->load->view('share');
		$this->footer();
	}

	public function products()
	{
        $this->header();
		$this->load->view('products');
		$this->footer();
	}
	public function bank()
	{
        $this->header();
		$this->load->view('bank');
		$this->footer();
	}
	public function cash_in_hand()
	{
        $this->header();
		$this->load->view('cash-in-hand');
		$this->footer();
	}
	public function generete_barcode()
	{
        $this->header();
		$this->load->view('generete-barcode');
		$this->footer();
	}
	public function import_items()
	{
        $this->header();
		$this->load->view('import-items');
		$this->footer();
	}
	public function export_items()
	{
        $this->header();
		$this->load->view('export-items');
		$this->footer();
	}
	public function verify_my_data()
	{
        $this->header();
		$this->load->view('verify-my-data');
		$this->footer();
	}
	
	public function add_branch()
	{
        $this->header();
		$this->load->view('add-branch');
		$this->footer();
	}
	



	public function page_404()
    {
        $this->head();
        $this->load->view('404-page');
        $this->footer();
    }
	
}
