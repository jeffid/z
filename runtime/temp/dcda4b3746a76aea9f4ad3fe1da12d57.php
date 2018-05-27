<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\login.html";i:1523845636;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0041)https://login.zhipin.com/?ka=header-login -->
<html class="standard"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="format-detection" content="email=no">
  <meta name="format-detection" content="address=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="copyright" content="Copyright (c) zhipin.com">

  
  
  
  <title>【BOSS直聘短信登录】-BOSS直聘</title>
  <meta name="keywords" content="BOSS直聘，BOSS直聘短信登录">
  <meta name="description" content="BOSS直聘短信登录页，是BOSS直聘给boss和牛人共有的电脑登录页面，用户可使用账号密码登录、短信快捷登录，BOSS直聘-互联网招聘神器！">
  

   <link href="./login_files/main.css" type="text/css" rel="stylesheet">
  
  
<script charset="utf-8" src="./login_files/v.js.下载"></script><script src="./login_files/hm.js.下载"></script><script src="./login_files/ka.js.下载"></script><script>
    _PAGE={
        checkMobileUrl:"/registe/sendSms.json",
        regMobileUrl:"/registe/save.json",
        loginMobileUrl:"/login/phone.json",
        loginAccountUrl:"/login/account.json",
        getRandomKeyUrl:"/captcha/randkey.json",
        verifyImgUrl:"/captcha/?randomKey={randomKey}",
        getPositionUrl:"/user/position.json",
        loginOrRegiste:"login"
    }
    var loginjson = {
      act:'0',
      btnValue:'领取',
      titleValue:'BOSS直聘<br><span class="subTitle">领取直直福利</span>'
    }
</script></head>

<body class="page-sign">
<div id="wrap">
  <div id="header">
    <h1 class="logo"><a href="https://www.zhipin.com/" ka="header-home-logo" title="BOSS直聘"><img src="./login_files/login-logo.png"><span>找工作要跟<br>老板谈</span></a></h1>
  </div>
  <div class="sign-wrap">
    <!--密码登录-->
    <div class="sign-form sign-pwd" style="display: block;">
      <h3 class="title">登录BOSS直聘</h3>
      <div class="tip-error"></div>
      <div class="sign-tab"><span class="link-signin cur">密码登录</span><span class="link-sms">短信登录</span><span class="link-scan">扫码登录</span></div>
      <form action="https://login.zhipin.com/login/account.json" method="post"><input type="hidden" name="pk" value="cpc_user_sign_up">
        <div class="form-row row-select">
          <span class="dropdown-select"><i class="icon-select-arrow"></i><em class="text-select">+86</em><input type="hidden" name="regionCode" value="+86"></span>
          <span class="ipt-wrap"><i class="icon-sign-phone"></i><input type="tel" class="ipt ipt-phone required" placeholder="手机号" name="account"></span>
          <div class="dropdown-menu">
            
<ul>
  <li data-val="+86"><span class="num">+86</span>中国大陆</li>
  <li data-val="+1"><span class="num">+1</span>美国</li>
  <li data-val="+852"><span class="num">+852</span>香港</li>
  <li data-val="+81"><span class="num">+81</span>日本</li>
  <li data-val="+886"><span class="num">+886</span>台湾</li>
  <li data-val="+44"><span class="num">+44</span>英国</li>
  <li data-val="+82"><span class="num">+82</span>韩国</li>
  <li data-val="+33"><span class="num">+33</span>法国</li>
  <li data-val="+7"><span class="num">+7</span>俄罗斯</li>
  <li data-val="+39"><span class="num">+39</span>意大利</li>
  <li data-val="+65"><span class="num">+65</span>新加坡</li>
  <li data-val="+63"><span class="num">+63</span>菲律宾</li>
  <li data-val="+60"><span class="num">+60</span>马来西亚</li>
  <li data-val="+64"><span class="num">+64</span>新西兰</li>
  <li data-val="+34"><span class="num">+34</span>西班牙</li>
  <li data-val="+95"><span class="num">+95</span>缅甸</li>
  <li data-val="+230"><span class="num">+230</span>毛里求斯</li>
  <li data-val="+263"><span class="num">+263</span>津巴布韦</li>
  <li data-val="+20"><span class="num">+20</span>埃及</li>
  <li data-val="+92"><span class="num">+92</span>巴基斯坦</li>
  <li data-val="+880"><span class="num">+880</span>孟加拉国</li>
