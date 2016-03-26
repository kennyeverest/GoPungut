<?php

/**
*
*/
 class PenjualSampahModel extends CI_Model
 {
	 function __construct
	 {
		parent::__construct();
	 }
	
	public function getUsernamePassword()
	{
		$sql= 'SELECT username_penjual, password_penjual FROM penjual_sampah';
		$hasil = $hasil->db->query($sql);
		return $hasil;
	}
	
	public function uploadPenjualanSampah()
	{
		$this->db->insert($data);
		return $this->affected_rows();
	}
 }
?>