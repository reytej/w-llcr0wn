<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//////////////////////////////////////////////////
/// SIDE BAR LINKS                            ///
////////////////////////////////////////////////
$nav = array();
		$maintenance['uom'] = array('title'=>'UOM','path'=>'inv_maintenance/uom','exclude'=>0);
	$inventory['maintenance'] = array('title'=>'Maintenance','path'=>$maintenance,'exclude'=>0);
$nav['inventory'] = array('title'=>'<i class="fa fa-archive"></i> <span>Inventory</span>','path'=>$inventory,'exclude'=>0);	

///ADMIN CONTROL////////////////////////////////
	$controlSettings['user'] = array('title'=>'Users','path'=>'user','exclude'=>0);
	$controlSettings['roles'] = array('title'=>'Roles','path'=>'admin/roles','exclude'=>0);
$nav['control'] = array('title'=>'<i class="fa fa-cogs"></i> <span>Admin Control</span>','path'=>$controlSettings,'exclude'=>0);
$nav['logout'] = array('title'=>'<i class="fa fa-sign-out"></i> <span>Log Out</span>','path'=>'site/go_logout','exclude'=>1);
$config['sideNav'] = $nav;
