
		<div style="margin-left: 120px;" >
			<div class="wrapper col3">
  				<div id="featured_slide"> 
  				  <!-- ####################################################################################################### -->
 				   <div id="piecemaker"></div>
 				   <!-- ####################################################################################################### --> 
 				 </div>
			</div>
		</div>
	</div>
</header>
<div class="zerogrid">
	<div class="wrap-header">
		<section class="content-box box-1 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<?php for ($row = 0; $row <= 2; $row++):?>
						<div class="col-1-3">
								<div class="wrap-col ">
									<div class="item">
										<div class="zoom-container">
											<img src="<?php echo base_url() .'images/'.$contents[$row]->image;?>" />
										</div>

											<div class="item-content">
												<h3 class="item-header"><a href="<?php echo base_url() . 'site_1/' . $contents[$row]->link; ?>">
												<?php echo '<font color="ee7600 ">'.$contents[$row]->title.'</a></h3></font>
												'.$contents[$row]->description.'';?>
												<br>
													<div align="right">
														<a href="<?php echo base_url() . 'site_1/update/' . $contents[$row]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
													</div>
										</div>
									</div>
								</div>
							</div>
					<?php endfor; ?>
					</div>

					<?php for ($row = 3; $row <= 6; $row++):?>
						<div class="col-1-4">
							<div class="wrap-col ">
								<div class="item">
									<div class="zoom-container">
										<img src="<?php echo base_url() .'images/'.$contents[$row]->image;?>" />
									</div>
										<div class="item-content">
											<h3 class="item-header"><a href="<?php echo base_url() . 'site_1/' . $contents[$row]->link; ?>">
											<?php echo '<font color="ee7600 ">'.$contents[$row]->title.'</a></h3></font>';?>
											<div align="right">
												<a href="<?php echo base_url() . 'site_1/update2/' . $contents[$row]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endfor; ?>

				<div class="row">
					<div class="col-1-2">
						<div class="wrap-col item">

							<h2 class="header"><font color="ee7600 "><?php echo $contents[7]->title.'</font></h2>'
							.$contents[7]->description
							;?>
							<div align="right">
								<a href="<?php echo base_url() . 'site_1/update3/' . $contents[7]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
							</div>
						</div>
					</div>
		</section>    
		<section class="content-box box-4 box-style-3"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<div class="col-1-2">
						<div class="wrap-col item">
								<h2 class="header"><?php echo $contents[16]->title ;?><a href="<?php echo base_url() . 'site_1/update3/' . $contents[16]->id; ?>"><font color="ee7600 ">[EDIT]</font></a></h2>
								<p><?php echo $contents[16]->description ;?><a href="<?php echo base_url() . 'site_1/update4/' . $contents[16]->id; ?>"><font color="ee7600 ">[EDIT]</font></a></p>
							<?php for ($row = 17; $row <= 20; $row++):?>
								  <?php echo $contents[$row]->description;?><a href="<?php echo base_url() . 'site_1/update4/' . $contents[$row]->id; ?>"><font color="ee7600 ">[EDIT]</font></a><br> 
							<?php endfor; ?>
						</div>
					</div>
					<div class="col-1-2">
						<div class="wrap-col item">
								<h2 class="header"><?php echo $contents[21]->title;?><a href="<?php echo base_url() . 'site_1/update3/' . $contents[21]->id; ?>"><font color="ee7600 ">[EDIT]</font></a></h2>
								<p><?php echo $contents[21]->description ;?></p><a href="<?php echo base_url() . 'site_1/update4/' . $contents[21]->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>
<br>
<br>

<!--
<?php 
echo $contents[0]->title?>

<?php
	for ($i = 1; $i <= 2; $i++):
echo $contents[$i]->title
;
endfor; 
?>-->

