<!--- *BAS* SLIDER -->
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
		<?php foreach($sonyazilar as $rs){?>
          <div class="single_iteam"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>"> 
		  <img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs->resim?>" alt=""></a>
		  
            <div class="slider_article">
			<?php foreach($kat as $rs2){
				if($rs->kategori_id==$rs2->id){?>
			  <li style="list-style-type: none;" class="cat-item"><a href="<?=base_url()?>Kategoriler/Kategori_goster/<?=$rs2->id?>"><?=$rs2->adi?></a></li><br/>
			<?php }}?>
			  <h2><a class="slider_tittle" href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>"><?=$rs->adi?></a></h2>
              <p><?=$rs->aciklama?></p>
            </div>
          </div>
        <?php }?>
        </div>
      </div>
	 <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Popüler Yazılar</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
			<?php foreach($popyazilar as $rs){?>
              <li>
                <div class="media"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>" class="media-left"> 
				<img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" alt="" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs->resim?>"> </a>
                  <div class="media-body"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs->id?>" class="catg_title"><?=$rs->adi?></a> &nbsp &nbsp &nbsp
				  <i class="fa fa-fire" aria-hidden="true"><?=$rs->tiklanma?></i></div>
				  
                </div>
              </li>
			  <?php }?>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--- *BIT* SLIDER -->