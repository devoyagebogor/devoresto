<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deresto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Deresto_model', 'deresto');
        $this->load->helper('system_request_helper');
        $this->load->helper('deresto_helper');
    }

    public function index()
    {
        $data['title'] = 'Deresto Coffe & Kitchen';
        $this->load->view('templates/deresto/header', $data);
        $this->load->view('deresto/index', $data);
        $this->load->view('templates/deresto/footer');
    }

    public function list_promo()
    {
        $data['title'] = 'Deresto Coffe & Kitchen | Promo!';
        $this->load->view('templates/deresto/header', $data);
        $this->load->view('deresto/promo', $data);
        $this->load->view('templates/deresto/footer');
    }

    public function list_menu()
    {
        $data['title'] = 'Deresto Coffe & Kitchen | Menu';
        $this->load->view('templates/deresto/header', $data);
        $this->load->view('deresto/menu_list', $data);
        $this->load->view('templates/deresto/footer');
    }

    public function collections()
    {
        $data['title'] = 'Deresto Coffe & Kitchen | Collections';
        $this->load->view('templates/deresto/header', $data);
        $this->load->view('deresto/gallery', $data);
        $this->load->view('templates/deresto/footer');
    }
}
