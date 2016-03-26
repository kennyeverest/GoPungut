<?php

/**
*
*/
 class PenjualModel extends CI_Model
 {
	 function __construct()
	 {
		parent::__construct();
	 }

	public function getUsernamePassword()
	{
		$sql= 'SELECT username_penjual, password_penjual FROM Penjual_Sampah';
		$hasil = $this->db->query($sql);
		return $hasil;
	}

	public function daftarPenjual($data)
	{
		$this->db->insert('Penjual_Sampah',$data);
		return $this->db->affected_rows();
	}
 }
