<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/green/space_info|template/green/header|template/green/footer', '1377329013', 'template/green/space_info');?><?php if(empty($_SGLOBAL['inajax'])) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?=$_SC['charset']?>" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title><?php if($_TPL['titles']) { ?><?php if(is_array($_TPL['titles'])) { foreach($_TPL['titles'] as $value) { ?><?php if($value) { ?><?=$value?> - <?php } ?><?php } } ?><?php } ?><?php if($_SN[$space['uid']]) { ?><?=$_SN[$space['uid']]?> - <?php } ?><?=$_SCONFIG['sitename']?> - Powered by UCenter Home</title>
<script language="javascript" type="text/javascript" src="source/script_cookie.js"></script>
<script language="javascript" type="text/javascript" src="source/script_common.js"></script>
<script language="javascript" type="text/javascript" src="source/script_menu.js"></script>
<script language="javascript" type="text/javascript" src="source/script_ajax.js"></script>
<script language="javascript" type="text/javascript" src="source/script_face.js"></script>
<script language="javascript" type="text/javascript" src="source/script_manage.js"></script>
<style type="text/css">
@import url(template/default/style.css);
<?php if($_TPL['css']) { ?>
@import url(template/default/<?=$_TPL['css']?>.css);
<?php } ?>
<?php if(!empty($_SGLOBAL['space_theme'])) { ?>
@import url(theme/<?=$_SGLOBAL['space_theme']?>/style.css);
<?php } elseif($_SCONFIG['template'] != 'default') { ?>
@import url(template/<?=$_SCONFIG['template']?>/style.css);
<?php } ?>
<?php if(!empty($_SGLOBAL['space_css'])) { ?>
<?=$_SGLOBAL['space_css']?>
<?php } ?>
</style>
<link rel="shortcut icon" href="image/favicon.ico" />
<link rel="edituri" type="application/rsd+xml" title="rsd" href="xmlrpc.php?rsd=<?=$space['uid']?>" />
</head>
<body>

<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="header">
<?php if($_SGLOBAL['ad']['header']) { ?><div id="ad_header"><?php adshow('header'); ?></div><?php } ?>
<div class="headerwarp">
<h1 class="logo"><a href="index.php"><img src="template/<?=$_SCONFIG['template']?>/image/logo.gif" alt="<?=$_SCONFIG['sitename']?>" /></a></h1>

<ul class="menu">
<?php if($_SGLOBAL['supe_uid']) { ?>
<li><a href="space.php?do=home">首页</a></li>
<?php } else { ?>
<li><a href="index.php">首页</a></li>
<?php } ?>
<?php if($space['status']=="1") { ?>	
<li><a href="space.php?do=business">商家入口</a></li>
<?php } ?>
<li><a href="space.php?do=street">商品街</a></li>	


<?php if($_SGLOBAL['supe_uid']) { ?>
<li><a href="space.php?do=pm<?php if(!empty($_SGLOBAL['member']['newpm'])) { ?>&filter=newpm<?php } ?>">消息<?php if(!empty($_SGLOBAL['member']['newpm'])) { ?>(新)<?php } ?></a></li>
<?php if($_SGLOBAL['member']['allnotenum']) { ?><li class="notify" id="membernotemenu" onmouseover="showMenu(this.id)"><a href="space.php?do=notice"><?=$_SGLOBAL['member']['allnotenum']?>个提醒</a></li><?php } ?>
<?php } else { ?>
<li><a href="help.php">帮助</a></li>
<?php } ?>
</ul>

<div class="nav_account">
<?php if($_SGLOBAL['supe_uid']) { ?>
<a href="space.php?uid=<?=$_SGLOBAL['supe_uid']?>" class="login_thumb"><?php echo avatar($_SGLOBAL[supe_uid]); ?></a>
<a href="space.php?uid=<?=$_SGLOBAL['supe_uid']?>" class="loginName"><?=$_SN[$_SGLOBAL['supe_uid']]?></a>
<?php if($_SGLOBAL['member']['credit']) { ?>
<a href="cp.php?ac=credit" style="font-size:11px;padding:0 0 0 5px;"><img src="image/credit.gif"><?=$_SGLOBAL['member']['credit']?></a>
<?php } ?>
<br />
<?php if(empty($_SCONFIG['closeinvite'])) { ?>
<a href="cp.php?ac=invite">邀请</a> 
<?php } ?>
<a href="cp.php?ac=task">任务</a> 
<a href="cp.php?ac=magic">道具</a>
<a href="cp.php">设置</a> 
<a href="cp.php?ac=common&op=logout&uhash=<?=$_SGLOBAL['uhash']?>">退出</a>
<?php } else { ?>
<a href="do.php?ac=<?=$_SCONFIG['register_action']?>" class="login_thumb"><?php echo avatar($_SGLOBAL[supe_uid]); ?></a>
欢迎您<br>
<a href="do.php?ac=<?=$_SCONFIG['login_action']?>">登录</a> | 
<a href="do.php?ac=<?=$_SCONFIG['register_action']?>">注册</a>
<?php } ?>
</div>
</div>
</div>

