<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Admin to Develope the Website
 */
class Appsresto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('development_helper');
        $this->load->helper('system_request_helper');
        $this->load->model('Deresto_model', 'deresto');
        _in_System();
    }

    public function debug()
    {
        // enter your code for testing
    }

    public function deresto_web_devs_app()
    {
        $data['title'] = 'Devs Deresto';
        $data['types'] = $this->deresto->get_Types();
        _staticViews($data);
    }

    # Add New Promo or Menu
    public function deresto_web_devs_promoOrMenu()
    {
        _checkPromoOrMenu();
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Devs Deresto';
            $data['types'] = $this->deresto->get_Types();
            _staticViews($data);
            _dataErrors();
        } else {
            $this->deresto->add_ImgPromoOrMenu();
            _dataSuccess();
        }
    }

    # Add New Type for Menu
    public function deresto_web_devs_types()
    {
        _checkTypes();
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Devs Deresto';
            $data['types'] = $this->deresto->get_Types();
            _staticViews($data);
            _dataErrors();
        } else {
            $this->deresto->add_NewTypes();
            _dataSuccess();
        }
    }

    # Add Mew Image
    public function deresto_web_devs_gallery()
    {
        _checkGallery();
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Devs Deresto';
            $data['types'] = $this->deresto->get_Types();
            _staticViews($data);
            _dataErrors();
        } else {
            $this->deresto->add_NewGallery();
            _dataSuccess();
        }
    }

    public function view_menuPromo()
    {
        $data['result_menu'] = $this->deresto->showProject_promoOrMenu();
        $data['types'] = $this->deresto->get_Types();
        $data['title'] = 'Devs Deresto';
        resto()->load->view('templates/app/header_app', $data);
        resto()->load->view('templates/app/sidebar_app');
        resto()->load->view('appsresto/list_promoMenu', $data);
        resto()->load->view('templates/app/footer_app');
    }

    public function view_galleryPar()
    {
        $data['title'] = 'Devs Deresto';
        $data['parallaxHeader'] = $this->deresto->header_();
        $data['parallaxContent'] = $this->deresto->content_();
        $data['parallaxFooter'] = $this->deresto->footer_();
        resto()->load->view('templates/app/header_app', $data);
        resto()->load->view('templates/app/sidebar_app');
        resto()->load->view('appsresto/list_parImg', $data);
        resto()->load->view('templates/app/footer_app');
    }

    public function edit_($id)
    {
        _checkPromoOrMenu();
        if ($this->form_validation->run() == FALSE) {
            $data['result_menu'] = $this->deresto->get_idPromoMenu($id);
            $data['types'] = $this->deresto->get_Types();
            $data['title'] = 'Devs Deresto';
            resto()->load->view('templates/app/header_app', $data);
            resto()->load->view('templates/app/sidebar_app');
            resto()->load->view('appsresto/list_promoMenu', $data);
            resto()->load->view('templates/app/footer_app');
            _dataErrors();
        } else {
            $this->deresto->_update_PromoMenu($id);
            _dataSuccess();
        }
    }

    public function delete_($id)
    {
        $this->deresto->_dpromoOrMenu($id);
        resto()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Deleted Success!</strong> You Can add new product in a tools begin.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('appsresto/deresto_web_devs_app');
    }

    public function edit_header($id)
    {
        $this->deresto->editHedaerParallax($id);
        _dataSuccess();
    }

    public function edit_content($id)
    {
        $this->deresto->editContentParallax($id);
        _dataSuccess();
    }

    public function edit_footer($id)
    {
        $this->deresto->editFooterParallax($id);
        _dataSuccess();
    }
}
