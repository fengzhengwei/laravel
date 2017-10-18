<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>p2p网贷平台</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/common.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/user.css" />
<script type="text/javascript" src="script/jquery.min.js"></script>
<script type="text/javascript" src="script/common.js"></script>
<script src="script/user.js" type="text/javascript"></script>
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
      <div class="fn-left logo"> <a class="" href="index.html"> <img src="images/logo.png"  title=""> </a> </div>
        <ul class="top-nav fn-clear">
            <li class="on"> <a href="/">首页</a> </li>
            <li><a href="lona">我要贷款</a></li>
            <li> <a href="list" class="">我要投资</a> </li>
            <li> <a href="help">安全保障</a> </li>
            <li class="top-nav-safe"> <a href="core">我的账户</a> </li>
            <li> <a href="desc">关于我们</a> </li>
        </ul>
    </div>
  </div>
</header>
<!--个人中心-->
<div class="wrapper wbgcolor">
  <div class="w1200 personal">
    <div class="credit-ad"><img src="images/clist1.jpg" width="1200" height="96"></div>
    <div id="personal-left" class="personal-left">
        <ul>
            <li class="pleft-cur"><span><a href="core"><i class="dot dot1"></i>账户总览</a></span></li>
            <li><span><a style="font-size:14px;text-align:center;width:115px;padding-right:35px;" href="capital">资金记录</a></span></li>
            <li><span><a style="font-size:14px;text-align:center;width:115px;padding-right:35px;" href="record">投资记录</a></span></li>
            <li><span><a style="font-size:14px;text-align:center;width:115px;padding-right:35px;" href="returned">回款计划</a></span></li>
            <li class=""><span><a href="open"><i class="dot dot02"></i>开通第三方</a> </span> </li>
            <li><span><a href="recharge"><i class="dot dot03"></i>充值</a></span></li>
            <li class=""><span><a href="withdrawals"><i class="dot dot04"></i>提现</a></span></li>
            <li style="position:relative;" class=""> <span> <a href="red_package"> <i class="dot dot06"></i> 我的红包 </a> </span> </li>
            <li class=""><span><a style="font-size:14px;text-align:center;width:115px;padding-right:35px;" href="exchange">兑换历史</a></span></li>
            <li style="position:relative;"> <span> <a href="system"><i class="dot dot08"></i>系统信息 </a> </span> </li>
            <li><span><a href="account"><i class="dot dot09"></i>账户设置</a></span></li>
        </ul>
    </div>
    <div class="personal-main">
      <div class="personal-money">
        <h3><i>资金记录</i></h3>
        <form id="form" name="form" method="post" action="">
          <div class="money-choose"> <span class="money-date1">操作类型</span>
            <div id="typeboxstyle" class="select-date"> <span class="select-title" style="display:inline-block;height:25px;line-height:20px;">全部</span>
              <ul>
                <li>全部</li>
                <li value="ti_balance">转入到余额</li>
                <li value="to_balance">从余额转出</li>
                <li value="to_frozen">从冻结金额中转出</li>
                <li value="freeze">冻结</li>
                <li value="unfreeze">解冻</li>
              </ul>
            </div>
            <span class="money-date2">查询时间</span>
            <div id="select-date" class="select-date"> <span class="select-title" style="display:inline-block;height:25px;line-height:20px;">全部</span>
              <ul>
                <li value="0d">今天</li>
                <li value="1w">最近一周</li>
                <li value="1m">一个月</li>
                <li value="6m">六个月</li>
                <li>全部</li>
              </ul>
            </div>
            <button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only btn-sx"><span class="ui-button-text ui-c">筛选</span></button>
            <button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only btn-dc"><span class="ui-button-text ui-c">导出</span></button>
          </div>
          <span id="form:dataTable">
          <div class="personal-moneylist">
            <div class="pmain-contitle"> <span class="pmain-title1 fb">交易时间</span> <span class="pmain-title2 fb">交易类型</span> <span class="pmain-title3 fb">交易金额</span> <span class="pmain-title4 fb">余额</span> <span class="pmain-title5 fb">备注</span> </div>
            <ul>
              <li><span class="pmain-title1 pmain-height">2015-10-20</span><span class="pmain-title2 pmain-height">债权转让</span><span class="pmain-title3 pmain-height">10.00</span><span class="pmain-title4 pmain-height">10.00</span><span class="pmain-title5 pmain-height">备注</span></li>
              <li><span class="pmain-title1 pmain-height">2015-10-20</span><span class="pmain-title2 pmain-height">债权转让</span><span class="pmain-title3 pmain-height">10.00</span><span class="pmain-title4 pmain-height">10.00</span><span class="pmain-title5 pmain-height">备注</span></li>
              <li><span class="pmain-title1 pmain-height">2015-10-20</span><span class="pmain-title2 pmain-height">债权转让</span><span class="pmain-title3 pmain-height">10.00</span><span class="pmain-title4 pmain-height">10.00</span><span class="pmain-title5 pmain-height">备注</span></li>
              <li><span class="pmain-title1 pmain-height">2015-10-20</span><span class="pmain-title2 pmain-height">债权转让</span><span class="pmain-title3 pmain-height">10.00</span><span class="pmain-title4 pmain-height">10.00</span><span class="pmain-title5 pmain-height">备注</span></li>
              <li><span class="pmain-title1 pmain-height">2015-10-20</span><span class="pmain-title2 pmain-height">债权转让</span><span class="pmain-title3 pmain-height">10.00</span><span class="pmain-title4 pmain-height">10.00</span><span class="pmain-title5 pmain-height">备注</span></li>
              <li><span class="pmain-title1 pmain-height">2015-10-20</span><span class="pmain-title2 pmain-height">债权转让</span><span class="pmain-title3 pmain-height">10.00</span><span class="pmain-title4 pmain-height">10.00</span><span class="pmain-title5 pmain-height">备注</span></li>
              <li><span class="pmain-title1 pmain-height">2015-10-20</span><span class="pmain-title2 pmain-height">债权转让</span><span class="pmain-title3 pmain-height">10.00</span><span class="pmain-title4 pmain-height">10.00</span><span class="pmain-title5 pmain-height">备注</span></li>
              <!-- <div style=" width:760px;height:200px;padding-top:100px; text-align:center;color:#d4d4d4; font-size:16px;"> <img src="images/nondata.png" width="60" height="60"><br>
                <br>
                暂无资金记录</div>-->
            </ul>
          </div>
          </span>
        </form>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--网站底部-->
<div id="footer" class="ft">
  <div class="ft-inner clearfix">
    <div class="ft-helper clearfix">
      <dl>
        <dt>关于我们</dt>
        <dd><a href="公司简介.html">公司简介</a><a href="../../../../../清爽互联网p2p金融门户网站模板html整站/管理团队.html">管理团队</a><a href="../../../../../清爽互联网p2p金融门户网站模板html整站/网站公告.html">网站公告</a></dd>
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
        <dd><a href="../../../../../清爽互联网p2p金融门户网站模板html整站/联系我们.html">联系我们</a></dd>
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
