
<!DOCTYPE HTML>
<html>
<head>
<title>Eşsiz Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?=base_url()?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="<?=base_url()?>assets/admin/js/jquery-1.10.2.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/amcharts.js"></script>	
<script src="<?=base_url()?>assets/admin/js/serial.js"></script>	
<script src="<?=base_url()?>assets/admin/js/light.js"></script>	
<script src="<?=base_url()?>assets/admin/js/radar.js"></script>	
<link href="<?=base_url()?>assets/admin/css/barChart.css" rel='stylesheet' type='text/css' />
<link href="<?=base_url()?>assets/admin/css/fabochart.css" rel='stylesheet' type='text/css' />

<!--clock init-->
<script src="<?=base_url()?>assets/admin/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="<?=base_url()?>assets/admin/js/skycons.js"></script>

<script src="<?=base_url()?>assets/admin/js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value="">
											</form>
									<div class="close"><img src="<?=base_url()?>assets/admin/images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div style="align:right;" class="profile_details_left">
								
									<ul class="nofitications-dropdown">
											<li class="dropdown note" ><a class="tooltips" href="<?=base_url()?>admin/Giris/cikis_yap"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
											
									       <li  class="dropdown note">
										  
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<?php $toplam=0;
																						foreach($mesaj as $rsmesaj){
																						if($rsmesaj->durum==0){$toplam=$toplam+1;}
																						}?>
											<i class="fa fa-envelope-o"></i> <span class="badge"><?=$toplam?></span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3><?=$toplam?> tane okunmayan mesaj var</h3> 
															</div>
														</li>
														<?php foreach($mesaj as $rsmesaj){ 
														if($rsmesaj->durum==0){?>
														<li><a href="<?=base_url()?>admin/Iletisimmesajlar/Mesaj_goster/<?=$rsmesaj->id?>">
														 
														   <div class="notification_desc">
															<p><?=$rsmesaj->baslik?></p>
															<p><span><?=$rsmesaj->tarih?></span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														<?php }}?>
														<li>
															<div class="notification_bottom">
																<a href="<?=base_url()?>admin/Iletisimmesajlar">Bütün mesajları gör</a>
															</div> 
														</li>
													</ul>
										</li>		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->  