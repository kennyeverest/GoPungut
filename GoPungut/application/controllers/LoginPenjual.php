<?php
/**
 *
 */
class LoginPenjual extends CI_Controller
{

  function __construct()
  {
    # code...
    parent::__construct();
  }
  public function login ()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $data['username']= $username;
    $data['password']= $password;
    $isValid = $this->validasi($data);
    if($isValid)
    echo "Login berhasil";
    else {
      # code...
      echo "Login gagal";
    }
  }

  private function validasi ($data)
  {
    $username = $data['username'];
    $password = $data['password'];
    $this->load->model('Penjualmodel');
    $hasil=$this->Penjualmodel->getUsernamePassword();
    foreach ($hasil->result_array() as $value){
      if(strcmp($username,$value['username_penjual'])==0&&strcmp($password,$value['password_penjual'])==0)
      return true;
    }
    return false;
  }
}

 ?>
