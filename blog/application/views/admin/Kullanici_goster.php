
											<div class="outter-wp">
								
											
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Kullanıcı Detay Bilgi </h3>
															    <div id="center"><div id="fig">
																<!--Container ara-->
																<div id="page-wrapper" >
																	<div id="page-inner">   
																		<div class="box span6">
																			
																			<div class="box-content">
																				<table class="table table-striped" action="<?=base_url()?>admin/kullanicilar/goster/<?=$veri[0]->id?>">
																					  <thead>
																						  <tr>
																							  <th>id</th>
																							  <th>adı soyadı</th>
																							  <th>şifre</th>
																							  <th>e-mail</th>
																							  <th>yetki</th>
																							  <th>durum</th>
																							  
																						  </tr>
																					  </thead>   
																					  <tbody>
																						<tr>
																							<td class="center"><?=$veri[0]->id?></td>
																							<td class="center"><?=$veri[0]->adi?></td>
																							<td class="center"><?=$veri[0]->sifre?></td>
																							<td class="center"><?=$veri[0]->email?></td>
																							<td class="center">
																								<span class="label label-success"><?=$veri[0]->yetki?></span>
																							</td>
																							<td class="center">
																								<span class="label label-success"><?=$veri[0]->durum?></span>
																							</td>
																						</tr>
																							  
																											
																					  </tbody>
																					  </table>  
																			</div>
																		</div><!--/span-->
																	</div><!--/row-->
															
																					   
														</div>
														</div>     
																		 <!-- /. ROW  -->           
														</div>
																	 <!-- /. PAGE INNER  -->
														</div>

																	<!--Container ara Bitiş-->
																				</div>
																			</div>      
<?php
$this->load->view('admin/Footer');
$this->load->view('admin/Sidebar');

?>
		