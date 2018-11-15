<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/index.html');
	}

}

/* End of file Admin_controller.php */
/* Location: ./application/controllers/Admin_controller.php */