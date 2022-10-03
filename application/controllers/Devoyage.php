<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Devoyage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Devoyage_model', 'devoyage');
    }


    public function index()
    {
        $Devoyage = new Devoyage_model;

        $data['title']        = 'Devoyage Bogor';
        $data['games']        = $Devoyage->get_Games();
        $data['slides']       = $Devoyage->get_SlideShows();
        $data['gallerys']     = $Devoyage->get_Gallerys();
        $data['parallaxs']    = $Devoyage->get_Parallax();
        $data['promo_result'] = $Devoyage->get_Promos();
        $this->load->view('templates/materialize/header', $data);
        $this->load->view('devoyage/index', $data);
        $this->load->view('templates/materialize/footer');
    }
}
