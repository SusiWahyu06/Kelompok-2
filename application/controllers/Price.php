<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends CI_Controller {

	public function index()
	{
		$this->load->view('price_view.php');
	}
}