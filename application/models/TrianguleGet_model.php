<?php

    class TrianguleGet_model extends CI_Model {

        public function get_triangules()
        {
            return $this->db->select('*')
                            ->from ('Triangule')
                            ->get->result();
        }

}