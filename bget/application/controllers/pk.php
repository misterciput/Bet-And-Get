<?php
	class PK extends CI_controller {
		public function __construct(){
		   parent::__construct();
		   
		   //model
		   
		   $this->load->model("program_keahlian_m");
		}
		
	public function index(){
			$this->load->view("program_keahlian_v");
		}
	public function tambah(){
		$namapk = $this->input->post('program_keahlian');
		$idpk	= $this->input->post('id_program_keahlian');
		
		$this->program_keahlian_m->setIdpk($idpk);
		$this->program_keahlian_m->setNamapk($namapk);
		
		$this->program_keahlian_m->add();
		$this->load->view("program_keahlian_v");
	}
	public function delete(){
		$idpk = $this->uri->segment(3);
		$this->program_keahlian_m->setIdpk($idpk);
		$this->program_keahlian_m->delete();
		$this->load->view("program_keahlian_v");
	}
	public function delete_all(){
		$this->program_keahlian_m->delete_all();
		$this->load->view("program_keahlian_v");
		
	}
	public function update(){
		$namapk = $this->input->post('program_keahlian');
		$idpk	= $this->input->post('id_program_keahlian_tmp');
		
		$this->program_keahlian_m->setIdpk($idpk);
		$this->program_keahlian_m->setNamapk($namapk);
		
		$this->program_keahlian_m->update();
		$this->load->view("program_keahlian_v");
	}
	}
?>
