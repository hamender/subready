<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('Layout/Front/V_header.php');
		$this->load->view('Front/F_index');
		$this->load->view('Layout/Front/V_footer.php');
	}
}
