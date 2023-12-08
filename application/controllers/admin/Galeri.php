<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Galeri extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}
	public function index(){
		$this->db->from('galeri');
		$galeri = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' 	    => 'Halaman galeri',
			'galeri'				=> $galeri
		);
		$this->template->load('template_admin','admin/galeri_index',$data);
	}
	public function simpan(){
		$namafoto = date('YmdHis').'.jpg';
		$config['upload_path']			= 'assets/upload/galeri/';
		$config['max_size'] = 500 * 1024; // 3 * 1024; //3Mb; 0=unlimited
		$config['file_name']			= $namafoto;
		$config['allowed_types'] ='*';
		$this->load->library('upload', $config);
		if($_FILES['foto']['size'] >= 500 * 1024){
			$this->session->set_flashdata('alert','ukuran foto terlalu besar upload ulang foto');
		redirect('admin/galeri');
		} elseif(!$this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = array('upload_data' => $this->upload->data());
		}
		$data = array(
			'judul'				=> $this->input->post('judul'),
			'foto'				=> $namafoto,
			
		);
		$this->db->insert('galeri',$data);
		$this->session->set_flashdata('alert','data berhasil disimpan');
		redirect('admin/galeri');
	}

	
	public function delete_data($id){
		$filename=FCPATH.'/assets/upload/galeri/'.$id;
			if(file_exists($filename)){
				unlink("./assets/upload/galeri/".$id);
			}
		$where = array('foto'		=> $id);
		$this->db->delete('galeri',$where);
		$this->session->set_flashdata('alert','data berhasil dihapus');
		redirect('admin/galeri');
	}
	
	
}