</ul>
          </div>
        </div>
        <div class="form-row">
          <span class="ipt-wrap"><i class="icon-sign-pwd"></i><input type="password" class="ipt ipt-pwd required" ka="signin-password" placeholder="密码" name="password"></span>
        </div>
        <div class="form-row row-code">
          <span class="cell-wrap"><i class="icon-sign-code"></i><input type="text" class="ipt ipt-code" name="captcha" ka="signin-code" maxlength="4" placeholder="验证码" data-url="/captcha/randkey.json"></span><span class="cell-wrap"><img src="./login_files/saved_resource" class="verifyimg"></span>
          <input type="hidden" name="randomKey" class="randomkey" value="a7DLHZLr4unURFRw95FgroB3ZZALFhau">
        </div>
        <div class="form-btn">
          <button type="submit" class="btn">登录</button>
        </div>
        <div class="text-tip">没有账号 <a href="javascript:;" class="link-signup">立即注册</a></div>
      </form>
    </div>
    <!--短信登录-->
    <div class="sign-form sign-sms" style="display: none;">
      <h3 class="title">登录BOSS直聘</h3>
      <div class="tip-error"></div>
      <div class="sign-tab"><span class="link-signin">密码登录</span><span class="link-sms cur">短信登录</span><span class="link-scan">扫码登录</span></div>
      <form action="https://login.zhipin.com/login/phone.json" method="post"><input type="hidden" name="pk" value="cpc_user_sign_up">
        <div class="form-row row-select">
          <span class="dropdown-select"><i class="icon-select-arrow"></i><em class="text-select">+86</em><input type="hidden" name="regionCode" value="+86"></span>
          <span class="ipt-wrap"><i class="icon-sign-phone"></i><input type="tel" class="ipt ipt-phone required" placeholder="手机号" name="phone"></span>
          <div class="dropdown-menu">
            
<ul>
  <li data-val="+86"><span class="num">+86</span>中国大陆</li>
  <li data-val="+1"><span class="num">+1</span>美国</li>
  <li data-val="+852"><span class="num">+852</span>香港</li>
  <li data-val="+81"><span class="num">+81</span>日本</li>
  <li data-val="+886"><span class="num">+886</span>台湾</li>
  <li data-val="+44"><span class="num">+44</span>英国</li>
  <li data-val="+82"><span class="num">+82</span>韩国</li>
  <li data-val="+33"><span class="num">+33</span>法国</li>
  <li data-val="+7"><span class="num">+7</span>俄罗斯</li>
  <li data-val="+39"><span class="num">+39</span>意大利</li>
  <li data-val="+65"><span class="num">+65</span>新加坡</li>
  <li data-val="+63"><span class="num">+63</span>菲律宾</li>
  <li data-val="+60"><span class="num">+60</span>马来西亚</li>
  <li data-val="+64"><span class="num">+64</span>新西兰</li>
  <li data-val="+34"><span class="num">+34</span>西班牙</li>
  <li data-val="+95"><span class="num">+95</span>缅甸</li>
  <li data-val="+230"><span class="num">+230</span>毛里求斯</li>
  <li data-val="+263"><span class="num">+263</span>津巴布韦</li>
  <li data-val="+20"><span class="num">+20</span>埃及</li>
  <li data-val="+92"><span class="num">+92</span>巴基斯坦</li>
  <li data-val="+880"><span class="num">+880</span>孟加拉国</li>
