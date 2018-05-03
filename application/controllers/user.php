<?php
class user extends CI_Controller{
	function __construct(){
		parent :: __construct();
		$this->load->model("model");
	}
	public function form(){
		$this->load->view('form_v');
	}
	public function add(){
		//create data array
		$data = array(
			"username" => $this->input->post
			("username"),
			"password" => $this->input->post
			("password"),
			"fullname" => $this->input->post
			("fullname" ),
			"level" => $this->input->post
			("level")
		);
		
		//check data before save
		var_dump($data);
		//save data for database
		$this->model->add($data);

	
	}
}
