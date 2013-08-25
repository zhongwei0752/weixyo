<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: space_wall.php 12880 2009-07-24 07:20:24Z liguode $
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}
	$page = empty($_GET['page'])?1:intval($_GET['page']);
	$perpage = 20;
	$perpage = mob_perpage($perpage);
	
	$start = ($page-1)*$perpage;
	$theurl = "space.php?uid=$space[uid]&do=street";
	//¼ì²é¿ªÊ¼Êý
	if($_GET['view']=="viewnum"){
		$view="b.viewnum DESC";
	}elseif($_GET['view']=="datelinel"){
		$view="b.dateline ASC";
	}elseif($_GET['view']=="curpriceh"){
		$view="b.curprice DESC";
	}elseif($_GET['view']=="curpricel"){
		$view="b.curprice ASC";
	}elseif($_GET['view']=="oldpricel"){
		$view="b.oldprice ASC";
	}elseif($_GET['view']=="oldpriceh"){
		$view="b.oldprice DESC";
	}else{
		$view="b.dateline DESC";
	}
	ckstart($start, $perpage);
	$goodslist = array();
	$count = $_SGLOBAL['db']->result($_SGLOBAL['db']->query("SELECT COUNT(*) FROM ".tname('goods')." "),0);
	$query = $_SGLOBAL['db']->query("SELECT bf.message, bf.target_ids, bf.magiccolor, b.* FROM ".tname('goods')." b 
				LEFT JOIN ".tname('goodsfield')." bf ON bf.goodsid=b.goodsid
				ORDER BY $view  LIMIT $start,$perpage");
	while ($value = $_SGLOBAL['db']->fetch_array($query)) {

		$goodslist[] = $value;
	}

	$multi = multi($count, $perpage, $page, $theurl);
include_once template("space_street");

?>