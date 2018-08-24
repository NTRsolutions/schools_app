<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Attendance extends CI_Controller {

	 public function index()
	 {
	 	$this->load->view('super/includes/header');
	 	$this->load->view('super/includes/sidebar');
	 	$this->load->view('super/includes/top_header');
	 	$this->load->view('super/attendance');
	 	$this->load->view('super/includes/footer');
	 }
	public function add()
	{
		$this->load->view('super/includes/header');
		$this->load->view('super/includes/sidebar');
		$this->load->view('super/includes/top_header');
		$this->load->view('super/addStuAttendance');
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
