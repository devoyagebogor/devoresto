<?php
defined('BASEPATH') or exit('No direct script access allowed');

function ci()
{
	return get_instance();
}

function _sliderImg()
{
	$config['allowed_types'] = 'jpg|jpeg|png';
	$config['upload_path']	 = './assets/img/uploaded/slides/';
	$config['max_size']		 = 2098;

	ci()->load->library('upload', $config);

	if (!ci()->upload->do_upload('img_slides')) {
		ci()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Failed!</strong> Images not to Insert, try again<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_app');
	} else {
		$img = ci()->upload->data();
		$img = $img['file_name'];
	}

	return $img;
}

function _updateSlider()
{
	$id    = ci()->uri->segment(3);
	$file_ = ci()->db->get_where('slideshow', ['id' => $id])->row_array();
	$old_ImgSlides  = $file_['img_slides'];

	$config['allowed_types'] = 'jpg|jpeg|png';
	$config['upload_path']	 = './assets/img/uploaded/slides/';
	$config['max_size']		 = 2098;

	ci()->load->library('upload', $config);

	if (!empty(FCPATH . '/assets/img/uploaded/slides/' . $old_ImgSlides)) {
		if (ci()->upload->do_upload('img_slides')) {
			unlink(FCPATH . '/assets/img/uploaded/slides/' . $old_ImgSlides);
			$update_ = ci()->upload->data();
			$update_ImgSlides = $update_['file_name'];
		} else {
			$update_ImgSlides = $old_ImgSlides;
		}
	} else {
		$update_ = ci()->upload->data();
		$update_ImgSlides = $update_['file_name'];
	}

	return $update_ImgSlides;
}

function d_SlideImg()
{
	$id    = ci()->uri->segment(3);
	$file_ = ci()->db->get_where('slideshow', ['id' => $id])->row_array();
	$f_d   = $file_['img_slides'];
	unlink(FCPATH . '/assets/img/uploaded/slides/' . $f_d);
}

function _promoImg()
{
	$config['allowed_types'] = 'jpg|jpeg|png';
	$config['upload_path']	 = './assets/img/uploaded/promo/';
	$config['max_size']		 = 2098;

	ci()->load->library('upload', $config);

	if (!ci()->upload->do_upload('img_promo')) {
		ci()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Failed!</strong> Images not to Insert, try again<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_app');
	} else {
		$img = ci()->upload->data();
		$img = $img['file_name'];
	}

	return $img;
}

function _updatePromoImg()
{
	$id    = ci()->uri->segment(3);
	$file_ = ci()->db->get_where('promo', ['id' => $id])->row_array();
	$old_ImgPromo  = $file_['img_promo'];

	$config['allowed_types'] = 'jpg|jpeg|png';
	$config['upload_path']	 = './assets/img/uploaded/promo/';
	$config['max_size']		 = 2098;

	ci()->load->library('upload', $config);

	if (!empty(FCPATH . '/assets/img/uploaded/promo/' . $old_ImgPromo)) {
		if (ci()->upload->do_upload('img_promo')) {
			unlink(FCPATH . '/assets/img/uploaded/promo/' . $old_ImgPromo);
			$update_ = ci()->upload->data();
			$update_ImgPromo = $update_['file_name'];
		} else {
			$update_ImgPromo = $old_ImgPromo;
		}
	} else {
		$update_ = ci()->upload->data();
		$update_ImgPromo = $update_['file_name'];
	}

	return $update_ImgPromo;
}

function d_promoImg()
{
	$id    = ci()->uri->segment(3);
	$file_ = ci()->db->get_where('promo', ['id' => $id])->row_array();
	$f_d   = $file_['img_promo'];
	unlink(FCPATH . '/assets/img/uploaded/promo/' . $f_d);
}

function cek_add_slideshow()
{
	ci()->form_validation->set_rules('title_ss', 'Title', 'trim|required');
	ci()->form_validation->set_rules('animation', 'Animation', 'trim|required');
	ci()->form_validation->set_rules('title_ss', 'Title', 'trim|required');
	ci()->form_validation->set_rules('text_ss', 'Text', 'trim|required');
}

