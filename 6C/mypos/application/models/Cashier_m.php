<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cashier_m extends CI_Model {
	public function getAll()
	{
		return $this->db->get('tb_cashier')->result();
	}
}