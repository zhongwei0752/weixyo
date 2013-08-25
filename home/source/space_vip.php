<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: space_wall.php 12880 2009-07-24 07:20:24Z liguode $
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}
	$id=$_GET['id'];
	$query = $_SGLOBAL['db']->query("SELECT bf.message, bf.target_ids, bf.magiccolor, b.* FROM ".tname('goods')." b 
				LEFT JOIN ".tname('goodsfield')." bf ON bf.goodsid=b.goodsid where b.goodsid=$id
				ORDER BY b.dateline DESC ");
	$wei = $_SGLOBAL['db']->fetch_array($query);

include_once template("space_vip");

?>