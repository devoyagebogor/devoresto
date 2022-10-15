<?php
defined('BASEPATH') or exit('No direct script access allowed');

function resto()
{
    return get_instance();
}

function _imgPromoOrMenu()
{
    $config = [
        'allowed_types' => 'jpg|png|jpeg',
        'upload_path'   => './assets/deresto/img/uploaded/menu_promo',
        'max_size'      => 2098,
        'image_width'   => 1080,
        'image_height'  => 1080
    ];
    resto()->load->library('upload', $config);
    if (!resto()->upload->do_upload('img_choose')) {
        _dataErrors();
    } else {
        $img = resto()->upload->data();
        $img = $img['file_name'];
    }
    return $img;
}

function _imgDeresto()
{
    $config = [
        'allowed_types' => 'jpg|png|jpeg',
        'upload_path'   => './assets/deresto/img/uploaded/gallery',
        'max_size'      => 2098
    ];
    resto()->load->library('upload', $config);

    if (!resto()->upload->do_upload('img_')) {
        _dataErrors();
    } else {
        $img = resto()->upload->data();
        $img = $img['file_name'];
    }
    return $img;
}

function _checkGallery()
{
    resto()->form_validation->set_rules('title_img', 'Title', 'required|max_length[100]');
    resto()->form_validation->set_rules('caption_img', 'Caption', 'required|max_length[100]');
}

function _checkTypes()
{
    resto()->form_validation->set_rules('newType', 'Type', 'required|max_length[50]');
}

function _dataErrors()
{
    resto()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>The Process Failed!</strong> an input error occurred or the data cannot be empty <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    redirect('appsresto/deresto_web_devs_app');
}

function _dataSuccess()
{
    resto()->session->set_flashdata('dev', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Tools Process Success!</strong> You can see result for the web pages. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    redirect('appsresto/deresto_web_devs_app');
}

function _staticViews($data)
{
    resto()->load->view('templates/app/header_app', $data);
    resto()->load->view('templates/app/sidebar_app');
    resto()->load->view('appsresto/app', $data);
    resto()->load->view('templates/app/footer_app');
}

function _checkPromoOrMenu()
{
    resto()->form_validation->set_rules('titles', 'Title', 'required|max_length[50]');
    resto()->form_validation->set_rules('selectType', 'Type', 'required|max_length[50]');
    resto()->form_validation->set_rules('captions', 'Caption', 'required|max_length[50]');
}

function _updatePromoOrMenu()
{
    $id    = resto()->uri->segment(3);
    $file_ = resto()->db->get_where('menu_deresto', ['id' => $id])->row_array();
    $old_ImgPackages  = $file_['img'];

    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['upload_path']   = './assets/deresto/img/uploaded/menu_promo/';
    $config['max_size']      = 2098;
    $config['image_width']   = 1080;
    $config['image_height']   = 1080;

    resto()->load->library('upload', $config);

    if (!empty(FCPATH . '/assets/deresto/img/uploaded/menu_promo/' . $old_ImgPackages)) {
        if (resto()->upload->do_upload('img_')) {
            unlink(FCPATH . '/assets/deresto/img/uploaded/menu_promo/' . $old_ImgPackages);
            $update_ = resto()->upload->data();
            $update_ImgPackages = $update_['file_name'];
        } else {
            $update_ImgPackages = $old_ImgPackages;
        }
    } else {
        $update_ = resto()->upload->data();
        $update_ImgPackages = $update_['file_name'];
    }

    return $update_ImgPackages;
}

function d_promoMenuImg()
{
    $id    = ci()->uri->segment(3);
    $file_ = ci()->db->get_where('menu_deresto', ['id' => $id])->row_array();
    $f_d   = $file_['img'];
    unlink(FCPATH . '/assets/deresto/img/uploaded/menu_promo/' . $f_d);
}

function _editParallaxImg()
{
    $id    = resto()->uri->segment(3);
    $file_ = resto()->db->get_where('parallax_header_deresto', ['id' => $id])->row_array();
    $old_ImgPackages  = $file_['img'];

    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['upload_path']   = './assets/deresto/img/uploaded/background/';
    $config['max_size']      = 2098;
    $config['image_width']   = 1500;
    $config['image_height']   = 1000;

    resto()->load->library('upload', $config);

    if (!empty(FCPATH . '/assets/deresto/img/uploaded/background/' . $old_ImgPackages)) {
        if (resto()->upload->do_upload('header_parallax')) {
            unlink(FCPATH . '/assets/deresto/img/uploaded/background/' . $old_ImgPackages);
            $update_ = resto()->upload->data();
            $update_ImgPackages = $update_['file_name'];
        } else {
            $update_ImgPackages = $old_ImgPackages;
        }
    } else {
        $update_ = resto()->upload->data();
        $update_ImgPackages = $update_['file_name'];
    }

    return $update_ImgPackages;
}

function _editParallaxImgContent()
{
    $id    = resto()->uri->segment(3);
    $file_ = resto()->db->get_where('parallax_content_deresto', ['id' => $id])->row_array();
    $old_ImgPackages  = $file_['img'];

    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['upload_path']   = './assets/deresto/img/uploaded/background/';
    $config['max_size']      = 2098;
    $config['image_width']   = 1500;
    $config['image_height']   = 1000;

    resto()->load->library('upload', $config);

    if (!empty(FCPATH . '/assets/deresto/img/uploaded/background/' . $old_ImgPackages)) {
        if (resto()->upload->do_upload('content_parallax')) {
            unlink(FCPATH . '/assets/deresto/img/uploaded/background/' . $old_ImgPackages);
            $update_ = resto()->upload->data();
            $update_ImgPackages = $update_['file_name'];
        } else {
            $update_ImgPackages = $old_ImgPackages;
        }
    } else {
        $update_ = resto()->upload->data();
        $update_ImgPackages = $update_['file_name'];
    }

    return $update_ImgPackages;
}

function _editParallaxFooter()
{
    $id    = resto()->uri->segment(3);
    $file_ = resto()->db->get_where('parallax_footer_deresto', ['id' => $id])->row_array();
    $old_ImgPackages  = $file_['img'];

    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['upload_path']   = './assets/deresto/img/uploaded/background/';
    $config['max_size']      = 2098;
    $config['image_width']   = 1500;
    $config['image_height']   = 1000;

    resto()->load->library('upload', $config);

    if (!empty(FCPATH . '/assets/deresto/img/uploaded/background/' . $old_ImgPackages)) {
        if (resto()->upload->do_upload('parallax_footer')) {
            unlink(FCPATH . '/assets/deresto/img/uploaded/background/' . $old_ImgPackages);
            $update_ = resto()->upload->data();
            $update_ImgPackages = $update_['file_name'];
        } else {
            $update_ImgPackages = $old_ImgPackages;
        }
    } else {
        $update_ = resto()->upload->data();
        $update_ImgPackages = $update_['file_name'];
    }

    return $update_ImgPackages;
}
