<?php
/**
 *
 */
class DaftarKurir extends CI_Controller
{

  function __construct()
  {
    # code...
    parent:: __construct();
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

    $data['id_kurir'] = NULL;
    $data['nama_kurir'] = $nama;
    $data['username_kurir'] = $username;
    $data['password_kurir'] = $password;
  //  $data['alamat_kurir'] = $alamat;
  //  $data['email_pengelola'] = $email;
    $data['noHp_kurir'] = $kontak;
    $cek = $this->insertToKurir($data);
    if($cek>0){
      echo "Penjual berhasil di daftarkan";
    }
    else {
      # code...
      echo "Gagal";
    }

  }
  private function insertToKurir($data){
    $this->load->model('Kurirmodel');
    $isSuccess = $this->Kurirmodel->daftarKurir($data);
    return $isSuccess;
  }
  }


 ?>
