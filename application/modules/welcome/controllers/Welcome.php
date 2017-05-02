<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    

    public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->database();
    	$this->load->library('session');
    }

	public function index()
	{
		$data['list']=$this->db->order_by('row_order','ASC')
		->get('php_interview_questions')
		->result_array();

		$this->load->view('welcome_message',$data);
	}

	public function save_order(){
	
		if($this->input->is_ajax_request()){

			$row_order_array = explode(",", $this->input->post('newsort'));

			for($x=0; $x<count($row_order_array);$x++){

				$data = array('row_order'=>$x);

				$this->db->where('php_interview_questions.id',$row_order_array[$x]);
				$this->db->update('php_interview_questions',$data);
			}
			$this->session->set_flashdata("success","<div id='prompt' class='alert alert-success'>New Arrangement has been saved</div>");
			
		}
	}



}
