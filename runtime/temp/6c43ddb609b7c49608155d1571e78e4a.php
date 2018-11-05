<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:101:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\public/../application/index\view\user\voucher_kw.html";i:1540976351;s:90:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\application\index\view\layout\default.html";i:1541305992;}*/ ?>
<!DOCTYPE html >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=1200, initial-scale=0.2" />
    <title>可为互娱官方网站</title>
    <meta name="Keywords" content="影动游联动，互动娱乐，影游联动">
    <meta name="description" content="可为互娱是一家致力于以IP运营为核心，将影视、游戏、动画跨界融合提升IP价值，并进行内容制作和宣传发行的互联网型的娱乐公司。">
    <link rel="stylesheet" type="text/css" href="/kewei/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/kewei/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/kewei/css/mend.css"/>
    <script type="text/javascript" src="/kewei/js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/kewei/css/layout.css" />
</head>
<body class="gray_bg">
<div class="warp">
    <!--页面头部-->
    <div class="top">
        <div class="main">
            <!--未登录-->
            <?php  echo 'a'; ?>
            <div class="login_div login_div1">
                <img src="/kewei/images/toux.png" alt=""/>
                <a href="login_kw.html">登录/注册</a>
            </div>

        </div>
    </div>
    <header>

        <div class="main">

            <div class="logo lf">

                <a href="index_kw.html"><img src="/kewei/images/logo.png" alt="" /></a>

            </div>

            <nav class="lt">

                <!--nav_aon为选中样式-->

                <a class="nav_aon" href="<?php echo url('user/index_kw'); ?>">首页</a>

                <a href="profile_kw.html">企业介绍</a>

                <a href="cooperation_kw.html">商务合作</a>

                <a href="jobs_kw.html">人才招聘</a>

                <a href="contact_kw.html">联系我们</a>

                <a href="voucher_kw.html"></a>

                <a href=""></a>

                <!--<a href="">行业资讯</a>-->

            </nav>

        </div>

    </header>

    <main class="content">
            
<!--<script type="text/javascript" src="/templates/kewei/js/browser.js"></script>-->
<style>.Validform_checktip{ margin-top:0px; margin-left:120px;}
</style>
    <!--[if lt IE 9]>

    <script>

    (function(){

        var tags = ['header','footer','figure','figcaption','details','summary','hgroup','nav','aside','article','section','mark','abbr','meter','output','progress','time','video','audio','canvas','dialog'];

        for(var i=tags.length - 1;i>-1;i--){ document.createElement(tags[i]);}

    })();

    </script>

    <![endif]-->


</head>
<body class="gray_bg">
<form class="demoform" id="form1">
	<div class="warp">
		<!--页面头部-->
		  <div class="top">
            

            
			<div class="main">
				<!--未登录-->
                
				<div class="login_div login_div1">
					<img src="/kewei/images/toux.png" alt=""/>
					<a href="login_kw.html">登录/注册</a>
				</div>
                
			</div>
		</div>
		 <header>

    <div class="main">
				<div class="logo lf">
					<a href="index_kw.html"><img src="/kewei/images/logo.png" alt=""/></a>
				</div>
				<nav class="lt">
					<!--nav_aon为选中样式-->
					<a href="index_kw.html" >首页</a>
                    <a href="profile_kw.html">企业介绍</a>
					<a href="cooperation_kw.html">商务合作</a>
					<a href="jobs_kw.html" >人才招聘</a>
					<a href="contact_kw.html">联系我们</a>
					<a href="voucher_kw.html"></a>-->
				</nav>
			</div>

