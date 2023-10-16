<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->model('Siswa_model');
        $this->load->model('Guru_model');
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

    function jadwalsaya()
    {
        $id_siswa =  $this->session->userdata('id_siswa');
        $data = [
            'jadwal' => $this->Siswa_model->get_jadwal_saya($id_siswa)->result(),
            'title' => 'Jadwal Saya'
        ];

        $this->load->view('siswa/header', $data);
        $this->load->view('siswa/sidebar', $data);
        $this->load->view('siswa/detail_jadwal', $data);
        $this->load->view('siswa/footer', $data);
    }

    function rapot_saya()
    {
        $id_siswa =  $this->session->userdata('id_siswa');
        $data = [
            'rapot' => $this->Siswa_model->get_rapot($id_siswa)->row(),
            'title' => 'Halaman Tambah Rapot',
            'pelajaran' => $this->Siswa_model->getPelajaran($id_siswa)->row()
        ];

        $this->load->view('siswa/header', $data);
        $this->load->view('siswa/sidebar', $data);
        $this->load->view('siswa/rapot_saya', $data);
        $this->load->view('siswa/footer', $data);
    }
}
