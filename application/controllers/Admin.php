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
        if (!$this->session->userdata('username')) redirect('auth/admin');
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
            'siswa' => $this->Admin_model->allsiswa()->result(),
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
            'siswa' => $this->Admin_model->allsiswa()->result(),
            'kelas' => $this->Admin_model->allkelas()->result()
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/add_siswa', $data);
        $this->load->view('admin/footer', $data);
    }

    function do_add_siswa()
    {
        if ($this->input->post('save')) {
            $data = [
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nis' => $this->input->post('nis'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('nis')),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'id_kelas' => $this->input->post('id_kelas')
            ];
            $this->Admin_model->insertSiswa($data);
            $this->session->set_flashdata('success', 'Siswa Berhasil ditambahkan');
            redirect('admin/add_siswa');
        }
    }

    function delete_siswa()
    {
        $id = $this->input->post('id'); //get data from ajax(post)
        $del = $this->Admin_model->delete_siswa($id);
    }

    function list_kelas()
    {
        $data = [
            'title' => 'Halaman List Kelas',
            'kelas' => $this->Admin_model->allkelas()->result(),
            'guru' => $this->Admin_model->getWaliKelas()->result()
        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/list_kelas', $data);
        $this->load->view('admin/footer', $data);
    }

    function add_kelas()
    {
        if ($this->input->post('save')) {
            $data = [
                'nama_kelas' => $this->input->post('nama_kelas'),
                'id_guru' => $this->input->post('id_guru'),
            ];

            $this->Admin_model->addKelas($data);
            $this->session->set_flashdata('success', 'Siswa Berhasil ditambahkan');
            redirect('admin/list_kelas');
        }
    }

    function delete_kelas()
    {
        $id_kelas = $this->input->post('id_kelas'); //get data from ajax(post)
        $del = $this->Admin_model->delete_kelas($id_kelas);
    }

    function edit_kelas($id)
    {
        $data = [

            'title' => 'Halaman Edit User',
            'kelas' => $this->Admin_model->getIdKelas($id),
            'guru' => $this->Admin_model->getWaliKelas()->result()
        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/edit_kelas', $data);
        $this->load->view('admin/footer', $data);
    }

    function update_kelas()
    {
        $data = [

            'nama_kelas' => $this->input->post('nama_kelas'),
            'id_guru' => $this->input->post('id_guru'),

        ];

        $id = $this->input->post('id_kelas');
        $result = $this->Admin_model->update_kelas($data, $id);

        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'kelas Berhasil diedit');
            redirect('admin/list_kelas');
        } else {
            $this->session->set_flashdata('error', 'kelas Gagal diedit');
            redirect('admin/list_kelas');
        }
    }

    function edit_siswa($id_siswa)
    {
        $data = [

            'title' => 'Halaman Edit Siswa',
            'siswa' => $this->Admin_model->getIdSiswa($id_siswa),
            'kelas' => $this->Admin_model->allkelas()->result()
        ];


        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/edit_siswa', $data);
        $this->load->view('admin/footer', $data);
    }

    function update_siswa()
    {
        $data = [

            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nis' => $this->input->post('nis'),
            'email' => $this->input->post('email'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'id_kelas' => $this->input->post('id_kelas'),

        ];

        $id_siswa = $this->input->post('id_siswa');
        $result = $this->Admin_model->update_siswa($data, $id_siswa);
        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'Siswa Berhasil diedit');
            redirect('admin/list_siswa');
        } else {
            $this->session->set_flashdata('error', 'Siswa Gagal diedit');
            redirect('admin/list_siswa');
        }
    }
    function list_guru()
    {
        $data = [
            'title' => 'Halaman List Guru',
            'guru' => $this->Admin_model->allguru()->result()
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/list_guru', $data);
        $this->load->view('admin/footer', $data);
    }

    function add_guru()
    {
        $data = [
            'title' => 'Halaman Tambah Guru'
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/add_guru', $data);
        $this->load->view('admin/footer', $data);
    }

    function do_add_guru()
    {
        if ($this->input->post('save')) {
            $data = [
                'nama_guru' => $this->input->post('nama_guru'),
                'nip' => $this->input->post('nip'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('nip')),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'jabatan' => $this->input->post('jabatan')
            ];
            $this->Admin_model->insertGuru($data);
            $this->session->set_flashdata('success', 'Siswa Berhasil ditambahkan');
            redirect('admin/list_guru');
        }
    }

    function edit_guru($id_guru)
    {
        $data = [
            'title' => 'Halaman Edit Guru',
            'guru' => $this->Admin_model->getIdGuru($id_guru),
        ];



        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/edit_guru', $data);
        $this->load->view('admin/footer', $data);
    }

    function updateGuru()
    {
        $data = [

            'nama_guru' => $this->input->post('nama_guru'),
            'nip' => $this->input->post('nip'),
            'email' => $this->input->post('email'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'jabatan' => $this->input->post('jabatan'),

        ];

        $id_guru = $this->input->post('id_guru');
        $result = $this->Admin_model->update_guru($data, $id_guru);
        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'Siswa Berhasil diedit');
            redirect('admin/list_guru');
        } else {
            $this->session->set_flashdata('error', 'Siswa Gagal diedit');
            redirect('admin/list_guru');
        }
    }

    function delete_guru()
    {
        $id_guru = $this->input->post('id_guru'); //get data from ajax(post)
        $del = $this->Admin_model->delete_guru($id_guru);
    }

    function list_ruangan()
    {
        $data = [
            'title' => 'Halaman List Guru',
            'ruangan' => $this->Admin_model->allruangan()->result()
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/list_ruangan', $data);
        $this->load->view('admin/footer', $data);
    }

    function add_ruangan()
    {
        if ($this->input->post('save')) {
            $data = [
                'kode_ruangan' => $this->input->post('kode_ruangan'),
                'nama_ruangan' => $this->input->post('nama_ruangan'),

            ];
            $this->Admin_model->addRuangan($data);
            $this->session->set_flashdata('success', 'Siswa Berhasil ditambahkan');
            redirect('admin/list_ruangan');
        }
    }

    function delete_ruangan()
    {
        $id_ruangan = $this->input->post('id_ruangan'); //get data from ajax(post)
        $del = $this->Admin_model->delete_ruangan($id_ruangan);
    }

    function edit_ruangan($id_ruangan)
    {
        $data = [
            'title' => 'Halaman Edit Ruangan',
            'ruangan' => $this->Admin_model->getIdRuangan($id_ruangan),
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/edit_ruangan', $data);
        $this->load->view('admin/footer', $data);
    }

    function update_ruangan()
    {
        $data = [

            'kode_ruangan' => $this->input->post('kode_ruangan'),
            'nama_ruangan' => $this->input->post('nama_ruangan'),


        ];

        $id_ruangan = $this->input->post('id_ruangan');
        $result = $this->Admin_model->update_ruangan($data, $id_ruangan);
        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'Siswa Berhasil diedit');
            redirect('admin/list_ruangan');
        } else {
            $this->session->set_flashdata('error', 'Siswa Gagal diedit');
            redirect('admin/list_ruangan');
        }
    }

    function list_jadwal_pelajaran()
    {
        $data = [
            'title' => 'Halaman List Jawal Pelajaran',
            'jadwal' => $this->Admin_model->alljadwal()->result()
        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/list_jadwal_pelajaran', $data);
        $this->load->view('admin/footer', $data);
    }

    function add_jadwal_pelajaran()
    {
        $data = [
            'title' => 'Halaman Tambah Jadwal Pelajaran',
            'kelas' => $this->Admin_model->allkelas()->result(),
            'ruangan' => $this->Admin_model->allruangan()->result(),
            'guru' => $this->Admin_model->allguru()->result()
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/add_jadwal_pelajaran', $data);
        $this->load->view('admin/footer', $data);
    }

    function do_add_jadwal_pelajaran()
    {
        if ($this->input->post('save')) {
            $data = [
                'nama_pelajaran' => $this->input->post('nama_pelajaran'),
                'jam_awal' => $this->input->post('jam_awal'),
                'jam_selesai' => $this->input->post('jam_selesai'),
                'hari' => $this->input->post('hari'),
                'id_kelas' => $this->input->post('id_kelas'),
                'id_ruangan' => $this->input->post('id_ruangan'),
                'id_guru' => $this->input->post('id_guru'),

            ];
            $this->Admin_model->addJadwalPelajaran($data);
            $this->session->set_flashdata('success', 'Siswa Berhasil ditambahkan');
            redirect('admin/list_jadwal_pelajaran');
        }
    }

    function edit_jadwal_pelajaran($id_mapel)
    {
        $data = [
            'title' => 'Halaman Edit Ruangan',
            'jadwal' => $this->Admin_model->getIdJadwalPelajaran($id_mapel),
            'kelas' => $this->Admin_model->allkelas()->result(),
            'ruangan' => $this->Admin_model->allruangan()->result(),
            'guru' => $this->Admin_model->allguru()->result()
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/edit_jadwal_pelajaran', $data);
        $this->load->view('admin/footer', $data);
    }

    function update_jadwal_pelajaran()
    {
        $data = [

            'nama_pelajaran' => $this->input->post('nama_pelajaran'),
            'jam_awal' => $this->input->post('jam_awal'),
            'jam_selesai' => $this->input->post('jam_selesai'),
            'hari' => $this->input->post('hari'),
            'id_kelas' => $this->input->post('id_kelas'),
            'id_ruangan' => $this->input->post('id_ruangan'),
            'id_guru' => $this->input->post('id_guru'),
        ];

        $id_mapel = $this->input->post('id_mapel');
        $result = $this->Admin_model->update_jadwalPelajaran($data, $id_mapel);
        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'Siswa Berhasil diedit');
            redirect('admin/list_jadwal_pelajaran');
        } else {
            $this->session->set_flashdata('error', 'Siswa Gagal diedit');
            redirect('admin/list_jadwal_pelajaran');
        }
    }

    function delete_jadwal_pelajaran()
    {
        $id_mapel = $this->input->post('id_mapel'); //get data from ajax(post)
        $del = $this->Admin_model->delete_jadwal_pelajaran($id_mapel);
    }

    function my_profile()
    {
        $id =  $this->session->userdata('id');
        $data = [
            'title' => 'Halaman My Profile',
            'profile' => $this->Admin_model->getIdProfile($id)
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/my_profile', $data);
        $this->load->view('admin/footer', $data);
    }

    function updateMyProfile()
    {

        $data = [
            'nama_admin' => $this->input->post('nama_admin'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
        ];
        $id = $this->input->post('id');
        $result = $this->Admin_model->update_myprofile($data, $id);
        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'Siswa Berhasil diedit');
            redirect('admin/my_profile');
        } else {
            $this->session->set_flashdata('error', 'Siswa Gagal diedit');
            redirect('admin/my_profile');
        }
    }

    function updateMyPassword()
    {
        $data = [
            'password' => md5($this->input->post('password')),
        ];
        $id = $this->input->post('id');
        $result = $this->Admin_model->update_myPassword($data, $id);
        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'Siswa Berhasil diedit');
            redirect('admin/my_profile');
        } else {
            $this->session->set_flashdata('error', 'Siswa Gagal diedit');
            redirect('admin/my_profile');
        }
    }

    function detail_kelas($id_kelas)
    {
        $data = [
            'title' => 'Halaman Detail Kelas',
            'detail_kelas' => $this->Admin_model->detailKelas($id_kelas)->result(),
            'kelas' => $this->Admin_model->namaKelas($id_kelas),
            'jumlah_kelas'  => $this->Admin_model->jumlah_kelas_siswa($id_kelas),
        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/detail_kelas', $data);
        $this->load->view('admin/footer', $data);
    }
}
