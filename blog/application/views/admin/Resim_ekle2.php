										<div class="outter-wp">
								
											
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Resim Ekle </h3>
															    <div id="center"><div id="fig">
																<!--Container ara-->
																<div id="page-wrapper" >
																	<div id="page-inner">  
														<div class="row">
															<div class="col-lg-12">
																<div class="box">
																
																	<div id="collapseOne" class="body">
																		<form action="<?=base_url()?>admin/Home/Resim_yukle" method="POST"  >
																			<input type="file"  name="userfile"><br/>
																			<input type="text"  name="adi">
																		   <button type="submit" class="btn btn-info icon-blue ">Kaydet</button>
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
$this->load->view('admin/footer');
$this->load->view('admin/sidebar');

?>