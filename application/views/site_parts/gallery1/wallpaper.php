			<ARTICLE><CENTER><font color="ee7600 "><h1>WALLPAPER</h1></font></CENTER></ARTICLE>
		<section class="content-box box-1 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
				<?php foreach($wallpaper as $row):?>
						<div class="col-1-3">
								<div class="wrap-col ">
									<div class="item">
										<div class="zoom-container">
											<a class="example-image-link" href="<?php echo base_url() .'images/'.$row->image;?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">										
												<img src="<?php echo base_url() .'images/'.$row->image;?>" />
											</a>
										</div>
											<?php echo '
											<div class="item-content">
												<h3 class="item-header"><font color="ee7600 ">'.$row->title.'</h3></font>
												'.$row->description.'';?>
											<div align="right">
												<a href="<?php echo base_url() . 'site_1/wallpaper_edit/' . $row->id; ?>"><font color="ee7600 ">[EDIT]</font></a>
											</div>
											<div align="right">
												<a href="<?php echo base_url() . 'site_1/wallpaper_delete/' . $row->id; ?>"><font color="ee7600 ">[DELETE]</font></a>
											</div>											
											</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
		</section>
		<br>