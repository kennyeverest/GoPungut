<?php

class GoPungut extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('text');
	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->view('/GoPungut/LandingPage/Navbar');
		$this->load->view('/GoPungut/LandingPage/Section');
		$this->load->view('/GoPungut/LandingPage/Footer');

	}

	public function PilihUserSignUp (){
		$this->load->helper('url');

		$data['user']="ko gag muncul";
		//$data['aksi'] = 'Signup_PS/tampil';
		$userChoosen = $this->input->post('signUp');
		if($userChoosen==1){
			$data['aksi'] = 'Daftarpengelola/signUp';
			$data['user']="Pengelola Sampah";
			$this->load->view('/GoPungut/LandingPage/SignUpPengelolaSampah',$data);
		}
		else
			if($userChoosen==2){
				$data['aksi'] = 'Daftarpenjual/signUp';
			$data['user']="Masyarakat";
			$this->load->view('/GoPungut/LandingPage/SignUpPenjualSampah',$data);
		}
		else
			if($userChoosen==3){
				$data['aksi'] = 'DaftarKurir/signUp';
			$data['user']="Kurir";
		$this->load->view('/GoPungut/LandingPage/SignUpKurir',$data);
}

	}

	public function PilihUserSignIn (){
		$this->load->helper('url');
		$data['user']="ko gag muncul";
		$userChoosen = $this->input->post('signIn');
		if($userChoosen==1){
			$data['user']="Pengelola Sampah";
		$data['aksi2'] = 'LoginPengelola/login';
		$this->load->view('/GoPungut/LandingPage/Login',$data);
		}
		else if($userChoosen==2){
				$data['aksi'] = 'LoginPenjual/login';
			$data['user']="Masyarakat";
			$this->load->view('/GoPungut/LandingPage/LoginPenjualSampah',$data);
		}
		else	if($userChoosen==3){
			$data['aksi'] = 'LoginKurir/login';
			$data['user']="Kurir";
			$this->load->view('/GoPungut/LandingPage/LoginKurir',$data);
		}


	}

	public function LupaPass (){
		$this->load->helper('url');
     $this->load->view('/GoPungut/LandingPage/LupaPassword');
	}

}
