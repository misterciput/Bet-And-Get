<?php
		class vendor_m extends CI_Model{
			private $vendor_id;
			private $vendor_pass;
			private $item_id;
			private $vendor_name;
			private $vendor_birthDate;
			private $vendor_email;
			private $vendor_address;
			private $vendor_phone;
			
			public function set_vendor_id($id){
				$this->vendor_id = $id;
			}
			
			public function set_vendor_pass($pass){
				$this->vendor_pass = $pass;
			}
			public function set_item_id($id){
				$this->item_id=$id;
			}
			public function set_vendor_name($value){
				$this->vendor_name = $value;
			}
			public function set_vendor_birthDate($value){
				$this->vendor_birthDate = $value;
			}
			public function set_vendor_email($value){
				$this->vendor_email = $value;
			}
			public function set_vendor_address($value){
				$this->vendor_address = $value;
			}
			public function set_vendor_phone($value){
				$this->vendor_phone = $value;
			}
			public function vendor_login(){
				$query = "SELECT v_id, v_pass FROM vendor WHERE v_id = '$this->vendor_id' AND v_pass = '$this->vendor_pass'";
				return $this->db->query($query);
			}
			public function view(){
				$query = "SELECT * FROM vendor WHERE v_id = '$this->vendor_id'";
				return $this->db->query($query);
			}
			public function view_item(){
				$now = date('Y/m/d');
				$query = "SELECT * FROM item WHERE v_id='$this->vendor_id' AND '$now' BETWEEN i_startDate AND i_finishDate";
				return $this->db->query($query);
			}
			public function view_item_i(){
				$query = "SELECT * FROM `betting` RIGHT JOIN item ON betting.i_id = item.i_id INNER JOIN vendor ON item.v_id = vendor.v_id
						WHERE vendor.v_id='$this->vendor_id' AND item.i_id='$this->item_id' ORDER BY betting.b_price DESC";
				return $this->db->query($query);
			}
			public function v_edit(){
				$query = "UPDATE vendor SET v_pass='$this->vendor_pass', v_fullName='$this->vendor_name', v_birthDate='$this->vendor_birthDate', v_email='$this->vendor_email', v_address='$this->vendor_address', v_phone='$this->vendor_phone'
						WHERE v_id='$this->vendor_id'";
				return $this->db->query($query);
			}
		}
?>