<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {

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
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$query=$this->db->get('kullanicilar');
		$data["veri"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Kullanici_listesi',$data);
		$this->load->view('admin/Footer');
		$this->load->view('admin/Sidebar');
	}
	function goster($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view("admin/Kullanici_goster",$data);
	}
	public function ekle()
	{
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Kullanici_ekle');
	}
	public function eklekaydet()
	{
			
		$data=array(
		'adi'=>$this->input->post('adi'),
		'sifre'=>$this->input->post('sifre'),
		'email'=>$this->input->post('email'),
		'durum'=>$this->input->post('durum'),
		'yetki'=>$this->input->post('yetki')
		);
		
	$this->Database_Model->insert_data('kullanicilar',$data);
	$this->session->set_flashdata("sonuc","kayıt ekleme işlemi yapıldı");
	redirect(base_url()."admin/Kullanicilar");
	}
	function sil($id)
	{
		$sorgu=$this->db->query("DELETE FROM kullanicilar WHERE id=$id");
		$this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Yapıldı.");
		redirect(base_url()."admin/Kullanicilar");
	}
	function duzenle($id)
	{	
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Kullanici_duzenle',$data);
		$this->load->view('admin/Footer');
        $this->load->view('admin/Sidebar');
		
	}
	public function guncellekaydet($id)
	{
		$data=array(
		'adi'=>$this->input->post('adi'),
		'sifre'=>$this->input->post('sifre'),
		'email'=>$this->input->post('email'),
		'durum'=>$this->input->post('durum'),
		'yetki'=>$this->input->post('yetki')
		);
		
		$this->Database_Model->update_data('kullanicilar',$data ,$id);
		$this->session->set_flashdata("sonuc","kayıt güncelleme işlemi yapıldı");
		redirect(base_url()."admin/Kullanicilar");
	}
	
}
?>