</ul>
          </div>
        </div>
        <div class="form-row row-code">
          <span class="cell-wrap"><i class="icon-sign-code"></i><input type="text" class="ipt ipt-code" name="captcha" ka="signin-code" maxlength="4" placeholder="验证码" data-url="/captcha/randkey.json"></span><span class="cell-wrap"><img src="./login_files/saved_resource(1)" class="verifyimg"></span>
          <input type="hidden" name="randomKey" class="randomkey" value="a7DLHZLr4unURFRw95FgroB3ZZALFhau">
        </div>
        <div class="form-row">
          <span class="ipt-wrap"><i class="icon-sign-sms"></i><input type="text" class="ipt ipt-sms required" ka="signup-sms" placeholder="短信验证码" name="phoneCode" maxlength="4"><input type="hidden" name="smsType" value="1"><button type="button" class="btn btn-sms" data-url="/registe/sendSms.json">发送验证码</button></span>
        </div>
        <div class="form-btn">
          <button type="submit" class="btn">登录</button>
        </div>
        <div class="text-tip">没有账号 <a href="javascript:;" class="link-signup">立即注册</a></div>
      </form>
    </div>
    <!--扫码登录-->
    <div class="sign-form sign-scan" style="display:none;">
      <h3 class="title">登录BOSS直聘</h3>
      <div class="tip-error"></div>
      <div class="sign-tab"><span class="link-signin">密码登录</span><span class="link-sms">短信登录</span><span class="link-scan cur">扫码登录</span></div>
      <div class="qrcode-box">
        <input type="hidden" class="uuid" value="bosszp-b33bd495-d2c2-47ce-abe9-15a157530b35">
        <p><span>使用 BOSS直聘 APP 扫码登录</span><em>扫码帮助</em></p>
        <img src="./login_files/bosszp-b33bd495-d2c2-47ce-abe9-15a157530b35" data-url="https://www.zhipin.com/qrscan/dispatcher?qrId=">
        <div class="qrcode-tip" style="display: block;"><span class="gray">知道了</span>Boss现在也可以使用密码和短信登录了</div>
        <div class="hover-range-left"></div>
        <div class="hover-range-right"></div>
        <div class="sign-scan-help animation">
          <div class="scan-help-top">
            <ul>
              <li class="active" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">我是BOSS</li>
              <li style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">我是牛人</li>
            </ul>
          </div>
          <ul class="scan-help-down">
            <li><img src="./login_files/icon-help-boss.png"></li>
            <li style="display: none;"><img src="./login_files/icon-help-geek.png"></li>
          </ul>
        </div>
      </div>
      <div class="text-tip">没有账号 <a href="javascript:;" class="link-signup">立即注册</a></div>
    </div>
    <!--注册-->
    <div class="sign-form sign-register" style="display:none;">
      <h3 class="title">注册BOSS直聘</h3>
      <div class="tip-error"></div>
      <div class="sign-tab">
        <span>使用手机号注册</span>
      </div>
      <form action="https://login.zhipin.com/registe/save.json" method="post"><input type="hidden" name="pk" value="cpc_user_sign_up">
        <input type="hidden" name="act" value="0">
        <input type="hidden" name="purpose" value="0">
        <div class="purpose-row">
          <span class="cur">我要找工作</span><span class="">我要招聘</span>
        </div>
        <div class="form-row row-select">
          <span class="dropdown-select"><i class="icon-select-arrow"></i><em class="text-select">+86</em><input type="hidden" name="regionCode" value="+86"></span>
          <span class="ipt-wrap"><i class="icon-sign-phone"></i><input type="tel" class="ipt ipt-phone required" placeholder="手机号" name="phone"></span>
          <div class="dropdown-menu">
            
<ul>
  <li data-val="+86"><span class="num">+86</span>中国大陆</li>
  <li data-val="+1"><span class="num">+1</span>美国</li>
  <li data-val="+852"><span class="num">+852</span>香港</li>
  <li data-val="+81"><span class="num">+81</span>日本</li>
  <li data-val="+886"><span class="num">+886</span>台湾</li>
  <li data-val="+44"><span class="num">+44</span>英国</li>
  <li data-val="+82"><span class="num">+82</span>韩国</li>
  <li data-val="+33"><span class="num">+33</span>法国</li>
  <li data-val="+7"><span class="num">+7</span>俄罗斯</li>
  <li data-val="+39"><span class="num">+39</span>意大利</li>
  <li data-val="+65"><span class="num">+65</span>新加坡</li>
  <li data-val="+63"><span class="num">+63</span>菲律宾</li>
  <li data-val="+60"><span class="num">+60</span>马来西亚</li>
  <li data-val="+64"><span class="num">+64</span>新西兰</li>
  <li data-val="+34"><span class="num">+34</span>西班牙</li>
  <li data-val="+95"><span class="num">+95</span>缅甸</li>
  <li data-val="+230"><span class="num">+230</span>毛里求斯</li>
  <li data-val="+263"><span class="num">+263</span>津巴布韦</li>
  <li data-val="+20"><span class="num">+20</span>埃及</li>
  <li data-val="+92"><span class="num">+92</span>巴基斯坦</li>
  <li data-val="+880"><span class="num">+880</span>孟加拉国</li>
