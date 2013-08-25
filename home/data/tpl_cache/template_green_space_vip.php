<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/green/space_vip', '1377376807', 'template/green/space_vip');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
  <title>商品详情</title>
<meta http-equiv="content-type" content="text/html; charset=utf8" />

  <!-- styles/scripts end -->
  <link rel="shortcut icon" href="/favicon.ico" />
    
  <!-- styles/scripts start -->
<style type="text/css" media="all">
    @import url( ./vip/css/reset.css );
    @import url( ./vip/css/cw.css );

</style>

<script type="text/javascript" src="http://use.typekit.com/bjl3mqe.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" src="./vip/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="./vip/js/jquery.fullscreenr.js"></script>
<script type="text/javascript" src="./vip/js/jquery.scrollbarpaper.js"></script>
<script type="text/javascript" src="./vip/js/cw.js"></script>
    <script type="text/javascript">
    <!--
        $(function() {
                CW.initBackground({
                    defaultImage: 'http://www.christianwoo.com/../images/backgrounds/profile/profile-1.jpg',
                    pathPrefix: 'http://www.christianwoo.com/../',
                    imageList: [
                        {src: 'http://www.christianwoo.com/../images/backgrounds/profile/profile-1.jpg'}
                    ]
                });

                CW.initPanel();
            });
    //-->
  </script>

  <style>
  .nav_menu {
  width: 115px;
  height: 20px;
  margin-top: 12px;
  color: #aaa;
  float: left;
  overflow: hidden;
  z-index: 1500;
}
.icon {
  width: 20px;
  height: 20px;
  margin: 7px 103px 7px 40px;
  float: left;
  overflow: hidden;
  background: url(../images/icon.jpg) no-repeat left top;
  background-size: 20px 20px;
}
.bold { font-family: "HNLTStdBd", "Helvetica Neue",Arial, Helvetica, Geneva, sans-serif; text-shadow: #ffffff 0px 1px; }
a:link, a:active, a:visited { 
  border: none;
  color: inherit;
  font-size: inherit;
  text-decoration: none;
} 
.nav{
  width: 100%;
  min-width: 960px;
  height: 35px;
  margin: 0px;
  border: none;
  position: fixed;
  z-index: 1000;
  overflow: hidden;
  background-color: #f4f4f4;
  -moz-box-shadow:    0px -2px 8px 0px #999999;
    -webkit-box-shadow: 0px -2px 8px 0px #999999;
    box-shadow:         0px -2px 8px 0px #999999;
}
  </style>
</head>

<body>
    <div class="nav">
      <a href="/"><div class="icon"></div></a>
      <div class="nav_menu"><p class="bold link"><a href="space.php?do=street">返回购物街</a></p></div>
      <div class="nav_menu"><p class="bold link"><a href="space.php?do=card" target="blank">会员卡购买</a></p></div>
    </div>
  <div id="realBody">
    <div id="wrapper">
        
      <div id="panel">
        <div class="panelControls"><a href="#" class="open">Hide</a></div>
        <div class="clear"></div>
        <div class="panelContent">
          <div class="copy" style="width: 445px;">
            <p style="color:green;">本商品由"<?=$_SN[$wei['uid']]?>"提供</p>
            <br /><span style="text-decoration: line-through;">原价:<?=$wei['oldprice']?></span>
            <span style="color:red;float:right;">会员价:<?=$wei['curprice']?></span><br/><br/>
            <span style="color:red;">会员特权:<?=$wei['power']?></span><br/><br/>
            <div class="copy" style="width:445px;overflow:hidden;">
            <img src="<?=$wei['imageurl']?>" style="width:445px;overflow:hidden;"><br/>
          </div>
             <div class="clear"><br/></div>
            <p><?=$wei['message']?></p>
          </div>
        <!--   <div class="subnavProfile">
    <ul>
        <li  class="current"><a href="/profile/">Story</a></li>
        <li ><a href="/profile/approach.php">Approach</a></li>
        <li ><a href="/profile/founder.php">Founder</a></li>
    </ul>
</div>   -->        <div class="clear"></div>
        </div>
      </div>
      <div id="navMain" style="position: relative;overflow:hidden;">
        <div id="logo" style="font-size:20px;"><?=$wei['subject']?></div>
       </div>
    </div>
    


</body>
</html>
<?php ob_out();?>