<div id="wrap">
<?php if($_GET['do']!="street") { ?>	


<div id="main">


<?php if($_GET['do']=="home") { ?>	
<div id="mainarea" style="width:720px;">
<?php } else { ?>
<div id="mainarea">
<?php } ?>

<?php if($_SGLOBAL['ad']['contenttop']) { ?><div id="ad_contenttop"><?php adshow('contenttop'); ?></div><?php } ?>
<?php } ?>

<?php } ?>


<h3 class="feed_header">
<a href="space.php?uid=<?=$space['uid']?>" class="r_option">返回个人主页</a>
个人资料
</h3>
<br>
<table cellspacing="0" cellpadding="0" class="infotable">

<tr>
<th width="120">经验:</th>
<td><?=$space['experience']?> <?=$space['star']?></td>
</tr>
<tr>
<th>用户组:</th>
<td><?=$_SGLOBAL['grouptitle'][$space['groupid']]['grouptitle']?> <?php g_icon($space[groupid]); ?></td>
</tr>
<tr>
<th>积分:</th>
<td><?=$space['credit']?></td>
</tr>
<tr>
<th>访问人次:</th>
<td><?=$space['viewnum']?></td>
</tr>
<tr>
<th>创建时间:</th>
<td><?php echo sgmdate('Y-m-d',$space[dateline],1); ?></td>
</tr>
<tr>
<th>上次登录:</th>
<td><?php if($space['lastlogin']) { ?><?php echo sgmdate('Y-m-d',$space[lastlogin],1); ?><?php } ?></td>
</tr>
<?php if($isonline) { ?>
<tr style="color:red;">
<th>最后活跃:</th>
<td><?=$isonline?> (当前在线)</td>
</tr>
<?php } ?>

<?php if($space['profile_base']) { ?>
<tr>
<td class="td_title" colspan="2">基本资料</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<?php } ?>
<?php if($space['sex']) { ?>
<tr><th>性别:</th><td><?=$space['sex']?></td></tr>
<?php } ?>
<?php if($space['birth']) { ?>
<tr><th>生日:</th><td><?=$space['birth']?></td></tr>
<?php } ?>
<?php if($space['blood']) { ?>
<tr><th>血型:</th><td><?=$space['blood']?></td></tr>
<?php } ?>
<?php if($space['marry']) { ?>
<tr><th>婚恋:</th><td><?=$space['marry']?></td></tr>
<?php } ?>
<?php if($space['residecity']) { ?>
<tr><th>居住:</th><td><?=$space['residecity']?></td></tr>
<?php } ?>
<?php if($space['birthcity']) { ?>
<tr><th>家乡:</th><td><?=$space['birthcity']?></td></tr>
<?php } ?>

<?php if(is_array($fields)) { foreach($fields as $fieldid => $value) { ?>
<?php if($space["field_$fieldid"] && empty($value['invisible'])) { ?>
<?php $fieldvalue = $space["field_$fieldid"]; $urlvalue = rawurlencode($fieldvalue); ?>
<tr><th><?=$value['title']?>:</th><td><?php if($value['allowsearch']) { ?>
<a href="cp.php?ac=friend&op=search&field_<?=$fieldid?>=<?=$urlvalue?>&searchmode=1"><?=$fieldvalue?></a>
<?php } else { ?><?=$fieldvalue?><?php } ?></td></tr>
<?php } ?>
<?php } } ?>

<?php if($space['profile_contact']) { ?>
<tr>
<td class="td_title" colspan="2">联系方式</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<?php } ?>
<?php if($space['mobile']) { ?>
<tr><th>手机:</th><td><?=$space['mobile']?></td></tr>
<?php } ?>
<?php if($space['qq']) { ?>
<tr><th>QQ:</th><td><?=$space['qq']?></td></tr>
<?php } ?>
<?php if($space['msn']) { ?>
<tr><th>MSN:</th><td><?=$space['msn']?></td></tr>
<?php } ?>

<?php if($space['edu']) { ?>
<tr>
<td class="td_title" colspan="2">教育情况</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>

<tr><th>学校:</th><td>
<?php if(is_array($space['edu'])) { foreach($space['edu'] as $value) { ?>
<?php $title_url = urlencode($value[title]);$subtitle_url = urlencode($value[subtitle]); ?>
<p><a href="space.php?do=mtag&tagname=<?=$title_url?>"><?=$value['title']?></a> <a href="space.php?do=mtag&tagname=<?=$subtitle_url?>"><?=$value['subtitle']?></a> <span class="gray">(<?=$value['startyear']?> 年)</span></p>
<?php } } ?>
</td></tr>
<?php } ?>

