<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deresto_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('deresto_helper');
    }

    // Variables

    private function _dataPost($name, $con)
    {
        return $this->input->post($name, $con);
    }

    private function _setData($x, $y)
    {
        return $this->db->insert($x, $y);
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
    public function get_Types()
    {
        return $this->_getData('type_menu');
    }

    public function add_ImgPromoOrMenu()
    {
        $data = [
            'menu_type' => $this->_dataPost('selectType', TRUE),
            'title'     => $this->_dataPost('titles', TRUE),
            'caption'   => $this->_dataPost('captions', TRUE),
            'img'       => _imgPromoOrMenu(),
            'date'      => time()
        ];
        return $this->_setData('menu_deresto', $data);
    }

    public function add_NewTypes()
    {
        $data = ['menu_type' => $this->_dataPost('newType', TRUE)];
        return $this->_setData('type_menu', $data);
    }

    public function add_NewGallery()
    {
        $data = [
            'title'     => $this->_dataPost('title_img', TRUE),
            'caption'   => $this->_dataPost('caption_img', TRUE),
            'img'       => _imgDeresto(),
            'date'      => time()
        ];
        return $this->_setData('gallery_deresto', $data);
    }

    public function getf_parallax()
    {
        return $this->_getData('ss');
    }

    public function _notAllowedDeletePromo()
    {
        $not = $this->_getData('type_menu')['menu_type'];
        if ($not['Promo']) {
            // not allowed delete type menu PROMO.
        }
    }

    public function showProject_promoOrMenu()
    {
        $this->db->select('*');
        $this->db->from('menu_deresto');
        $this->db->join('type_menu', 'type_menu.id_type = menu_deresto.menu_type');
        return $this->db->get()->result_array();
    }

    public function get_idPromoMenu($id)
    {
        return $this->db->get_where('menu_deresto', ['id' => $id])->result_array();
    }

    public function _update_PromoMenu($id)
    {
        $where = $this->get_idPromoMenu($id)['id'];
        $data = [
            'menu_type' => $this->_dataPost('selectType', TRUE),
            'title'     => $this->_dataPost('titles', TRUE),
            'caption'   => $this->_dataPost('captions', TRUE),
            'img'       => _updatePromoOrMenu(),
        ];
        return $this->db->update('menu_deresto', $data, ['id' => $id]);
    }
}
