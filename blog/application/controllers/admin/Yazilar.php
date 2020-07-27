<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yazilar extends CI_Controller {

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
		$query=$this->db->query("SELECT * FROM yazilar ORDER BY id DESC");
		$data["yazilar"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Yazilar',$data);
		$this->load->view('admin/Footer');
		$this->load->view('admin/Sidebar');
	}
	public function Yazi_goster($id)
    {
        $query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$query=$this->db->query("SELECT * FROM yazilar WHERE id=$id");
		$data["yazigor"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Yazi_goster',$data);
		$this->load->view('admin/Footer');
		$this->load->view('admin/Sidebar');
    }
	public function Yazi_sil($id)
    {
		$sorgu=$this->db->query("DELETE FROM yazilar WHERE id=$id");
		$this->session->set_flashdata("sonuc","Yazı silindi");
		redirect(base_url()."admin/Yazilar");
    }


}
?>