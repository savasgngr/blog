<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisimmesajlar extends CI_Controller {

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
		$query=$this->db->query("SELECT * FROM iletisim ORDER BY durum ASC");
		$data["mesaj"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Iletisimmesajlar',$data);
		$this->load->view('admin/Footer');
		$this->load->view('admin/Sidebar');
	}
	public function Mesaj_goster($id)
    {
        $query=$this->db->get('iletisim');
		$data["mesaj"]=$query->result();
		$query=$this->db->query("SELECT * FROM iletisim WHERE id=$id");
		$data["mesajgor"]=$query->result();
		$this->load->view('admin/Header',$data);
		$this->load->view('admin/Mesaj_goster',$data);
		$this->load->view('admin/Footer');
		$this->load->view('admin/Sidebar');
    }
	public function Mesaj_cevapla($id)
    {
				$oturum2=$this->session->userdata('oturum2');
				$admin_adi=$oturum2['id'];
				$data=array(
					
					'cevap'=>$this->input->post('cevap'),
					'durum'=>1,
					'cevaplayan'=>$admin_adi
					
				);
				$this->Database_Model->update_data('iletisim',$data,$id);
				$this->session->set_flashdata("sonuc","İletişim mesajı cevaplandı");
				redirect(base_url()."admin/Iletisimmesajlar");
    }


}
?>