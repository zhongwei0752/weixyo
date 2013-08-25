<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: space_wall.php 12880 2009-07-24 07:20:24Z liguode $
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}
if($_POST['cheak']){

	$phone=$_POST['phone'];
	$place=$_POST['place'];
	if(empty($phone)||empty($place)){
		showmessage("内容不为空");
	}
	inserttable("card",array('phone'=>$phone,'place'=>$place,'uid'=>$space['uid']));
	showmessage("提交成功，请等待工作人员联系！");
}
if($_POST['cheakcard']){

	$username=$_POST['username'];
	$password=$_POST['password'];
	include_once S_ROOT.'./uc_client/client.php';
	if(!$passport = getpassport($username, $password)) {
		
	showmessage('确认失败，请确认用户名密码是否正确');
	
	}else{
	
	updatetable("space",array('buy'=>'1'),array('uid'=>$passport['uid']));
	showmessage('确认成功');
	}
	//inserttable("card",array('phone'=>$phone,'place'=>$place,'uid'=>$space['uid']));
}
include_once template("space_cheak");

?>