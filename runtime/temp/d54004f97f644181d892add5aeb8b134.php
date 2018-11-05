<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:105:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\public/../application/index\view\user\cooperation_kw.html";i:1541306089;s:90:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\application\index\view\layout\default.html";i:1541305992;}*/ ?>
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
    <style>.leftLoop{ width:1200px;margin:0 auto;overflow:hidden; position:relative;margin-bottom:50px;} 
.leftLoop .hd{ overflow:hidden;  height:30px;  } 
.leftLoop .hd ul{ padding:0 30px;float:right; overflow:hidden; zoom:1; margin-top:10px;  } 
.leftLoop .hd ul li{ position:relative; _display:inline; float:left;  width:10px; height:10px; overflow:hidden; background:#ccc; margin-right:10px; text-indent:-999px; cursor:pointer; 
    -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; behavior: url("http://www.wecanwell.com/PIE.htc");position:relative;} 
.leftLoop .hd ul li.on{ background:#f00;} 
.leftLoop .bd{ padding:10px;} 
.leftLoop .bd ul{ padding:0 30px;overflow:hidden; zoom:1;margin-left:18%} 
.leftLoop .bd ul li{width:260px;margin-right:180px; text-align:center; float:left;display:_inline; overflow:hidden;position:relative;} 
.leftLoop .bd ul li img{ width:260px;height:260px;} 

.leftLoop1{ width:1200px;margin:0 auto;overflow:hidden; position:relative;margin-bottom:50px;} 
.leftLoop1 .hd{ overflow:hidden;  height:30px;  } 
.leftLoop1 .hd ul{float:right; overflow:hidden; zoom:1; margin-top:10px;  } 
.leftLoop1 .hd ul li{ position:relative; _display:inline; float:left;  width:10px; height:10px; overflow:hidden; background:#ccc; margin-right:10px; text-indent:-999px; cursor:pointer; 
    -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; behavior: url("http://www.wecanwell.com/PIE.htc");position:relative;} 
.leftLoop1 .hd ul li.on{ background:#f00;} 
.leftLoop1 .bd{ padding:10px;} 
.leftLoop1 .bd ul{overflow:hidden; zoom:1;} 
.leftLoop1 .bd ul li{width:130px;margin-right:20px; text-align:center; float:left;display:_inline; overflow:hidden;position:relative;} 
.leftLoop1 .bd ul li img{ width:130px;height:130px;} 
.part_div{width:1200px;margin:0 auto;line-height:50px;font-size:20px;text-align:center;margin-top:30px;}
.partner_img1{width:130px;height:130px;border:1px #ccc solid;box-shadow: 1px 1px 5px #aaa,-1px -1px 5px #aaa;margin-bottom:15px;background:#fff;}
.tempWrap{width:1200px !important;}
.partner_name1{font-size:14px;}
.main1{width:600px;text-align:left;}
</style>
    <!--[if lt IE 9]>

    <script>

    (function(){

        var tags = ['header','footer','figure','figcaption','details','summary','hgroup','nav','aside','article','section','mark','abbr','meter','output','progress','time','video','audio','canvas','dialog'];

        for(var i=tags.length - 1;i>-1;i--){ document.createElement(tags[i]);}

    })();

    </script>

    <![endif]-->


		<!--页面头部-->

		<!--页面主体-->
        <div class="container">
			<div class="banner">
				 
				<img src="/upload/201609/28/201609281505124346.png" alt=""/>
                
			</div>
		
			<div class="part_div">合作企业</div>
			<div class="leftLoop">
		 		<div class="hd">

		        </div>
		        <div class="bd">
		            <ul>
                        <?php foreach($arr as $kk): ?>
				<li><a href="<?php echo $kk['nickname']; ?>">
					<div class="partner_img">
						<img src="<?php echo $kk['image']; ?>" alt=""/>
					</div>
					<p class="partner_name"></p>
                    </a>
				</li>
                   <?php endforeach; ?>

						
		                
		            </ul>
		        </div>    
		    </div>

		    <div class="part_div">合作媒体</div>

		    <div class="leftLoop1">
		 		<div class="hd">

		        </div>
		        <div class="bd">
		            <ul>
		               <?php foreach($hezuomeiti as $k): ?>
		                <li><a href="<?php echo $k['nickname']; ?>">
							<div class="partner_img1">
								<img src="<?php echo $k['image']; ?>" alt=""/>
							</div>
							<p class="partner_name1"></p>
							</a>
						</li>
						  <?php endforeach; ?>
		                <!--<li><a href="http://www.qq.com">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531554267.jpg.png" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.sina.com.cn">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531556807.jpg.png" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.163.com">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531558497.jpg" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.sohu.com">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531559797.jpg" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.ifeng.com">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531563538.jpg.png" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.36kr.com">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531566488.jpg" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.jiemian.com">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531568188.jpg.png" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.cnr.cn">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531569168.jpg" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.chinadaily.com.cn">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531570438.jpg" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.cyol.com">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531576338.jpg" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.hexun.com">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531579429.png" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.eeo.com.cn">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531580599.jpg" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.caijing.com.cn">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531586369.jpg.gif" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.qianlong.com">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531589299.jpg" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.ce.cn">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531590809.jpg" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  <!---->
		                <!--<li><a href="http://www.huanqiu.com">-->
							<!--<div class="partner_img1">-->
								<!--<img src="/upload/201704/06/201704061531592629.jpg" alt=""/>-->
							<!--</div>-->
							<!--<p class="partner_name1"></p>-->
							<!--</a>-->
						<!--</li>-->
						  
						
		                
		            </ul>
		        </div>    
		    </div>


			<div class="touch_way">
				<img src="/kewei/images/contact_bg.png" alt=""/>
				<div class="touch_p">
					<div class="main main1">

                        <p>商务合作：<?php echo $res['diyname']; ?></p>
                        <p>媒体合作：<?php echo $res['image']; ?></p>
                        
                         
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

		<!--蒙板-->
		<div class="mask hidden"></div>
		<!--蒙板-->

		<!--暂不开放-->
		<div class="not_open hidden">
			<p>对不起</p>
			<p>该功能暂不开放</p>
		</div>
		<!--暂不开放-->
	</div>
</body>
<script src="/kewei/js/jquery.SuperSlide.2.1.2.js"></script>
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
    //合作企业轮播
    jQuery(".leftLoop").slide({ interTime: 2500, titCell: ".hd ul", mainCell: ".bd ul", effect: "leftLoop", vis: 3, scroll: 2, autoPlay: true, autoPage: true })
    //合作媒体轮播
    jQuery(".leftLoop1").slide({ interTime: 2000, titCell: ".hd ul", mainCell: ".bd ul", effect: "leftLoop", vis: 8, scroll: 2, autoPlay: true, autoPage: true })
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
   
</script>
</html>
        </main>


