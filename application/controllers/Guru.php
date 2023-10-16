<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->model('Guru_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata('nip')) redirect('auth/guru');
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

    function jadwal_mengajar()
    {
        $id_guru =  $this->session->userdata('id_guru');
        $data = [
            'title' => 'Halaman Jadwal Mengajar',
            'jadwal' => $this->Guru_model->get_mengajar($id_guru)->result(),
        ];

        $this->load->view('guru/header', $data);
        $this->load->view('guru/sidebar', $data);
        $this->load->view('guru/jadwal_mengajar', $data);
        $this->load->view('guru/footer', $data);
    }

    function list_siswa_by_wali()
    {
        $id_guru =  $this->session->userdata('id_guru');
        $data = [
            'title' => 'Halaman Jadwal Mengajar',
            'siswa' => $this->Guru_model->get_siswa_by_wali($id_guru)->result(),
            'guru' => $this->Guru_model->get_guru($id_guru)->row_array(),
            'jumlah_siswa' => $this->Guru_model->jumlah_siswa_by_wali($id_guru)
        ];

        $this->load->view('guru/header', $data);
        $this->load->view('guru/sidebar', $data);
        $this->load->view('guru/rapot', $data);
        $this->load->view('guru/footer', $data);
    }
}
