<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('servicespages','',TRUE);
   $this->load->library('form_validation');
   $this->load->library('session');
   $this->load->helper('url');
 }

 function index()
 {	
	$this->load->view('insert_page');
 }
 function insert_page()
 {
	  
	  $this->form_validation->set_rules('name', 'Page Name', 'trim|required|xss_clean');
		 if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('insert_page');
   }
   else
{
		$data = array(
		'name' => $this->input->post('name'),
		'meta_keywords' => $this->input->post('keywords'),
		'meta_description' => $this->input->post('description'),
		'content' => $this->input->post('content'),
		'Status' => $this->input->post('status')
		);
		// Transfering Data To Model
		$this->servicespages->form_insert($data);
		// Loading View
		redirect('home', 'refresh');
}
	 }
	 function edit_page()
 { 
 	$id = $this->input->get('id');
	$data = $this->servicespages->get_page($id);
	//echo "<pre>";print_r($data);
	$this->load->view('edit_page', $data);
	 } 
	function delete_page()
 { 
 	$id = $this->input->get('id');
	$this->servicespages->delete_id($id);
	redirect('home', 'refresh');
	 } 
	function update_page()
 {
	  
	  $this->form_validation->set_rules('name', 'Page Name', 'trim|required|xss_clean');
		 if($this->form_validation->run() == FALSE)
	   {
		 $this->edit_page();
	   }
   else
		{
			$data = array(
			'name' => $this->input->post('name'),
			'meta_keywords' => $this->input->post('keywords'),
			'meta_description' => $this->input->post('description'),
			'content' => $this->input->post('content'),
			'Status' => $this->input->post('status')
			);
			$id = $this->input->post('id');
			// Transfering Data To Model
			$this->servicespages->form_update($id,$data);
			// Loading View
			redirect('home', 'refresh');
		}
		}
	}
?>