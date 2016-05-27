
			<?php for ($row = 0; $row <= 0; $row++):?>
				<ARTICLE><CENTER><font color="ee7600 "><h1><?php echo $categories[$row]->cat_name ;?></h1></font></CENTER></ARTICLE>
			<?php endfor; ?>
		<section class="content-box box-1 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
				<?php for ($row = 2; $row <= 4; $row++):?>
						<div class="col-1-3">
								<div class="wrap-col ">
									<div class="item">
										<div class="zoom-container">
											<img src="<?php echo base_url() .'images/'.$categories[$row]->image;?>" />
										</div>
											<div class="item-content">
												<h3 class="item-header"><a href="<?php echo base_url() . 'site_1/' . $categories[$row]->link; ?>">
												<?php echo '<font color="ee7600 ">'.$categories[$row]->cat_name.'</a></h3></font>
												'.$categories[$row]->description.'';?>
												<div align="right">
													<a href="<?php echo base_url() . 'site_1/cat_edit/' . $categories[$row]->cat_id; ?>"><font color="ee7600 ">[EDIT]</font></a>
												</div>
											</div>
										
									</div>
								</div>
							</div>
						<?php endfor; ?>

		</section>
		<br>
		