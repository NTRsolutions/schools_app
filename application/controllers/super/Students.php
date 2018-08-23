<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Students extends CI_Controller {

	 public function index()
	 {
	 	$this->load->view('super/includes/header');
	 	$this->load->view('super/includes/sidebar');
	 	$this->load->view('super/includes/top_header');
	 	$this->load->view('super/students');
	 	$this->load->view('super/includes/footer');
	 }
	public function add()
	{
		$this->load->view('super/includes/header');
		$this->load->view('super/includes/sidebar');
		$this->load->view('super/includes/top_header');
		$this->load->view('super/addStudent');
		$this->load->view('super/includes/footer');
	}
	public function view()
	{
		$this->load->view('super/includes/header');
		$this->load->view('super/includes/sidebar');
		$this->load->view('super/includes/top_header');
		$this->load->view('super/viewStudent');
		$this->load->view('super/includes/footer');
	}
}
