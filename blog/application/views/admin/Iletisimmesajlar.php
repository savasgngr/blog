<div class="outter-wp">
								
											
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">İletişim mesajları</h3>
																	
															    <div id="center"><div id="fig">
																<!--Container ara-->
																<div id="page-wrapper" >
																	<div id="page-inner">  
														<div class="row">
															<div class="col-lg-12">
																<div class="box">
																
																	<div id="collapseOne" class="body">
																		<table class="table table-striped table-bordered bootstrap-datatable datatable">
																					  <thead>
																						  <tr>
																							  <th>Adı Soyadı</th>
																							  <th>e-mail</th>
																							  <th>başlık</th>
																							  <th>Mesaj</th>
																							  <th>Durum</th>
																							  <th>Cevaplayan</th>
																							  <th>İşlemler</th>
																						  </tr>
																					  </thead>   
																					  <tbody >
																					  <?php foreach($mesaj as $rsmesaj){ ?>
																						<tr >
																							<td class="center"><?=$rsmesaj->adi?></td>
																							<td class="center"><?=$rsmesaj->email?></td>
																							<td class="center"><?=$rsmesaj->baslik?></td>
																							<td class="center"><?=$rsmesaj->mesaj?></td>
																							<td class="center"><?=$rsmesaj->durum?></td>
																							<td class="center"><?=$rsmesaj->cevaplayan?></td>
																							<td class="center">
																								<a class="btn green fifth" href="<?=base_url()?>admin/Iletisimmesajlar/Mesaj_goster/<?=$rsmesaj->id?>">
																									<i class="fa fa-user"></i>  
																									Gör ve Cevapla                                           
																								</a>
																							</td>
																						</tr>
																					  <?php } ?>
																					  </tbody>
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

											