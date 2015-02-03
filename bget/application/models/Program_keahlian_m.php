<?php 
class Program_keahlian_m extends CI_Model{
	private $idpk;
	private $namapk;
	
	public function setIdpk($value){
		$this->idpk = $value;
	}
	
	public function setNamapk($value){
		$this->namapk = $value;
	}
	
	public function getIdpk(){
		return $this->idpk;
	}
	
	public function getNamapk(){
		return $this->namapk;
	}
	
	public function view(){
		$query = "SELECT * FROM tbl_pk";
		return $this->db->query($query);
	
	}
	public function add(){
		$query = "INSERT INTO tbl_pk VALUES('$this->idpk','$this->namapk')";
		return $this->db->query($query);
	}
	public function update(){
		$query = "UPDATE tbl_pk SET namapk='$this->namapk' WHERE idpk='$this->idpk'";
		return $this->db->query($query);
	}
	public function delete_all(){
		$query = "DELETE FROM tbl_pk";
		return $this->db->query($query);
	}
	public function delete(){
		$query = "DELETE FROM tbl_pk WHERE idpk='$this->idpk'";
		return $this->db->query($query);
	}
	
}
?>