function cek_add_product_promo()
{
	ci()->form_validation->set_rules('title', 'Title Promo', 'trim|required|max_length[50]');
	ci()->form_validation->set_rules('caption', 'Caption', 'trim|required|max_length[50]');
	ci()->form_validation->set_rules('periode', 'Periode Promo', 'trim|required|max_length[100]');
	ci()->form_validation->set_rules('price', 'Price Promo', 'trim|required|max_length[50]');
}

// Packages

function cek_add_product_packages()
{
	ci()->form_validation->set_rules('title_package', 'Title Package', 'trim|required|max_length[25]');
	ci()->form_validation->set_rules('caption_package', 'Caption Promo', 'trim|required|max_length[50]');
}

function _packagesImg()
{
	$config['allowed_types'] = 'jpg|jpeg|png';
	$config['upload_path']	 = './assets/img/uploaded/packages/';
	$config['max_size']		 = 2098;

	ci()->load->library('upload', $config);

	if (!ci()->upload->do_upload('img_package')) {
		ci()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Failed!</strong> Images not to Insert, try again<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		$errors = ['error' => ci()->upload->display_errors()];
		var_dump($errors);
		die;
		redirect('development/project_web_devs_app');
	} else {
		$img = ci()->upload->data();
		$img = $img['file_name'];
	}

	return $img;
}

function _updatePackagesImg()
{
	$id    = ci()->uri->segment(3);
	$file_ = ci()->db->get_where('packages', ['id' => $id])->row();
	$old_ImgPackages  = $file_->img_package;

	$config['allowed_types'] = 'jpg|jpeg|png';
	$config['upload_path']	 = './assets/img/uploaded/packages/';
	$config['max_size']		 = 2098;

	ci()->load->library('upload', $config);

	if (!empty(FCPATH . '/assets/img/uploaded/packages/' . $old_ImgPackages)) {
		if (ci()->upload->do_upload('img_package')) {
			unlink(FCPATH . '/assets/img/uploaded/packages/' . $old_ImgPackages);
			$update_ = ci()->upload->data();
			$update_ImgPackages = $update_['file_name'];
		} else {
			$update_ImgPackages = $old_ImgPackages;
		}
	} else {
		$update_ = ci()->upload->data();
		$update_ImgPackages = $update_['file_name'];
	}

	return $update_ImgPackages;
}

function d_packagesImg()
{
	$th_id = ci()->uri->segment(3);
	$Packages = ci()->db->get_where('packages', ['id' => $th_id])->row();
	$Packages_f = $Packages->img_package;
	unlink(FCPATH . '/assets/img/uploaded/packages/' . $Packages_f);
}

function cek_add_product_gallerys()
{
	ci()->form_validation->set_rules('title_gallery', 'Title Gallery', 'trim|required|max_length[25]');
	ci()->form_validation->set_rules('caption_gallery', 'Caption Gallery', 'trim|required|max_length[50]');
}

function _galleryImg()
{
	$config = [
		'allowed_types'		=> 'jpg|png|jpeg',
		'upload_path'		=> './assets/img/uploaded/gallerys',
		'max_size'			=> 2098
	];
	ci()->load->library('upload', $config);

	if (!ci()->upload->do_upload('img_gallery')) {
		$errors = ['error' => ci()->upload->display_errors()];
		var_dump($errors);
		ci()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Failed!</strong> Images not to Insert , try again<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_app');
	} else {
		$img = ci()->upload->data();
		$img = $img['file_name'];
	}
	return $img;
}

