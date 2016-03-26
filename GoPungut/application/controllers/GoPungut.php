<?php

class GoPungut extends CI_Controller
{
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
		$userChoosen = $this->input->post('signUp');
		if($userChoosen==1)
			$data['user']="Pengelola Sampah";
		else
			if($userChoosen==2)
			$data['user']="Masyarakat";
		else
			if($userChoosen==3)
			$data['user']="Kurir";
		$this->load->view('/GoPungut/LandingPage/SignUpPengelolaSampah',$data);


	}

	public function PilihUserSignIn (){ 
		$this->load->helper('url');
		$data['user']="ko gag muncul";
		$userChoosen = $this->input->post('signIn');
		if($userChoosen==1)
			$data['user']="Pengelola Sampah";
		else
			if($userChoosen==2)
			$data['user']="Masyarakat";
		else
			if($userChoosen==3)
			$data['user']="Kurir";
		$this->load->view('/GoPungut/LandingPage/Login',$data);


	}

	public function LupaPass (){ 
		$this->load->helper('url');
     $this->load->view('/GoPungut/LandingPage/LupaPassword');
	}
	
}