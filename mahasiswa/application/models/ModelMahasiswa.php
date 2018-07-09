<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelMahasiswa extends CI_Model {
  // Fungsi untuk menampilkan semua data siswa
  public function view(){
    return $this->db->get('mahasiswa')->result();
  }
  
  // Fungsi untuk menampilkan data siswa berdasarkan NPM-nya
  public function view_by($npm){
    $this->db->where('npm', $npm);
    return $this->db->get('mahasiswa')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NPM tidak harus divalidasi
    // Jadi NPM divalidasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('input_npm', 'npm', 'required|numeric|max_length[8]');
      $this->form_validation->set_rules('input_nama', 'nama', 'required|max_length[20]');
      $this->form_validation->set_rules('input_jurusan', 'jurusan', 'required|max_length[30]');
      
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "npm" => $this->input->post('input_npm'),
      "nama" => $this->input->post('input_nama'),
      "jurusan" => $this->input->post('input_jurusan'),
    );
    
    $this->db->insert('mahasiswa', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($npm){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "jurusan" => $this->input->post('input_jurusan'),
    );
    
    $this->db->where('npm', $npm);
    $this->db->update('mahasiswa', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($npm){
    $this->db->where('npm', $npm);
    $this->db->delete('mahasiswa'); // Untuk mengeksekusi perintah delete data
  }
  

}