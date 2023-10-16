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

    function get_siswa_by_wali_not_rapot($id_guru)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('guru', 'guru.id_guru = kelas.id_guru');
        $this->db->join('rapot', 'rapot.id_siswa != siswa.id_siswa');
        $this->db->where('kelas.id_guru', $id_guru);
        $query = $this->db->get();
        return $query;
    }

    function get_siswa_by_wali_with_rapot($id_guru)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('guru', 'guru.id_guru = kelas.id_guru');
        $this->db->join('rapot', 'rapot.id_siswa = siswa.id_siswa');
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

    function get_kelas($id_guru)
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->where('id_guru', $id_guru);
        $query = $this->db->get();
        return $query;
    }

    function cek_rapot_masuk()
    {

        $this->db->select('*');
        $this->db->from('rapot');
        $this->db->join('siswa', 'siswa.id_siswa = rapot.id_siswa');
        $this->db->where_not_in('rapot.id_siswa', '1');
        $query = $this->db->get();
        return $query;
    }

    function get_detail_rapot($id_siswa)
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
}
