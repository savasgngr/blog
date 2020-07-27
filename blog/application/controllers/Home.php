<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->database('');
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
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["anakat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar");
		$data["yazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler LIMIT 6");
		$data["resimler"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tiklanma DESC LIMIT 5");
		$data["popyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY RAND() LIMIT 10");
		$data["randomyazilar"]=$sorgu->result();
		$this->load->view('Header',$data);
		$this->load->view('Slider');
		$this->load->view('Container');
		$this->load->view('Footer');
		
	}
	
	public function wrongway()
	{
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=1");
		$data["ayarlar"]=$sorgu->result();
		$data["meta"]=$data["ayarlar"];
		$sorgu=$this->db->query("SELECT * FROM kategoriler");
		$data["kat"]=$sorgu->result();
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
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY RAND() LIMIT 10");
		$data["randomyazilar"]=$sorgu->result();
		$this->load->view('Header',$data);
		$this->load->view('404');
		$this->load->view('Footer');
	}
	function Bize_yaz()
	{
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=1");
		$data["ayarlar"]=$sorgu->result();
		$data["meta"]=$data["ayarlar"];
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
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tiklanma DESC LIMIT 5");
		$data["popyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tarih DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY RAND() LIMIT 6");
		$data["randomyazilar"]=$sorgu->result();
		
		$this->load->view('Header',$data);
		$this->load->view("Bize_yaz",$data);
		$this->load->view('Footer');
		
	}

	public function Bize_gonder(){
				$ip = $_SERVER['REMOTE_ADDR'];		
				$data=array(
				'adi'=>$this->input->post('adi'),
				'email'=>$this->input->post('email'),
				'tel'=>$this->input->post('tel'),
				'baslik'=>$this->input->post('baslik'),
				'mesaj'=>$this->input->post('mesaj'),
				'ip'=>$ip
				);
				$this->Database_Model->insert_data('iletisim',$data);
				$this->session->set_flashdata("sonuc","Mesajınızı aldık. En yakın zamanda dönüş yapacağız.");
				redirect(base_url()."Home");
	}

}
?>
