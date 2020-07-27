<div class="outter-wp">
								
											
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Yazılar</h3>
																	
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
																							  <th>Başlık</th>
																							  <th>Açıklama</th>
																							  <th>Tıklanma</th>
																							  <th>İşlemler</th>
																						  </tr>
																					  </thead>   
																					  <tbody >
																					  <?php foreach($yazilar as $rsyazi){ ?>
																						<tr >
																							<td class="center"><?=$rsyazi->adi?></td>
																							<td class="center"><?=$rsyazi->aciklama?></td>
																							<td class="center"><?=$rsyazi->tiklanma?></td>
																							<td class="center">
																							<a class="btn green fifth" href="<?=base_url()?>admin/Yazilar/Yazi_goster/<?=$rsyazi->id?>">
																								</i>Gör</a>
																							<a class="btn red six" onclick="return confirm('silmek istediğinizden eminmisiniz ?');" href="<?=base_url()?>admin/Yazilar/Yazi_sil/<?=$rsyazi->id?>">
																								</i>Sil</a>
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

											