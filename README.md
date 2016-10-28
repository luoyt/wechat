# 微信公众平台开发
[微信开发文档](http://mp.weixin.qq.com/wiki "开发文档") 
# 自动处理代码例子

``` php
$options['token'] = "123456";
$options['appid'] = '';
$options['secret'] = '';
$options['access_token'] = '';
$wechat = new Wechat($options);
if(isset($_GET['echostr'])){
     $wechat->valid();  //检验signature代码
 }else{
 $request = $wechat->request();
 // 自动回复处理
 if($request['msgtype']=='event'){   //事件处理
    $openid = $request['fromusername'];
    if($request['event']=='subscribe'){ //关注事件
    
    }elseif($request['event']=='unsubscribe'){ //取消关注事件
    
    }elseif($request['event']=='SCAN'){  //扫码事件
    
    }elseif($request['event']=='CLICK'){ //菜单点击事件
        
    ｝
 }else if($request['msgtype']=='text'){  //文本回复
 
  }else if($request['msgtype']=='voice'){  //语音回复
    
 }
```