<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    function allsiswa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $query = $this->db->get();
        return $query;
    }

    function insertSiswa($data)
    {
        $result = $this->db->insert('siswa', $data);
        return $result;
    }

    function delete_siswa($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->delete('siswa');
    }

    function allkelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $query = $this->db->get();

        return $query;
    }

    function addKelas($data)
    {
        $result = $this->db->insert('kelas', $data);
        return $result;
    }

    function delete_kelas($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('kelas');
    }

    function getIdKelas($id_kelas)
    {
        return $this->db->get_where('kelas', ['id_kelas' => $id_kelas])
            ->row_array();
    }

    function update_kelas($data, $id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('kelas', $data);
    }

    function getIdSiswa($id_siswa)
    {
        return $this->db->get_where('siswa', ['id_siswa' => $id_siswa])
            ->row_array();
    }

    function update_siswa($data, $id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->update('siswa', $data);
    }
    function allguru()
    {
        $this->db->select('*');
        $this->db->from('guru');
        $query = $this->db->get();

        return $query;
    }

    function insertGuru($data)
    {
        $result = $this->db->insert('guru', $data);
        return $result;
    }

    function getIdGuru($id_guru)
    {
        return $this->db->get_where('guru', ['id_guru' => $id_guru])
            ->row_array();
    }

    function update_guru($data, $id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        $this->db->update('guru', $data);
    }

    function delete_guru($id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        $this->db->delete('guru');
    }

    function allruangan()
    {
        $this->db->select('*');
        $this->db->from('ruangan');
        $query = $this->db->get();

        return $query;
    }

    function addRuangan($data)
    {
        $result = $this->db->insert('ruangan', $data);
        return $result;
    }

    function delete_ruangan($id_ruangan)
    {
        $this->db->where('id_ruangan', $id_ruangan);
        $this->db->delete('ruangan');
    }

    function getIdRuangan($id_ruangan)
    {
        return $this->db->get_where('ruangan', ['id_ruangan' => $id_ruangan])
            ->row_array();
    }

    function update_ruangan($data, $id_ruangan)
    {
        $this->db->where('id_ruangan', $id_ruangan);
        $this->db->update('ruangan', $data);
    }

    function alljadwal()
    {
        $this->db->select('*');
        $this->db->from('mata_pelajaran');
        $this->db->join('kelas', 'kelas.id_kelas = mata_pelajaran.id_kelas');
        $this->db->join('ruangan', 'ruangan.id_ruangan = mata_pelajaran.id_ruangan');
        $this->db->join('guru', 'guru.id_guru = mata_pelajaran.id_guru');
        $query = $this->db->get();

        return $query;
    }

    function addJadwalPelajaran($data)
    {
        $result = $this->db->insert('mata_pelajaran', $data);
        return $result;
    }

    function getIdJadwalPelajaran($id_mapel)
    {
        return $this->db->get_where('mata_pelajaran', ['id_mapel' => $id_mapel])
            ->row_array();
    }

    function update_jadwalPelajaran($data, $id_mapel)
    {
        $this->db->where('id_mapel', $id_mapel);
        $this->db->update('mata_pelajaran', $data);
    }

    function delete_jadwal_pelajaran($id_mapel)
    {
        $this->db->where('id_mapel', $id_mapel);
        $this->db->delete('mata_pelajaran');
    }

    function update_myprofile($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('admin', $data);
    }

    function getIdProfile($id)
    {
        return $this->db->get_where('admin', ['id' => $id])
            ->row_array();
    }

    function update_myPassword($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('admin', $data);
    }
}
