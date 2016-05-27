<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-2">
					<div class="wrap-col">
						<div class="copy-right">
							<!--<p>Copyright @ zFurniture - <a href="http://www.zerotheme.com" target="_blank" rel="nofollow">Free Html5 Templates</a> designed by ZEROTHEME</p>-->
						</div>
					</div>
				</div>
				<div class="col-1-2">
					<div class="wrap-col">
						<ul class="bottom-social f-right">
							<li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://plus.google.com/getstarted/getstarted?fww=1"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="<?php echo base_url(); ?>js/lightbox-plus-jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>


</div>
</body>