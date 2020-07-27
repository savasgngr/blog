
  
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
		 

			<ul class="user-profiles-list-basic">
			<?php foreach($uyeler as $rsuyeler){?>
				<li>
					<a href="<?=base_url()?>Yazarlar/Yazar_goster/<?=$rsuyeler->id?>" class="user-avatar">
						<img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/profilresimler/<?=$rsuyeler->resim?>" align="middle" hspace="20"/>
					</a>
					<p>
						<a href="<?=base_url()?>Yazarlar/Yazar_goster/<?=$rsuyeler->id?>"><?=$rsuyeler->adi?></a>
						<span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
						<span><?=$rsuyeler->aciklama?></span>
					</p>
					<?php $toplam=0;
					foreach($yazilar as $rsyazi){
					if($rsyazi->yazar_id==$rsuyeler->id){$toplam=$toplam+1;}
					}?>
					<a class="delete" href="<?=base_url()?>Yazarlar/Yazar_goster/<?=$rsuyeler->id?>"><?=$toplam?><i ></i></a>
					
				</li>
				<?php } ?>
			</ul>

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
