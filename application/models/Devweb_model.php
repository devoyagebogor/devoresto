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
			'title'			=> $this->input->post('title', true),
			'caption'		=> $this->input->post('caption', true),
			'periode'		=> $this->input->post('periode', true),
			'price'			=> $this->input->post('price', true),
			'img_promo'		=> _promoImg(),
			'status'		=> 1, // rever to active ==> 0 rever to non-active
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

			'title'			=> $this->input->post('title', true),
			'caption'		=> $this->input->post('caption', true),
			'periode'		=> $this->input->post('periode', true),
			'price'			=> $this->input->post('price', true),
			'img_promo'		=> _updatePromoImg(),

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

	public function add_apps_for_gallerys()
	{
		$data = [
			'title_gallery'		=> $this->input->post('title_gallery', true),
			'caption_gallery'	=> $this->input->post('caption_gallery', true),
			'img_gallery'		=> _galleryImg()
		];
		$this->db->insert('gallerys', $data);
	}

	public function get_GalleryById($id)
	{
		return $this->db->get_where('gallerys', ['id' => $id])->row_array();
	}

	public function update_this_gallery($id)
	{
		$ids = $this->get_GalleryById($id)['id'];
		$data = [
			'title_gallery'		=> $this->input->post('title_gallery', true),
			'caption_gallery'	=> $this->input->post('caption_gallery', true),
			'img_gallery'		=> _updateGalleryImg()
		];
		return $this->db->update('gallerys', $data, ['id' => $id]);
	}

	public function show_gallerys()
	{
		return $this->db->get('gallerys')->result_array();
	}

	public function d_DGallery($id)
	{
		$id = $this->get_GalleryById($id)['id'];
		d_GalleryImg();
		return $this->db->delete('gallerys', ['id' => $id]);
	}

	private function _setPost($name, $bool)
	{
		return $this->input->post($name, $bool);
	}

	private function _setData($t, $d)
	{
		return $this->db->insert($t, $d);
	}

	private function _getData($t)
	{
		return $this->db->get($t)->result_array();
	}

	private function _getDataByCondition($x, $y, $z)
	{
		return $this->db->get_where($x, [$y => $z])->row_array();
	}

	public function add_apps_for_games()
	{
		$data = [
			'img_games' 		=> _gamesImg(),
			'title'				=> $this->_setPost('title_games', true),
			'caption_games'		=> $this->_setPost('caption_games', true),
			'text_games'		=> $this->_setPost('text_games', true),
			'price'				=> $this->_setPost('price_games', true),
			'periode'			=> $this->_setPost('periode_games', true),
			'status'			=> 1
		];
		return $this->_setData('games', $data);
	}

	public function d_DGames($id)
	{
		$id = $this->_getDataByCondition('games', 'id', $id);
		d_GamesOrSpot();
		return $this->db->delete('games', $id);
	}

	public function show_Games()
	{
		return $this->_getData('games');
	}

	public function get_idGames($id)
	{
		return $this->db->get_where('games', ['id' => $id])->row_array();
	}

	public function _updateGameOrSpot($id)
	{
		$id = $this->get_idGames($id)['id'];
		$data = [
			'img_games' 		=> _updateGamesSpot(),
			'title'				=> $this->_setPost('title_games', true),
			'caption_games'		=> $this->_setPost('caption_games', true),
			'text_games'		=> $this->_setPost('text_games', true),
			'price'				=> $this->_setPost('price_games', true),
			'periode'			=> $this->_setPost('periode_games', true),
		];
		return $this->db->update('games', $data, ['id' => $id]);
	}

	public function get_idParallax($id)
	{
		return $this->db->get_where('parallax', ['id' => $id])->row_array();
	}

	public function get_file_Parallax()
	{
		return $this->db->get('parallax')->result_array();
	}

	public function update_this_parallax($id)
	{
		$fi_ = $this->get_idParallax($id)['id'];
		$da_ = ['img_parallax' => _updateParallax()];
		return $this->db->update('parallax', $da_, ['id' => $fi_]);
	}
}
