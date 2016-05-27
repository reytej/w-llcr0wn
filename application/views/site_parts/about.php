
<ARTICLE><CENTER><font color="ee7600 "><h1>ABOUT US</h1></font></CENTER></ARTICLE>
	<section id="container">
		<div class="wrap-container clearfix">
			<div id="main-content">
							<article>

								<div class="col-1-2">
									<div class="art-header">
										 	<img src="<?php echo base_url() .'images/'.$contents[8]->image;?>"/><a href="<?php echo base_url() . 'site_1/update5/' . $contents[8]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
										</div>
									</div>
										<div class="col-1-2">
											<div class="art-content t-center">
												<font color="ee7600 "><h1><?php echo $contents[8]->title;?></h1></font><a href="<?php echo base_url() . 'site_1/update3/' . $contents[8]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
												<p><?php echo $contents[8]->description;?></p>
												<p><br>
													<div align="right">
														<a href="<?php echo base_url() . 'site_1/update4/' . $contents[8]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
													</div>
											<p><?php echo $contents[8]->description;?></p>
											<div align="right">
												<a href="<?php echo base_url() . 'site_1/update4/' . $contents[8]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
											</div>	
												</div>
											</div>
								<div class="col-1-1">
									<div class="art-content t-left">
											<p align="justify"><?php echo $contents[10]->description;?></p>
											<div align="right">
												<a href="<?php echo base_url() . 'site_1/update4/' . $contents[10]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
											</div>		
								<div class="col-1-1">
									
										<font color="ee7600 "><h1><?php echo $contents[11]->title;?></h1></font><a href="<?php echo base_url() . 'site_1/update3/' . $contents[11]->id; ?>"><font color="ee7600 ">[EDIT]</font></a><br>
										<Br><i class="fa fa-thumbs-up" aria-hidden="true"></i><?php echo $contents[11]->description;?>
										<a href="<?php echo base_url() . 'site_1/update4/' . $contents[11]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>

										<?php for ($row = 12; $row <= 13; $row++):?>
											<br><i class="fa fa-thumbs-up" aria-hidden="true"></i><?php echo $contents[$row]->description?><a href="<?php echo base_url() . 'site_1/update4/' . $contents[$row]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
										<?php endfor; ?>
										<br>

									<?php for ($row = 14; $row <= 15; $row++):?>
								<div class="col-1-1">
										<font color="ee7600 "><h1><?php echo $contents[$row]->title;?></h1></font><a href="<?php echo base_url() . 'site_1/update3/' . $contents[$row]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
										<p align="justify"><?php echo $contents[$row]->description;?>
										</p>
									</div>
											<div align="right">
												<a href="<?php echo base_url() . 'site_1/update4/' . $contents[$row]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
											</div>												
									<?php endfor; ?>																			
								</article>
							</div>
						</div>