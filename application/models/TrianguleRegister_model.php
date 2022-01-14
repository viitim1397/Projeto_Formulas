<?php

    class TrianguleRegister_model extends CI_Model {

    public function create_triangule(float $area)
    {
        $this->db->insert('Triangule', array('area' => $area));
    }

}