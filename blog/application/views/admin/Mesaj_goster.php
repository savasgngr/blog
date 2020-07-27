<div class="outter-wp">
								
											
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Mesaj Cevapla</h3>
																	
															    <div id="center"><div id="fig">
																<!--Container ara-->
																<div id="page-wrapper" >
																	<div id="page-inner">  
														<div class="row">
														<div class="col-lg-6">
															<div class="box">
																<div id="collapseOne" class="body">
																	<form action="<?=base_url()?>admin/Iletisimmesajlar/Mesaj_cevapla/<?=$mesajgor[0]->id?>" class="contact_form" enctype="multipart/form-data" method="post">
																		<textarea class="form-control" cols="30" rows="10" name="cevap"  id="icerik" placeholder="Cevabı buraya yaz*"><?=$mesajgor[0]->cevap?></textarea>
																		<input type="submit" value="Yazıyı yayınlayın">
																	</form>
																</div>
															</div>
														</div>		
															<div class="col-lg-6">
																<div class="box">
																
																	<div id="collapseOne" class="body">
																		<table class="table table-striped table-bordered bootstrap-datatable datatable">
																		    <thead><tr><th>IP</th></tr></thead>
																			<tbody ><tr ><td class="center"><?=$mesajgor[0]->ip?></td></tr></tbody>
																			<thead><tr><th>Adı Soyadı</th></tr></thead>
																			<tbody ><tr ><td class="center"><?=$mesajgor[0]->adi?></td></tr></tbody>
																			<thead><tr><th>Başlık</th></tr></thead>
																			<tbody ><tr ><td class="center"><?=$mesajgor[0]->baslik?></td></tr></tbody>
																			<thead><tr><th>Mesaj</th></tr></thead>
																			<tbody ><tr ><td class="center"><?=$mesajgor[0]->mesaj?></td></tr></tbody>
																			<thead><tr><th>Tarih</th></tr></thead>
																			<tbody ><tr ><td class="center"><?=$mesajgor[0]->tarih?></td></tr></tbody>
																		</table>
																	</div>
																</div>
															</div>
															<!-- /.col-lg-12 -->
														</div>	
																					   
														</div>
														
														</div>     
																		 <!-- /. ROW  -->           
														</div>
																	 <!-- /. PAGE INNER  -->
														</div>

																	<!--Container ara Bitiş-->
																				</div>
																			</div>      
																				
																		</div>

											