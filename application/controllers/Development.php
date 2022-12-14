<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Admin to Develope the Website
 */
class Development extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Devweb_model', 'devweb');
		$this->load->helper('development_helper');
		$this->load->helper('system_request_helper');
	}

	# Test Private
	private function chooseThisModelforUse()
	{
		$Development_Behavior = new Devweb_model;
		return $Development_Behavior;
	}

	# Manage Menu to Product
	public function project_web_devs_app()
	{
		_in_System();
		$data['title'] = 'Web Application';
		$data['get_file_Parallax'] = $this->devweb->get_file_Parallax();
		$this->load->view('templates/app/header_app', $data);
		$this->load->view('templates/app/sidebar_app');
		$this->load->view('development/app', $data);
		$this->load->view('templates/app/footer_app');
	}

	# Add Slidshow
	public function dev_Slideshow()
	{
		_in_System();
		cek_add_slideshow();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Web Application';
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('templates/app/sidebar_app');
			$this->load->view('development/app', $data);
			$this->load->view('templates/app/footer_app');
		} else {

			$this->devweb->add_apps_for_slideshow();
			$this->session->set_flashdata('dev', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Add New Slideshow!</strong> You Can Show This Slideshow From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_slideshow');
		}
	}

	public function project_web_devs_slideshow()
	{
		_in_System();
		$data['title'] = 'Review Project';
		$data['slides'] = $this->devweb->show_slider();
		$this->load->view('templates/app/header_app', $data);
		$this->load->view('templates/app/sidebar_app');
		$this->load->view('development/slide', $data);
		$this->load->view('templates/app/footer_app');
	}

	public function projcet_update_slider($id)
	{
		_in_System();
		cek_add_slideshow();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Review Project';
			$data['view_promo'] = $this->devweb->get_sliderById($id);
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('templates/app/sidebar_app');
			$this->load->view('development/review', $data);
			$this->load->view('templates/app/footer_app');
		} else {
			$this->devweb->update_this_slider($id);
			$this->session->set_flashdata('dev', '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Update Slideshow Success!</strong> You Can Show This Slideshow From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_slideshow');
		}
	}

	# Delete Slideshow
	public function d_Slides($id)
	{
		_in_System();
		$this->devweb->d_app_slides($id);
		$this->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Delete Slideshow Success!</strong> You Can Add the new Slideshow Again. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_slideshow');
	}

	# Add Product Promo
	public function dev_promo()
	{
		_in_System();
		cek_add_product_promo();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Web Application';
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('templates/app/sidebar_app');
			$this->load->view('development/app', $data);
			$this->load->view('templates/app/footer_app');
		} else {

			$this->devweb->add_apps_for_promo();
			$this->session->set_flashdata('dev', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Add New Promo Success!</strong> You Can Show This Promo From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_review');
		}
	}

	# To Review Product Promo, can be develope update or delete
	public function project_web_devs_review()
	{
		_in_System();
		$data['title'] = 'Review Project';
		$data['view_promo'] = $this->devweb->show_promo();
		$this->load->view('templates/app/header_app', $data);
		$this->load->view('templates/app/sidebar_app');
		$this->load->view('development/review', $data);
		$this->load->view('templates/app/footer_app');
	}

	# Update Promo
	public function projcet_update_promo($id)
	{
		_in_System();
		cek_add_product_promo();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Review Project';
			$data['view_promo'] = $this->devweb->get_promoById($id);
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('templates/app/sidebar_app');
			$this->load->view('development/review', $data);
			$this->load->view('templates/app/footer_app');
		} else {
			$this->devweb->update_this_promo($id);
			$this->session->set_flashdata('dev', '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Update Promo Success!</strong> You Can Show This Promo From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_review');
		}
	}

	# Delete Promo
	public function d_Dpromo($id)
	{
		_in_System();
		$this->devweb->d_app_promo($id);
		$this->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Delete Promo Success!</strong> You Can Add the new Hot Promo Again. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_review');
	}

	# Add Packages
	public function dev_packages()
	{
		_in_System();
		cek_add_product_packages();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Web Application';
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('templates/app/sidebar_app');
			$this->load->view('development/app', $data);
			$this->load->view('templates/app/footer_app');
		} else {
			$this->devweb->add_apps_for_packages();
			$this->session->set_flashdata('dev', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Add New Package Success!</strong> You Can Show This Packages From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_packages');
		}
	}

	# To Review Product Promo, can be develope update or delete
	public function project_web_devs_packages()
	{
		_in_System();
		$data['title'] = 'Review Project';
		$file_Packages = new Devweb_model;
		$data['view_packages'] = $file_Packages->show_packages();
		$this->load->view('templates/app/header_app', $data);
		$this->load->view('templates/app/sidebar_app');
		$this->load->view('development/r_packages', $data);
		$this->load->view('templates/app/footer_app');
	}

	# Update Packages
	public function projcet_update_packages($id)
	{
		_in_System();
		cek_add_product_packages();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Review Project';
			$file_Packages = $this->chooseThisModelforUse();
			$data['view_packages'] = $file_Packages->get_PackagesByID($id);
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('templates/app/sidebar_app');
			$this->load->view('development/r_packages', $data);
			$this->load->view('templates/app/footer_app');
		} else {
			$this->chooseThisModelforUse()->update_this_packages($id);
			$this->session->set_flashdata('dev', '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Update Package Success!</strong> You Can Show This Packages From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_packages');
		}
	}

	# Delete Package
	public function d_Dpackages($id)
	{
		_in_System();
		$Packages_D = new Devweb_model;
		$Packages_D->d_app_package($id);
		$this->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Delete Packages Success!</strong> You Can Add the new Package Again. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_packages');
	}

	# Add Gallery's
	public function dev_Gallery()
	{
		_in_System();
		cek_add_product_gallerys();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Web Application';
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('templates/app/sidebar_app');
			$this->load->view('development/app', $data);
			$this->load->view('templates/app/footer_app');
		} else {

			$this->devweb->add_apps_for_gallerys();
			$this->session->set_flashdata('dev', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Add New Promo Success!</strong> You Can Show This Promo From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_gallery');
		}
	}

	# Set Up Gallery
	public function project_web_devs_gallery()
	{
		_in_System();
		$data['title'] = 'Review Project';
		$data['gallerys'] = $this->devweb->show_gallerys();
		$this->load->view('templates/app/header_app', $data);
		$this->load->view('templates/app/sidebar_app');
		$this->load->view('development/r_gallerys', $data);
		$this->load->view('templates/app/footer_app');
	}

	# Update Gallery
	public function projcet_update_gallery($id)
	{
		_in_System();
		cek_add_product_gallerys();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Review Project';
			$data['view_promo'] = $this->devweb->get_promoById($id);
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('templates/app/sidebar_app');
			$this->load->view('development/review', $data);
			$this->load->view('templates/app/footer_app');
		} else {
			$this->devweb->update_this_gallery($id);
			$this->session->set_flashdata('dev', '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Update Promo Success!</strong> You Can Show This Promo From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_gallery');
		}
	}

	# Delete Gallery
	public function d_Dgallery($id)
	{
		_in_System();
		$this->devweb->d_DGallery($id);
		$this->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Delete Packages Success!</strong> You Can Add the new Package Again. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_gallery');
	}

	# Add Games & Spot
	public function dev_Games()
	{
		_in_System();
		cek_add_product_games();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Web Application';
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('templates/app/sidebar_app');
			$this->load->view('development/app', $data);
			$this->load->view('templates/app/footer_app');
		} else {

			$this->devweb->add_apps_for_games();
			$this->session->set_flashdata('dev', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Add New Games / Spot Success!</strong> You Can Show This Games / Spot From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_games');
		}
	}

	# Set Up Games
	public function project_web_devs_games()
	{
		_in_System();
		$data['title'] = 'Review Project';
		$data['games'] = $this->devweb->show_Games();
		$this->load->view('templates/app/header_app', $data);
		$this->load->view('templates/app/sidebar_app');
		$this->load->view('development/r_games', $data);
		$this->load->view('templates/app/footer_app');
	}

	# Delete Games / Spot
	public function d_Dgame($id)
	{
		_in_System();
		$this->devweb->d_DGames($id);
		$this->session->set_flashdata('dev', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Delete Game / Spot Photo Success!</strong> You Can Add the new Game / Spot Photo Again. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_games');
	}

	# Update Games or Spot
	public function projcet_update_games_orSpot($id)
	{
		_in_System();
		cek_add_product_games();
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Review Project';
			$data['games'] = $this->devweb->get_idGames($id);
			$data['get_file_Parallax'] = $this->devweb->get_file_Parallax();
			$this->load->view('templates/app/header_app', $data);
			$this->load->view('templates/app/sidebar_app');
			$this->load->view('development/r_games', $data);
			$this->load->view('templates/app/footer_app');
		} else {
			$this->devweb->_updateGameOrSpot($id);
			$this->session->set_flashdata('dev', '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Update Games Success!</strong> You Can Show This Games / Spot From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('development/project_web_devs_games');
		}
	}

	public function projcet_update_parallax($id)
	{
		_in_System();
		$this->devweb->update_this_parallax($id);
		$this->session->set_flashdata('dev', '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Update Parallax Success!</strong> You Can Show This Parallax From the Landing Web Page. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('development/project_web_devs_app');
	}
}
