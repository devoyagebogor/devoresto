<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Devoyage_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_SlideShows()
    {
        return $this->db->get('slideshow')->result();
    }

    public function get_Promos()
    {
        return $this->db->get('promo')->result();
    }

    public function get_Gallerys()
    {
        return $this->db->get('gallerys')->result();
    }

    public function get_Games()
    {
        return $this->db->get('games')->result();
    }

    public function get_Parallax()
    {
        return $this->db->get('parallax')->result();
    }
}
