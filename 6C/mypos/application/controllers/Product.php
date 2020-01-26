<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
		public function __construct(){
			parent:: __construct();
			$this->load->model("product_m");
		}
		public function index()
		{
			$data["tb_product"] = $this->product_m->getTable();
			$this->load->view("ruang.php", $data);
		}
		public function tambahData()
		{
			$this->load->model('category_m');
			$this->load->model('cashier_m');
			$this->load->model('product_m');

			$data['tb_category'] = $this->category_m->getAll();
			$data['tb_cashier'] = $this->cashier_m->getAll();

			$this->load->view('action/tambah', $data);
		}
		public function simpanData()
		{
			$this->load->model('product_m');
			$cashier = $this->input->post('cashier');
			$category = $this->input->post('category');
			$name = $this->input->post('name');
			$price = $this->input->post('price');

			$data = [
				'id_cashier' => $cashier,
				'id_category' => $category,
				'name' => $name,
				'price' => $price,
			];

			$simpan = $this->product_m->insert($data);

			if ($simpan) {
				$this->session->set_flashdata('msg_success', 'Data sudah tersimpan');		
			}else {
				$this->session->set_flashdata('msg_error', 'Data gagal disimpan');
			}
			redirect('Product');
		}

		public function edit($id)
		{
			$this->load->model('category_m');
			$this->load->model('cashier_m');
			$this->load->model('product_m');

			$data['tb_category'] = $this->category_m->getAll();

			$data['tb_cashier'] = $this->cashier_m->getAll();

			$data['tb_product'] = $this->product_m->get($id);

			$this->load->view('action/update', $data);
		}

		public function update(){
	        $this->load->model('product_m');
	        $id = $this->input->post('id');
			$id_cashier = $this->input->post('cashier');
			$id_category = $this->input->post('category');
			$name = $this->input->post('name');
			$price = $this->input->post('price');

			$data = [
				'id_cashier' => $id_cashier,
				'id_category' => $id_category,
				'name' => $name,
				'price' => $price,
			];

        $save = $this->product_m->update($data, $id);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('Product');
    }

		 public function delete($id){
        $this->load->model('product_m');

        $delete = $this->product_m->delete($id);

        if ($delete) {
            $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
        } else {
            $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
        }
        redirect('Product');
		}
	}
?>