<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yazarlar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
        $this->load->Model('Database_Model');
        
        
        /*if($this->session->userdata('oturum'))
        {
			$oturum= $this->session->userdata('oturum');
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
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tiklanma DESC LIMIT 5");
		$data["popyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY RAND() LIMIT 6");
		$data["randomyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM uyeler");
		$data["uyeler"]=$sorgu->result(); 
		
		$this->load->view('Header',$data);
		$this->load->view('Uyeler',$data);
		$this->load->view('Footer');
		
	
		
	}
	
	public function Yazar_goster($id)
	{
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=1");
		$data["ayarlar"]=$sorgu->result();
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
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tarih DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY RAND() LIMIT 6");
		$data["randomyazilar"]=$sorgu->result();
		
		$sorgu=$this->db->query("SELECT * FROM(SELECT * FROM yazilar WHERE yazar_id=$id) yazilar ORDER BY id DESC");
		$data["uyeyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
		$data["uye"]=$sorgu->result();
		$data["meta"]=$data["uye"];
		if ($data['uye']==NULL){redirect(base_url()."Home");}
		$this->load->view('Header',$data);
		$this->load->view("Yazar_goster",$data);
		$this->load->view('Footer');
		
	}
	function Yazi_yaz()
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
		$this->load->view("Yazi_yaz",$data);
		$this->load->view('Footer');
		
	}
	public function do_upload($name)
    {
       if($_FILES[$name]['size']>0) {
            $type = explode('.', $_FILES[$name]["name"]);
            $type = $type[count($type) - 1];
            $dosyaAdi = uniqid(rand()) . '.' . $type;
            $url = "./uploads/yaziresimler/". $dosyaAdi;
            if (in_array($type, array("jpg", "jpeg", "png")))
                if (is_uploaded_file($_FILES[$name]["tmp_name"]))
                    if (move_uploaded_file($_FILES[$name]["tmp_name"], $url))
                        return $dosyaAdi;
            return "";
        }else
            return "";
	}
	
	public function Yazi_gonder($id)
	{
		
				$dosyaAdi=$this->do_upload("userfile");
				$data=array(
				'resim'=>$dosyaAdi,
				'adi'=>$this->input->post('adi'),
				'keywords'=>$this->input->post('keywords'),
				'aciklama'=>$this->input->post('aciklama'),
				'icerik'=>$this->input->post('icerik'),
				'kategori_id'=>$this->input->post('kategori'),
				'yazar_id'=>$id
				);
				$this->Database_Model->insert_data('yazilar',$data);
				$this->session->set_flashdata("sonuc","Yazı kaydedildi");
				redirect(base_url()."Yazarlar/Yazar_goster/$id");

	}
	public function Yazi_duzenle($id)
	{
		$sorgu=$this->db->query("SELECT * FROM yazilar WHERE id=$id");
		$data["yazi"]=$sorgu->result();
		$data["meta"]=$data["yazi"];
		if ($data['yazi']==NULL){redirect(base_url()."Home");}
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=1");
		$data["ayarlar"]=$sorgu->result();
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
		$this->load->view("Yazi_duzenle",$data);
		$this->load->view('Footer');
		
	}

	public function Yazi_sil($id)
	{
		$oturum=$this->session->userdata('oturum');
		$yazar_id=$oturum['id'];
		$sorgu=$this->db->query("DELETE FROM yazilar WHERE id=$id");
		$this->session->set_flashdata("sonuc","Yazı silindi");
		redirect(base_url()."Yazarlar/Yazar_goster/$yazar_id");
	}
	public function Yazi_guncelle($id)
	{
				$oturum=$this->session->userdata('oturum');
				$yazar_id=$oturum['id'];
				$data=array(
					
					'adi'=>$this->input->post('adi'),
					'keywords'=>$this->input->post('keywords'),
					'aciklama'=>$this->input->post('aciklama'),
					'icerik'=>$this->input->post('icerik'),
					'kategori_id'=>$this->input->post('kategori'),
					);
				if($_FILES['userfile']['size'] > 0) {
					$dosyaAdi=$this->do_upload("userfile");
					$data=array('resim'=>$dosyaAdi);
				}
				$this->Database_Model->update_data('yazilar',$data,$id);
				$this->session->set_flashdata("sonuc","Yazı Düzenlendi");
				redirect(base_url()."Yazarlar/Yazar_goster/$yazar_id");
	}
	public function Uye_duzenle($id)
	{	
		$oturum=$this->session->userdata('oturum');
		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
		$data["uyeler"]=$sorgu->result();
		$data["meta"]=$data["uyeler"];
		if($data['uyeler']==NULL){redirect(base_url()."Home");}
		if($oturum['id']!=$id){redirect(base_url()."Home");}
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=1");
		$data["ayarlar"]=$sorgu->result();
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
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY tarih DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY RAND() LIMIT 6");
		$data["randomyazilar"]=$sorgu->result();
		
		$this->load->view('Header',$data);
		$this->load->view("Uye_duzenle",$data);
		$this->load->view('Footer');
		
	}
	public function do_uploadprofil($name)
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
	public function Uye_guncelle($id)
    {	
		$oturum=$this->session->userdata('oturum');
		$email=$this->input->post('email');
		if($oturum['email']!=$email){
			$sorgu=$this->db->query("SELECT * FROM uyeler WHERE email='$email'");
			$data["uye"]=$sorgu->result();
			if ($data['uye']!=NULL){
			$this->session->set_flashdata("sonuc","Bu email adresi kullanımdadır. Şifrenizi mi unuttunuz, Bu ikinci hesap mı? :)");
			redirect(base_url()."Yazarlar/Uye_duzenle/$id");}
		}
		
		if($this->input->post('sifre')!= $this->input->post('sifre2')){
				$this->session->set_flashdata("sonuc","Yazdığınız şifreler eşleşmiyor");
				redirect(base_url()."Yazarlar/Uye_duzenle/$id");}
		else{
				
				$data=array(
				
				'adi'=>$this->input->post('adi'),
				'sifre'=>$this->input->post('sifre'),
				'email'=>$this->input->post('email'),
				'tel'=>$this->input->post('tel'),
				'adres'=>$this->input->post('adres'),
				'sehir'=>$this->input->post('sehir'),
				'cinsiyet'=>$this->input->post('cinsiyet'),
				'aciklama'=>$this->input->post('aciklama')
				
				);
				if($_FILES['userfile']['size'] != 0) {
					$dosyaAdi=$this->do_uploadprofil("userfile");
					$data=array('resim'=>$dosyaAdi);
				}
				
				$this->Database_Model->update_data('uyeler',$data,$id);
				$girsifre=$this->input->post('sifre');
				$giremail=$this->input->post('email');
				$result=$this->Database_Model->giris_yap('uyeler',$giremail,$girsifre);
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
						$this->session->set_flashdata("sonuc","Profil güncellemeniz başarıyla yapıldı.");
						redirect(base_url()."Yazarlar/Yazar_goster/$id");
				}
		}
	
	}
	
	

}
?>
