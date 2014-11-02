<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class memories_event extends CI_Controller {

 function __construct()
 {
	parent::__construct();
	$this->load->library('session');
	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->model('servicespages','',TRUE);
 }

 function index()
 {	
	// $this->load->view('front_end/front_view');
	$data ['query'] = $this->servicespages->get_page_names();	
	$this->load->view('front_end/header');
	$this->load->view('front_end/menu');
	$this->load->view('front_end/slider');
	$this->load->view('front_end/services',$data);
	$this->load->view('front_end/portfolio');
	$this->load->view('front_end/pricing');
	$this->load->view('front_end/about_us');
	$this->load->view('front_end/contact_us');
	$this->load->view('front_end/footer');
  
 }
 function page_detail(){
	 $id = $this->input->get('id');
	$data = $this->servicespages->get_page($id);
	// echo "<pre>";print_r($data);exit;
	$this->load->view('front_end/header');
	$this->load->view('front_end/menu');
	$this->load->view('front_end/slider');
	$this->load->view('front_end/page_detail', $data);
	$this->load->view('front_end/footer');}

}

?>