<?php if($space['work']) { ?>
<tr>
<td class="td_title" colspan="2">工作情况</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>

<tr><th>公司或机构:</th><td>
<?php if(is_array($space['work'])) { foreach($space['work'] as $value) { ?>
<?php $title_url = urlencode($value[title]);$subtitle_url = urlencode($value[subtitle]); ?>
<p><a href="space.php?do=mtag&tagname=<?=$title_url?>"><?=$value['title']?></a> <a href="space.php?do=mtag&tagname=<?=$subtitle_url?>"><?=$value['subtitle']?></a> <span class="gray">(<?=$value['startyear']?>年<?=$value['startmonth']?>月 ~ 
<?php if($value['endyear']) { ?><?=$value['endyear']?>年<?php } ?>
<?php if($value['endmonth']) { ?><?=$value['endmonth']?>月<?php } ?>
<?php if(!$value['endyear'] && !$value['endmonth']) { ?>现在<?php } ?>)</span></p>
<?php } } ?>
</td></tr>
<?php } ?>

<?php if($space['info']) { ?>
<?php $infoarr = array(
	'trainwith' => '我想结交',
	'interest' => '兴趣爱好',
	'book' => '喜欢的书籍',
	'movie' => '喜欢的电影',
	'tv' => '喜欢的电视',
	'music' => '喜欢的音乐',
	'game' => '喜欢的游戏',
	'sport' => '喜欢的运动',
	'idol' => '偶像',
	'motto' => '座右铭',
	'wish' => '最近心愿',
	'intro' => '我的简介'
); ?>
<tr>
<td class="td_title" colspan="2">个人介绍</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<?php if(is_array($space['info'])) { foreach($space['info'] as $value) { ?>
<?php if($value['title']) { ?>
<tr><th><?=$infoarr[$value['subtype']]?>:</th><td><?=$value['title']?>
</td></tr>
<?php } ?>
<?php } } ?>
<?php } ?>

