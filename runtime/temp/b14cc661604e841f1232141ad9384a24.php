<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:100:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\public/../application/index\view\user\enroll_kw.html";i:1541306347;s:90:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\application\index\view\layout\default.html";i:1541305992;}*/ ?>
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






</header>
		<!--页面头部-->

		<!--页面主体-->
		<div class="container">  
			<div class="main link_way whitebg">
				<div class="z_logo">
                	<img alt="" src="/kewei/images/a_update/login01.png"/>
                    <p>用户注册</p>
                </div>
                 <div class="container_box">
                 
                    <div class="input_box"><label for="" class="name"><img src="/kewei/images/a_update/login02.png" alt="" /></label><input type="text" class="js_text" datatype="s6-18" placeholder="请输入您的用户名" id="name" name="name"><span class="Validform_checktip lf"></span></div>
                    <div class="input_box"><label for="" class="password"><img src="/kewei/images/a_update/login03.png" alt="" /></label><input type="password"  name="userpassword"  class="js_password" datatype="*6-20" placeholder="请设置6～20位帐号密码" id="userpassword"><span class="Validform_checktip lf"></span></div>
                    <div class="input_box"><label for="" class="password"><img src="/kewei/images/a_update/login03.png" alt="" /></label><input type="password" placeholder="重复输入上一次的密码" value="" name="userpassword2" class="inputxt" datatype="*" recheck="userpassword" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！" /><span class="Validform_checktip lf"></span></div>
                    
                     <div class="input_box"><label for="" class="email"><img src="/kewei/images/a_update/enroll_01.png" alt="" /></label><input type="text" class="js_password" datatype="e" placeholder="绑定邮箱" id="email" name="email"><span class="Validform_checktip lf"></span></div>
                     
                      <div class="input_box"><label for="" class="rel_name"><img src="/kewei/images/a_update/enroll_02.png" alt="" /></label><input type="text" class="js_password" datatype="z2-4" placeholder="请输入您的真实姓名" id="real_name" name="real_name"   ><span class="Validform_checktip lf"></span></div>
                    
                  
                    
                    
                     <div class="input_box"><label for="" class="idcard"><img src="/kewei/images/a_update/enroll_03.png" alt="" /></label><input type="text" placeholder="请输入您的身份证号" value="" id="id_card" name="id_card" class="inputxt" datatype="idcard" nullmsg="请填写身份证号码！" errormsg="您填写的身份证号码不对！" /><span class="Validform_checktip lf"></span></div>
                    
                    <div class="z_aggr_box">
                   		<i class="z_myblue z_okblue chi"></i>
                   		<span class="f18">我已阅读并同意</span>   
                   		<a href="agreement_kw.html"  style="display:inline"><span class="ching f18">《可为互娱服务协议》</span></a>
                	</div>
                	<div class="enroll_div">
                		<i class="z_myblue1 z_okblue chi"></i>
                		<span class="ching f18">付费会员注册10元/月</span>
                	</div>
                	<div class="bank-box">
                		<ul class="bank-ul">
                			<li><img src="/kewei/images/bank02.png" alt=""/></li>
                			<li><img src="/kewei/images/bank03.png" alt=""/></li>
                			<li><img src="/kewei/images/bank04.png" alt=""/></li>
                			<li><img src="/kewei/images/bank05.png" alt=""/></li>
                			<li><img src="/kewei/images/bank06.png" alt=""/></li>
                			<li><img src="/kewei/images/bank07.png" alt=""/></li>
                		</ul>
                		<div class="goto-recharge">
                			<a class="f20" href="voucher_kw.html">去充值</a>
                		</div>
                	</div>
                   <a class="enr_btn2 enr_a">立即注册</a>
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

        <!--蒙板-->
		<div class="mask hidden"></div>
		<!--蒙板-->

		<!--暂不开放-->
		<div class="not_open hidden">
			<p>对不起</p>
			<p>该功能暂不开放</p>
		</div>  
        <!--暂不开放-->

        <!--弹出框-->

		<!--<div class="quit_box hidden">

			<img src="images/close.png" alt="" class="js_close"/>

			<p>您确认要退出您的账户么?</p>

			<a class="chingbg js_comfirm">确认</a>

			<a class="js_cancel">取消</a>

		</div>-->

		<!--弹出框-->
        <!--弹出框-->
		<div class="warn_box error_box hidden">
			<p>您确认要退出您的账户么?</p>
		</div>
		<!--弹出框-->
	</div>
    
 </form>
</body>
<script src="/kewei/js/common.js"></script>
<script src="/kewei/js/Validform_v5.3.2_min.js"></script>
<script>
$(function(){
	$(".demoform").Validform({
		tiptype:function(msg,o,cssctl){
			//msg：提示信息;
			//o:{obj:*,type:*,curform:*}, obj指向的是当前验证的表单元素（或表单对象），type指示提示的状态，值为1、2、3、4， 1：正在检测/提交数据，2：通过验证，3：验证失败，4：提示ignore状态, curform为当前form对象;
			//cssctl:内置的提示信息样式控制函数，该函数需传入两个参数：显示提示信息的对象 和 当前提示的状态（既形参o中的type）;
			if(!o.obj.is("form"))
		}
	});
})


