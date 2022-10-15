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



    public function showProject_promoOrMenu()
    {
        $this->db->select('*');
        $this->db->from('menu_deresto');
        $this->db->join('type_menu', 'type_menu.id_type = menu_deresto.menu_type');
        return $this->db->get()->result_array();
    }

    public function get_idPromoMenu($id)
    {
        return $this->db->get_where('menu_deresto', ['id' => $id])->row_array();
    }

    public function _update_PromoMenu($id)
    {
        $where = $this->get_idPromoMenu($id)['id'];
        $data = [
            'title'     => $this->_dataPost('titles', TRUE),
            'menu_type' => $this->_dataPost('selectType', TRUE),
            'caption'   => $this->_dataPost('captions', TRUE),
            'img'       => _updatePromoOrMenu(),
        ];
        return $this->db->update('menu_deresto', $data, ['id' => $where]);
    }

    public function _dpromoOrMenu($id)
    {
        $f = $this->get_idPromoMenu($id);

        if ($f['menu_type'] == 7) {
            $x = FALSE;
            resto()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Deleted Failed!</strong> Promotional products can not be deleted, can only be changed.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('appsresto/view_menuPromo');
        } else {
            d_promoMenuImg();
            $x = $this->db->delete('menu_deresto', ['id' => $f['id']]);
        }
        return $x;
    }

    public function header_()
    {
        return $this->_getData('parallax_header_deresto');
    }

    public function content_()
    {
        return $this->_getData('parallax_content_deresto');
    }

    public function footer_()
    {
        return $this->_getData('parallax_footer_deresto');
    }

    public function get_headerParallaxById($id)
    {
        return $this->db->get_where('parallax_header_deresto', ['id' => $id])->row_array();
    }

    public function editHedaerParallax($id)
    {
        $id = $this->get_headerParallaxById($id)['id'];
        $data = [
            'img'  => _editParallaxImg(),
            'date' => time()
        ];
        return $this->db->update('parallax_header_deresto', $data, ['id' => $id]);
    }

    public function get_ContentParallax($id)
    {
        return $this->db->get_where('parallax_content_deresto', ['id' => $id])->row_array();
    }

    public function editContentParallax($id)
    {
        $id = $this->get_ContentParallax($id)['id'];
        $data = [
            'img'  => _editParallaxImgContent(),
            'date' => time()
        ];
        return $this->db->update('parallax_content_deresto', $data, ['id' => $id]);
    }

    public function get_FooterParallaxId($id)
    {
        return $this->db->get_where('parallax_footer_deresto', ['id' => $id])->row_array();
    }

    public function editFooterParallax($id)
    {
        $id = $this->get_FooterParallaxId($id)['id'];
        $data = [
            'img'  => _editParallaxFooter(),
            'date' => time()
        ];
        return $this->db->update('parallax_footer_deresto', $data, ['id' => $id]);
    }
}
