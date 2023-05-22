<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Auth_model extends CI_Model
{
    public function get_siswa($nis)
    {
        $this->db->where('nis', $nis); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('siswa')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
    public function get_guru($nip)
    {
        $this->db->where('nip', $nip); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('guru')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
    public function get_admin($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('admin')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
}
