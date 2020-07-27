 						<div class="outter-wp">
								
											
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Üyeler Listesi </h3>
															    <div id="center"><div id="fig">
																<!--Container ara-->
																<div id="page-wrapper" >
																		<div id="page-inner">
																			<div class="row">
																				<div class="col-md-12">
																			   
																					<a class="btn btn-info" href="<?=base_url()?>admin/Uyeler/ekle"><i class="glyphicon glyphicon-plus  icon-blue"></i> Yeni Üye Ekle</a>
																					<br />
																					
																					<br />
																					
																					<?php if ($this->session->flashdata("sonuc"))
																					{
																					?>
																					<div class="alert alert-success">
																						<button type="button" class="close" data-dismiss="alert">*</button>
																						<strong>işlem: </strong><?=$this->session->flashdata("sonuc")?>
																					
																					</div>	
																					<?php 
																					}
																					?>						
																				   <table class="table table-striped table-bordered bootstrap-datatable datatable">
																					  <thead>
																						  <tr>
																							  <th>Adı Soyadı</th>
																							  <th>e-mail</th>
																							  <th>Telefon</th>
																							  <th>Şehir</th>
																							  <th>Cinsiyet</th>
																							  <th>Yetki</th>
																							  <th>Durum</th>
																							  <th>İşlemler</th>
																						  </tr>
																					  </thead>   
																					  <tbody>
																					  <?php
																					  foreach($veri as $rs)
																					  {
																					  ?>
																						<tr >
																							<td class="center"><?=$rs->adi?></td>
																							<td class="center"><?=$rs->email?></td>
																							<td class="center"><?=$rs->tel?></td>
																							<td class="center"><?=$rs->sehir?></td>
																							<td class="center"><?=$rs->cinsiyet?></td>
																							
																							<td class="center">
																								<span class="label label-success"><?=$rs->yetki?></span>
																							</td>
																							<td class="center">
																								<span class="label label-success"><?=$rs->durum?></span>
																							</td>
																							
																							<td class="center">
																								<a class="btn green fifth" href="<?=base_url()?>admin/Uyeler/goster/<?=$rs->id?>">
																									<i class="fa fa-user"></i>  
																									Görüntüle                                           
																								</a>
																								<a class="btn blue four" href="<?=base_url()?>admin/Uyeler/duzenle/<?=$rs->id?>">
																									<i class="fa fa-pencil"></i>  
																									Düzenle                                           
																								</a>
																								<a class="btn red six" href="<?=base_url()?>admin/Uyeler/sil/<?=$rs->id?>" onclick="return confirm('silmek istediğinizden eminmisiniz ?');">
																									<i class="fa fa-trash-o"></i> 
																									Sil
																								</a>
																							</td>
																						</tr>
																					<?php
																					}
																					?>
																			 
																					  </tbody>
																				  </table>
																				</div>
																			</div>      
																				
																		</div>
																		 
																									 

																					
																	</div>
																	<!--Container ara Bitiş-->
																				</div>
																			</div>      
																				
																		</div>
																		 
																									 

																					
																	</div>


	

															</div>
		