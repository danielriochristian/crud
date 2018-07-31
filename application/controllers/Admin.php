<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_mahasiswa');
    $this->load->helper('url');
  }

  function index(){
    $data['tb_mahasiswa'] = $this->M_mahasiswa->tampil_data()->result();
		$this->load->view('Template',$data);
	}

}
