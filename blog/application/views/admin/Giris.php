
<!DOCTYPE HTML>
<html>
<head>
<title>Eşsiz Blog Admin Giriş</title>
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
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page">Eşsiz Blog</h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Admin Giriş</h3>
                                                            <?php if ($this->session->flashdata("giris_hata"))
                                                            {
                                                                ?>
                                                                <div class="alert alert-success">
                                                                    <button type="button" class="close" data-dismiss="alert">*</button>
                                                                    <strong>Dikkat!!: </strong><?=$this->session->flashdata("giris_hata")?>

                                                                </div>
                                                                <?php
                                                            }
                                                            ?>
																<form action="<?=base_url()?>admin/Giris/giris_yap" method="post">
																		<input type="text" name="email" class="text" value="E-mail addres" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
																		<input type="password" name="sifre" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >
																		<div class="submit"><input type="submit"  value="Giriş Yap" ></div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
																			<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Şifremi Unuttum ?</label></p>
																			<p class="sign">Hesabın Yok mu ? <a href="sign.html">Kayıt Ol</a></p>
																			<div class="clearfix"></div>
																		</div>
																</form>
														</div>

														
													</div>
													
													
												<!--//login-top-->
										   </div>

										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">

										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="<?=base_url()?>assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?=base_url()?>assets/admin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>