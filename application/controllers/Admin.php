<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


 	function __construct(){
 		parent::__construct();
 		$this->load->model('modelcrud');
 		$this->load->helper('url');

 	}

 	function index(){
 		$data['tb_mahasiswa'] = $this->modelcrud->tampil_data()->result();

    $this->load->view('header');
    $this->load->view('template',$data);

    $this->load->view('menu');$this->load->view('footer');
 	}

 	function tambah(){
 		$this->load->view('v_input');
 	}

 	function tambah_aksi(){
 		$npm = $this->input->post('npm');
 		$nama = $this->input->post('nama');
    $jurusan = $this->input->post('jurusan');
 		$kelas = $this->input->post('kelas');

 		$data = array(
 			'npm' => $npm,
 			'nama' => $nama,
 			'jurusan' => $jurusan,
      'kelas' => $kelas
 			);
 		$this->modelcrud->input_data($data,'tb_mahasiswa');
 		redirect('Admin/index');
 	}

 	function hapus($npm){
 		$where = array('npm' => $npm);
 		$this->modelcrud->hapus_data($where,'tb_mahasiswa');
 		redirect('Admin/index');
 	}

 	function edit($npm){
 	$where = array('npm' => $npm);
 	$data['tb_mahasiswa'] = $this->modelcrud->edit_data($where,'tb_mahasiswa')->result();
 	$this->load->view('v_edit',$data);
 	}

 	function update(){
 	$npm = $this->input->post('npm');
 	$nama = $this->input->post('nama');
  $jurusan = $this->input->post('jurusan');
 	$kelas = $this->input->post('kelas');
 	// $pekerjaan = $this->input->post('pekerjaan');
 	$data = array(
    'npm' => $npm,
    'nama' => $nama,
  	'jurusan' => $jurusan,
  	'kelas' => $kelas
 	);
 	$where = array(
  	'npm' => $npm
 	);
 	$this->modelcrud->update_data($where,$data,'tb_mahasiswa');
 	redirect('Admin/index');
 	}
}
