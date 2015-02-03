<?php
	class vendor extends CI_controller{
	public function __construct(){
		   parent::__construct();
		   
		   //model
		   
		   $this->load->model("vendor_m");
		}
		public function index(){
		$vid = $this->session->userdata('v_id');
			$this->vendor_m->set_vendor_id($vid);
			$this->load->view("vendor_v");
		}
		public function login(){
			
			$vendor_id = $this->input->post('vendor_id');
			$vendor_pass = $this->input->post('vendor_pass');
			$this->vendor_m->set_vendor_id($vendor_id);
			$this->vendor_m->set_vendor_pass($vendor_pass);
			
			$result = $this->vendor_m->vendor_login();
			
			if($result->num_rows()){
			$vendor = array(
                   'v_id'  => $vendor_id,
                   'logged_in' => TRUE
				);
			$this->session->set_userdata($vendor);
			$this->load->view("vendor_v");
			} else {
				$this->load->view("beranda_v");
			}
			
			$this->vendor_m->view();
		}
		public function edit(){
			
			$v_name = $this->input->post('v_name_e');
			$v_pass = $this->input->post('v_pass_e');
			$v_birthDate = $this->input->post('v_birthDate_e');
			$v_email = $this->input->post('v_email_e');
			$v_address = $this->input->post('v_address_e');
			$v_phone = $this->input->post('v_phone_e');
			
			$this->vendor_m->set_vendor_id($this->session->userdata('v_id'));
			$this->vendor_m->set_vendor_name($v_name);
			$this->vendor_m->set_vendor_pass($v_pass);
			$this->vendor_m->set_vendor_birthDate($v_birthDate);
			$this->vendor_m->set_vendor_email($v_email);
			$this->vendor_m->set_vendor_address($v_address);
			$this->vendor_m->set_vendor_phone($v_phone);
			$this->vendor_m->v_edit();
			$this->load->model("vendor_m");
			redirect(base_url().'vendor');
		}
	}
	
?>