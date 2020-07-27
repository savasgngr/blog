
											<div class="outter-wp">
								
											
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Yeni Kullanıcı Ekle </h3>
															    <div id="center"><div id="fig">
																<!--Container ara-->
																<div id="page-wrapper" >
																	<div id="page-inner"> 
														<div class="row">
															<div class="col-lg-12">
																<div class="box">
																
																	<div id="collapseOne" class="body">
																		<form action="<?=base_url()?>admin/Kategoriler/eklekaydet" method="POST" class="form-horizontal ">

																			<div class="form-group">
																				<label class="control-label col-lg-4">Adı</label>
																				<div class="col-lg-4">
																					<input type="text"  name="adi" class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="control-label col-lg-4">Açıklama</label>

																				<div class="col-lg-4">
																					<input type="text"  name="aciklama" class="form-control">
																				</div>
																			</div>
																			<div class="form-group">
																				
																				<label class="control-label col-lg-4">Üst Kategori</label>
																				<br>
																				<div class="controle">
																					<select id="selectError" name="ust_id" data-rel="chosen">
																					<option value=0>Ana Kategori olarak seç</option>
																					<?php foreach($kategori as $rskat){
																					?>    
																					<option value="<?=$rskat->id?>"><?=$rskat->adi?></option>
																					<?php }?>
																					</select>
																				</div>
																			</div>
																		   
																		   <button type="submit"  class="btn btn-info icon-blue ">Kaydet</button>
																		 
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