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
        
        
        /*if(!$this->session->userdata('oturum'))
        {
            $this->session->flashdata("giris_hata","lütfen giriş yapınız");
            redirect(base_url()."admin/Giris");
        }*/
	}
	public function index()
	{
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=1");
		$data["ayarlar"]=$sorgu->result();
		$data["meta"]=$data["ayarlar"];
		$sorgu=$this->db->query("SELECT * FROM kategoriler");
		$data["kat"]=$sorgu->result();
		if ($data['kat']==NULL){redirect(base_url()."Home");}
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["anakat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar");
		$data["yazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tiklanma DESC LIMIT 5");
		$data["popyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY RAND() LIMIT 6");
		$data["randomyazilar"]=$sorgu->result();
		$this->load->view('Header',$data);
		$this->load->view("Kategoriler",$data);
		$this->load->view('Footer');
		
	
		
	}
	
	public function Kategori_goster($id)
	{
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=1");
		$data["ayarlar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler");
		$data["kat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE id=$id");
		$data["mevcutkat"]=$sorgu->result();
		$data["meta"]=$data["mevcutkat"];
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["anakat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar");
		$data["yazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar WHERE kategori_id=$id");
		$data["katyazilar"]=$sorgu->result();
		if ($data['katyazilar']==NULL){redirect(base_url()."Home");}
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tiklanma DESC LIMIT 5");
		$data["popyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tarih DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY RAND() LIMIT 6");
		$data["randomyazilar"]=$sorgu->result();
		$this->load->view('Header',$data);
		$this->load->view("Kategori_goster",$data);
		$this->load->view('Footer');
		
	}
	function Yazi_goster($id)
	{
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=1");
		$data["ayarlar"]=$sorgu->result();
		$sorgu=$this->db->query("UPDATE yazilar SET tiklanma = tiklanma + 1  WHERE id=$id");
		$sorgu=$this->db->query("SELECT * FROM yazilar WHERE id=$id");
		$data["yazi"]=$sorgu->result();
		$data["meta"]=$data["yazi"];
		if ($data['yazi']==NULL){redirect(base_url()."Home");}
		$sorgu=$this->db->query("SELECT * FROM kategoriler");
		$data["kat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM uyeler");
		$data["uyeler"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["anakat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar");
		$data["yazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM (SELECT * FROM yorumlar WHERE yazi_id=$id) yorumlar ORDER BY id DESC");
		$data["yaziyorumlar"]=$sorgu->result();
		
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tiklanma DESC LIMIT 5");
		$data["popyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tarih DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY RAND() LIMIT 6");
		$data["randomyazilar"]=$sorgu->result();
		$this->load->view('Header',$data);
		$this->load->view("Yazi_goster",$data);
		$this->load->view('Footer');
		
	}
	public function Yorum_gonder($yorumlanan)
	{
		$oturum= $this->session->userdata('oturum');
		$data=array(
		'icerik'=>$this->input->post('icerik'),
		'yazi_id'=>$yorumlanan,
		'uye_id'=>$oturum['id']
		);
		
	$this->Database_Model->insert_data('yorumlar',$data);
	$this->session->set_flashdata("yorumsonuc","Yorum kaydedildi");
	redirect(base_url()."Kategoriler/Yazi_goster/$yorumlanan/#yorumlar");
	}
	public function Yorum_sil($id)
	{
		$query = $this->db->query("SELECT * FROM yorumlar WHERE id=$id");

		foreach ($query->result_array() as $row)
		{
				$yazi_id= $row['yazi_id'];
		}
		$sorgu=$this->db->query("DELETE FROM yorumlar WHERE id=$id");
		$this->session->set_flashdata("yorumsonuc","Yorum silindi");
		redirect(base_url()."Kategoriler/Yazi_goster/$yazi_id/#yorumlar");
	}


}
?>
