<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Guru_model extends CI_Model
{
    function get_mengajar($id_guru)
    {
        $this->db->select('*');
        $this->db->from('mata_pelajaran');
        $this->db->join('guru', 'guru.id_guru = mata_pelajaran.id_guru');
        $this->db->join('kelas', 'kelas.id_kelas = mata_pelajaran.id_kelas');
        $this->db->join('ruangan', 'ruangan.id_ruangan = mata_pelajaran.id_ruangan');
        $this->db->where('mata_pelajaran.id_guru', $id_guru);
        $query = $this->db->get();
        return $query;
    }

    function get_siswa_by_wali($id_guru)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('guru', 'guru.id_guru = kelas.id_guru');
        $this->db->where('kelas.id_guru', $id_guru);
        $query = $this->db->get();
        return $query;
    }

    function get_guru($id_guru)
    {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->join('kelas', 'kelas.id_guru = guru.id_guru');
        $this->db->where('guru.id_guru', $id_guru);
        $query = $this->db->get();
        return $query;
    }

    function jumlah_siswa_by_wali($id_guru)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('guru', 'guru.id_guru = kelas.id_guru');
        $this->db->where('kelas.id_guru', $id_guru);
        $query = $this->db->get();
        $total_rows = $query->num_rows();
        return $total_rows;
    }
}