function _updateGalleryImg()
{
	$url = ci()->uri->segment(3);
	$file_ = ci()->db->get_where('gallerys', ['id' => $url])->row_array();
	$old_file = $file_['img_gallery'];

	$config = [
		'allowed_types'		=> 'png|jpg|jpeg',
		'upload_path'		=> './assets/img/uploaded/gallerys/',
		'max_size'			=> 2098
	];
	ci()->load->library('upload', $config);

	if (!empty(FCPATH . '/assets/img/uploaded/' . $old_file)) {
		if (ci()->upload->do_upload('img_gallery')) {
			unlink(FCPATH . '/assets/img/uploaded/gallerys/' . $old_file);
			$update_ = ci()->upload->data();
			$updated = $update_['file_name'];
		} else {
			$updated = $old_file;
		}
	} else {
		$update_ = ci()->upload->data();
		$updated = $update_['file_name'];
	}

	return $updated;
}

function d_GalleryImg()
{
	$th_id = ci()->uri->segment(3);
	$Gallery = ci()->db->get_where('gallerys', ['id' => $th_id])->row_array();
	$Gallery_f = $Gallery['img_gallery'];
	unlink(FCPATH . '/assets/img/uploaded/gallerys/' . $Gallery_f);
}

function cek_add_product_games()
{
	ci()->form_validation->set_rules('title_games', 'Title Games', 'trim|required|max_length[25]');
	ci()->form_validation->set_rules('caption_games', 'Caption Games', 'trim|required|max_length[50]');
	ci()->form_validation->set_rules('text_games', 'Text Games', 'trim|required|max_length[100]');
	ci()->form_validation->set_rules('price_games', 'Price Games', 'trim|required|max_length[50]');
	ci()->form_validation->set_rules('periode_games', 'Periode Games', 'trim|required|max_length[50]');
}

function _gamesImg()
{
	$config = [
		'allowed_types'		=> 'jpg|png|jpeg',
		'upload_path'		=> './assets/img/uploaded/games',
		'max_size'			=> 2098
	];
	ci()->load->library('upload', $config);

	if (!ci()->upload->do_upload('img_games')) {
		ci()->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Failed!</strong> Images not to Insert , try again<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_app');
	} else {
		$img = ci()->upload->data();
		$img = $img['file_name'];
	}
	return $img;
}

function d_GamesOrSpot()
{
	$id = ci()->uri->segment(3);
	$_f = ci()->db->get_where('games', ['id' => $id])->row_array();
	$f_ = $_f['img_games'];
	unlink(FCPATH . '/assets/img/uploaded/games/' . $f_);
}

function _updateGamesSpot()
{
	$id = ci()->uri->segment(3);
	$f_ = ci()->db->get_where('games', ['id' => $id])->row_array();
	$_f = $f_['img_games'];

	$config = [
		'allowed_types'		=> 'png|jpg|jpeg',
		'upload_path'		=> './assets/img/uploaded/games/',
		'max_size'			=> 2098
	];
	ci()->load->library('upload', $config);

	if (!empty(FCPATH . '/assets/img/uploaded/games/' . $_f)) {
		if (ci()->upload->do_upload('img_images')) {
			unlink(FCPATH . '/assets/img/uploaded/games/' . $_f);
			$update_ = ci()->upload->data();
			$updated = $update_['file_name'];
		} else {
			$updated = $_f;
		}
	} else {
		$update_ = ci()->upload->data();
		$updated = $update_['file_name'];
	}

	return $updated;
}

function _updateParallax()
{
	$id = ci()->uri->segment(3);
	$f_ = ci()->db->get_where('parallax', ['id' => $id])->row_array();
	$_f = $f_['img_parallax'];

	$config = [
		'allowed_types'		=> 'png|jpg|jpeg',
		'upload_path'		=> './assets/img/uploaded/parallax/',
		'max_size'			=> 2098
	];
	ci()->load->library('upload', $config);

	if (!empty(FCPATH . '/assets/img/uploaded/parallax/' . $_f)) {
		if (ci()->upload->do_upload('images_parallax')) {
			unlink(FCPATH . '/assets/img/uploaded/parallax/' . $_f);
			$update_ = ci()->upload->data();
			$updated = $update_['file_name'];
		} else {
			$updated = $_f;
		}
	} else {
		$update_ = ci()->upload->data();
		$updated = $update_['file_name'];
	}

	return $updated;
}
