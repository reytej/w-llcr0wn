<script>
$(document).ready(function(){
	<?php if($use_js == 'categorylist'): ?>
		$('#categories-tbl').rTable({
			loadFrom	: 	 'inv_maintenance/get_categories',
			add			: 	 function(){
								window.location = baseUrl+'inv_maintenance/categories_form';
							 }
		});
	<?php endif; ?>
});
</script>