$(function(){
$(".demoform").Validform({
		tiptype:2,
		datatype:else if (gets.length == 18){   
					var a_idCard = gets.split("");// 得到身份证数组   
					if (isValidityBrithBy18IdCard(gets)&&isTrueValidateCodeBy18IdCard(a_idCard)) {   
						return true;   
					}   
					return false;
				}
				return false;
				
				function isTrueValidateCodeBy18IdCard(a_idCard) {   
					var sum = 0; // 声明加权求和变量   
					if (a_idCard[17].toLowerCase() == 'x') {   
						a_idCard[17] = 10;// 将最后位为x的验证码替换为10方便后续操作   
					}   
					for ( var i = 0; i < 17; i++) {   
						sum += Wi[i] * a_idCard[i];// 加权求和   
					}   
					valCodePosition = sum % 11;// 得到验证码所位置   
					if (a_idCard[17] == ValideCode[valCodePosition]) {   
						return true;   
					}
					return false;   
				}
				
				function isValidityBrithBy18IdCard(idCard18){   
					var year = idCard18.substring(6,10);   
					var month = idCard18.substring(10,12);   
					var day = idCard18.substring(12,14);   
					var temp_date = new Date(year,parseFloat(month)-1,parseFloat(day));   
					// 这里用getFullYear()获取年份，避免千年虫问题   
					if(temp_date.getFullYear()!=parseFloat(year) || temp_date.getMonth()!=parseFloat(month)-1 || temp_date.getDate()!=parseFloat(day)){   
						return false;   
					}
					return true;   
				}
				
				function isValidityBrithBy15IdCard(idCard15){   
					var year =  idCard15.substring(6,8);   
					var month = idCard15.substring(8,10);   
					var day = idCard15.substring(10,12);
					var temp_date = new Date(year,parseFloat(month)-1,parseFloat(day));   
					// 对于老身份证中的你年龄则不需考虑千年虫问题而使用getYear()方法   
					if(temp_date.getYear()!=parseFloat(year) || temp_date.getMonth()!=parseFloat(month)-1 || temp_date.getDate()!=parseFloat(day)){   
						return false;   
					}
					return true;
				}
				
			}
			
		}
	});
})
$(function () {

    $(".demoform").Validform({

        tiptype: 1,

        datatype: {

            "z2-4": /^[\u4E00-\u9FA5\uf900-\ufa2d]2$/,

            "username": function (gets, obj, curform, regxp) {

                //参数gets是获取到的表单元素值，obj为当前表单元素，curform为当前验证的表单，regxp为内置的一些正则表达式的引用;

                var reg2 = /^[\u4E00-\u9FA5\uf900-\ufa2d]2$/;



                if (reg2.test(gets)) { return true; }

                return false;



                //注意return可以返回true 或 false 或 字符串文字，true表示验证通过，返回字符串表示验证失败，字符串作为错误提示显示，返回false则用errmsg或默认的错误提示;

            }

        }

    });

})
</script>


<script>
    //点击选中
    $(".z_myblue").click(function () {

        if ($(this).hasClass("z_okblue")) {

            $(this).removeClass("z_okblue");
            $(".enr_btn2").css("background", "#b0b0b0")

        }
        else {

            $(this).addClass("z_okblue");
            $(".enr_btn2").css("background", "#47b0c3")

        }

    })
   
    //注册
    $(".enr_btn2").click(function (){  

     

        $.ajax({        

            type:'post',

            url:'/plugins/kewei/tools/kewei.ashx?action=register_kw',

            data: { 'name': $("#name").val(), userpassword: $("#userpassword").val(), email: $("#email").val(), real_name: $("#real_name").val(), id_card: $("#id_card").val() },

                success: function (data) {

                    //读取服务器中的数据集中的内容 

                    var obj = eval("(" + data + ")");

                   // alert(url);

                    if (obj.status == "1") {

                        $(".logBox").css("display", "none");

                        $(".success_enroll_box").css("display", "block");

                        location.href = '/index_kw.html';

                       

                    }

                    else {

                        

                        $(".warn_box").text(obj.msg);

                        $(".warn_box").fadeIn(300);

                        setTimeout(function () { $(".warn_box").fadeOut(200) }, 1500);

                    }

                }

        });

        

    });


    $(".mask").click(function () {

        $(".mask,.not_open").hide();

    });
    $(".z_myblue1").click(function () {

        if (!$(this).hasClass("z_okblue")) {

            $(this).addClass("z_okblue");
            $(".bank-box").removeClass("hidden");

        } else {

            $(this).removeClass("z_okblue");
            $(".bank-box").addClass("hidden");

        }

    });
    //去充值
    $(".js_go_recharge").click(function () {

        $(".quit_box1,.mask").show();

    });
    $(".js_cancel01,.js_close1").click(function () {

        $(".quit_box1,.mask").hide();

    });
</script>
</html>
        </main>


