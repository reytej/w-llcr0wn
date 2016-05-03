<script>
$(document).ready(function(){
	<?php if($use_js == 'categorylist'): ?>
		$('#categories-tbl').rTable({
			loadFrom	: 	 'inv_maintenance/get_categories',
			add			: 	 function(){
								window.location = baseUrl+'inv_maintenance/categories_form';
							 }
		});
		
	<?php elseif($use_js == 'contentlist'): ?>
		$('#contents-tbl').rTable({
			loadFrom	: 	 'inv_maintenance/get_contents',
			add			: 	 function(){
								window.location = baseUrl+'inv_maintenance/contents_form';
							 }
		});
		$('#save-btn').click(function(){
			// $("#contents_form").rOkay({
			// 	btn_load 	 	: 	$('#save-btn'),
			// 	btn_load_remove : 	false,
			// 	onComplete	 	: 	function(data){
			// 						// alert(data);
			// 						window.location = baseUrl+'inv_maintenance/contents';
			// 						// window.location.href = baseUrl+'inv_maintenance/contents';

			// 						}
			// });
			// return false;
		});
	<?php elseif($use_js == 'uomlist'): ?>
		$('#uom-tbl').rTable({
			loadFrom	: 	 'inv_maintenance/get_uom',
			add			: 	 function(){
								window.location = baseUrl+'inv_maintenance/content_form';
							 }
		});
	<?php endif; ?>



});
</script>