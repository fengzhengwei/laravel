<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>p2p网贷平台</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/common.css" rel="stylesheet" />
<link href="css/register.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/jquery.min.js"></script>
<script type="text/javascript" src="script/common.js"></script>
<script src="script/login.js" type="text/javascript"></script>
</head>
<body>
<header>
  <div class="header-top min-width">
    <div class="container fn-clear"> <strong class="fn-left">咨询热线：400-668-6698<span class="s-time">服务时间：9:00 - 18:00</span></strong>
      <ul class="header_contact">
        <li class="c_1"> <a class="ico_head_weixin" id="wx"></a>
          <div class="ceng" id="weixin_xlgz" style="display: none;">
            <div class="cnr"> <img src="images/code.png"> </div>
            <b class="ar_up ar_top"></b> <b class="ar_up_in ar_top_in"></b> </div>
        </li>
        <li class="c_2"><a href="#" target="_blank" title="官方QQ" alt="官方QQ"><b class="ico_head_QQ"></b></a></li>
        <li class="c_4"><a href="#" target="_blank" title="新浪微博" alt="新浪微博"><b class="ico_head_sina"></b></a></li>
      </ul>
      <ul class="fn-right header-top-ul">
          <?php if($user) {?>
          <?=$user?>
          <?php }else{?>
          <li> <a href="index" class="app">返回首页</a> </li>
          <li>
              <div class=""><a href="register" class="c-orange" title="免费注册">免费注册</a></div>
          </li>
          <li>
              <div class=""><a href="login" class="js-login" title="登录">登录</a></div>
          </li>
          <?php }?>
      </ul>
    </div>
  </div>
  <div class="header min-width">
    <div class="container">
      <div class="fn-left logo"> <a class="" href="index"> <img src="images/logo.png"  title=""> </a> </div>
      <ul class="top-nav fn-clear">
        <li class="on"> <a href="index">首页</a> </li>
          <li><a href="lona">我要贷款</a></li>
        <li> <a href="touzi" class="">我要投资</a> </li>
        <li> <a href="help">安全保障</a> </li>
        <li class="top-nav-safe"> <a href="core">我的账户</a> </li>
        <li> <a href="desc">关于我们</a> </li>
      </ul>
    </div>
  </div>
</header>
<!--注册-->
<div class="wrap">
  <div class="tdbModule register">
    <div class="registerTitle">申请贷款</div>
    <div class="registerLc1">
      <p class="p1">填写贷款信息</p>
      <p class="p3">申请贷款详情</p>
    </div>
    <div class="registerCont">
      <ul>
          <form action="lona_add" method="post" enctype="multipart/form-data">
              <li><span class="dis">贷款方式:</span>
                  @foreach($type as $v)
                      <input type="radio" name="t_id" class="xi"  value="{{$v->t_id}}"/>{{$v->t_name}}
                  @endforeach
              </li>
              <li>
                  <span class="dis">贷款金额:</span>
                  <input type="text" name="lend_money" id="lend_money" class="input _repeatPassword" maxlength="24" tabindex="1">
                  <span class="lixi"></span>
              </li>
              <li class="telNumber"> <span class="dis">贷款人照片：</span>
                  <input type="file"   name="people_image" tabindex="1" maxlength="11">
              </li>
              <li class="telNumber"><span class="dis">抵押物照片:</span>
                  <input type="file" name="goods_image"  tabindex="1">
                 </li>
              <li class="telNumber"> <span class="dis">贷款物详情:</span>
                  <textarea cols="33" rows="5" name="lend_desc"></textarea>
              </li>
              <li class="btn"><input type="submit" value="申请贷款"/></li>
          </form>
      </ul>
    </div>
  </div>
</div>
<!--网站底部-->
<div id="footer" class="ft">
  <div class="ft-inner clearfix">
    <div class="ft-helper clearfix">
      <dl>
        <dt>关于我们</dt>
        <dd><a href="公司简介.html">公司简介</a><a href="管理团队.html">管理团队</a><a href="网站公告.html">网站公告</a></dd>
      </dl>
      <dl>
        <dt>相关业务</dt>
        <dd><a href="list.html">我要投资</a><a href="我要借款.html">我要借款</a></dd>
      </dl>
      <dl>
        <dt>帮助中心</dt>
        <dd><a href="帮助中心.html">新手入门</a><a href="个人中心首页.html">我的账户</a><a href="list.html">债权转让</a></dd>
      </dl>
      <dl>
        <dt>联系我们</dt>
        <dd><a href="联系我们.html">联系我们</a></dd>
      </dl>
    </div>
    <div class="ft-service">
      <dl>
        <dd>
          <p><strong>400-660-1268</strong><br>
            工作日 9:00-22:00<br>
            官方交流群:<em>12345678</em><br>
            工作日 9:00-22:00 / 周六 9:00-18:00<br>
          </p>
          <div class="ft-serv-handle clearfix"><a class="icon-hdSprite icon-ft-sina a-move a-moveHover" title="亿人宝新浪微博" target="_blank" href="#"></a><a class="icon-hdSprite icon-ft-qqweibo a-move a-moveHover" title="亿人宝腾讯微博" target="_blank" href="#"></a><a class="icon-ft-qun a-move a-moveHover" title="亿人宝QQ群" target="_blank" href="#"></a><a class="icon-hdSprite icon-ft-email a-move a-moveHover mrn" title="阳光易贷email" target="_blank" href="mailto:xz@yirenbao.com"></a></div>
        </dd>
      </dl>
    </div>
    <div class="ft-wap clearfix">
      <dl>
        <dt>官方二维码</dt>
        <dd><span class="icon-ft-erweima"><img src="images/code.png" style="display: inline;"></span></dd>
      </dl>
    </div>
  </div>
  <div class="ft-record">
    <div class="ft-approve clearfix"><a class="icon-approve approve-0 fadeIn-2s" target="_blank" href="#"></a><a class="icon-approve approve-1 fadeIn-2s" target="_blank" href="#"></a><a class="icon-approve approve-2 fadeIn-2s" target="_blank" href="#"></a><a class="icon-approve approve-3 fadeIn-2s" target="_blank" href="#"></a></div>
    <div class="ft-identity">©2015 亿人宝 All rights reserved&nbsp;&nbsp;&nbsp;<span class="color-e6">|</span>&nbsp;&nbsp;&nbsp;安徽省亿人宝投资管理有限公司&nbsp;&nbsp;&nbsp;<span class="color-e6">|</span>&nbsp;&nbsp;&nbsp;<a target="_blank" href="http://www.htmlsucai.com">皖ICP备12345678号-1</a></div>
  </div>
</div>
</body>
</html>
<script src="{{asset('Home/jquery-1.8.2.min.js')}}"></script>
<script>
$(function(){
    $("#lend_money").blur(function(){
        var lend_money=$("#lend_money").val();
        var str='';
        $('input:radio').each(function(k,v){
            if($(v).attr('checked')=='checked')
            {
                str+=$(v).attr('value')
            }
        })


        $.ajax({
            type: "POST",
            url: "lona_xi",
            data: {lend_money:lend_money,xi:str },
            dataType:'json',
            success: function(data){
                $(".lixi").html('利息'+data.interest+','+'需在原有基础上加'+data.money+'元');
            }
        });

    });

})
</script>
