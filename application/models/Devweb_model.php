<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Model Development
 */
class Devweb_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('development_helper');
	}

	public function add_apps_for_slideshow()
	{
		$data = [
			'title_ss'		=> $this->input->post('title_ss', true),
			'animation'		=> $this->input->post('animation', true),
			'text_ss'		=> $this->input->post('text_ss', true),
			'addons'		=> $this->input->post('addons', true),
			'img_slides'	=> _sliderImg()
		];
		$this->db->insert('slideshow', $data);
	}

	public function show_slider()
	{
		return $this->db->get('slideshow')->result_array();
	}

	public function get_sliderById($id)
	{
		return $this->db->get_where('slideshow', ['id' => $id])->row_array();
	}

	public function update_this_slider($id)
	{
		$id = $this->get_sliderById($id)['id'];
		$data = [
			'title_ss'		=> $this->input->post('title_ss', true),
			'animation'		=> $this->input->post('animation', true),
			'text_ss'		=> $this->input->post('text_ss', true),
			'addons'		=> $this->input->post('addons', true),
			'img_slides'	=> _updateSlider()
		];
		return $this->db->update('slideshow', $data, ['id' => $id]);
	}

	public function d_app_slides($id)
	{
		$id = $this->get_sliderById($id)['id'];
		d_SlideImg();
		return $this->db->delete('slideshow', ['id' => $id]);
	}

	public function add_apps_for_promo()
	{
		$data = [
			'title'			=> $this->input->post('title_promo', true),
			'paragraph'		=> $this->input->post('text_promo', true),
			'caption'		=> $this->input->post('caption_promo', true),
			'periode'		=> $this->input->post('periode_promo', true),
			'status'		=> 1, // rever to active ==> 0 rever to non-active
			'poto'			=> _promoImg(),
			'date'			=> time()
		];
		$this->db->insert('promo', $data);
	}

	public function show_promo()
	{
		return $this->db->get('promo')->result_array();
	}

	public function is_active()
	{
		// method joid id & status tb-promo 
	}

	public function get_promoById($id)
	{
		return $this->db->get_where('promo', ['id' => $id])->row_array();
	}

	public function update_this_promo($id)
	{
		$id = $this->get_promoById($id);
		$data = [

			'title'			=> $this->input->post('title_promo', true),
			'paragraph'		=> $this->input->post('text_promo', true),
			'caption'		=> $this->input->post('caption_promo', true),
			'periode'		=> $this->input->post('periode_promo', true),
			// 'status'		=> 1, // rever to active ==> 0 rever to non-active
			'poto'			=> _updatePromoImg(),
			// 'date'			=> time()

		];
		return $this->db->update('promo', $data, ['id' => $id['id']]);
	}

	public function d_app_promo($id)
	{
		$id = $this->get_promoById($id);
		d_promoImg();
		return  $this->db->delete('promo', ['id' => $id['id']]);
	}

	// Packages Model
	public function add_apps_for_packages()
	{
		$data = [
			'title_package'		=> $this->input->post('title_package', true),
			'caption_package'	=> $this->input->post('caption_package', true),
			'img_package'		=> _packagesImg(),
			'status'			=> 1,
			'date_created'		=> time()
		];
		$this->db->insert('packages', $data);
	}

	// Show Packages 
	public function show_packages()
	{
		return $this->db->get('packages')->result();
	}

	public function show_packages_dev()
	{
		return $this->db->get('packages')->result_array();
	}

	public function get_PackagesByID($id)
	{
		return $this->db->get_where('packages', ['id' => $id])->row();
		// For use Object Method you can fetch DB use ->result 
	}

	public function update_this_packages($id)
	{
		$Packages = new Devweb_model;
		$id_ = $Packages->get_PackagesByID($id)->id;

		$data = [
			'title_package'		=> $this->input->post('title_package', true),
			'caption_package'	=> $this->input->post('caption_package', true),
			'img_package'		=> _updatePackagesImg(),
		];
		return $this->db->update('packages', $data, ['id' => $id_]);
	}

	public function d_app_package($id)
	{
		$Packages = new Devweb_model;
		$id_D	  = $Packages->get_PackagesByID($id)->id;
		d_packagesImg();
		return $this->db->delete('packages', ['id' => $id_D]);
	}
}
