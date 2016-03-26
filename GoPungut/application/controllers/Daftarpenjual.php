<?php


/**
 *
 */
class DaftarPenjual extends CI_Controller
{

  function __construct()
  {
    # code...
    parent::__construct();
  }
  public function signUp()
  {
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $nama = $this->input->post('nama');
    //$confirmPassword = $this->input->post('confirmPassword');
    $alamat = $this->input->post('alamat');
    $kontak = $this->input->post('kontak');

    $data['id_penjual'] = NULL;
    $data['nama_penjual'] = $nama;
    $data['username_penjual'] = $username;
    $data['password_penjual'] = $password;
    $data['alamat_penjual'] = $alamat;
  //  $data['email_pengelola'] = $email;
    $data['noHp_penjual'] = $kontak;
    $cek = $this->insertToPenjual($data);
    if($cek>0){
      echo "Penjual berhasil di daftarkan";
    }
    else {
      # code...
      echo "Gagal";
    }
  }
  private function insertToPenjual($data){
    $this->load->model('Penjualmodel');
    $isSuccess = $this->Penjualmodel->daftarPenjual($data);
    return $isSuccess;
  }

}

 ?>
