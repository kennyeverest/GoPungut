<?php

/**
*
*/
 class KurirModel extends CI_Model
 {
	 function __construct
	 {
		parent::__construct();
	 }
	
	public function getUsernamePassword()
	{
		$sql= 'SELECT username_kurir, password_kurir FROM kurir';
		$hasil = $hasil->db->query($sql);
		return $hasil;
	}
	
	public function listButuhKurir($tanggal)
	{
	$sql= 'SELECT tanggal_request, butuhKurir FROM membeli  WHERE tanggal_request='.$tanggal.'  AND  butuhKurir =’true’';
	}
 }
?>