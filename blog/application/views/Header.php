<!DOCTYPE html>
<html>
<head>
<title><?=$meta[0]->adi?></title>
<meta name="description" content="<?=$meta[0]->aciklama?>">
<meta name="keywords" content="<?=$meta[0]->keywords?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/font.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
<script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?=base_url()?>assets/profil/css/user-profiles-lists/user-profiles-list-basic.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">



<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!--- *BAS* SAYFA -->
<div class="container">
<!--- *BAS* HEADER -->

 <!--- *BIT* HEADER -->
  <!--- *BAS* DROP DOWN HEADER -->

  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
	  
        <ul class="nav navbar-nav main_nav">
		
          <li class="active"><a href="<?=base_url()?>Home"><span class="fa fa-home desktop-home fa-fw"></span><span class="mobile-show"></span></a></li>
          <li class="active"><a href="<?=base_url()?>Kategoriler"><i class="fa fa-th-list fa-fw" aria-hidden="true"></i></a></li>
		  <li class="active"><a href="<?=base_url()?>Yazarlar"><i class="fa fa-users fa-fw" aria-hidden="true"></i></a></li>
		  
		
		  <?php foreach($anakat as $rs){?>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?=$rs->adi?></a>
            <ul class="dropdown-menu" role="menu">
			  <?php foreach($altkat as $rs2)
					if($rs2->ust_id==$rs->id)
					{
			  {?>
              <li><a href="<?=base_url()?>Kategoriler/Kategori_goster/<?=$rs2->id?>"><?=$rs2->adi?></a></li>
					<?php }} ?>
            </ul>
          </li>
		  <?php } ?>
          </li>
		  
		 <?php if ($this->session->userdata('oturum') !== NULL) {
				$oturum= $this->session->userdata('oturum');  ?>
				<li > &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				</li>
				<div class="btn-group" >
				  <a class="btn btn-primary" href="<?=base_url()?>Yazarlar/Yazar_goster/<?=$oturum['id']?>"><i class="fa fa-user fa-fw"></i><?=$oturum['adi']?></a>
				  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
					<span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
				  </a>
				  <ul class="dropdown-menu" >
				  <?php if($oturum['yetki']=="yazar"){?>
					<li><a href="<?=base_url()?>Yazarlar/Yazi_yaz"><i class="fa fa-pencil fa-fw"></i>&nbsp Yazı Yaz</a></li>
					<li><a href="<?=base_url()?>Yazarlar/Yazar_goster/<?=$oturum['id']?>"><i class="fa fa-list-alt"></i>&nbsp Yazılarım</a></li>
					<?php } ?>
					<li><a href="<?=base_url()?>Yazarlar/Uye_duzenle/<?=$oturum['id']?>"><i class="fa fa-cog"></i>&nbsp Ayarlar</a></li>
					<li class="divider"></li>
					<li><a class="btn btn-danger" href="<?=base_url()?>GirisCikis/cikis_yap">
					<i class="fa fa-sign-out"></i>&nbsp Çıkış Yap</a></li>
				  </ul>
				</div>
				
				
		<?php }  else {?>
				<li > &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </li>
				<li class="dropdown">
				<form action="<?=base_url()?>GirisCikis/giris_yap" method="post" class="contact_form">
            
				  <input type="email" name="email" placeholder="Email*">
				  <input type="password" name="sifre" placeholder="Şifre*">
				  <input type="submit" value="Giriş Yap">
				</form>
			  </li>
			  <li>&nbsp
			  </li>
			  
			  <li class="dropdown">
				<form action="<?=base_url()?>GirisCikis/Uye_kayit" class="contact_form"> 
				  <input type="submit" value="Kayıt Ol">
				</form>
			  </li><?php } ?>
        </ul>
		
      </div>
    </nav>
  </section>
  <?php if ($this->session->flashdata("sonuc")){?>
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">*</button>
				<?=$this->session->flashdata("sonuc")?></div>
				<?php }?>
  
  <!--- *BİT* DROP DOWN HEADER -->
  <!--- *BAS* SICAK GELİŞMELER VE TWİTTER FACEBOOK VS -->
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Flaş Yazılar</span>
          <ul id="ticker01" class="news_sticker">
		  <?php foreach($randomyazilar as $rs){?>
            <li><a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>">
			<i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i>&nbsp;<?=$rs->adi?></a></li>
		 <?php } ?>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--- *BİT* SICAK GELİŞMELER VE TWİTTER FACEBOOK VS -->