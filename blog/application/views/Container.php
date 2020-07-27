<!--- YAN TARAFI DA İÇEREN YERİN BAŞLANGICI -->
  <section id="contentSection">
    <div class="row">
	<!--- *BASS* CONTAINER -->
      <div class="col-lg-8 col-md-8 col-sm-8">
	  <!--- *BAS* CONTAINER -->
        <div class="left_content">
		<?php foreach($anakat as $rs){?>
			<div class="single_post_content">
			
              <h2><span><a href="<?=base_url()?>Kategoriler/Kategori_goster/<?=$rs->id?>"><?=$rs->adi?></a></span></h2>
              <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
			  <?php foreach($yazilar as $rs2){
					if($rs2->kategori_id==$rs->id){?>
                <li>
                  <figure class="bsbig_fig"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs2->id?>" class="featured_img"> 
				  <img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs2->resim?>"> <span class="overlay"></span> </a>
                    <figcaption> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs2->id?>"></a> </figcaption>
					
					<p><font face="Schoolbook" size="5" > <b><?=$rs2->adi?></b></font></p>
                    
                  </figure>
                </li>
				<?php }} ?>
              </ul>
            </div>
			<div class="single_post_content_right">
              <ul class="spost_nav">
			  <?php foreach($yazilar as $rs2){
					foreach($altkat as $rs3){
					if($rs2->kategori_id==$rs3->id){
						if($rs3->ust_id==$rs->id){?>
                <li>
                  <div class="media wow fadeInDown"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs2->id?>" class="media-left"> 
				  <img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs2->resim?>"> </a>
                    <div class="media-body"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs2->id?>" class="catg_title"> <?=$rs2->adi?></a> </div>
                  </div>
                </li>
					<?php }}}} ?>
    		 </ul>
            </div>
            </div>
			<?php } ?>
		  <!--- *BAS2* CONTAINER -->
		  <div class="single_post_content">
            <h2><span>Fotolar</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[0]->resim?>" title="<?=$resimler[0]->adi?>"> <img  src="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[0]->resim?>" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[1]->resim?>" title="<?=$resimler[1]->adi?>"> <img src="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[1]->resim?>" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[2]->resim?>" title="<?=$resimler[2]->adi?>"> <img src="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[2]->resim?>" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[3]->resim?>" title="<?=$resimler[3]->adi?>"> <img src="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[3]->resim?>" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[4]->resim?>" title="<?=$resimler[4]->adi?>"> <img src="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[4]->resim?>" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[5]->resim?>" title="<?=$resimler[5]->adi?>"> <img  src="<?=base_url()?>/uploads/galeriresimler/<?=$resimler[5]->resim?>" alt=""/> </a> </figure>
                </div>
              </li>
            </ul>
          </div>
		  <!--- *BIT2* CONTAINER -->
        </div>
		<!--- *BIT* CONTAINER -->
      </div>
	  <!--- *BITT* CONTAINER -->
	  <!--- *BAS* LEFT SIDEBAR -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
		  
            <h2><span>Son Yazılar</span></h2>
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
			  <?php foreach($kat as $rs){?>
                <ul>
                  <li class="cat-item"><a href="<?=base_url()?>Kategoriler/Kategori_goster/<?=$rs->id?>"><?=$rs->adi?></a></li>
                  
                </ul>
				<?php }?>
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
	  <!--- *BIT* LEFT SIDEBAR -->
    </div>
  </section>
  <!--- YAN TARAFI DA İÇEREN YERİN BITISI -->