<?php

/**
*
*/
 class PengelolaSampahModel extends CI_Model
 {
	 function __construct
	 {
		parent::__construct();
	 }
	
	public function getUsernamePassword()
	{
		$sql= 'SELECT username_pengelola, password_pengelola FROM pengelola_sampah';
		$hasil = $hasil->db->query($sql);
		return $hasil;
	}
	
	public function uploadSampahYangDibutuhkan()
	{
		$this->db->insert($data);
		return $this->db->affected_rows();
		
	}
 }
?>