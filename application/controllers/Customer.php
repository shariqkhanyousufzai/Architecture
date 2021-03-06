<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('auth/login');
       		}
       	$this->load->model('customer_model');
    }

	public function index()
	{
		$this->page_construct('customer/customerlist');
	}

	public function profile()
	{
		$this->page_construct('customer/editprofile');
	}

	public function activity()
	{
		$this->page_construct('customer/activity');
	}

	public function map()
	{
		$this->page_construct('customer/map');
	}
}
