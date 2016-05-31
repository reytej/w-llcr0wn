<section id="container">
		<div class="wrap-container clearfix">
			<div id="main-content">
				<div class="wrap-content" style="padding: 0;">
					<article>
						<div class="art-content">
							<font color="ee7600 "><h1 class="entry-title">EDIT</h1></font>
							<div class="row">
								<div class="col-2-3">
									<div class="wrap-col">
										<div class="contact">
											<div id="contact_form">
												<?php foreach ($window_coverings as $record): ?>
													<form name="form1" id="ff" method="post" action="<?php echo base_url() . "site_1/window_coverings_delete"?>">
														<label class="row">
															<div class="col-1-2">
																<div class="wrap-col">
																	<input type="hidden" name="windowcoveringsid" id="ff" required="required" value="<?php echo $record->id; ?>"/>
																</div>
															</div>
														</label>
														<label class="row">
															<div class="col-1-2">
																<div class="wrap-col">
																	Image Name:<input type="text" name="windowcoveringsimage" id="ff" placeholder="Enter image Name" required="required" value="<?php echo $record->image; ?>"/>
																</div>
															</div>
														</label>
														<label class="row">
															<div class="wrap-col">
																Title:<input type="text" name="windowcoveringstitle"  placeholder="Enter Title" required="required" value="<?php echo $record->title; ?>"/>
															</div>
														</label>
														<label class="row">
															<div class="wrap-col">
																Description:<textarea name="windowcoveringsdescription"  class="form-control" rows="4" cols="25" required="required"
																placeholder="Description" value=""><?php echo $record->description; ?></textarea>
															</div>
														</label>
														<center><input class="sendButton" type="submit" id="submit"name="delete_window_coverings" value="Submit"></center>
													</form>
												<?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
</section>
