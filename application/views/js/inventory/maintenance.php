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
	/*<?php elseif($use_js == 'uomlist'): ?>
		$('#uom-tbl').rTable({
			loadFrom	: 	 'inv_maintenance/get_uom',
			add			: 	 function(){
								window.location = baseUrl+'inv_maintenance/content_form';
							 }
		});
	<?php endif; ?>
*/


});
</script>