<script>
$(document).ready(function(){
	<?php if($use_js == 'itemsListJs'): ?>
		$('#items-tbl').rTable({
			loadFrom	: 	 'items/get_items',
			add			: 	 function(){
								window.location = baseUrl+'items/items_form';
							 }
		});
	<?php elseif($use_js == 'itemsFormListJs'): ?>
		$('#save-btn').click(function(){
			var target = $(this).attr('target');
			var form = $(target).find('form');
			form.rOkay({
				onComplete : function(data){
								location.reload();
							 }	
			});
			return false;
		});	
		$('#category').change(function(){
			loadDfltDetails();
			loadDfltAttrs();
		});
		function loadDfltDetails(){
			var id = $('#category').val();
			if(id != ""){
				$.post(baseUrl+'items/get_category_details/'+id,function(data){
					$('#item_type').val(data.item_type);
					$('#uom').val(data.uom);
					$('#tax_type').val(data.tax_type);
					if(data.not_for_sale == 0)
						$('#not_for_sale').val("");
					else
						$('#not_for_sale').val(data.not_for_sale);
				},'json');
			}
		}
		function loadDfltAttrs(){
			var id = $('#category').val();
			if(id != ""){
				$.post(baseUrl+'items/show_category_attributes/'+id,function(data){
					$('#attr-load').html(data);
				});	
			}	
		}
	<?php elseif($use_js == 'locListJs'): ?>
		$('#locations-tbl').rTable({
			loadFrom	: 	 'items/get_locations',
			add			: 	 function(){
								$.rPopForm({
									title			:	'Create New Item Location',
									loadUrl			:	'items/locations_form',
									passTo			:	"items/locations_db",
									wide 			:   true,
									onComplete		:	function(data){
															location.reload();
														},
								});
							 },
			afterLoad	: 	 function(){
								$(".edit-btn").rPopForm({
									passTo			:	"items/locations_db",
									wide 			:   true,
									onComplete		:	function(data){
															location.reload();
														},
								});
							 }
		});
	<?php elseif($use_js == 'uomListJs'): ?>
		$('#uom-tbl').rTable({
			loadFrom	: 	 'items/get_uom',
			add			: 	 function(){
								$.rPopForm({
									title			:	'Create New UOM',
									loadUrl			:	'items/uom_form',
									passTo			:	"items/uom_db",
									wide 			:   false,
									onComplete		:	function(data){
															location.reload();
														},
								});
							 },
			afterLoad	: 	 function(){
								$(".edit-btn").rPopForm({
									passTo			:	"items/uom_db",
									wide 			:   false,
									onComplete		:	function(data){
															location.reload();
														},
								});
							 }
		});
	<?php elseif($use_js == 'supListJs'): ?>
		$('#suppliers-tbl').rTable({
			loadFrom	: 	 'items/get_suppliers',
			add			: 	 function(){
								$.rPopForm({
									title			:	'Create New Supplier',
									loadUrl			:	'items/suppliers_form',
									passTo			:	"items/suppliers_db",
									wide 			:   true,
									onComplete		:	function(data){
															location.reload();
														},
								});
							 },
			afterLoad	: 	 function(){
								$(".edit-btn").rPopForm({
									passTo			:	"items/suppliers_db",
									wide 			:   true,
									onComplete		:	function(data){
															location.reload();
														},
								});
							 }
		});		
	<?php elseif($use_js == 'attributesListJs'): ?>
		$('#attributes-tbl').rTable({
			loadFrom	: 	 'items/get_attributes',
			add			: 	 function(){
								$.rPopForm({
									title			:	'Create New Attribute',
									loadUrl			:	'items/attributes_form',
									passTo			:	"items/attributes_db",
									wide 			:   false,
									onComplete		:	function(data){
															location.reload();
														},
								});
							 },
			afterLoad	: 	 function(){
								$(".edit-btn").rPopForm({
									passTo			:	"items/attributes_db",
									wide 			:   false,
									onComplete		:	function(data){
															location.reload();
														},
								});
							 }
		});
	<?php elseif($use_js == 'categoriesListJs'): ?>
		$('#categories-tbl').rTable({
			loadFrom	: 	 'items/get_categories',
			add			: 	 function(){
								window.location = baseUrl+'items/categories_form';
							 }
		});		
		// var formInputs = {
		// 	"item"	:{"show":"#item-drop","from":"#item-drop"},
		// 	"qty"	:{"show":"#input-qty","from":"#input-qty"},
		// 	"uom"	:{"show":"#uom-drop","from":"#uom-drop"}
		// };
		// $('#dispatch-req-tbl').rWagon({
		// 	cart		 : 	'dispatch_req_cart',
		// 	input_row	 : 	'#row-inputs',
		// 	inputs 		 : 	formInputs,
		// 	onAdd 		 : 	function(){
		// 		//alert('aaaa');
		// 		// calculate_net();
		// 		// reset_row();
		// 	},
		// 	onDelete	 : 	function(){
		// 		// calculate_net();
		// 		// reset_row();
		// 	},
		// 	onUpdate	 : 	function(){
		// 		// calculate_net();
		// 		// reset_row();
		// 	} 
		// });
	<?php elseif($use_js == 'categoriesFormListJs'): ?>
		$('#save-btn').click(function(){
			var target = $(this).attr('target');
			var form = $(target).find('form');
			form.rOkay({
				onComplete : function(data){
								location.reload();
								// alert(data);
							 }	
			});
			return false;
		});
		// $('#attr-tbl').rWagonClear({cart:'attr_cart'});
		set_attr_drop_type();
		$('#attr-drop').change(function(){
			set_attr_drop_type();
		});
		function set_attr_drop_type(){
			var option = $('#attr-drop option:selected').attr('type');
			var label = $('#attr-drop option:selected').text();
			$('#attr-drop-type').val(option);			
			$('#attr-drop-label').val(label);			
		}
		var formInputs = {
			"attr_id"	:{"show":"#attr-drop","from":"#attr-drop"},
			"attr_label":{"from":"#attr-drop-label"},
			"attr_type"	:{"from":"#attr-drop-type"},
			"attr_val"	:{"show":"#attr-val","from":"#attr-val","string":true},
			"attr_man"	:{"show":"#man-check","from":"#man-check","string":true}
		};
		$('#attr-tbl').rWagon({
			cart		 : 	'attr_cart',
			inputs 		 : 	formInputs,
			onAdd 		 : 	function(){
				$('#attr-tbl').rWagonCheck({cart:'attr_cart'});
			},
			onDelete	 : 	function(){
				$('#attr-tbl').rWagonCheck({cart:'attr_cart'});
			},
			onUpdate	 : 	function(){
				$('#attr-tbl').rWagonCheck({cart:'attr_cart'});
			} 
		});
	<?php endif; ?>
});
</script>