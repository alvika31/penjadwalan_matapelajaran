<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    function allsiswa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $query = $this->db->get();

        return $query;
    }
}
