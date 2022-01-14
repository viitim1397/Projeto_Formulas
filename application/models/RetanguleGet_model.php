<?php

    class RetanguleGet_model extends CI_Model {

    public function get_retangules()
    {
        return $this->db->select('*')
                        ->from ('Retangule')
                        ->get->result();
    }

}