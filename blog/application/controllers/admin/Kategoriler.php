<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->Model('Database_Model');
		
		if(!$this->session->userdata('oturum2'))
        {
            $this->session->flashdata("giris_hata","lütfen giriş yapınız");
            redirect(base_url()."admin/Giris");
        }
	}
	public function index()
	{
		$query=$this->db->get('kategoriler');
		$data["veri"]=$query->result();
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Kategori_listesi',$data);
		$this->load->view('admin/Footer');
		$this->load->view('admin/Sidebar');
	}
	public function ekle()
	{
	    $query=$this->db->get('kategoriler');
		$data["kategori"]=$query->result();
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Kategori_ekle');
	}
	public function eklekaydet()
	{
		$data=array(
		'adi'=>$this->input->post('adi'),
		'ust_id'=>$this->input->post('ust_id'),
		'aciklama'=>$this->input->post('aciklama')
		
		);
		
		$this->Database_Model->insert_data('kategoriler',$data);
		$this->session->set_flashdata("sonuc","kategori ekleme işlemi yapıldı");
		redirect(base_url()."admin/Kategoriler");
	}
	function sil($id)
	{
		$sorgu=$this->db->query("DELETE FROM kategoriler WHERE id=$id");
		$this->session->set_flashdata("sonuc","Kategori Silme İşlemi Yapıldı.");
		redirect(base_url()."admin/Kategoriler");
	}
	function duzenle($id)
	{
	    $query=$this->db->get('kategoriler');
		$data["kategori"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view("admin/Kategori_duzenle",$data);
		$this->load->view('admin/Footer');
		$this->load->view('admin/Sidebar');
	}
	public function guncellekaydet($id)
	{
		$data=array(
		'adi'=>$this->input->post('adi'),
		'ust_id'=>$this->input->post('ust_id'),
		'aciklama'=>$this->input->post('aciklama')
		);
		
		$this->Database_Model->update_data('kategoriler',$data ,$id);
		$this->session->set_flashdata("sonuc","kategori güncelleme işlemi yapıldı");
		redirect(base_url()."admin/Kategoriler");
	}
	
}
?>