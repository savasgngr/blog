
											<div class="outter-wp">
								
											
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Üye Detay Bilgi </h3>
															
																<!--Container ara-->
																			
																			
																			
																			
																				<table class="table table-striped" action="<?=base_url()?>admin/kullanicilar/goster/<?=$veri[0]->id?>">
																					  <thead>
																						  <tr>
																							  <th>ID</th>
																							  <th>Adı Soyadı</th>
																							  <th>e-mail</th>
																							  <th>Şifre</th>
																							  <th>Telefon</th>
																							  <th>Adres</th>
																							  <th>Şehir</th>
																							  <th>Cinsiyet</th>
																							  <th>Yetki</th>
																							  <th>Durum</th>
																							  <th>Resim</th>
																							  <th>Açıklama</th>
																							  
																						  </tr>
																					  </thead>   
																					  <tbody>
																						<tr>
																							<td class="center"><?=$veri[0]->id?></td>
																							<td class="center"><?=$veri[0]->adi?></td>
																							<td class="center"><?=$veri[0]->email?></td>
																							<td class="center"><?=$veri[0]->sifre?></td>
																							<td class="center"><?=$veri[0]->tel?></td>
																							<td class="center"><?=$veri[0]->adres?></td>
																							<td class="center"><?=$veri[0]->sehir?></td>
																							<td class="center"><?=$veri[0]->cinsiyet?></td>
																							
																							<td class="center">
																								<span class="label label-success"><?=$veri[0]->yetki?></span>
																							</td>
																							<td class="center">
																								<span class="label label-success"><?=$veri[0]->durum?></span>
																							</td>
																							<td class="center">
																							<img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/profilresimler/<?=$veri[0]->resim?>"/></td>
																							<td class="center"><?=$veri[0]->aciklama?></td>
																															  
																						</tr>
																							  
																											
																					  </tbody>
																					  </table>
																	 <!-- /. PAGE INNER  -->
														</div>

																	<!--Container ara Bitiş-->
																				</div>
																			</div>      
<?php
$this->load->view('admin/Footer');
$this->load->view('admin/Sidebar');

?>
		