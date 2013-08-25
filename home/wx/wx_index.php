<?php
/**
  * wechat php test
  */
include_once './../common.php';
include_once './wx_common.php';
include_once( 'botutil.php' );

//define your token

define("TOKEN", "weixin");
$wechatObj = new wechatCallbackapiTest();
if($_GET["echostr"]){
$wechatObj->valid();
}else{
$wechatObj->responseMsg();
}

class wechatCallbackapiTest
{   

     public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
             echo $echoStr;
             exit;
        }
    }


    public function responseMsg()
    {
          //get post data, May be due to the different environments
          $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
          $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
                $time = time();

          

          //如果是新关注用户
          if($postObj->Event == 'subscribe'){
          //send_back(MENU);
    
                      $msgType = "news";
                       $url = "";
                       $subject="123";
                       $pic = "123";
                       $articles[] = makeArticleItem($subject, $subject, $pic, $url); 
                      } 
                      $resultStr = makeArticles($fromUsername, $toUsername, $time, $msgType, $name,$articles);  
                     echo $resultStr;

           
          }

           //extract post data
          if (!empty($postStr)){
               
                $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
                $time = time();
                //判断是否已经有帐号
                $textTpl = "<xml>
                                   <ToUserName><![CDATA[%s]]></ToUserName>
                                   <FromUserName><![CDATA[%s]]></FromUserName>
                                   <CreateTime>%s</CreateTime>
                                   <MsgType><![CDATA[%s]]></MsgType>
                                   <Content><![CDATA[%s]]></Content>
                                   <FuncFlag>0</FuncFlag>
                                   </xml>"; 

          
       
                    if(!empty( $keyword ))
                {    
                           
                         if ($keyword=='Hello2BizUser'){                             
                
                         $contentStr.="过期的通知方式";
               
          
                         
                         
                                
                       
                        
                
                        $msgType = "text";
                    
                     $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                     echo $resultStr;
                       
                         }else{
                 
                      $msgType = "news";

                       $url = "http://v5.home3d.cn/home/wx/wx.php?uid=$row[uid]&do=feed&num=rand()&wxkey=".$fromUsername."&uid=".$row[uid]."&idtype=".$app_output->data->app[$i]->english;
                       $subject="123";
                       $pic = "123";

                       $articles[] = makeArticleItem($subject, $subject, $pic, $url); 
                      }  
                       
                       $articles[] = makeArticleItem($subject, $subject, $pic, $url);
                         
                         
                         
                       
                        
                
                       
                    
                      $resultStr = makeArticles($fromUsername, $toUsername, $time, $msgType, $name,$articles);  
                     echo $resultStr;
                }
        }else{
                     echo "Input something...";
                }

        }else {
             echo "";
             exit;
        }
    }
         
     private function checkSignature()
     {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];    
                 
          $token = TOKEN;
          $tmpArr = array($token, $timestamp, $nonce);
          sort($tmpArr);
          $tmpStr = implode( $tmpArr );
          $tmpStr = sha1( $tmpStr );
         
          if( $tmpStr == $signature ){
               return true;
          }else{
               return false;
          }
     }
}

?>