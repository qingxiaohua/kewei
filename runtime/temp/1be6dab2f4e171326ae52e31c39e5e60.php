<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:99:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\public/../application/index\view\user\index_kw.html";i:1541306365;s:90:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\application\index\view\layout\default.html";i:1541305992;}*/ ?>
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
            

    <script type="text/javascript">

        var Ohref = window.location.href;

        var arrhref = Ohref.split("?switch_id=");

        if (arrhref[0] == undefined) {

            $(function () {

                $("body").hide();

                $.ajax({

                    type: 'post',

                    dataType: 'json',

                    url: '/tools/submit_ajax.ashx?action=judge_terminal_phone',

                    success: function (data) {

                        if (data.status == "1") {

                            location.href = data.path;

                        }

                        else {

                            $("body").show();

                        }

                    }

                });

            })

        } else {



        }

    </script>

    <script type="text/javascript" src="/kewei/js/jquery.SuperSlide.2.1.2.js"></script>

<style>*{zoom:1}
	.fullSlide{ min-width:1200px; position:relative; margin:0 auto;}
	.fullSlide .bd{ position:relative; z-index:0; }
	.fullSlide .bd li img{width:100%; vertical-align:top;}
	.fullSlide .hd{position:relative; z-index:1; margin-top:-30px; height:30px; line-height:30px;  text-align:center; top:-20px;}
	.fullSlide .hd ul{ text-align:center;  padding-top:5px;padding-bottom:20px;}
	.fullSlide .hd ul li{ cursor:pointer; display:inline-block; *display:inline; zoom:1; width:18px; height:18px; margin:10px; background:#c6c6c6; border-radius:50%;overflow:hidden; font-size:0;}

        .fullSlide .hd ul li a {

            width: 100%;

        }

        .fullSlide .bd ul li a {

            width: 100%;

        }
    .fullSlide .hd ul .on{ background:#fff;border:2px #c6c6c6 solid;}
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
			<div class="fullSlide">
				<div class="bd">         
					<ul>
                         <?php foreach($arr as $k): ?>
						<li><a href="<?php echo $k['nickname']; ?>">
		                	<img src="<?php echo $k['image']; ?>"/></a>
		                </li>
		              <?php endforeach; ?>

					</ul>
				</div>

				<div class="hd"><ul></ul></div>
			</div>

			<div class="join_div">
				<div class="join">
                      
				<a href="news_list.html"><img src="<?php echo $chuansongmen['image']; ?>" alt=""/></a>
                    
				</div>
				<div class="news_div">
					<ul>
                        <?php foreach($news as $k): ?>
						<li>
							<a href="news.html?id=<?php echo $k['id']; ?>">
								<div class="news_img">
									<img src="<?php echo $k['image']; ?>" alt=""/>
								</div>
								<div class="news_intro">
									<h3><?php echo $k['name']; ?></h3>
									<p class="intro2 js_txt" num="50"><?php echo $k['keywords']; ?></p>
									
								</div>
                                <p class="date"><?php echo date("y-m-d H:i:s",$k['createtime']); ?></p>
							</a>
						</li>
                          <?php endforeach; ?>

                          
						<p class="more"><a href="news_list.html">更多新闻>></a></p>
					</ul>
				</div>
			</div>
            <!-- 新加图片模块 -->
            <?php foreach($article as $k): ?>
			<div class="new_img328">
				<a ><img src="<?php echo $k['image']; ?>"></a>
			</div>
                  <?php endforeach; ?>

			<div class="kinds">
				<ul>
                    <?php foreach($test as $k): ?>
					<li><a href="">
						<img src="<?php echo $k['image']; ?>" alt="" class="index_animate"/>
						<img src="<?php echo $k['image']; ?>" alt="" class="animate_logo  hidden"/>
						<div class="animate_on hidden">
							<img src="<?php echo $k['image']; ?>" alt=""/>
						</div>
                        </a>
					</li>
                    <?php endforeach; ?>

				</ul>
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
<script src="/kewei/js/common.js"></script>
<script type="text/javascript" src="/kewei/js/carousel.min.js"></script>
<script type="text/javascript">
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
    $(function () {
        /* 商品轮播图（带缩略图的轮播效果） */
        $(".z_banner1").thumbnailImg({

            large_elem: ".large_box1",
            small_elem: ".small_list1",
            left_btn: ".left_btn1",
            right_btn: ".right_btn1"

        });

    });

    $(function () {
        /* 商品轮播图（带缩略图的轮播效果） */
        $(".z_banner2").thumbnailImg({

            large_elem: ".large_box2",
            small_elem: ".small_list2",
            left_btn: ".left_btn2",
            right_btn: ".right_btn2"

        });

    });
</script>

<script>
    //暂不开放
    $(".js_nouse").click(function () {

        $(".mask,.not_open").show();

    });

    $(".mask").click(function () {

        $(".mask,.not_open").hide();

    });

</script>
    <script>
        //轮播
        jQuery(".fullSlide").slide({ interTime: 4000, titCell: ".hd ul", mainCell: ".bd ul", effect: "leftLoop", vis: "auto", autoPlay: true, autoPage: true, trigger: "click" });
        //登陆后移到名字上下拉框出现
        $(".name").hover(function () {

            $(".child").show();

        }, function () {

            $(".child").hide();

        });

</script>
</html>
        </main>


