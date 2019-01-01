<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller
{
	// This method will call when Employee controller called
	public function index()
	{
		// Load header view, file location application\views\includes\header.php
		$this->load->view('includes/header');

		// Load content view, file location application\views\content.php
		$this->load->view('content');

		// Load footer view, file location application\views\includes\footer.php
		$this->load->view('includes/footer');

	}
}
