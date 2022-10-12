<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Admin to Develope the Website
 */
class Resto_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function show_promo()
    {
        $this->db->select('*');
        $this->db->from('menu_deresto');
        $this->db->join('type_menu', 'type_menu.id_type = menu_deresto.menu_type');
        $this->db->where('id_type', 7);
        $query = $this->db->get();
        return $query->result();
    }

    public function show_allMenu()
    {
        $this->db->select('*');
        $this->db->from('menu_deresto');
        $this->db->join('type_menu', 'type_menu.id_type = menu_deresto.menu_type');
        $this->db->where('id_type !=', 7);
        $query = $this->db->get();
        return $query->result();
    }
}
