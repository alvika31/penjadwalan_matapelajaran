<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }
    function index()
    {
        $data = [
            'title' => 'Halaman Home Guru'
        ];
        $this->load->view('guru/header', $data);
        $this->load->view('guru/sidebar', $data);
        $this->load->view('guru/home', $data);
        $this->load->view('guru/footer', $data);
    }
}
