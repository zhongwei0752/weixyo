<?php if(!defined('IN_UCHOME')) exit('Access Denied');?><?php subtplcheck('template/green/space_street', '1377376805', 'template/green/space_street');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>商品街</title>
    <!-- Styles -->
  <link rel="stylesheet" type="text/css" media="only screen and (min-width:401px)" href="./street/css/face.css" />
  <link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:400px)" href="./street/css/face_mobile.css" />
  
  <!-- Libraries -->
  <script src="./street/js/jquery-1.9.0.min.js" type="text/javascript"></script>
  <script src="./street/js/jquery.masonry.min.js" type="text/javascript"></script>
  <script src="./street/js/action.js" type="text/javascript"></script>
  
  
  <!-- Google -->

  <style>
  .pagination {
  text-align: center;
  margin: 18px;
  padding-bottom: 18px;
}
.pagination ul {
  list-style: none;
}
.pagination ul li {
  display: inline;
  padding: 10px;
}
.pagination ul li a {
  color: #b5b4b4;
}
.pagination ul li .actived {
  color: #008cff;
}
  </style>
</head>
<body>
  
  <div class="wrapper">
    <div class="nav">
      <a href="/"><div class="icon"></div></a>
      <div class="nav_menu"><p class="bold link"><a href="space.php?do=home">首页</a></p></div>
      <div class="nav_menu"><p class="bold link"><a href="space.php?do=card" target="blank">会员卡购买</a></p></div>
    </div>

    <div style="overflow:hidden;">
      
      <div class="menu">

        
      </div>
      

      <div class="container">
  <div class="content">

    <div class="col_press">
      
        <div><p class="ibhel f48 black">分类</p></div>
        <div class="indent2">
          
            <p class="hel"<?php if($_GET['view']=="viewnum") { ?>style="color:green"<?php } ?>><a href="space.php?do=street&view=viewnum" >按查看数排行</a></p><br/>
            <p class="hel"<?php if($_GET['view']=="datelineh"||empty($_GET['view'])) { ?>style="color:green"<?php } ?>><a href="space.php?do=street&view=datelineh" >按时间由新到久排行</a></p><br/>
            <p class="hel"<?php if($_GET['view']=="datelinel") { ?>style="color:green"<?php } ?>><a href="space.php?do=street&view=datelinel" >按时间由旧到新排行</a></p><br/>
            <p class="hel"<?php if($_GET['view']=="oldpriceh") { ?>style="color:green"<?php } ?>><a href="space.php?do=street&view=oldpriceh" >按原价由高到低排行</a></p><br/>
            <p class="hel"<?php if($_GET['view']=="oldpricel") { ?>style="color:green"<?php } ?>><a href="space.php?do=street&view=oldpricel" >按原价由低到高排行</a></p><br/>
            <p class="hel"<?php if($_GET['view']=="curpriceh") { ?>style="color:green"<?php } ?>><a href="space.php?do=street&view=curpriceh" >按会员价由高到低排行</a></p><br/>
            <p class="hel"<?php if($_GET['view']=="curpricel") { ?>style="color:green"<?php } ?>><a href="space.php?do=street&view=curpricel" >按会员价由低到高排行</a></p><br/>
        
          
        </div>
      
    </div>

    <div id="content2">

      

        
<?php if(is_array($goodslist)) { foreach($goodslist as $value) { ?>
          <a href="space.php?uid=<?=$value['uid']?>&do=vip&id=<?=$value['goodsid']?>"><div class="object mosaic">
            
            
              <div class="thumb"><img alt="Prensageographics2" src="http://localhost/upload/home/<?=$value['imageurl']?>" /></div>
            
            <div class="object_info">
              <p class="bold"><?=$value['subject']?><br /></p>上架时间:<?php echo sgmdate('Y-m-d H:i',$value[dateline],1); ?><br/>
              <span style="color:green;text-decoration: line-through;">原价:<?=$value['oldprice']?></span><br/>
               <p class="hel" style="color:red"> <?php if($value['curprice']) { ?>会员价:<?=$value['curprice']?><?php } ?>
<?php if($value['power']) { ?><br/>会员特权:<?=$value['power']?><?php } ?></p>
<br/><span style="color:green;float:right">本商品由<<?=$_SN[$value['uid']]?>>发布</span>
            </div>
            <div class="div_project"></div>
          </div></a>
<?php } } ?>
        



        

      

    </div>
<div class='pagination'><ul><?=$multi?></ul></div>
  </div>

</div>

    </div>

  </div>
 

</body>
</html>
<?php ob_out();?>