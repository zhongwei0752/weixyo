<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/green/do_login', '1377326632', 'template/green/do_login');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>欢迎登陆 - 欢迎登陆,登陆后有更多更好玩,更多更好看,更多更新的资讯 - By 西瓜冰 -  广东医学院 -  Powered by uchome!</title>
 
</head>

<body id="nv_plugin" class="pg_wmff_xiaomidenglu" onkeydown="if(event.keyCode==27) return false;">

  
 
<div id="append_parent"></div><div id="ajaxwaitid"></div>
  <link rel="stylesheet" type="text/css" href="./template/default/login.css">
 
 
<div class="top">
<div class="logo">
<a href="./" title="广东医学院">广东医学院 </a>
</div>
</div>

<div id="loaddiv" class="content clearfix loadimg">
  <div class="language">    
     
<a href="javascript:;" id="wmffstranlink">简体</a> 

    <a href="./" class="change_lang last">返回首页</a>
  </div>
  <div class="login_form clearfix">
    <div class="pad_50 clearfix">
      <h4>登录广东医学院</h4>
  

<form id="loginform" name="loginform" action="do.php?ac=<?=$_SCONFIG['login_action']?>&<?=$url_plus?>&ref" method="post" class="c_form">

<span id="return_ls" style="display:none"></span>
        <div class="input-field clearfix" id="loginId">

 

 

        <div class="input_kuang item errortip">

<script type="text/javascript">simulateSelect('ls_fastloginfield')</script>
<input type="text" name="username" id="ls_username" value="<?=$membername?>" autocomplete="off" placeholder="用户名" class="wmff_wmkk item errortip" tabindex="901" />

  </div>
  


  
        </div>


        <div class="input-field clearfix" id="loginPass">
  <input type="password" name="password" id="ls_password" class="input_kuang item errortip" placeholder="密码" autocomplete="off" tabindex="902" />
        </div>
 


   
        <div class="cooke">
     
  <label for="ls_cookietime"><input type="checkbox" id="ls_cookietime" name="cookietime" class="Mradio val_mT" value="315360000" <?=$cookiecheck?> style="margin-bottom: -2px;" tabindex="903"><span class="val_m">自动登录</span></label>

        </div>


        <div class="sub_log clearfix">
          <div class="sub_login flt_l">
 			<input type="hidden" name="refer" value="<?=$refer?>" />
 			<input type="hidden" name="formhash" value="<?php echo formhash(); ?>" />
<input type="submit" id="loginsubmit" name="loginsubmit" value="登录" class="no_bg" tabindex="904" />
 
          </div>
          <a href="do.php?ac=lostpasswd">忘记密码?</a>
        </div>
      </form>
  	
    </div>
    <div class="ano_log">
   
   <a href="do.php?ac=f0be052f54a639302084fd4d8dce08dc" class="mt_login">立即注册</a>
   
    </div>
    <div class="ano_span_t">UID、邮箱、用户名 帐户全部互通</div>
  </div>
</div>
 

 

<script type="text/javascript" language="javascript"> var Default_isFT = 0 </script>
<script src="source/plugin/wmff_jianfan/wanmeiff.com_js/12344279923_gbk.js" type="text/javascript"></script>
<div class="footer">
  <ul class="links"><a href="plugin.php?id=ai_view:pages" >关于我们</a><span class="pipe">|</span><a href="plugin.php?id=wq_links:main" >申请友链</a><span class="pipe">|</span><a href="forum.php?mobile=yes" >手机版</a><span class="pipe">|</span><a href="archiver/" >Archiver</a><span class="pipe">|</span><strong><a href="http://www.kizhuo.com/" target="_blank">广东医学院</a></strong>
( <a href="http://www.miitbeian.gov.cn/" target="_blank">ICP13000328</a> )<script src="http://s9.cnzz.com/stat.php?id=4939390&web_id=4939390&show=pic1" language="JavaScript"></script>  </ul>
</div>
 
 
 
 
 
 
 
 
 
 

<span id="scrolltop" onClick="window.scrollTo('0','0')">返回顶部</span>
<script type="text/javascript">_attachEvent(window, 'scroll', function(){showTopLink();});checkBlind();</script>
<div id="uchome_tips" style="display:none;"></div>
<script type="text/javascript">
var tipsinfo = '20639855|X3|0.6||0||0|7|1374593997|6a9dc55e9d52a4e610b33fe906466eca|2';
</script>
<script src="http://uchome.gtimg.cn/cloud/scripts/uchome_tips.js?v=1" type="text/javascript" charset="UTF-8"></script></body>
</html>
<?php ob_out();?>