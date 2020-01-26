<?php

class Product_m extends CI_Model {
	public function getTable()
	{
		$this->db->select('tb_product.*, tb_product.id as product_id, tb_cashier.name as cashier_name, tb_product.name as product_name, tb_category.name as category_name, tb_product.price as product_price');
		$this->db->from('tb_product');
		$this->db->join('tb_category', 'tb_category.id = tb_product.id_category');
		$this->db->join('tb_cashier', 'tb_cashier.id = tb_product.id_cashier');
		$query = $this->db->get();
		return $query->result();
	}

	public function insert($data) 
	{
		return $this->db->insert('tb_product', $data);
	}

	public function get($id) {
		return $this->db->where('id', $id)->get('tb_product')->row();
	}

	public function Update($data, $id)
	{
		return $this->db->where('id', $id)->update('tb_product', $data);
	}

	public function delete($id) {
		return $this->db->where('id', $id)->delete('tb_product');
	}
}