<?php 
class Pengguna_m extends CI_Model{
	private $username;
	private $password;
	
	public function setUsername($user){
		$this->username = $user;
	}
	
	
	public function setPassword($pass){
		$this->password = $pass;
	}
	
	
	public function view_by_user_pass(){
		$query = "SELECT username, password 
				FROM tbl_pengguna 
				WHERE username= '$this->username' 
				AND password = '$this->password'";
		
		return $this->db->query($query);
	}
	
}
?>