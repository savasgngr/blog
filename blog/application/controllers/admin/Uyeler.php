<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {

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
		$query=$this->db->get('uyeler');
		$data["veri"]=$query->result();
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Uye_listesi',$data);
		$this->load->view('admin/Footer');
		$this->load->view('admin/Sidebar');
	}
	function goster($id)
	{
		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view("admin/Uye_goster",$data);
	}
	public function ekle()
	{
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Uye_ekle');
	}
	public function eklekaydet()
	{
		$data=array(
		'adi'=>$this->input->post('adi'),
		'sifre'=>$this->input->post('sifre'),
		'email'=>$this->input->post('email'),
		'tel'=>$this->input->post('tel'),
		'adres'=>$this->input->post('adres'),
		'sehir'=>$this->input->post('sehir'),
		'cinsiyet'=>$this->input->post('cinsiyet'),
		'aciklama'=>$this->input->post('aciklama'),
		'durum'=>$this->input->post('durum'),
		'yetki'=>$this->input->post('yetki')
		);
		
		$this->Database_Model->insert_data('uyeler',$data);
		$this->session->set_flashdata("sonuc","kayıt ekleme işlemi yapıldı");
		redirect(base_url()."admin/Uyeler");
	}
	function sil($id)
	{
		$sorgu=$this->db->query("DELETE FROM uyeler WHERE id=$id");
		$this->session->set_flashdata("sonuc","Kayıt Silme İşlemi Yapıldı.");
		redirect(base_url()."admin/Uyeler");
	}
	function duzenle($id)
	{
		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view("admin/Uye_duzenle",$data);
	}
	public function guncellekaydet($id)
	{
		$data=array(
		'adi'=>$this->input->post('adi'),
		'sifre'=>$this->input->post('sifre'),
		'email'=>$this->input->post('email'),
		'tel'=>$this->input->post('tel'),
		'adres'=>$this->input->post('adres'),
		'sehir'=>$this->input->post('sehir'),
		'cinsiyet'=>$this->input->post('cinsiyet'),
		'aciklama'=>$this->input->post('aciklama'),
		'durum'=>$this->input->post('durum'),
		'yetki'=>$this->input->post('yetki')
		);
		
		$this->Database_Model->update_data('uyeler',$data ,$id);
		$this->session->set_flashdata("sonuc","kayıt güncelleme işlemi yapıldı");
		redirect(base_url()."admin/Uyeler");
	}
	
}
?>