</table><br>
<?php if(empty($_SGLOBAL['inajax'])) { ?>
<?php if(empty($_TPL['nosidebar'])) { ?>
<?php if($_SGLOBAL['ad']['contentbottom']) { ?><br style="line-height:0;clear:both;"/><div id="ad_contentbottom"><?php adshow('contentbottom'); ?></div><?php } ?>
</div>

<!--/mainarea-->
<div id="bottom"></div>
</div>
<!--/main-->
<?php } ?>

<div id="footer">
<?php if($_TPL['templates']) { ?>
<div class="chostlp" title="切换风格"><img id="chostlp" src="<?=$_TPL['default_template']['icon']?>" onmouseover="showMenu(this.id)" alt="<?=$_TPL['default_template']['name']?>" /></div>
<ul id="chostlp_menu" class="chostlp_drop" style="display: none">
<?php if(is_array($_TPL['templates'])) { foreach($_TPL['templates'] as $value) { ?>
<li><a href="cp.php?ac=common&op=changetpl&name=<?=$value['name']?>" title="<?=$value['name']?>"><img src="<?=$value['icon']?>" alt="<?=$value['name']?>" /></a></li>
<?php } } ?>
</ul>
<?php } ?>

<p class="r_option">
<a href="javascript:;" onclick="window.scrollTo(0,0);" id="a_top" title="TOP"><img src="image/top.gif" alt="" style="padding: 5px 6px 6px;" /></a>
</p>

<?php if($_SGLOBAL['ad']['footer']) { ?>
<p style="padding:5px 0 10px 0;"><?php adshow('footer'); ?></p>
<?php } ?>

<?php if($_SCONFIG['close']) { ?>
<p style="color:blue;font-weight:bold;">
提醒：当前站点处于关闭状态
</p>
<?php } ?>
<p>
<?=$_SCONFIG['sitename']?> - 
<a href="mailto:<?=$_SCONFIG['adminemail']?>">联系我们</a>
<?php if($_SCONFIG['miibeian']) { ?> - <a  href="http://www.miibeian.gov.cn" target="_blank"><?=$_SCONFIG['miibeian']?></a><?php } ?>
</p>
<p>
Powered by <a  href="http://u.discuz.net" target="_blank"><strong>UCenter Home</strong></a> <span title="<?php echo X_RELEASE; ?>"><?php echo X_VER; ?></span>
<?php if(!empty($_SCONFIG['licensed'])) { ?><a  href="http://license.comsenz.com/?pid=7&host=<?=$_SERVER['HTTP_HOST']?>" target="_blank">Licensed</a><?php } ?>
&copy; 2001-2009 <a  href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a>
</p>
<?php if($_SCONFIG['debuginfo']) { ?>
<p><?php echo debuginfo(); ?></p>
<?php } ?>
</div>
</div>
<!--/wrap-->

<?php if($_SGLOBAL['appmenu']) { ?>
<ul id="ucappmenu_menu" class="dropmenu_drop" style="display:none;">
<li><a href="<?=$_SGLOBAL['appmenu']['url']?>" title="<?=$_SGLOBAL['appmenu']['name']?>" target="_blank"><?=$_SGLOBAL['appmenu']['name']?></a></li>
<?php if(is_array($_SGLOBAL['appmenus'])) { foreach($_SGLOBAL['appmenus'] as $value) { ?>
<li><a href="<?=$value['url']?>" title="<?=$value['name']?>" target="_blank"><?=$value['name']?></a></li>
<?php } } ?>
</ul>
<?php } ?>

<?php if($_SGLOBAL['supe_uid']) { ?>
<ul id="membernotemenu_menu" class="dropmenu_drop" style="display:none;">
<?php $member = $_SGLOBAL['member']; ?>
<?php if($member['notenum']) { ?><li><img src="image/icon/notice.gif" width="16" alt="" /> <a href="space.php?do=notice"><strong><?=$member['notenum']?></strong> 个新通知</a></li><?php } ?>
<?php if($member['pokenum']) { ?><li><img src="image/icon/poke.gif" alt="" /> <a href="cp.php?ac=poke"><strong><?=$member['pokenum']?></strong> 个新招呼</a></li><?php } ?>
<?php if($member['addfriendnum']) { ?><li><img src="image/icon/friend.gif" alt="" /> <a href="cp.php?ac=friend&op=request"><strong><?=$member['addfriendnum']?></strong> 个好友请求</a></li><?php } ?>
<?php if($member['mtaginvitenum']) { ?><li><img src="image/icon/mtag.gif" alt="" /> <a href="cp.php?ac=mtag&op=mtaginvite"><strong><?=$member['mtaginvitenum']?></strong> 个群组邀请</a></li><?php } ?>
<?php if($member['eventinvitenum']) { ?><li><img src="image/icon/event.gif" alt="" /> <a href="cp.php?ac=event&op=eventinvite"><strong><?=$member['eventinvitenum']?></strong> 个活动邀请</a></li><?php } ?>
<?php if($member['myinvitenum']) { ?><li><img src="image/icon/userapp.gif" alt="" /> <a href="space.php?do=notice&view=userapp"><strong><?=$member['myinvitenum']?></strong> 个应用消息</a></li><?php } ?>
</ul>
<?php } ?>

<?php if($_SGLOBAL['supe_uid']) { ?>
<?php if(!isset($_SCOOKIE['checkpm'])) { ?>
<script language="javascript"  type="text/javascript" src="cp.php?ac=pm&op=checknewpm&rand=<?=$_SGLOBAL['timestamp']?>"></script>
<?php } ?>
<?php if(!isset($_SCOOKIE['synfriend'])) { ?>
<script language="javascript"  type="text/javascript" src="cp.php?ac=friend&op=syn&rand=<?=$_SGLOBAL['timestamp']?>"></script>
<?php } ?>
<?php } ?>
<?php if(!isset($_SCOOKIE['sendmail'])) { ?>
<script language="javascript"  type="text/javascript" src="do.php?ac=sendmail&rand=<?=$_SGLOBAL['timestamp']?>"></script>
<?php } ?>

<?php if($_SGLOBAL['ad']['couplet']) { ?>
<script language="javascript" type="text/javascript" src="source/script_couplet.js"></script>
<div id="uch_couplet" style="z-index: 10; position: absolute; display:none">
<div id="couplet_left" style="position: absolute; left: 2px; top: 60px; overflow: hidden;">
<div style="position: relative; top: 25px; margin:0.5em;" onMouseOver="this.style.cursor='hand'" onClick="closeBanner('uch_couplet');"><img src="image/advclose.gif"></div>
<?php adshow('couplet'); ?>
</div>
<div id="couplet_rigth" style="position: absolute; right: 2px; top: 60px; overflow: hidden;">
<div style="position: relative; top: 25px; margin:0.5em;" onMouseOver="this.style.cursor='hand'" onClick="closeBanner('uch_couplet');"><img src="image/advclose.gif"></div>
<?php adshow('couplet'); ?>
</div>
<script type="text/javascript">
lsfloatdiv('uch_couplet', 0, 0, '', 0).floatIt();
</script>
</div>
<?php } ?>
<?php if($_SCOOKIE['reward_log']) { ?>
<script type="text/javascript">
showreward();
</script>
<?php } ?>
</body>
</html>
<?php } ?><?php ob_out();?>