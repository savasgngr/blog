  <!--- *BAS* FOOTER -->
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Bir takım linkler</h2>
            <ul class="tag_nav">
			  <li><a href="<?=base_url()?>Home/Bize_yaz">Bize Yazın</a></li>
			
             
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Bir takım bilgiler</h2>
            <ul class="tag_nav">
              
			  <li><a href=""><h5>Tel: </h5>0<?=$ayarlar[0]->tel?></a></li>
			  <li><a href=""><h5>Email: </h5><?=$ayarlar[0]->email?></a></li>
			  <li><a href=""><h5>Adres: </h5><?=$ayarlar[0]->adres?> / <?=$ayarlar[0]->sehir?></a></li>
             
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2><?=$ayarlar[0]->adi?> Kimdir?</h2>
           <ul class="tag_nav">
              <li><a href=""><?=$ayarlar[0]->hakkimizda?></a></li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
	
      <p>&copy 2017 Eşsiz Blog . Tüm Hakları Saklıdır | <a href="https://facebook.com/essizbiradam" target="_blank"><strong>Hasan Akgül</strong></a> Tarafından Tasarlandı.</p>
    </div>
  </footer>
  <!--- *BIT* FOOTER -->
</div>
<!--- *BIT* SAYFA -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script> 
<script src="<?=base_url()?>assets/js/wow.min.js"></script> 
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script> 
<script src="<?=base_url()?>assets/js/slick.min.js"></script> 
<script src="<?=base_url()?>assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="<?=base_url()?>assets/js/jquery.newsTicker.min.js"></script> 
<script src="<?=base_url()?>assets/js/jquery.fancybox.pack.js"></script> 
<script src="<?=base_url()?>assets/js/custom.js"></script>
</body>
</html>