<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_masjid extends CI_Model {

	public function show()
	{
		$this->db->select('*');
		$this->db->from('masjid');
		$this->db->order_by('id','DESC');

		return $this->db->get()->result();
	}

	public function store($jquin)
	{
		$this->db->insert('masjid', $jquin);
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('masjid');
		$this->db->where('id', $id);

		return $this->db->get()->row();	
	}

	public function update($jquin)
	{
		$this->db->where('id', $jquin['id']);
		$this->db->update('masjid', $jquin);
	}

	public function destroy($jquin)
	{
		$this->db->where('id', $jquin['id']);
		$this->db->delete('masjid', $jquin);
	}

	// Count
	public function totalMasjid()
	{
		$query = $this->db->get('masjid');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}
}

/* End of file Masjid.php */
/* Location: ./application/models/Masjid.php */