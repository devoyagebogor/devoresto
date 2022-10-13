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

    public function get_header_parallax()
    {
        $this->db->select('*');
        $this->db->where('id', 1);
        $this->db->from('parallax_header_deresto');
        return $this->db->get()->result();
    }

    public function get_par_promo()
    {
        $this->db->select('*');
        $this->db->where('id', 2);
        $this->db->from('parallax_header_deresto');
        return $this->db->get()->result();
    }

    public function showPar_gal()
    {
        $this->db->select('*');
        $this->db->where('id', 3);
        $this->db->from('parallax_header_deresto');
        return $this->db->get()->result();
    }

    public function showPar_menu()
    {
        $this->db->select('*');
        $this->db->where('id', 4);
        $this->db->from('parallax_header_deresto');
        return $this->db->get()->result();
    }

    public function get_content_parallax()
    {
        $this->db->select('*');
        $this->db->where('id', 1);
        $this->db->from('parallax_content_deresto');
        return $this->db->get()->result();
    }

    public function get_footer_parallax()
    {
        $this->db->select('*');
        $this->db->where('id', 1);
        $this->db->from('parallax_footer_deresto');
        return $this->db->get()->result();
    }

    public function show_gallery()
    {
        return $this->db->get('gallery_deresto')->result();
    }
}
