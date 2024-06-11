<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function index()
    {
        $data['barang'] = $this->m_barang->tampil_data('tb_barang')->result();

        $this->load->view('users/templates/header');
        $this->load->view('users/index', $data);
        $this->load->view('users/templates/footer');
    }
}