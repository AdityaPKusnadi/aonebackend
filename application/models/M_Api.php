<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Api extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }

    public function getDataById($table,$id)
    {
        return $this->db->get_where($table, array('id' => $id))->result();
    }

}
