<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Siswa_model extends CI_Model
{
    function get_jadwal_saya($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('mata_pelajaran');
        $this->db->join('kelas', 'kelas.id_kelas = mata_pelajaran.id_kelas');
        $this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
        $this->db->join('ruangan', 'ruangan.id_ruangan = mata_pelajaran.id_ruangan');
        $this->db->join('guru', 'guru.id_guru = mata_pelajaran.id_guru');
        $this->db->where('siswa.id_siswa', $id_siswa);
        $query = $this->db->get();
        return $query;
    }

    function get_rapot($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('guru', 'guru.id_guru = kelas.id_guru');
        $this->db->join('rapot', 'rapot.id_siswa = siswa.id_siswa');
        $this->db->where('rapot.id_siswa', $id_siswa);
        $query = $this->db->get();
        return $query;
    }

    function getPelajaran($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('mata_pelajaran');
        $this->db->join('kelas', 'kelas.id_kelas = mata_pelajaran.id_kelas');
        $this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
        $this->db->join('guru', 'guru.id_guru = kelas.id_guru');
        $this->db->where('siswa.id_siswa', $id_siswa);
        $query = $this->db->get();
        return $query;
    }
}
