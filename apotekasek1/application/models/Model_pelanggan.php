<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelanggan extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('Pelanggan');
	}
	
	public function input_data($data) 
	{
		$this->db->insert('Pelanggan',$data);
	} 

	public function hapus_data($where, $Pelanggan){
		$this->db->where($where);
		$this->db->delete($Pelanggan);
	}

	public function edit_pelanggan($where, $Pelanggan){
		 return $this->db->get_where($Pelanggan,$where);
	}

	public function update_data($where,$data,$Pelanggan){
		$this->db->where($where);
		$this->db->update($Pelanggan,$data);
	}

	public function get_keywoard($keywoard)
	{
		$this->db->select('*');
		$this->db->from('Pelanggan');
		$this->db->like('nama_pelanggan',$keywoard);
		$this->db->or_like('alamat',$keywoard);
		return $this->db->get()->result();
		# code...
	}
}

/* End of file model_pelanggan.php */
/* Location: ./application/models/model_pelanggan.php */ ?>