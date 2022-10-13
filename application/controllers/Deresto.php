<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deresto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Resto_model', 'deresto');
        $this->load->helper('system_request_helper');
        $this->load->helper('deresto_helper');
    }

    public function index()
    {
        $Header = new Resto_model;
        $data['header'] = $Header->get_header_parallax();
        $data['contents'] = $Header->get_content_parallax();
        $data['footers'] = $Header->get_footer_parallax();
        $data['title'] = 'Deresto Coffe & Kitchen';
        $this->load->view('templates/deresto/header', $data);
        $this->load->view('deresto/index', $data);
        $this->load->view('templates/deresto/footer');
    }

    public function list_promo()
    {
        $promo = new Resto_model;

        $data['footers'] = $promo->get_footer_parallax();
        $data['promos'] = $promo->get_par_promo();
        $data['title'] = 'Deresto Coffe & Kitchen | Promo!';
        $data['get_promo'] = $promo->show_promo();
        $this->load->view('templates/deresto/header', $data);
        $this->load->view('deresto/promo', $data);
        $this->load->view('templates/deresto/footer');
    }

    public function list_menu()
    {
        $menu = new Resto_model;

        $data['footers'] = $menu->get_footer_parallax();
        $data['meus'] = $menu->showPar_menu();
        $data['title'] = 'Deresto Coffe & Kitchen | Menu';
        $data['menus'] = $menu->show_allMenu();
        $this->load->view('templates/deresto/header', $data);
        $this->load->view('deresto/menu_list', $data);
        $this->load->view('templates/deresto/footer');
    }

    public function collections()
    {
        $Gallery = new Resto_model;

        $data['footers'] = $Gallery->get_footer_parallax();
        $data['galpar'] = $Gallery->showPar_gal();
        $data['gallerys'] = $Gallery->show_gallery();
        $data['title'] = 'Deresto Coffe & Kitchen | Collections';
        $this->load->view('templates/deresto/header', $data);
        $this->load->view('deresto/gallery', $data);
        $this->load->view('templates/deresto/footer');
    }
}
