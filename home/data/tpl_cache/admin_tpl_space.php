<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('admin/tpl/space|admin/tpl/header|admin/tpl/side|admin/tpl/footer|template/green/header|template/green/footer', '1377331667', 'admin/tpl/space');?><?php $_TPL['menunames'] = array(
		'index' => '管理首页',
		'config' => '站点设置',
		'privacy' => '隐私设置',
		'usergroup' => '用户组',
		'credit' => '积分规则',
		'profilefield' => '用户栏目',
		'profield' => '群组栏目',
		'eventclass' => '活动分类',
		'magic' => '道具设置',
		'task' => '有奖任务',
		'spam' => '防灌水设置',
		'censor' => '词语屏蔽',
		'ad' => '广告设置',
		'userapp' => 'MYOP应用',
		'app' => 'UCenter应用',
		'network' => '随便看看',
		'cache' => '缓存更新',
		'log' => '系统log记录',
		'space' => '用户管理',
		'feed' => '动态(feed)',
		'share' => '分享',
		'blog' => '日志',
		'album' => '相册',
		'pic' => '图片',
		'comment' => '评论/留言',
		'thread' => '话题',
		'post' => '回帖',
		'doing' => '记录',
		'tag' => '标签',
		'mtag' => '群组',
		'poll' => '投票',
		'event' => '活动',
		'magiclog' => '道具记录',
		'report' => '举报',
		'block' => '数据调用',
		'template' => '模板编辑',
		'backup' => '数据备份',
		'stat' => '统计更新',
		'cron' => '系统计划任务',
		'click' => '表态动作',
		'ip' => '访问IP设置',
		'hotuser' => '推荐成员设置',
		'defaultuser' => '默认好友设置',
	); ?>
