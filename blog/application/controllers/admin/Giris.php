<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Giris extends CI_Controller {

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
        if($this->session->userdata('oturum2'))
        {

            redirect(base_url()."admin/Home");
        }
        $this->load->view('admin/Giris');

    }
    public function giris_yap()
    {

        $email=$this->input->post('email');
        $sifre=$this->input->post('sifre');
        if($email==null)
        {$this->load->view('admin/Giris');}

        $email=$this->security->xss_clean($email);
        $sifre=$this->security->xss_clean($sifre);

        $result=$this->Database_Model->giris_yap('kullanicilar',$email,$sifre);

        if($result)
        {

            $giris=array(
                'id'=>$result[0]->id,
                'email'=>$result[0]->email,
                'adi'=>$result[0]->adi,
                'yetki'=>$result[0]->yetki
            );

            $this->session->set_userdata('oturum2',$giris);
            $this->session->set_flashdata("hosgeldin",$result[0]->adi);
            redirect(base_url()."admin/Home");
        }
        else
        {

            $this->session->set_flashdata("giris_hata","gecersiz e-mail veya şifre tekrar deneyiniz");
            redirect(base_url()."admin/Giris");

        }
    }
    public function cikis_yap()
    {
        $this->session->unset_userdata('oturum2');
        redirect(base_url()."admin/Giris");

    }
}
?>