</ul>
          </div>
        </div>
        <div class="form-row row-code">
          <span class="cell-wrap"><i class="icon-sign-code"></i><input type="text" class="ipt ipt-code" name="captcha" ka="signin-code" maxlength="4" placeholder="验证码" data-url="/captcha/randkey.json"></span><span class="cell-wrap"><img src="./login_files/saved_resource(2)" class="verifyimg"></span>
          <input type="hidden" name="randomKey" class="randomkey" value="a7DLHZLr4unURFRw95FgroB3ZZALFhau">
        </div>
        <div class="form-row">
          <span class="ipt-wrap"><i class="icon-sign-sms"></i><input type="text" class="ipt ipt-sms required" ka="signup-sms" placeholder="短信验证码" name="phoneCode" maxlength="4"><input type="hidden" name="smsType" value="2"><button type="button" class="btn btn-sms" data-url="/registe/sendSms.json">发送验证码</button></span>
        </div>
        <div class="form-btn">
          <button type="submit" class="btn">注册</button>
        </div>
        <div class="text-tip"><div class="agreement-tip"><label><input type="checkbox" checked="checked">同意BOSS直聘 <a href="https://www.zhipin.com/register/protocol/introduce" target="_blank">用户协议及隐私政策</a></label></div>已有账号 <a href="javascript:;" class="link-signin">直接登录</a></div>
      </form>
    </div>
    <!--注册成功完善简历-->
    <div class="sign-form sign-welcome" style="display: none;">
      <h3 class="title">欢迎来到BOSS直聘</h3>
      <div class="welcome-box">
        <div class="welcome-text">
          <b>快速完善简历</b>
          <p>做好与Boss对话前的准备吧。</p>
        </div>
        <img src="./login_files/icon-sign-welcome.png" alt="">
        <div class="form-btn"><a ka="registe-complete" href="https://login.zhipin.com/geek/complete/guide.html" class="btn">开始完善</a></div>
        <div class="count-down"><em class="num">3s</em> 后自动跳转</div>
      </div>
    </div>
  </div>
</div>
<script src="./login_files/jquery-1.12.2.min.js.下载"></script>
<script src="./login_files/main.js.下载"></script>
<input type="hidden" id="page_key_name" value="cpc_user_sign_up">


<script>
	function get_share_datas_from_html_inapp() {
		var shid = "shdefault",
			urlShid,
			urlSid,
			pk = "pkdefault",
			pp = "ppdefault",
			pkn = (typeof _PK != 'undefined' ? _PK : document.getElementById("page_key_name")),
			getQueryString = function(name) {
				var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"),
					r = window.location.search.substr(1).match(reg);
				if (r != null) {
					return unescape(r[2])
				}
				return null;
			};
		urlShid = getQueryString("shid");
		urlSid = getQueryString("sid");
		if (urlShid) {
			shid = urlShid;
		} else if (urlSid) {
			shid = urlSid;
		}
		if (pkn) {
			var pknVal = pkn.value;
			if (pknVal) {
				var pkArray = pknVal.split("|");
				if (pkArray.length == 1) {
					pk = pkArray[0];
				} else if (pkArray.length >= 2) {
					pk = pkArray[0];
					pp = pkArray[1];
				}
			}
		}
		var ret = [];
		ret["shid"] = shid;
		ret["pk"] = pk;
		ret["pp"] = pp;
		return ret;
	}
	function getQueryString(name)
	{
		var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if(r!=null)return  unescape(r[2]); return null;
	}
</script>
<script>
	var _T = _T || [];
	(function() {
	  var script = document.createElement("script");
	  script.src = "/js/analytics/ka.js?v=2.0";
	  var s = document.getElementsByTagName("script")[0];
	  s.parentNode.insertBefore(script, s);
	})();
	
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?194df3105ad7148dcf2b98a91b5e727a";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

</body></html>