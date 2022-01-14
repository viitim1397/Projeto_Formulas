<?php

    class RetanguleRegister_model extends CI_Model {

    public function create_retangule(float $area)
    {
        $this->db->insert('Retangule', array('area' => $area));
    }

}