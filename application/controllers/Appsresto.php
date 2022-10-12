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
    }

    public function debug()
    {
        // enter your code for testing
    }

    public function deresto_web_devs_app()
    {
        _in_System();
        $data['title'] = 'Devs Deresto';
        $data['types'] = $this->deresto->get_Types();
        _staticViews($data);
    }

    # Add New Promo or Menu
    public function deresto_web_devs_promoOrMenu()
    {
        _in_System();
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
        _in_System();
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
}
