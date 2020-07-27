
<div class="outter-wp">
								
											
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Üye Düzenle </h3>
															    <div id="center"><div id="fig">
																<!--Container ara-->
																<div id="page-wrapper" >
																	<div id="page-inner">  
														<div class="row">
															<div class="col-lg-12">
																<div class="box">
																
																	<div id="collapseOne" class="body">
																		<form action="<?=base_url()?>admin/Uyeler/guncellekaydet/<?=$veri[0]->id?>" method="POST" class="form-horizontal" ">

																			<div class="form-group">
																				<label class="control-label col-lg-4">Adı Soyadı</label>
																				<div class="col-lg-4">
																					<input type="text"  name="adi" value="<?=$veri[0]->adi?>"class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="control-label col-lg-4">Şifre</label>

																				<div class="col-lg-4">
																					<input type="text"  name="sifre" value="<?=$veri[0]->sifre?>" class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="control-label col-lg-4">e-mail</label>

																				<div class="col-lg-4">
																					<input type="email"  name="email" value="<?=$veri[0]->email?>" class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="control-label col-lg-4">Telefon</label>
																				<div class="col-lg-4">
																					<input type="number"  name="tel" value="<?=$veri[0]->tel?>"class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="control-label col-lg-4">Adres</label>
																				<div class="col-lg-4">
																					<input type="text"  name="adres" value="<?=$veri[0]->adres?>"class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="control-label col-lg-4">Şehir</label>
																				<div class="col-lg-4">
																					<input type="text"  name="sehir" value="<?=$veri[0]->sehir?>"class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="control-label col-lg-4">Açıklama</label>
																				<div class="col-lg-4">
																					<input type="text"  name="aciklama" value="<?=$veri[0]->aciklama?>"class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																			<br>
																				<label class="control-label col-lg-4">Cinsiyet</label>
																				<div class="controle">
																					<select id="selectError" name="cinsiyet" data-rel="chosen">
																					<option><?=$veri[0]->cinsiyet?></option>
																					<option>  Erkek</option>
																					<option> Kadın</option>
																					</select>
																				</div>


																			</div>
																			<div class="form-group">
																			<br>
																				<label class="control-label col-lg-4">Durum</label>
																				<div class="controle">
																					<select id="selectError" name="durum" data-rel="chosen">
																					<option value="<?=$veri[0]->durum?>"> <?=$veri[0]->durum?></option>
																					<option value="1"> onaylı </option>
																					<option value="0"> engelli</option>
																					
																					</select>
																				</div>


																			</div>
																		
																		  <div class="form-group">
																				
																				<label class="control-label col-lg-4">Yetki</label>
																				<br>
																				<div class="controle">
																					<select id="selectError" name="yetki" data-rel="chosen">
																					<option><?=$veri[0]->yetki?></option>
																					<option>  yazar</option>
																					<option>  üye</option>
																					</select>
																				</div>
																			</div>
																		   
																		   <button type="submit" class="btn btn-info icon-blue ">Güncelle</button>
																		 
																		</form>
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
<?php
$this->load->view('admin/Footer');
$this->load->view('admin/Sidebar');

?>