</header>
		<!--页面头部-->

		<!--页面主体-->
		<div class="container">
			<div class="main voucher">
				<div class="voucher_left lf">
					<div class="voucher_center">
						<img src="/kewei/images/voucher.png" alt=""/>
					</div>
					<div class="voucher_infor">
						<h3>10元/月</h3>
						<p>可为会员是可为互娱面向广大用户推出的一项尊贵增值服务，享受会员特权及多种会员专属活动。</p><br/>
					</div>
					<div class="serve_div">
						<!--checkon为选中样式-->
						<span class="check checkon"></span>
						同意<a href="agreement_kw.html">《可为互娱服务条款》</a>
					</div>
				</div>
				<div class="voucher_right lt">
					<ul class="account_ul">
						<li>
							<label class="f18">充值账号</label>
                            <input type="text" class="js_text" datatype="s6-18" placeholder="请输入需要充值的用户名">
						</li>
					
					</ul>
                    <p class="f18">会员购买</p>
					<ul class="member_purchase_ul">
						<li class="purchase_on">
							<span class="member_span">月</span>
							<span class="money_span">¥<span class="f18 js_money">10.00</span></span>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd"/>
						</li>
						<li>
							<span class="member_span">季</span>
							<span class="money_span">¥<span class="f18 js_money">30.00</span></span>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
						<li>
							<span class="member_span">年</span>
							<span class="money_span">¥<span class="f18 js_money">120.00</span></span>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
					</ul>
					<p class="f18">选择银行</p>
					<ul class="bank_ul">
						<!--bankon为选中样式-->
                         
						<li >
                           
							<img src="/upload/201609/27/201609271341080094.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341080914.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341081494.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341082164.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341082904.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341083564.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341084784.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341085564.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341086204.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341086814.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341087484.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
						<li >
                           
							<img src="/upload/201609/27/201609271341088165.png" alt=""/>
							<img src="/kewei/images/bankon.png" alt="" class="bankadd hidden"/>
						</li>
                           
					</ul>
					<p class="more_bank">选择更多银行</p>
					<div class="choose_card">
						<!--checkon1位选中样式-->
						<span>选择银行卡类型</span>
						<span class="check1"></span><span class="card">储蓄卡</span>
						<span class="check1"></span><span class="card">信用卡</span>
					</div>
					<div class="f18">
						应付金额：<span class="f20 org js_RMB">0.00</span>元
					</div>
					<div class="apply_download">
						<a class="pay_money">确认付款</a>
					</div>
				</div>
			</div>
		</div>
		<!--页面主体-->

		<!--页面底部-->
		<footer>
			<div class="foot1">
				<div class="main">
					<div class="ewm_div"><img src="/kewei/images/ewm_img.png" alt=""/></div>
					<div class="company">
						<h2>
							<img src="/kewei/images/logo.png" alt=""/>
							北京可为互娱文化科技有限公司
						</h2>
						<p>地址：北京市朝阳区将台路诺金中心写字楼</p>
						<p>电话：010-64376519</p>
					</div>
					<div class="lists">
						<a >
							<img src="/kewei/images/animate1.png" alt=""/>
						</a>
						<a >
							<img src="/kewei/images/animate.png" alt=""/>
						</a>
						<a >
							<img src="/kewei/images/animate2.png" alt=""/>
						</a>
					</div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="foot2">
				<div class="main">
					<p>www.wecanwell.com 2016 &copy; All Rights Reserved 京ICP备16037158号 </p>
					<!--<p>健康游戏公告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防受骗上当 适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>-->
				</div>
			</div>
		</footer>
		<!--页面低部-->

	</div>
	<!--蒙板-->
	<div class="mask hidden"></div>
	<!--蒙板-->

	<!--暂不开放-->
	<div class="not_open hidden">
		<p>对不起</p>
		<p>该功能暂不开放</p>
	</div>
	<!--暂不开放-->
    </form>
</body>
<script src="/kewei/js/common.js"></script>
<script src="/kewei/js/Validform_v5.3.2_min.js"></script>

<script>
    function Exsit() {

        $.ajax({

            type: 'post',

            dataType: 'json',

            url: '/plugins/kewei/tools/kewei.ashx?action=exit',

            success: function (data) {



                if (data.status == "1") {

                    window.location.href = '/index_kw.html';

                }



            }

        });

    }
    //选中协议
    $(".check").click(function () {

        if (!$(this).hasClass("checkon")) {

            $(this).addClass("checkon");

        } else {

            $(this).removeClass("checkon");

        }

    });

    //选择银行
    $(".check1").click(function () {

        $(this).addClass("checkon1").siblings().removeClass("checkon1");

    });

    //确认付款
    $(".pay_money").click(function () {

        $(".mask,.not_open").show();

    });
    $(".mask").click(function () {

        $(".mask,.not_open").hide();

    });

    //选择银行
    $(".bank_ul>li").click(function () {

        $(this).addClass("bankon").siblings().removeClass("bankon");
        $(this).find(".bankadd").show();
        $(this).siblings().find(".bankadd").hide();

    });

    //显示所有银行
    $(function () {

        var size = $(".bank_ul li").size();
        $(".bank_ul li:gt(11)").css("display", "none");
        $(".more_bank").click(function () {

            $(".bank_ul li:lt(" + size + ")").css("display", "block");

        });

    })

    //暂不开放
    $(".js_nouse").click(function () {

        $(".mask,.not_open").show();

    });

    $(".mask").click(function () {

        $(".mask,.not_open").hide();

    });
    //登陆后移到名字上下拉框出现
    $(".name").hover(function () {

        $(".child").show();

    }, function () {

        $(".child").hide();

    });
   
    // 填写可可币同步计算出应付人民币金额

    $(".js_coin").keyup(function () {

        if ($(this).val() == "") {

            var coin = 0;

        } else {

            var coin = parseFloat($(this).val()) / 10;

        }

        $(".js_RMB").text(coin.toFixed(2))



    })
    //新增2017.1.12
    //会员充值选择
    $(".member_purchase_ul li").click(function () {

        $(this).addClass("purchase_on").siblings().removeClass("purchase_on");
        $(this).find(".bankadd").show();
        $(this).siblings().find(".bankadd").hide();
        var num = Number($(this).find(".js_money").text());
        $(".js_RMB").text(num.toFixed(2));

    });
    $(function () {

        $(".member_purchase_ul li").each(function () {

            if ($(this).hasClass("purchase_on")) {

                var num = Number($(this).find(".js_money").text());
                $(".js_RMB").text(num.toFixed(2));

            }

        });

    })
</script>
</html>
        </main>


