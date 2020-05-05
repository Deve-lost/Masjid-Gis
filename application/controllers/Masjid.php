<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masjid extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('googlemaps');
		$this->load->model('m_masjid');
	}

	public function index()
	{
		$data = array(
						'title' => 'Data Masjid Yang Terdaftar',
						'maps' 	=> $this->googlemaps->create_map(),
						'masjid' => $this->m_masjid->show(),
						'isi'	=> 'masjid/index',
						'total' => $this->m_masjid->totalMasjid(),
		);

		$this->load->view('layouts/wrapper', $data, FALSE);
	}

	public function create()
	{
		// Lokasi Default
		$config['center'] = '-7.349756,108.110597';
		$config['zoom'] = 15;
		$this->googlemaps->initialize($config);

		// Marker/Pin Lokasi
		$marker['position'] = '-7.349756,108.110597';
		$marker['draggable'] = true;
		$marker['ondragend'] = 'pin(event.latLng.lat(),event.latLng.lng())';
		$this->googlemaps->add_marker($marker);

		// Validation
		$this->form_validation->set_rules('nama', 'Nama Masjid', 'required');
		$this->form_validation->set_rules('latitude', 'Garis Lintang', 'required');
		$this->form_validation->set_rules('longitude', 'Garis Bujur', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
						'title' => 'Tambah Data Masjid',
						'maps' 	=> $this->googlemaps->create_map(),
						'isi'	=> 'masjid/create',
						'total' => $this->m_masjid->totalMasjid(),
			);

			$this->load->view('layouts/wrapper', $data, FALSE);
		} else {
			$jquin = array(
							'nama' => $this->input->post('nama'),
							'latitude' => $this->input->post('latitude'),
							'longitude' => $this->input->post('longitude'),
							'alamat' => $this->input->post('alamat'),
			);

			$this->m_masjid->store($jquin);
			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');

			redirect('masjid','refresh');
		}
	}

	public function edit($id)
	{
		// Lokasi Default
		$config['center'] = '-7.349756,108.110597';
		$config['zoom'] = 15;
		$this->googlemaps->initialize($config);

		// Marker/Pin Lokasi
		$marker['position'] = '-7.349756,108.110597';
		$marker['draggable'] = true;
		$marker['ondragend'] = 'pin(event.latLng.lat(),event.latLng.lng())';
		$this->googlemaps->add_marker($marker);

		// Validation
		$this->form_validation->set_rules('nama', 'Nama Masjid', 'required');
		$this->form_validation->set_rules('latitude', 'Garis Lintang', 'required');
		$this->form_validation->set_rules('longitude', 'Garis Bujur', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
						'title' => 'Edit Data Masjid',
						'maps' 	=> $this->googlemaps->create_map(),
						'isi'	=> 'masjid/edit',
						'jquin' => $this->m_masjid->edit($id),
						'total' => $this->m_masjid->totalMasjid(),
			);

			$this->load->view('layouts/wrapper', $data, FALSE);
		} else {
			$jquin = array(
							'id' => $id,
							'nama' => $this->input->post('nama'),
							'latitude' => $this->input->post('latitude'),
							'longitude' => $this->input->post('longitude'),
							'alamat' => $this->input->post('alamat'),
			);

			$this->m_masjid->update($jquin);
			$this->session->set_flashdata('sukses', 'Data Berhasil Diperbharui');

			redirect('masjid','refresh');
		}
	}

	public function destroy($id)
	{
		$jquin = array('id' => $id);
		$this->m_masjid->destroy($jquin);
		$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');

		redirect('masjid','refresh');
	}

}

/* End of file Masjid.php */
/* Location: ./application/controllers/Masjid.php */