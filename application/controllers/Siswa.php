<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata('nis')) redirect('auth/siswa');
    }
    function index()
    {
        $data = [
            'title' => 'Halaman Home Siswa'
        ];
        $this->load->view('siswa/header', $data);
        $this->load->view('siswa/sidebar', $data);
        $this->load->view('siswa/home', $data);
        $this->load->view('siswa/footer', $data);
    }
}
