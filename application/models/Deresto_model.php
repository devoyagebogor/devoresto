<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deresto_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Variables

    private function _setDataPost($name, $con)
    {
        return $this->input->post($name, $con);
    }

    private function _getData($_t)
    {
        return $this->db->get($_t)->result_array();
    }

    private function _getData_byConds($tx, $xs, $as)
    {
        return $this->db->get_where($tx, [$xs => $as])->row_array();
    }

    // Projcets
}
