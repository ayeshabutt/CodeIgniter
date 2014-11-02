<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('session');
 	$this->load->helper('url');
	$this->load->library('form_validation');
 }

 function index()
 {	
 	
  	
  $data = $this->show_pages();
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {

	$this->session->unset_userdata('logged_in');
	session_destroy();
	redirect('home', 'refresh');
 }
  function show_pages()
	{ 
		$this->load->model('servicespages','',TRUE);
		$data ['query'] = $this->servicespages->show_data();
		return $data; 
		//echo"<pre>";print_r($data);die();
		//$this->load->view('home_view', $data);
	}

}

?>