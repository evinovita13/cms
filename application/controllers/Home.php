<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('galeri');
		$galeri = $this->db->get()->result_array();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$data = array(
			'judul' => "Beranda | epuyy",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'caraousel' =>$caraousel,
			'konten' => $konten,
			'rest_post' => $this->db->from('konten')->join('kategori', 'konten.id_kategori = kategori.id_kategori')->join('user', 'konten.username = user.username')->order_by('tanggal DESC')->limit(5)->get()->result_array(),
			'galeri' => $galeri,
		);
		
		$this->load->view('beranda', $data);
	}
	public function kategori($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('galeri');
		$galeri = $this->db->get()->result_array();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->where('a.id_kategori',$id);
		$konten = $this->db->get()->result_array();
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'judul' => $nama_kategori." | epuyy",
			'nama_kategori' => $nama_kategori,
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'rest_post' => $this->db->from('konten')->join('kategori', 'konten.id_kategori = kategori.id_kategori')->join('user', 'konten.username = user.username')->order_by('tanggal DESC')->limit(5)->get()->result_array(),
			'galeri' => $galeri,
		);
		$this->load->view('kategori', $data);
	}
	
	public function artikel($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('galeri');
		$galeri = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->where('slug',$id);
		$konten = $this->db->get()->row();
		$data = array(
			'judul' => $konten->judul." | epuyy",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'galeri' => $galeri,
		);
		$this->load->view('detail', $data);
	}
	public function galeri(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('galeri');
		$galeri = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
        $this->db->from('konten');
		$konten = $this->db->get()->row();
		$data = array(
			'judul' => $konten->judul." | epuyy",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'galeri' => $galeri,
			'rest_post' => $this->db->from('konten')->join('kategori', 'konten.id_kategori = kategori.id_kategori')->join('user', 'konten.username = user.username')->order_by('tanggal DESC')->limit(5)->get()->result_array(),
		
		);
		$this->load->view('galeri', $data);
	}
}