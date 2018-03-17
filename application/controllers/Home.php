<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('session', 'function_lib'));
		$this->load->helper(array('url'));
		$this->data = array();

		$this->data['headerFiles'] =  $this->load->view('commonCode/headerFiles',$this->data,true);
		$this->data['footerFiles'] =  $this->load->view('commonCode/footerFiles',$this->data,true);
		$this->data['nav'] =  $this->load->view('commonCode/nav',$this->data,true);
		$this->data['footer'] =  $this->load->view('commonCode/footer',$this->data,true);

		$this->data['message'] = ($v = $this->session->flashdata('message'))?$v:array('content'=>'','color'=>'');

		// $this->data['csrf_token_name'] = $this->security->get_csrf_token_name();
	}

	public function index(){
		$this->data['pageTitle'] = "Home";
		$this->load->view('home', $this->data);
	}

	public function assessmentCodes(){
		$this->data['pageTitle'] = "Assessment Codes";
		$this->data['activePage'] = "6";
		$this->data['sidebar'] =  $this->load->view('commonCode/sidebar',$this->data,true);
		$this->load->view('assessmentCodes', $this->data);
	}

	public function assessmentTests(){
		$this->data['pageTitle'] = "Assessment Tests";
		$this->data['activePage'] = "6";
		$this->data['sidebar'] =  $this->load->view('commonCode/sidebar',$this->data,true);
		$this->load->view('assessmentTests', $this->data);
	}

	public function assessmentTestResults(){
		$this->data['pageTitle'] = "Assessment Test Results";
		$this->data['activePage'] = "6";
		$this->data['sidebar'] =  $this->load->view('commonCode/sidebar',$this->data,true);
		$this->load->view('assessmentTestResults', $this->data);
	}

	public function changePassword(){
		$this->data['pageTitle'] = "Change Password";
		$this->data['activePage'] = "7";
		$this->data['sidebar'] =  $this->load->view('commonCode/sidebar',$this->data,true);
		$this->load->view('changePassword', $this->data);
	}

	public function report(){
		$this->load->view('report', $this->data);
	}

	public function assessmentTestLogin(){
		$this->data['pageTitle'] = "Assessment Test Login";
		$this->load->view('assessment/assessmentTestLogin', $this->data);
	}

	public function assessmentTest(){
		$this->data['pageTitle'] = "Assessment Test";
		$this->load->view('assessment/assessmentTest', $this->data);
	}

	public function accessAssessmentTest(){
		$this->data['pageTitle'] = "Access Assessment Test";
		$this->load->view('assessment/accessAssessmentTest', $this->data);
	}

	public function selectAssessmentTest(){
		$this->data['pageTitle'] = "Select Assessment Test";
		$this->load->view('assessment/selectAssessmentTest', $this->data);
	}

	public function assessmentTestGuidelines(){
		$this->data['pageTitle'] = "Assessment Test Guidelines";
		$this->load->view('assessment/assessmentTestGuidelines', $this->data);
	}


}
