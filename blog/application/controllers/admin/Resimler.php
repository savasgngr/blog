<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resimler extends CI_Controller {
	
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
		$query=$this->db->get('resimler');
		$data["veri"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Resimler_listesi',$data);
		$this->load->view('admin/Footer');
		$this->load->view('admin/Sidebar');
		
		
	}
	public function ekle()
	{
		
		$query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$query=$this->db->get('resimler');
		$data["veri"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Resim_ekle');
		$this->load->view('admin/Footer');
		$this->load->view('admin/Sidebar');
		
		
	}
	public function do_upload($name)
    {
       if($_FILES[$name]['size']>0) {
            $type = explode('.', $_FILES[$name]["name"]);
            $type = $type[count($type) - 1];
            $dosyaAdi = uniqid(rand()) . '.' . $type;
            $url = "./uploads/galeriresimler/" . $dosyaAdi;
            if (in_array($type, array("jpg", "jpeg", "png")))
                if (is_uploaded_file($_FILES[$name]["tmp_name"]))
                    if (move_uploaded_file($_FILES[$name]["tmp_name"], $url))
                        return $dosyaAdi;
            return "";
        }else
            return "";
	}
	public function eklekaydet()
	{
		$dosyaAdi=$this->do_upload("resim");
		$data=array(
		'adi'=>$this->input->post('resim_adi'),
		'resim'=>$dosyaAdi
		);
		
	$this->Database_Model->insert_data('resimler',$data);
	$this->session->set_flashdata("sonuc","resim ekleme işlemi yapıldı");
	redirect(base_url()."admin/Resimler");
	}
	
	function sil($id)
	{
		$this->db->query("DELETE FROM resimler WHERE id=$id");
		$this->session->set_flashdata("sonuc","resim silme işlemi yapıldı");
		redirect(base_url()."admin/Resimler");
		
		
	}
	
	
	
}