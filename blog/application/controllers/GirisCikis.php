<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GirisCikis extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
        $this->load->Model('Database_Model');
        
        


    }

    public function index()
    {
        
        $this->load->view('Home');

    }
    public function giris_yap()
    {

        $email=$this->input->post('email');
        $sifre=$this->input->post('sifre');
        if($email==null)
        {$this->load->view('Home');}

        $email=$this->security->xss_clean($email);
        $sifre=$this->security->xss_clean($sifre);

        $result=$this->Database_Model->giris_yap('uyeler',$email,$sifre);

        if($result)
        {

            $giris=array(
			
                'id'=>$result[0]->id,
				'adi'=>$result[0]->adi,
				'sifre'=>$result[0]->sifre,
                'email'=>$result[0]->email,
                'tel'=>$result[0]->tel,
				'adres'=>$result[0]->adres,
				'sehir'=>$result[0]->sehir,
				'cinsiyet'=>$result[0]->cinsiyet,
				'yetki'=>$result[0]->yetki,
				'durum'=>$result[0]->durum,
                'resim'=>$result[0]->resim,
				'aciklama'=>$result[0]->aciklama,
				'bas_tarih'=>$result[0]->bas_tarih,
				'bitis_tarih'=>$result[0]->bitis_tarih
            );

            $this->session->set_userdata('oturum',$giris);
			$oturum=$this->session->userdata('oturum');
            $this->session->set_flashdata("sonuc","Hoşgeldin ".$oturum['adi']);
            redirect(base_url()."Home");
        }
        else
        {

            $this->session->set_flashdata("sonuc","Geçersiz email veya şifre. Tekrar deneyin.");
            redirect(base_url()."Home");

        }
    }
    public function cikis_yap()
    {
        $this->session->unset_userdata('oturum');
		$this->session->set_flashdata("sonuc","Bir daha bekleriz");
        redirect(base_url()."Home");

    }
	function Uye_kayit()
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
		$this->load->view("Kayit_yap",$data);
		$this->load->view('Footer');
		
	}
	public function do_upload($name)
    {
       if($_FILES[$name]['size']>0) {
            $type = explode('.', $_FILES[$name]["name"]);
            $type = $type[count($type) - 1];
            $dosyaAdi = uniqid(rand()) . '.' . $type;
            $url = "./uploads/profilresimler/". $dosyaAdi;
            if (in_array($type, array("jpg", "jpeg", "png")))
                if (is_uploaded_file($_FILES[$name]["tmp_name"]))
                    if (move_uploaded_file($_FILES[$name]["tmp_name"], $url))
                        return $dosyaAdi;
            return "";
        }else
            return "";
	}
	
	public function Uye_kaydet()
    {
		$email=$this->input->post('email');
		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE email='$email'");
		$data["uye"]=$sorgu->result();
		if ($data['uye']!=NULL){
			$this->session->set_flashdata("sonuc","Bu email adresi kullanımdadır. Şifrenizi mi unuttunuz?");
			redirect(base_url()."GirisCikis/Kayit_yap");}
		elseif($this->input->post('sifre')!= $this->input->post('sifre2')){
				$this->session->set_flashdata("sonuc","Yazdığınız şifreler eşleşmiyor");
				redirect(base_url()."GirisCikis/Kayit_yap");}
		else{
				$dosyaAdi=$this->do_upload("userfile");
				$data=array(
				'resim'=>$dosyaAdi,
				'adi'=>$this->input->post('adi'),
				'sifre'=>$this->input->post('sifre'),
				'email'=>$this->input->post('email'),
				'tel'=>$this->input->post('tel'),
				'adres'=>$this->input->post('adres'),
				'sehir'=>$this->input->post('sehir'),
				'cinsiyet'=>$this->input->post('cinsiyet'),
				'aciklama'=>$this->input->post('aciklama')
				
				);
				$this->Database_Model->insert_data('uyeler',$data);
				$this->session->set_flashdata("sonuc","Kaydınız başarıyla yapıldı.");
				redirect(base_url()."Home");
			}
    }
	
}
?>