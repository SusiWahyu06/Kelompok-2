<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function index()
	{
		$this->load->view('booking_view.php');
	}
}