<?php $_TPL['nosidebar'] = 1; ?>
<?php if(empty($_SGLOBAL['inajax'])) { ?>
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


<style type="text/css">
@import url(admin/tpl/style.css);
</style>

<div id="cp_content">


<div class="mainarea">
<div class="maininner">


<div class="tabs_header">
<ul class="tabs">
<li<?=$actives['all']?>><a href="admincp.php?ac=<?=$ac?>"><span>浏览全部用户</span></a></li>
<?php if(checkperm('managename')) { ?>
<li<?=$actives['0']?>><a href="admincp.php?ac=<?=$ac?>&perpage=20&namestatus=0&searchsubmit=1&tab=0"><span>实名未认证</span></a></li>
<li<?=$actives['1']?>><a href="admincp.php?ac=<?=$ac?>&perpage=20&namestatus=1&searchsubmit=1&tab=1"><span>实名已认证</span></a></li>
<?php } ?>
<li<?=$actives['2']?>><a href="admincp.php?ac=<?=$ac?>&perpage=20&videostatus=0&searchsubmit=1&tab=2"><span>视频未认证</span></a></li>
<li<?=$actives['3']?>><a href="admincp.php?ac=<?=$ac?>&perpage=20&videostatus=1&searchsubmit=1&tab=3"><span>视频已认证</span></a></li>
</ul>
</div>


<form method="get" action="admincp.php">
<div class="block style4">
<table cellspacing="3" cellpadding="3">
<tr>
<th>用户UID</th><td><input type="text" name="uid" value="<?=$_GET['uid']?>" size="10"></td>
<th>用户名</th><td><input type="text" name="username" value="<?=$_GET['username']?>"></td>
</tr>
<tr>
<th>姓名*</th><td><input type="text" name="name" value="<?=$_GET['name']?>"></td>
<th>头像</th><td>
<select name="avatar">
<option value="">不限</option>
<option value="1"<?php if($_GET['avatar'] == '1') { ?> selected<?php } ?>>上传头像</option>
<option value="0"<?php if($_GET['avatar'] == '0') { ?> selected<?php } ?>>没有头像</option>
</select></td>
</tr>
<tr>
<th>实名认证</th><td>
<select name="namestatus">
<option value="">不限</option>
<option value="1"<?php if($_GET['namestatus'] == '1') { ?> selected<?php } ?>>已认证</option>
<option value="0"<?php if($_GET['namestatus'] == '0') { ?> selected<?php } ?>>未认证</option>
</select></td>
<th>视频认证</th><td>
<select name="videostatus">
<option value="">不限</option>
<option value="1"<?php if($_GET['videostatus'] == '1') { ?> selected<?php } ?>>已认证</option>
<option value="0"<?php if($_GET['videostatus'] == '0') { ?> selected<?php } ?>>未认证</option>
</select></td>
</tr>
<tr>
<th>用户组</th><td>
<select name="groupid">
<option value="">不限制</option>
<?php if(is_array($usergroups)) { foreach($usergroups as $gid => $value) { ?>
<option value="<?=$value['gid']?>"<?php if($_GET['groupid'] == $value['gid']) { ?> selected<?php } ?>><?=$value['grouptitle']?></option>
<?php } } ?>
</select>
</td>
<th>用户状态</th><td>
<select name="flag">
<option value="">不限</option>
<option value="1"<?php if($_GET['flag'] == '1') { ?> selected<?php } ?>>保护用户</option>
<option value="0"<?php if($_GET['flag'] == '0') { ?> selected<?php } ?>>普通用户</option>
<option value="-1"<?php if($_GET['flag'] == '-1') { ?> selected<?php } ?>>锁定用户</option>
</select>
</td>
</tr>
<tr>
<th>用户经验值</th><td>
<input type="text" name="experience1" value="<?=$_GET['experience1']?>" size="10"> ~
<input type="text" name="experience2" value="<?=$_GET['experience2']?>" size="10">
</td>
</tr>
<tr>
<th>用户积分</th><td>
<input type="text" name="credit1" value="<?=$_GET['credit1']?>" size="10"> ~
<input type="text" name="credit2" value="<?=$_GET['credit2']?>" size="10">
</td>
</tr>
<tr><th>空间创建时间</th><td colspan="3">
<input type="text" name="dateline1" value="<?=$_GET['dateline1']?>" size="10"> ~
<input type="text" name="dateline2" value="<?=$_GET['dateline2']?>" size="10"> (YYYY-MM-DD)
</td></tr>
<tr><th>最后更新时间</th><td colspan="3">
<input type="text" name="updatetime1" value="<?=$_GET['updatetime1']?>" size="10"> ~
<input type="text" name="updatetime2" value="<?=$_GET['updatetime2']?>" size="10"> (YYYY-MM-DD)
</td></tr>

<tr><th>最后访问时间</th><td colspan="3">
<input type="text" name="lastlogin1" value="<?=$_GET['lastlogin1']?>" size="10"> ~
<input type="text" name="lastlogin2" value="<?=$_GET['lastlogin2']?>" size="10"> (YYYY-MM-DD)
</td></tr>
<tr><th>最后发信息时间</th><td colspan="3">
<input type="text" name="lastpost1" value="<?=$_GET['lastpost1']?>" size="10"> ~
<input type="text" name="lastpost2" value="<?=$_GET['lastpost2']?>" size="10"> (YYYY-MM-DD)
</td></tr>
<tr><th>结果排序</th>
<td colspan="3">
<select name="orderby">
<option value="">默认排序</option>
<option value="dateline"<?=$orderby['dateline']?>>建立时间</option>
<option value="updatetime"<?=$orderby['updatetime']?>>更新时间</option>
<option value="viewnum"<?=$orderby['viewnum']?>>访问量</option>
<option value="experience"<?=$orderby['experience']?>>经验值</option>
<option value="credit"<?=$orderby['credit']?>>积分数</option>
<option value="friendnum"<?=$orderby['friendnum']?>>好友数</option>
</select>
<select name="ordersc">
<option value="desc"<?=$ordersc['desc']?>>递减</option>
<option value="asc"<?=$ordersc['asc']?>>递增</option>
</select>
<select name="perpage">
<option value="20"<?=$perpages['20']?>>每页显示20个</option>
<option value="50"<?=$perpages['50']?>>每页显示50个</option>
<option value="100"<?=$perpages['100']?>>每页显示100个</option>
</select>
<input type="hidden" name="ac" value="<?=$ac?>">
<?php if(isset($_GET['tab'])) { ?>
<input type="hidden" name="tab" value="<?=$_GET['tab']?>">
<?php } ?>
<input type="submit" name="searchsubmit" value="搜索" class="submit">
</td>
</tr>
</table>
</div>
</form>

<?php if($list) { ?>


<?php $flagarr = array(
		'-1' => '<span style="color:blue;">锁定</span>',
		'0' => '正常',
		'1' => '<span style="color:red;">保护</span>'
	); ?>
<div class="bdrcontent">

<form method="post" action="admincp.php?ac=<?=$ac?>&perpage=<?=$perpage?>&page=<?=$page?>">
<input type="hidden" name="formhash" value="<?php echo formhash(); ?>" />
<table cellspacing="2" cellpadding="2" class="listtable">
<tr class="line">
<th width="30">选择</th>
<th width="55">用户</th>
<th>用户名/姓名</th>
<th>用户组</th>
<th>经验/积分/好友</th>
<th>附件</th>
<th>注册/更新</th>
<th>状态</th>
<th>操作</th>
</tr>
<?php if(is_array($list)) { foreach($list as $key => $value) { ?>
<tr<?php if($key%2==1) { ?> class="line"<?php } ?>>
<td>
<input type="checkbox" name="uids[]" value="<?=$value['uid']?>">
</td>
<td>
<a href="space.php?uid=<?=$value['uid']?>" target="_blank"><?php echo avatar($value[uid],small); ?></a>
</td>
<td>
<a href="space.php?uid=<?=$value['uid']?>"><?=$value['username']?></a>
<?php if($value['name']) { ?>
<?php if($value['namestatus']) { ?>
<p style="color:red;"><?=$value['name']?></p>
<?php } else { ?>
<p class="gray"><?=$value['name']?></p>
<?php } ?>
<?php } ?>
</td>
<td>
<?=$value['grouptitle']?>
<?php if($fusers[$value['uid']]) { ?>
<p>期限：<?=$fusers[$value['uid']]['expiration']?></p>
<p>操作：<a href="space.php?uid=<?=$fusers[$value['uid']]['opuid']?>"><?=$fusers[$value['uid']]['opusername']?></a></p>
<?php } ?>
</td>
<td class="gray">
<?=$value['experience']?> / <?=$value['credit']?> / <?=$value['friendnum']?></td>
<td><?=$value['attachsize']?></td>
<td>
<?php echo sgmdate('Y-m-d H:i', $value[dateline]); ?><br>
<?php if($value['updatetime']) { ?><?php echo sgmdate('Y-m-d H:i', $value[updatetime]); ?><?php } else { ?>-<?php } ?>
</td>
<td>
<?=$flagarr[$value['flag']]?>
</td>
<td><a href="admincp.php?ac=space&op=manage&uid=<?=$value['uid']?>">管理</a><br></td>
</tr>
<?php } } ?>
</table>
</div>

<div class="footactions">
<input type="checkbox" id="chkall" name="chkall" onclick="checkAll(this.form, 'uids')">全选 &nbsp;&nbsp;
<?php if(checkperm('managename')) { ?>
<input type="radio" name="optype" value="1"> 通过实名
<input type="radio" name="optype" value="2"> 取消实名
<input type="radio" name="optype" value="3"> 清空实名
<?php } ?>

<?php if($managespacenote) { ?>
<input type="radio" name="optype" value="4"> 发送邮件
<input type="radio" name="optype" value="5"> 打招呼
<?php } ?>
<?php if(checkperm('manageconfig')) { ?>
<input type="radio" name="optype" value="7"> 赠送道具
<?php } ?>
<?php if($managespaceinfo) { ?>
<input type="radio" name="optype" value="6"> 清理CSS
<?php } ?>

<input type="submit" name="listsubmit" value="提交" class="submit">
<div class="pages"><?=$multi?></div>
</div>

</form>
<?php } else { ?>
<div class="bdrcontent">
<p>指定条件下还没有数据</p>
</div>
<?php } ?>
</div>
</div>

<div class="side">
<?php if($menus['0']) { ?>
<div class="block style1">
<h2>基本设置</h2>
<ul class="folder">
<?php if(is_array($acs['0'])) { foreach($acs['0'] as $value) { ?>
<?php if($menus['0'][$value]) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } ?>
<?php } } ?>
</ul>
</div>
<?php } ?>

<div class="block style1">
<h2>批量管理</h2>
<ul class="folder">
<?php if(is_array($acs['3'])) { foreach($acs['3'] as $value) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } } ?>
<?php if(is_array($acs['1'])) { foreach($acs['1'] as $value) { ?>
<?php if($menus['1'][$value]) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } ?>
<?php } } ?>
</ul>
</div>

<?php if($menus['2']) { ?>
<div class="block style1">
<h2>高级设置</h2>
<ul class="folder">
<?php if(is_array($acs['2'])) { foreach($acs['2'] as $value) { ?>
<?php if($menus['2'][$value]) { ?>
<?php if($ac==$value) { ?><li class="active"><?php } else { ?><li><?php } ?><a href="admincp.php?ac=<?=$value?>"><?=$_TPL['menunames'][$value]?></a></li>
<?php } ?>
<?php } } ?>
<?php if($menus['0']['config']) { ?><li><a href="<?=UC_API?>" target="_blank">UCenter</a></li><?php } ?>
</ul>
</div>
<?php } ?>
</div>

</div>

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