<?php
class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        error_reporting(0);
        if (!$this->session->userdata('user')) {
            redirect('auth/login');
        }
    }

	function index()
	{
		$this->load->view('home_view');
	}
}