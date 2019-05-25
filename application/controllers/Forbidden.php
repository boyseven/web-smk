<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forbidden extends CI_Controller {

	public function index()
	{
		$this->load->view('403');		
	}

}

/* End of file Forbidden.php */
/* Location: ./application/controllers/Forbidden.php */