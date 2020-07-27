<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
			
			<div  class="single_post_content">
			
			<ul class="user-profiles-list-basic" >
			
				<li  >
					<a href="<?=base_url()?>Yazarlar/Yazar_goster/<?=$uye[0]->id?>"  class="user-avatar">
						<img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/profilresimler/<?=$uye[0]->resim?>"/>
					</a>
					<p>
						<a href="<?=base_url()?>Yazarlar/Yazar_goster/<?=$uye[0]->id?>"><?=$uye[0]->adi?></a>
						<span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp						
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
						<span><?=$uye[0]->aciklama?></span>
					</p>
					<?php $toplam=0;
					foreach($yazilar as $rsyazi){
					if($rsyazi->yazar_id==$uye[0]->id){$toplam=$toplam+1;}
					}?>
					<a class="delete" href="<?=base_url()?>Yazarlar/Yazar_goster/<?=$uye[0]->id?>"><?=$toplam?><i ></i></a>
				</li>
				
			</ul>
			
			
	
		
              <h2><span><?=$uye[0]->adi?> YAZILARI</span></h2>
			
              <ul class="spost_nav">
			  <?php foreach($uyeyazilar as $rs2){ ?>
                <li>
                  <div class="media wow fadeInDown"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs2->id?>" class="media-left"> 
				  <img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs2->resim?>"> </a>
                    
					<div class="media-body"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs2->id?>" class="catg_title"> <?=$rs2->adi?></a>
			
					<?php if ($this->session->userdata('oturum') !== NULL) {
							$oturum= $this->session->userdata('oturum'); 
						  if ($rs2->yazar_id==$oturum['id']){?>
					
					
					
						<br/><br/><a href="<?=base_url()?>Yazarlar/Yazi_sil/<?=$rs2->id?>" 
									onclick="return confirm('<?=$rs2->adi?> \n Yazısını silmek istediğinizden emin misiniz ?');" class="btn btn-danger" >
								<i class="fa fa-trash-o fa-lg"></i>&nbsp Sil</a>
							<a class="btn btn-primary" href="<?=base_url()?>Yazarlar/Yazi_duzenle/<?=$rs2->id?>" aria-label="Skip to main navigation">
								  <i class="fa fa-pencil-square-o " aria-hidden="true">&nbsp Düzenle</i>
							</a>
						  <?php }} ?>		
				
					</div>
					
                  </div>
                </li>
			  <?php } ?>
    		 </ul>
           
		
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

