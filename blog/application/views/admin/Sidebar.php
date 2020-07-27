</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					 
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					<a href="<?=base_url()?>admin/Home"> <span id="logo"> <h1>Eşsiz Blog</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">
							<?php if ($this->session->userdata('oturum2') !== NULL) {
									$oturum2= $this->session->userdata('oturum2');  }?> 
									  <a href="#"><img src="<?=base_url()?>assets/admin/images/admin1.jpg"></a>
									  <a href="#"><span class=" name-caret"><?=$oturum2['adi']?></span></a>
									 <p><?=$oturum2['yetki']?></p>
									</div>
									
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="<?=base_url()?>admin/Home"><i class="fa fa-tachometer"></i> <span>Anasayfa</span></a></li>
										<li id="menu-academico" ><a href="<?=base_url()?>admin/Kullanicilar"><i class="fa fa-users"></i> <span> Kullanıcılar</span></a></li>
										 <li id="menu-academico" ><a href="<?=base_url()?>admin/Uyeler"><i class="fa fa-user"></i> <span>Üyeler</span></a></li>
										 <li id="menu-academico" ><a href="<?=base_url()?>admin/Yazilar"><i class="fa fa-file-text-o"></i> <span>Yazılar</span></a></li>
										  <li id="menu-academico" ><a href="<?=base_url()?>admin/Kategoriler"><i class="fa fa-th"></i> <span>Kategoriler</span></a></li>
									 
									<li><a href="<?=base_url()?>admin/Resimler"><i class="fa fa-caret-square-o-right"></i> <span>Galeri</span></a></li>
									<li><a href="<?=base_url()?>admin/Ayarlar"><i class="lnr lnr-pencil"></i> <span>Ayarlar</span></a></li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/vroom.css">
<script type="text/javascript" src="<?=base_url()?>assets/admin/js/vroom.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/admin/js/TweenLite.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/admin/js/CSSPlugin.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?=base_url()?>assets/admin/js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>