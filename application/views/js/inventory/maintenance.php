<script>
$(document).ready(function(){
	
	<?php if($use_js == 'categorylist'): ?>
		$('#categories-tbl').rTable({
			loadFrom	: 	 'inv_maintenance/get_categories',
			add			: 	 function(){
								window.location = baseUrl+'inv_maintenance/categories_form';
							 }
		});

	<?php elseif($use_js == 'uomlist'): ?>
		$('#UOM-tbl').rTable({
			loadFrom	: 	 'inv_maintenance/get_UOM',
			add			: 	 function(){
								window.location = baseUrl+'inv_maintenance/uom_form';
							 }
		});	


	<?php elseif($use_js == 'contentlist'): ?>
		$('#content-tbl').rTable({
			loadFrom	: 	 'inv_maintenance/get_Content',
			add			: 	 function(){
								window.location = baseUrl+'inv_maintenance/Content_form';
							 }
		});	

	<?php endif; ?>
});

</script>