<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }
    function index()
    {
        $data = [
            'title' => 'Halaman Home Admin'
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/home', $data);
        $this->load->view('admin/footer', $data);
    }
    function list_siswa()
    {
        $data = [
            'title' => 'Halaman Home Admin',
            'siswa' => $this->Admin_model->allsiswa()->result()
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/list_siswa', $data);
        $this->load->view('admin/footer', $data);
    }
    function add_siswa()
    {
        $data = [
            'title' => 'Halaman Home Admin',
            'siswa' => $this->Admin_model->allsiswa()->result()
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/add_siswa', $data);
        $this->load->view('admin/footer', $data);
    }
}
