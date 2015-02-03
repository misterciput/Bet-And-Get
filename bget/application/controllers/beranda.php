<?php
	class Beranda extends CI_controller {
	function index(){
		
		$this->session->unset_userdata('v_id');
		$this->session->unset_userdata('logged_in');

		$this->load->view('beranda_v');
		}
	
	}
?>
