
			<ARTICLE><CENTER><font color="ee7600 "><h1>CATEGORIES</h1></font></CENTER></ARTICLE>

	<section id="container">
		<div class="wrap-container clearfix">
			<div id="main-content">
						<?php for ($row = 0; $row <= 1; $row++):?>
							<article>
								<div class="col-1-2">
									<div class="art-header">
									 	<img src="<?php echo base_url() .'images/'.$categories[$row]->image;?>"/>
										</div>
									</div>
									<?php echo '
										<div class="col-1-2">
											<div class="art-content t-center">
												<font color="ee7600 "><h1>'.$categories[$row]->cat_name.'</h1></font>
												<p>'.$categories[$row]->description.'</p>
												<BR>'
												?>
												<a class="button" href="<?php echo base_url() . 'site_1/' . $categories[$row]->link; ?>"><font color="ee7600 "><H4>VIEW</H4><font color="ee7600 "></a>
												<div align="right">
													<a href="<?php echo base_url() . 'site_1/cat_edit/' . $categories[$row]->cat_id; ?>"><font color="ee7600 ">[EDIT]</font></a>
												</div>
											</div>
										</div>
								</article>
						<?php endfor; ?>
						