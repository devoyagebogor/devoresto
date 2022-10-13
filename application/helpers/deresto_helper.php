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
        'max_size'      => 2098
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
    resto()->session->set_flashdata('dev', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Add New Project Success!</strong> You can see result for the web pages. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
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
