

<section id="container">
		<div class="wrap-container clearfix">
			<div id="main-content">
				<div class="wrap-content" style="padding: 0;">
					<article>
						<div class="art-content">
							<font color="ee7600 "><h1 class="entry-title">Contact Us</h1></font>
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
												<font color="ee7600 "><h1>Main Office</h1></font>
										<?php for ($row = 16; $row <= 16; $row++):?>
											<p><?php echo $contents[$row]->description ;?><a href="<?php echo base_url() . 'site_1/update4/' . $contents[$row]->id; ?>"><font color="ee7600 ">[EDIT]</font></a></p>
										<?php endfor; ?>
										<?php for ($row = 17; $row <= 20; $row++):?>
											  <?php echo $contents[$row]->description;?><a href="<?php echo base_url() . 'site_1/update4/' . $contents[$row]->id; ?>"><font color="ee7600 ">[EDIT]</font></a><br> 
										<?php endfor; ?>
											<font color="ee7600 "><h1>Show Room</h1></font>
												<?php for ($row = 22; $row <= 23; $row++):?>
													  <?php echo $contents[$row]->description;?><a href="<?php echo base_url() . 'site_1/update4/' . $contents[$row]->id; ?>"><font color="ee7600 ">[EDIT]</font></a><br> 
												<?php endfor; ?>
									</div>
								</div>
								<div class="col-2-3">
									<div class="wrap-col">
										<div class="contact">
											<!--Warning-->
								
											<!---->
											<div id="contact_form">
												<form name="form1" id="ff" method="post" action="#">
													<label class="row">
														<div class="col-1-2">
															<div class="wrap-col">
																<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
															</div>
														</div>
														<div class="col-1-2">
															<div class="wrap-col">
																<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
															</div>
														</div>
													</label>
													<label class="row">
														<div class="wrap-col">
															<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
														</div>
													</label>
													<label class="row">
														<div class="wrap-col">
															<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
															placeholder="Message"></textarea>
														</div>
													</label>
													<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
</section>
