
  
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
			<?php foreach($kat as $rs){ if($yazi[0]->kategori_id==$rs->id){$yazikategori=$rs->adi;}}?>
			<?php foreach($uyeler as $rs2){ if($yazi[0]->yazar_id==$rs2->id){$yaziyazar=$rs2->adi;}}?>
              <li><a href="<?=base_url()?>">Anasayfa</a></li>
              <li><a href="<?=base_url()?>/Kategoriler/Kategori_goster/<?=$yazi[0]->kategori_id?>"><?=$yazikategori?></a></li>
              <li class="active"><?=$yazi[0]->adi?></li>
            </ol>
            <h1><?=$yazi[0]->adi?></h1>
            <div class="post_commentbox"> <a href="<?=base_url()?>/Yazarlar/Yazar_goster/<?=$yazi[0]->yazar_id?>"><i class="fa fa-user"><?=$yaziyazar?></i></a> 
			
			<span><i class="fa fa-fire" aria-hidden="true"><?=$yazi[0]->tiklanma?></i></span>
			<span><i class="fa fa-calendar"></i><?=$yazi[0]->tarih?></span>
			<a href="<?=base_url()?>/Kategoriler/Kategori_goster/<?=$yazi[0]->kategori_id?>"><i class="fa fa-tags"></i><?=$yazikategori?></a></div>
			<br/>&nbsp
			<img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$yazi[0]->resim?>" >
            <div class="single_page_content">
			
			<blockquote> <?=$yazi[0]->aciklama?> </blockquote>
            <p><strong><?=$yazi[0]->icerik?></strong></p>
            </div>
			
			<?php if ($this->session->userdata('oturum') !== NULL) {
				$oturum= $this->session->userdata('oturum');  ?>
			<div class="contact_area" id="yorumlar">
			
            <h2>Yorum Yaz</h2>
			<?php if ($this->session->flashdata("yorumsonuc")){?>
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">*</button>
				<?=$this->session->flashdata("yorumsonuc")?></div>
				<?php }?>
				
            <form action="<?=base_url()?>/Kategoriler/Yorum_gonder/<?=$yazi[0]->id?>/#yorumlar" class="contact_form" method="post" >
			
              <textarea name="icerik" class="form-control" cols="30" rows="5" placeholder="Yorum Yaz*"></textarea>
              <input type="submit" value="Gönder">
            </form>
			</div>
			<?php } ?>
			
			<h2>Yorumlar <i class="fa fa-comments"></i></h2>	
			<?php foreach($yaziyorumlar as $rsyorum){?>
			<div class="post_commentbox" >
			<?php foreach($uyeler as $rsuye){ if($rsyorum->uye_id==$rsuye->id){$yorumyazar=$rsuye->adi;}}?>
			<a href="<?=base_url()?>/Kategoriler/Yazar_goster/<?=$rsyorum->uye_id?>"><i class="fa fa-user"><?=$yorumyazar?></i></a>
			<span><i class="fa fa-calendar"></i><?=$rsyorum->tarih?></span>
			<?php if ($this->session->userdata('oturum') !== NULL) {
				$oturum= $this->session->userdata('oturum');
				if($rsyorum->uye_id==$oturum['id']){?>
				<span><a  onclick="return confirm('Yorumu silmek istediğinizden emin misiniz ?');" href="<?=base_url()?>/Kategoriler/Yorum_sil/<?=$rsyorum->id?>"> <i class="fa fa-trash-o"></i> Sil</a></span><?php }}?>
			<ul>
				<li><span><blockquote > <?=$rsyorum->icerik?> </blockquote></span>
				
				</li>
				
				
			</ul>
			</div>
			<?php } ?>
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
                  <div class="media-body"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>" class="catg_title"> <?=$rs->adi?></a> &nbsp  
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
