<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }

    function login_siswa()
    {
        $nis = $this->input->post('nis'); // Ambil isi dari inputan username pada form login
        $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
        $user = $this->Auth_model->get_siswa($nis);

        if (empty($user)) { // Jika hasilnya kosong / user tidak ditemukan
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        <span style="color:white">Username Tidak Ditemukan</span>
       </div>'); // Buat session flashdata
            redirect('auth/siswa'); // Redirect ke halaman login
        } else {
            if ($password == $user->password) { // Jika password yang diinput sama dengan password yang didatabase
                $session = array(
                    'authenticated' => true,
                    'id' => $user->id,
                    'nama_lengkap' => $user->nama_lengkap, // Buat session authenticated dengan value true
                    'nis' => $user->nis,  // Buat session username
                    'email' => $user->email,
                    'password' => $user->password,
                    'jenis_kelamin' => $user->jenis_kelamin,
                    'status' => "login",
                    'is_login' => true // Buat session authenticated
                );
                $this->session->set_userdata($session); // Buat session sesuai $session
                redirect('siswa'); // Redirect ke halaman welcome
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          <span style="color:white">Harap Masukan Password Yang Benar</span>
         </div>'); // Buat session flashdata
                redirect('auth/siswa'); // Redirect ke halaman login
            }
        }
    }

    function login_guru()
    {
        $nip = $this->input->post('nip'); // Ambil isi dari inputan username pada form login
        $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
        $user = $this->Auth_model->get_guru($nip);

        if (empty($user)) { // Jika hasilnya kosong / user tidak ditemukan
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        <span style="color:white">Username Tidak Ditemukan</span>
       </div>'); // Buat session flashdata
            redirect('auth/guru'); // Redirect ke halaman login
        } else {
            if ($password == $user->password) { // Jika password yang diinput sama dengan password yang didatabase
                $session = array(
                    'authenticated' => true,
                    'id' => $user->id,
                    'nama_guru' => $user->nama_guru, // Buat session authenticated dengan value true
                    'nip' => $user->nip,  // Buat session username
                    'email' => $user->email,
                    'password' => $user->password,
                    'jenis_kelamin' => $user->jenis_kelamin,
                    'status' => "login",
                    'is_login' => true // Buat session authenticated
                );
                $this->session->set_userdata($session); // Buat session sesuai $session
                redirect('guru'); // Redirect ke halaman welcome
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          <span style="color:white">Harap Masukan Password Yang Benar</span>
         </div>'); // Buat session flashdata
                redirect('auth/guru'); // Redirect ke halaman login
            }
        }
    }

    function login_admin()
    {
        $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
        $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
        $user = $this->Auth_model->get_admin($username);

        if (empty($user)) { // Jika hasilnya kosong / user tidak ditemukan
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        <span style="color:white">Username Tidak Ditemukan</span>
       </div>'); // Buat session flashdata
            redirect('auth/admin'); // Redirect ke halaman login
        } else {
            if ($password == $user->password) { // Jika password yang diinput sama dengan password yang didatabase
                $session = array(
                    'authenticated' => true,
                    'id' => $user->id,
                    'nama_admin' => $user->nama_admin, // Buat session authenticated dengan value true
                    'username' => $user->username,  // Buat session username
                    'email' => $user->email,
                    'password' => $user->password,
                    'status' => "login",
                    'is_login' => true // Buat session authenticated
                );
                $this->session->set_userdata($session); // Buat session sesuai $session
                redirect('admin'); // Redirect ke halaman welcome
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          <span style="color:white">Harap Masukan Password Yang Benar</span>
         </div>'); // Buat session flashdata
                redirect('auth/admin'); // Redirect ke halaman login
            }
        }
    }
    function siswa()
    {
        $data = [
            'title' => 'Halaman Login Siswa'
        ];
        $this->load->view('auth/login_siswa', $data);
    }
    function guru()
    {
        $data = [
            'title' => 'Halaman Login Guru'
        ];
        $this->load->view('auth/login_guru', $data);
    }
    function admin()
    {
        $data = [
            'title' => 'Halaman Login Admin'
        ];
        $this->load->view('auth/login_admin', $data);
    }
}
