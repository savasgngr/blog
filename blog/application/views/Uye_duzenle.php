<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
			<div class="single_post_content">
				<div class="contact_area">
				<h2>Kayıt olun </h2>
				
				<h4><strong>Lütfen bilgileri eksik doldurmamaya dikkat ediniz.</strong></h4>
				<?php $oturum=$this->session->userdata('oturum');?>
				<br/><form action="<?=base_url()?>Yazarlar/Uye_guncelle/<?=$oturum['id']?>" class="contact_form" enctype="multipart/form-data" method="post">
				  <h6>Profil için bir resim yükle:</h6> <input type="file" name="userfile" ><br/>
				  <input class="form-control" name="adi" type="text" value="<?=$oturum['adi']?>" placeholder="Ad Soyad*" required>  
				  <input class="form-control" name="sifre" type="text" value="<?=$oturum['sifre']?>" placeholder="Şifre*" required>
				  <input class="form-control" name="sifre2" type="text" value="<?=$oturum['sifre']?>" placeholder="Şifre Tekrar*" required>
				  <input class="form-control" name="email" type="email" value="<?=$oturum['email']?>" placeholder="Email*" required>
				  <input class="form-control" name="tel" type="text" value="<?=$oturum['tel']?>" placeholder="Telefon*">
				  <input class="form-control" name="adres" type="text" value="<?=$oturum['adres']?>" placeholder="Adres*">
				  <input class="form-control" name="sehir" type="text" value="<?=$oturum['sehir']?>" placeholder="Şehir*" required>
				  <textarea class="form-control" name="aciklama" cols="30" rows="10" placeholder="Hakkınızda birşeyler yazın...*"><?=$oturum['aciklama']?></textarea>
				  <select name="cinsiyet" required>
					  <option  value="<?=$oturum['cinsiyet']?>" ><?=$oturum['cinsiyet']?></option>
					  <option  value="Kadın">Kadın</option>
					  <option  value="Erkek">Erkek</option>
				  </select>
				  <input  type="submit" value="Profilini güncelle">
				</form>
			  </div>
		
            </div>
			
           
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://tr.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="related_post">
              <h2>Dikkatinizi Çeker Belki <i class="fa fa-thumbs-o-up"></i></h2>
			  <?php foreach($randomyazilar as $rs){?>
              <ul class="spost_nav wow fadeInDown animated">
                <li>
                  <div class="media"> <a class="media-left" href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>"> 
				  <img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs->resim?>"> </a>
                    <div class="media-body"> <a class="catg_title" href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>"> <?=$rs->adi?></a> </div>
                  </div>
                </li>
              </ul>
			  <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
		
          <div class="single_sidebar">
		  
            <h2><span>Popüler Yazılar</span></h2>
			<?php foreach($popyazilar as $rs){?>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>" class="media-left"> 
				<img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs->resim?>"> </a>
                  <div class="media-body"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>" class="catg_title"> <?=$rs->adi?></a>&nbsp  
				  <i class="fa fa-fire" aria-hidden="true"><?=$rs->tiklanma?></i></div>
                </div>
              </li>
			</ul>
			<?php }?>
			
          </div>
		  <div class="single_sidebar">
		  
            <h2><span>Yeni Yazılar</span></h2>
			<?php foreach($sonyazilar as $rs){?>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>" class="media-left"> 
				<img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs->resim?>"> </a>
                  <div class="media-body"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>" class="catg_title"> <?=$rs->adi?></a> </div>
                </div>
              </li>
			</ul>
			<?php }?>
          </div>
		  
		  
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Kategoriler</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Videolar</a></li>
              
            </ul>
            <div class="tab-content">
			
              <div role="tabpanel" class="tab-pane active" id="category">
			  
                <ul>
				<?php foreach($kat as $rs){?>
                  <li class="cat-item"><a href="<?=base_url()?>Kategoriler/Kategori_goster/<?=$rs->id?>"><?=$rs->adi?></a></li>
                  <?php }?>
                </ul>
              </div>
			
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>

