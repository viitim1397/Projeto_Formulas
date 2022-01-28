<?php

    class TrianguleRegister_model extends CI_Model {

    public function create_triangule(float $area)
    {
        $this->load->database();
        $query = $this->db->insert('Triangule', array('area' => $area));

        if($query)
        {
            return true;  
        }
        else
        {
            return false; 
        }
    }

}