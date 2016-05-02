<?php
function searchItems($fltr=array()){
	$CI =& get_instance();
		$CI->make->sForm();
			$CI->make->sDivRow();
				$CI->make->sDivCol(12);
					$CI->make->inputv("Code","code",iSet($fltr,'code'));
					$CI->make->inputv("Name","name",iSet($fltr,'name'));
				$CI->make->eDivCol();
			$CI->make->eDivRow();
		$CI->make->eForm();
	return $CI->make->code();	
}
function itemsForm($det=array()){
	$CI =& get_instance();		
		$CI->make->sTab();
			$CI->make->sDivRow(array('style'=>'padding-top:10px;padding-right:10px;'));
				$CI->make->sDivCol(12,'right');
					$CI->make->button(fa('fa-save fa-fw').' Save',array('id'=>'save-btn','target'=>'#details','style'=>'margin-right:5px;'),'success');
					$CI->make->A(fa('fa-reply fa-fw')." Back",base_url().'items',array('class'=>'btn btn-primary'));
				$CI->make->eDivCol();
			$CI->make->eDivRow();
			$tabs = array(
				fa('fa-info-circle')." General"=>array('href'=>'#details'),
				fa('fa-tags')." Attributes"=>array('href'=>'#attributes'),
			);
			$CI->make->tabHead($tabs,null,array());
			$CI->make->sTabBody();
				$CI->make->sTabPane(array('id'=>'details','class'=>'tab-pane active','style'=>'padding:10px 30px 10px 30px;'));
					$CI->make->sForm('items/items_db');
						$CI->make->hidden('item_id',iSetObj($det,'item_id'));
						$CI->make->sDivRow();
							$CI->make->sDivCol(12,'left');
								$CI->make->H(3,'Item Details',array('class'=>'page-header'));
								$CI->make->inputv("Code","code",iSetObj($det,'code'),null,array('class'=>'rOkay'));
								$CI->make->inputv("Name","name",iSetObj($det,'name'),null,array('class'=>'rOkay'));
								$CI->make->textareav("Description","desc",iSetObj($det,'desc'));
								$CI->make->categoriesDropv("Category","category",iSetObj($det,'category'),'- Select Category -',array('class'=>'rOkay'));
								$CI->make->H(3,'Inventory Details',array('class'=>'page-header'));
								$CI->make->uomDropv("UOM","uom",iSetObj($det,'uom'),'- Select UOM -',array('class'=>'rOkay'));
								$CI->make->itemTypeDropv("Item Type","item_type",iSetObj($det,'item_type'),'- Select Item Type -',array('class'=>'rOkay'));
								$CI->make->taxTypeDropv("Tax Type","tax_type",iSetObj($det,'tax_type'),'- Select Tax Type -',array('class'=>'rOkay'));
								$CI->make->inactiveDropv("Exclude From Sales","not_for_sale",iSetObj($det,'not_for_sale'),null,array('class'=>'rOkay'));
							$CI->make->eDivCol();		
						$CI->make->eDivRow();
					$CI->make->eForm();
				$CI->make->eTabPane();
				$CI->make->sTabPane(array('id'=>'attributes','class'=>'tab-pane','style'=>'padding:10px 30px 10px 30px;'));
					$CI->make->sDiv(array('id'=>'attr-load'));
						
					$CI->make->eDiv();
				$CI->make->eTabPane();
			$CI->make->eTabBody();
		$CI->make->eTab();	
	return $CI->make->code();
}	
function searchLocations($fltr=array()){
	$CI =& get_instance();
		$CI->make->sForm();
			$CI->make->sDivRow();
				$CI->make->sDivCol(12);
					$CI->make->inputv("Code","code",iSet($fltr,'code'));
					$CI->make->inputv("Name","name",iSet($fltr,'name'));
				$CI->make->eDivCol();		
			$CI->make->eDivRow();
		$CI->make->eForm();
	return $CI->make->code();	
}	
function locationsForm($det=array()){
	$CI =& get_instance();
		$CI->make->sForm();
			$CI->make->sDivRow();
				$CI->make->sDivCol(12);
					$CI->make->hidden('loc_id',iSetObj($det,'loc_id'));
					$CI->make->inputv("Code","code",iSetObj($det,'code'),null,array('class'=>'rOkay'));
					$CI->make->inputv("Name","name",iSetObj($det,'name'),null,array('class'=>'rOkay'));
					$CI->make->textareav("Description","desc",iSetObj($det,'desc'),null,array('class'=>''));
					$CI->make->inputv("Contact Person","contact_person",iSetObj($det,'contact_person'),null,array('class'=>''),'fa-user');
					$CI->make->inputv("Contact No.","contact_no",iSetObj($det,'contact_no'),null,array('class'=>''),'fa-phone');
					$CI->make->textareav("Address","address",iSetObj($det,'address'),null,array('class'=>''));
				$CI->make->eDivCol();		
			$CI->make->eDivRow();
		$CI->make->eForm();
	return $CI->make->code();
}
function searchUOM($fltr=array()){
	$CI =& get_instance();
		$CI->make->sForm();
			$CI->make->sDivRow();
				$CI->make->sDivCol(12);
					$CI->make->inputv("Code","code",iSet($fltr,'code'));
					$CI->make->inputv("Name","name",iSet($fltr,'name'));
				$CI->make->eDivCol();		
			$CI->make->eDivRow();
		$CI->make->eForm();
	return $CI->make->code();	
}
function uomForm($det=array()){
	$CI =& get_instance();
		$CI->make->sForm();
			$CI->make->sDivRow();
				$CI->make->sDivCol(12);
					$CI->make->hidden('id',iSetObj($det,'id'));
					$CI->make->inputv("Code","code",iSetObj($det,'code'),null,array('class'=>'rOkay'));
					$CI->make->inputv("Name","name",iSetObj($det,'name'),null,array('class'=>'rOkay'));
				$CI->make->eDivCol();		
			$CI->make->eDivRow();
		$CI->make->eForm();
	return $CI->make->code();
}
function searchSuppliers($fltr=array()){
	$CI =& get_instance();
		$CI->make->sForm();
			$CI->make->sDivRow();
				$CI->make->sDivCol(12);
					$CI->make->inputv("Code","code",iSet($fltr,'code'));
					$CI->make->inputv("Name","name",iSet($fltr,'name'));
				$CI->make->eDivCol();	
			$CI->make->eDivRow();
		$CI->make->eForm();
	return $CI->make->code();	
}	
function suppliersForm($det=array()){
	$CI =& get_instance();
		$CI->make->sForm();
			$CI->make->sDivRow();
				$CI->make->sDivCol(12);
					$CI->make->hidden('sup_id',iSetObj($det,'sup_id'));
					$CI->make->inputv("Code","code",iSetObj($det,'code'),null,array('class'=>'rOkay'));
					$CI->make->inputv("Name","name",iSetObj($det,'name'),null,array('class'=>'rOkay'));
					$CI->make->textareav("Description","desc",iSetObj($det,'desc'),null,array('class'=>''));
					$CI->make->inputv("Contact No.","contact_no",iSetObj($det,'contact_no'),null,array('class'=>''),'fa-phone');
					$CI->make->inputv("Email","email",iSetObj($det,'email'),null,array('class'=>''),'fa-envelope');
				$CI->make->eDivCol();	
			$CI->make->eDivRow();
		$CI->make->eForm();
	return $CI->make->code();
}
function searchAttributes($fltr=array()){
	$CI =& get_instance();
		$CI->make->sForm();
			$CI->make->sDivRow();
				$CI->make->sDivCol(12);
					$CI->make->inputv("Label","label",iSet($fltr,'label'));
					$CI->make->attrTypeDropv("Type","type",iSetObj($fltr,'type'));
				$CI->make->eDivCol();	
			$CI->make->eDivRow();
		$CI->make->eForm();
	return $CI->make->code();	
}	
function attributesForm($det=array()){
	$CI =& get_instance();
		$CI->make->sForm();
			$CI->make->sDivRow();
				$CI->make->sDivCol(12);
					$CI->make->hidden('att_id',iSetObj($det,'att_id'));
					$CI->make->inputv("Label","Label",iSetObj($det,'label'),null,array('class'=>'rOkay'));
					$CI->make->attrTypeDropv("Type","type",iSetObj($det,'type'),null,array('class'=>'rOkay'));
				$CI->make->eDivCol();	
			$CI->make->eDivRow();
		$CI->make->eForm();
	return $CI->make->code();
}
function searchCategories($fltr=array()){
	$CI =& get_instance();
		$CI->make->sForm();
			$CI->make->sDivRow();
				$CI->make->sDivCol(12);
					$CI->make->inputv("Code","code",iSet($fltr,'code'));
					$CI->make->inputv("Name","name",iSet($fltr,'name'));
				$CI->make->eDivCol();
			$CI->make->eDivRow();
		$CI->make->eForm();
	return $CI->make->code();	
}
function categoriesForm($det=array(),$attr=array()){
	$CI =& get_instance();		
		$CI->make->sTab();
			$CI->make->sDiv(array('style'=>'padding-bottom:10px;padding-top:10px;padding-right:10px;'));
				$CI->make->sDivRow();
					$CI->make->sDivCol(12,'right');
						$CI->make->button(fa('fa-save fa-fw').' Save',array('id'=>'save-btn','target'=>'#details','style'=>'margin-right:5px;'),'success');
						$CI->make->A(fa('fa-reply fa-fw')." Back",base_url().'items/categories',array('class'=>'btn btn-primary'));
					$CI->make->eDivCol();
				$CI->make->eDivRow();
			$CI->make->eDiv();
			$dis = true;
			if(iSetObj($det,'cat_id')){
				$dis = false;
			}
			$tabs = array(
				fa('fa-info-circle')." General"=>array('href'=>'#details'),
				fa('fa-tags')." Attributes"=>array('href'=>'#attributes'),
			);
			$CI->make->tabHead($tabs,null,array());
			$CI->make->sTabBody();
				$CI->make->sTabPane(array('id'=>'details','class'=>'tab-pane active','style'=>'padding:10px 30px 10px 30px;'));
					$CI->make->sForm('items/categories_db');
						$CI->make->hidden('cat_id',iSetObj($det,'cat_id'));
						$CI->make->sDivRow();
							$CI->make->sDivCol(12,'left');
								$CI->make->H(3,'Category Details',array('class'=>'page-header'));
								$CI->make->inputv("Item Code","code",iSetObj($det,'code'),'Item Name',array('class'=>'rOkay'));
								$CI->make->inputv("Item Name","name",iSetObj($det,'name'),'Item Name',array('class'=>'rOkay'));
								$CI->make->textareav("Description","desc",iSetObj($det,'desc'));
								$CI->make->H(3,'Inventory Details',array('class'=>'page-header'));
								$CI->make->uomDropv("UOM","uom",iSetObj($det,'uom'),'- Select UOM -',array('class'=>'rOkay'));
								$CI->make->itemTypeDropv("Item Type","item_type",iSetObj($det,'item_type'),'- Select Item Type -',array('class'=>'rOkay'));
								$CI->make->taxTypeDropv("Tax Type","tax_type",iSetObj($det,'tax_type'),'- Select Tax Type -',array('class'=>'rOkay'));
								$CI->make->inactiveDropv("Exclude From Sales","not_for_sale",iSetObj($det,'not_for_sale'),null,array('class'=>'rOkay'));
							$CI->make->eDivCol();
						$CI->make->eDivRow();
					$CI->make->eForm();
				$CI->make->eTabPane();
				$CI->make->sTabPane(array('id'=>'attributes','class'=>'tab-pane','style'=>'padding:10px 30px 10px 30px;'));
					$CI->make->sTable(array('class'=>'table','id'=>'attr-tbl'));
						$CI->make->sTableHead();
							$CI->make->sRow();
								$CI->make->th('Name',array('style'=>'width:30%;'));
								$CI->make->th('Default Value');
								$CI->make->th('Mandatory',array('style'=>'width:10%;'));
								$CI->make->th('');
							$CI->make->eRow();
						$CI->make->eTableHead();
						
						$CI->make->sTableBody();
							foreach ($attr as $key => $val) {
								$CI->make->sRowRwE(array('cart'=>'attr_cart','ref'=>$key));
									$CI->make->sTd();
										$CI->make->span(ucwords($val['attr_label']));
									$CI->make->eTd();
									$CI->make->sTd();
										$CI->make->span($val['attr_val']);
									$CI->make->eTd();
									$CI->make->sTd();
										$man = "NO";
										if($val['attr_man'] == 1){
											$man = "YES";
										}
										$CI->make->span($man);
									$CI->make->eTd();
									$CI->make->td();
								$CI->make->eRowRwE();			
							}
							$CI->make->sRowRwA(array("class"=>"row-input"));
								$CI->make->sTd();
									$CI->make->attributesDrop(null,'attr-drop');
									$CI->make->hidden('attr-drop-type');
									$CI->make->hidden('attr-drop-label');
								$CI->make->eTd();
								$CI->make->sTd();
									$CI->make->input(null,"attr-val");
								$CI->make->eTd();
								$CI->make->sTd();
									$CI->make->checkbox(null,'man-check',1,array(),false);
								$CI->make->eTd();
								$CI->make->sTd();
								$CI->make->eTd();
							$CI->make->eRowRwA();			
						$CI->make->eTableBody();

					$CI->make->eTable();
				$CI->make->eTabPane();
			$CI->make->eTabBody();
		$CI->make->eTab();	
	return $CI->make->code();
}	
?>