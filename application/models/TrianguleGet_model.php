<?php

    class TrianguleGet_model extends CI_Model {

    public function get_triangules()
    {
        $this->db->select('* from Triangule');
    }

}