<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('googlemaps');
		$this->load->model('m_masjid');
	}

	public function index()
	{
		// Posisi User
		$config['center'] = '-7.3496007,108.1079013';
		$config['zoom'] = 15;
		$this->googlemaps->initialize($config);
		
		// Pementaan
		$masjid = $this->m_masjid->show();
		foreach ($masjid as $jquin) {
			$marker = array();
			$marker['position'] = "$jquin->latitude,$jquin->longitude";
			$marker['animation'] = "DROP";
			// $marker['icon'] = base_url('assets/icon/map.png');
			$marker['infowindow_content'] = '<div class="media">';
			$marker['infowindow_content'] .= "<div class='media-body'>";
			$marker['infowindow_content'] .= '<h5>'.$jquin->nama.'</h5>';
			$marker['infowindow_content'] .= '<p>'.$jquin->alamat.'</p>';
			$marker['infowindow_content'] .= '</div>';
			$marker['infowindow_content'] .= '</div>';
			$this->googlemaps->add_marker($marker);
		}

		$data = array(
						'title' => 'Masjid Terdekat',
						'maps' 	=> $this->googlemaps->create_map(),
						'isi'   => 'beranda',
						'total' => $this->m_masjid->totalMasjid(),
					);

		$this->load->view('layouts/wrapper', $data);
	}

	public function tentang()
	{
		$data = array(
						'title' => 'Tentang Masjid Terdekat',
						'maps' 	=> $this->googlemaps->create_map(),
						'isi'   => 'tentang',
						'total' => $this->m_masjid->totalMasjid(),
					);

		$this->load->view('layouts/wrapper', $data);
	}
}
