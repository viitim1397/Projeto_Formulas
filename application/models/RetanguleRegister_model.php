<?php

    class RetanguleRegister_model extends CI_Model {

    public function create_retangule(float $area)
    {
        $this->load->database();
        $query = $this->db->insert('Retangule', array('area' => $area));

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