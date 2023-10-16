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
        $this->load->view('guru/siswa_perkelas', $data);
        $this->load->view('guru/footer', $data);
    }

    function rapot()
    {
        $id_guru =  $this->session->userdata('id_guru');
        $data = [
            'title' => 'Halaman Jadwal Mengajar',
            'siswa' => $this->Guru_model->get_siswa_by_wali_not_rapot($id_guru)->result(),
            'siswa_rapot' => $this->Guru_model->get_siswa_by_wali_with_rapot($id_guru)->result(),
            'guru' => $this->Guru_model->get_guru($id_guru)->row_array(),
            'jumlah_siswa' => $this->Guru_model->jumlah_siswa_by_wali($id_guru),
            'cek_rapot' => $this->Guru_model->cek_rapot_masuk()->row_array()
        ];

        $this->load->view('guru/header', $data);
        $this->load->view('guru/sidebar', $data);
        $this->load->view('guru/rapot', $data);
        $this->load->view('guru/footer', $data);
    }

    function tambah_rapot($id)
    {
        $id_guru =  $this->session->userdata('id_guru');
        $data = [
            'title' => 'Halaman Tambah Rapot',
            'siswa' => $this->Guru_model->get_siswa_by_wali_not_rapot($id_guru)->result(),
            'guru' => $this->Guru_model->get_guru($id_guru)->row_array(),
            'jumlah_siswa' => $this->Guru_model->jumlah_siswa_by_wali($id_guru),
            'kelas' => $this->Guru_model->get_kelas($id_guru)->row_array(),

        ];


        $this->load->view('guru/header', $data);
        $this->load->view('guru/sidebar', $data);
        $this->load->view('guru/tambah_rapot', $data);
        $this->load->view('guru/footer', $data);
    }

    function add_rapot()
    {
        $id_siswa = $this->input->post('id_siswa');
        $siswa = $this->db->get_where('siswa', ['id_siswa' => $id_siswa])->row_array();

        $id_guru = $this->session->userdata('id_guru');
        $id_kelas = $this->input->post('id_kelas');


        $tanggal = date("Y-m-d");

        $config['upload_path'] = './rapot/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '10000'; // Ukuran file dalam KB
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('pesanGagal', '<div class="alert alert-danger" role="alert">
                <strong style="color:white">File Gagal di upload</strong>
            </div>');
            redirect('guru');
        } else {

            $upload_data = $this->upload->data();
            $file_name = $siswa['nama_lengkap'] . '_' . $siswa['nis'] . '.pdf';
            $old_file_path = $upload_data['full_path']; // Path lama file
            $new_file_path = $upload_data['file_path'] . $file_name; // Path baru file

            if (!rename($old_file_path, $new_file_path)) {
                // Tindakan jika gagal mengubah nama file
                // Misalnya: 
                echo "Gagal mengubah nama file.";
            }

            $data = [
                'id_guru' => $id_guru,
                'id_kelas' => $id_kelas,
                'id_siswa' => $id_siswa,
                'tanggal' => $tanggal,
                'file' => $file_name,
                'keterangan' => $this->input->post('keterangan')
            ];
            $cek_rapot = $this->db->insert('rapot', $data);
            if ($cek_rapot) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                <strong>Berhasil Tambah Rapot !</strong>
            </div>');
            }
            redirect('guru/rapot');
        }
    }

    function detail_rapot($id_siswa)
    {
        $id_guru =  $this->session->userdata('id_guru');
        $data = [
            'title' => 'Halaman Tambah Rapot',
            'siswa' => $this->Guru_model->get_siswa_by_wali_not_rapot($id_guru)->result(),
            'guru' => $this->Guru_model->get_guru($id_guru)->row_array(),
            'jumlah_siswa' => $this->Guru_model->jumlah_siswa_by_wali($id_guru),
            'kelas' => $this->Guru_model->get_kelas($id_guru)->row_array(),
            'rapot' => $this->Guru_model->get_detail_rapot($id_siswa)->row()

        ];


        $this->load->view('guru/header', $data);
        $this->load->view('guru/sidebar', $data);
        $this->load->view('guru/detail_rapot', $data);
        $this->load->view('guru/footer', $data);
    }
}
