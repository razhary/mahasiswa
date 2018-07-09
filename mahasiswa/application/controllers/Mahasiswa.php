<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('ModelMahasiswa'); // Load ModelMahasiswa ke controller ini
  }
  
  public function index(){
    $data["mahasiswa"] = $this->ModelMahasiswa->view();
    $this->load->view('mahasiswa/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->ModelMahasiswa->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->ModelMahasiswa->save(); // Panggil fungsi save() yang ada di ModelMahasiswa.php
        redirect('mahasiswa');
      }
    }
    
    $this->load->view('mahasiswa/form_tambah');
  }
  
  public function ubah($npm){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->ModelMahasiswa->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->ModelMahasiswa->edit($npm); // Panggil fungsi edit() yang ada di ModelMahasiswa.php
        redirect('mahasiswa');
      }
    }
    
    $data['mahasiswa'] = $this->ModelMahasiswa->view_by($npm);
    $this->load->view('mahasiswa/form_ubah', $data);
  }
  
  public function hapus($npm){
    $this->ModelMahasiswa->delete($npm); // Panggil fungsi delete() yang ada di ModelMahasiswa.php
    redirect('mahasiswa');
  }

}