 						<div class="outter-wp">

								<!--custom-widgets-->
												<div class="custom-widgets">
												   <div class="row-one">
												   
														<div class="col-md-3 widget">
														
														
															<div class="stats-left ">
																<h5>Toplam</h5>
																<h4> Üyeler</h4>
															</div>
															<div class="stats-right">
															<?php $toplamuye=0;
															foreach($uyeler as $rsuyeler){$toplamuye=$toplamuye+1;} ?>
																<label><?=$toplamuye?></label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-mdl">
															<div class="stats-left">
																<h5>Toplam</h5>
																<h4>Yazılar</h4>
															</div>
															<div class="stats-right">
																<?php $toplamyazi=0;
															foreach($yazilar as $rsyazilar){$toplamyazi=$toplamyazi+1;} ?>
																<label><?=$toplamyazi?></label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-thrd">
															<div class="stats-left">
																<h5>Toplam</h5>
																<h4>Yorumlar</h4>
															</div>
															<div class="stats-right">
																<?php $toplamyorum=0;
																foreach($yorumlar as $rsyorum){$toplamyorum=$toplamyorum+1;} ?>
																<label><?=$toplamyorum?></label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="clearfix"> </div>	
													</div>
												</div>
												<!--//custom-widgets-->
												<!--/candile-->
												
													<div class="candile"> 
															<div class="candile-inner">
																<h3 class="sub-tittle">Candlestick Chart </h3>
                                                                <?php if ($this->session->flashdata("hosgeldin"))
                                                                {
                                                                    ?>
                                                                    <div class="alert alert-success">
                                                                        <button type="button" class="close" data-dismiss="alert">*</button>
                                                                        <strong>Hoşgeldiniz  </strong><?=$this->session->flashdata("hosgeldin")?>

                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>
															  
																				
															</div>
															
														</div>
													<!--/candile-->
													
												<!--/charts-->
												<div class="charts">
												  <div class="chrt-inner">
												    <div class="chrt-bars">
													
															
																<div class="clearfix"> </div>
															</div>										
												<!--/float-charts-->
								
												<div class="area">
												
															
																<div class="clearfix"></div>
												</div>
													<!--//weather-charts-->
														<div class="graph-visualization">
															<div class="col-md-6 ">
														 <h3 class="sub-tittle">Görevler</h3>
															<ul class="timeline">
																<li>
																  <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
																  <div class="timeline-panel">
																	<div class="timeline-heading">
																	  <h4 class="timeline-title">Başlık</h4>
																	</div>
																	<div class="timeline-body">
																	  <p>Açıklama...</p>
																	</div>
																  </div>
																</li>
																
																<li>
																  <div class="timeline-badge primary"><i class="fa fa-star-o"></i></div>
																  <div class="timeline-panel">
																	<div class="timeline-heading">
																	  <h4 class="timeline-title">Başlık</h4>
																	</div>
																	<div class="timeline-body">
																	  <p>Açıklama...</p>
																	</div>
																  </div>
																</li>
																
																
																
																<li>
																  <div class="timeline-badge danger"><i class="fa fa-times-circle-o"></i></div>
																  <div class="timeline-panel">
																	<div class="timeline-heading">
																	  <h4 class="timeline-title">Başlık</h4>
																	</div>
																	<div class="timeline-body">
																	  <p>AÇıklama...</p>
																	</div>
																  </div>
																</li>
																
																<li>
																  <div class="timeline-badge success"><i class="fa fa-check-circle-o"></i></div>
																  <div class="timeline-panel">
																	<div class="timeline-heading">
																	  <h4 class="timeline-title">Title</h4>
																	</div>
																	<div class="timeline-body">
																	  <p>Description...</p>
																	</div>
																  </div>
																</li>
															</ul>
														</div>
														
															<div class="col-md-6 map-2">
															 <h3 class="sub-tittle">Saat </h3>
																 <div class="profile-nav alt">
																	<section class="panel">
																		<div class="user-heading alt clock-row terques-bg">
																			
																		</div>
																			<ul id="clock">
																				<li id="sec"></li>
																				<li id="hour"></li>
																				<li id="min"></li>
																			</ul>

																		
																	</section>

																</div>
															</div>
															<div class="clearfix"> </div>
														</div>

												<!--//charts-->
												<div class="area-charts">
														
															<div class="clearfix"></div>		
													</div>
										<!--/bottom-grids-->		 
									<div class="bottom-grids">
										<div class="dev-table">    
											<div class="col-md-4 dev-col">                                    

                                            <div class="dev-widget dev-widget-transparent">
                                                <h2 class="inner one">Server Usage</h2>
                                                <p>Today server usage in percentages</p>                                        
                                                <div class="dev-stat"><span class="counter">68</span>%</div>                                                                                
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                                </div>                                        
                                                <p>We Todayly recommend you change your plan to <strong>Pro</strong>. Click here to get more details.</p>

                                                <a href="#" class="dev-drop">Take a closer look <span class="fa fa-angle-right pull-right"></span></a>
                                            </div>

                                        </div>
                                        <div class="col-md-4 dev-col mid">                                    

                                            <div class="dev-widget dev-widget-transparent dev-widget-success">
                                                 <h3 class="inner">Today Earnings</h3>
                                                <p>This is Today earnings per last year</p>                                        
                                                <div class="dev-stat">$<span class="counter">75,332</span></div>                                                                                
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 79%;"></div>
                                                </div>                                        
                                                <p>We happy to notice you that you become an Elite customer, and you can get some custom sugar.</p>

                                                <a href="#" class="dev-drop">Take a closer look <span class="fa fa-angle-right pull-right"></span></a>
                                            </div>

                                        </div>
                                        <div class="col-md-4 dev-col">                                    

                                            <div class="dev-widget dev-widget-transparent dev-widget-danger">
                                                 <h3 class="inner">Your Balance</h3>
                                                <p>All your earnings for this time</p>
                                                <div class="dev-stat">$<span class="counter">5,321</span></div>                                                                                
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>                                        
                                                <p>You can withdraw this money in end of each month. Also you can spend it on our marketplace.</p>

                                                <a href="#" class="dev-drop">Take a closer look <span class="fa fa-angle-right pull-right"></span></a>                                        
                                            </div>

                                        </div>
										<div class="clearfix"></div>		
										
										</div>
										</div>
									<!--//bottom-grids-->
									
									</div>
									<!--/charts-inner-->
									</div>
										<!--//outer-wp-->
									</div>