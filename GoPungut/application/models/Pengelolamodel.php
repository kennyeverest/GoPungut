<?php

/**
*
*/
 class PengelolaModel extends CI_Model
 {
	 function __construct()
	 {
		parent::__construct();
	 }

	public function getUsernamePassword()
	{
		$sql= 'SELECT username_pengelola, password_pengelola FROM pengelola_sampah';
		$hasil = $this->db->query($sql);
		return $hasil;
	}

	public function daftarPengelola($data)
	{
		$this->db->insert('pengelola_sampah',$data);
		return $this->db->affected_rows();

	}
 }
?>
