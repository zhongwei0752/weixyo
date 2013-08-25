<?php
/**
  * wechat php test
  */

include_once('./../common.php');

include_once( 'botutil.php' );
//define your token
define("TOKEN", "xiaodongshu");
$wechatObj = new wechatCallbackapiTest();
$wechatObj->responseMsg();

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

        //extract post data
    if (!empty($postStr)){
                
                $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
                $time = time();
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
            $msgType = "text";
            $contentStr = "你好！欢迎关注小冬树，小冬树将为你提供部分网站数据，想要更多的数据，请关注我们的官网，目前小冬树有以下功能:
        回复数字【1】--用药助手;
        回复数字【2】--查看最新活动;
        回复数字【3】--查看最新群组话题;
        回复数字【4】--查看最新案例讨论;
        回复数字【5】--查看医疗笑话;
        回复数字【6】--查看今日医疗资讯;
";
            $resultStr = makeText($fromUsername, $toUsername, $time, $msgType, $contentStr); 
          }else{
                     $msgType = "text";
                     $contentStr = "你好！目前小冬树有以下功能:
回复数字【1】--用药助手;
回复数字【2】--查看最新活动;
回复数字【3】--查看最新群组话题;
回复数字【4】--查看最新案例讨论;
回复数字【5】--查看医疗笑话;
回复数字【6】--查看今日医疗资讯;
";
                      $resultStr = makeText($fromUsername, $toUsername, $time, $msgType, $contentStr); 
                      }
                    }
                   echo $resultStr;
                  
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