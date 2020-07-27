										<div class="outter-wp">
								
											
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Kategori Düzenle </h3>
															    <div id="center"><div id="fig">
																<!--Container ara-->
																<div id="page-wrapper" >
																	<div id="page-inner">  
														<div class="row">
															<div class="col-lg-12">
																<div class="box">
																
																	<div id="collapseOne" class="body">
																		<form action="<?=base_url()?>admin/Kategoriler/guncellekaydet/<?=$veri[0]->id?>" method="POST" class="form-horizontal" ">

																			<div class="form-group">
																				<label class="control-label col-lg-4">Adı</label>
																				<div class="col-lg-4">
																					<input type="text"  name="adi" value="<?=$veri[0]->adi?>"class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="control-label col-lg-4">Açıklama</label>

																				<div class="col-lg-4">
																					<input type="text"  name="aciklama" value="<?=$veri[0]->aciklama?>" class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																				
																				<label class="control-label col-lg-4">Üst Kategori</label>
																				<br>
																				<div class="controle">
																					<select id="selectError" name="ust_id" data-rel="chosen">
																					<option value="<?=$veri[0]->ust_id?>">Kategori değiştirme</option>
																					<option value=0>Ana Kategori olarak seç</option>
																					<?php foreach($kategori as $rskat){
																					?>    
																					<option value="<?=$rskat->id?>"><?=$rskat->adi?></option>
																					<?php }?>
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
