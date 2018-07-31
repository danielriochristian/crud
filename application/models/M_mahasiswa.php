<?php

Class M_mahasiswa extends CI_Model{
  function tampil_data(){
  		return $this->db->get('tb_mahasiswa');
  	}
}
