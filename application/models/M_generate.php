<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_generate extends CI_Model
{
    function getDatagenerate()
    {
        $query = $this->db->get('certificate_assignments');
        return $query->result();
    }

    function insertDatagenerate($data)
    {
        $this->db->insert('certificate_assignments', $data);
    }

    function getDatagenerateDetail($id)
    {
        $this->db->where('assignment_id', $id);
        $query =  $this->db->get('certificate_assignments');
        return $query->row();
    }

    function updateDatagenerate($id, $data)
    {
        $this->db->where('assignment_id', $id);
        $this->db->update('certificate_assignments', $data);
    }

    function hapusGenerate($id)
    {
        $this->db->where('assignment_id', $id);
        $this->db->delete('certificate_assignments');
    }
    

}