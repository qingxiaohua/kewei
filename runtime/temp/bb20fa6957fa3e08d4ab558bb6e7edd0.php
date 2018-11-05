<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:100:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\public/../application/index\view\user\news_list.html";i:1541306531;s:90:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\application\index\view\layout\default.html";i:1541305992;}*/ ?>
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
            
			<div class="main news_list">
			<ul class="news_ul">
                <?php foreach($arr as $k): ?>
				    <li>
					    <a href="news.html?id=<?php echo $k['id']; ?>">
						    <div class="news_pic">
							    <img src="<?php echo $k['image']; ?>" alt=""/>
						    </div>
						    <div class="news_p">
							    <p class="new_name"><?php echo $k['name']; ?></p>
							    <p class="line24"><?php echo $k['keywords']; ?></p>
							    <p class="new_time"><?php echo date("y/m/d H:i:s",$k['createtime']); ?></p>
						    </div>
						    <div class="clr"></div>
					    </a>
				    </li>
                <?php endforeach; ?>

                
			</ul>
				
			</div>
			<!--分页-->
				<!--<div class="w100 center">-->
                    <!--<ul class="pagingBox"><li class="hidden">上一页</li><li class="page_on"><a>1</a></li><li><a href="news_kw_2.html">2</a></a><li><a href="news_kw_3.html">3</a></a><li><a href="news_kw_4.html">4</a></a><span>...</span><li><a href="news_kw_18.html">18</a></li><li class="pageNext"><a href="news_kw_2.html">下一页</a></li><div class="lf pageinp"><p class="lf">共<span class="pageAll">18</span>页</p><p class="lf goPage">去往<input type="number" id="txtPageNum" class="pageGo" min="1" onkeyup="this.value=this.value.replace(/[^\d]/g,'') " onafterpaste="this.value=this.value.replace(/[^\d]/g,'')" name="f_order" />页</p><p class="lf okPage"><a><input type="button" value="确定" class="chi" id="btnPageNum" onclick="Location()" /></a></p></div></ul>-->
		         <!---->
	            <!--</div>-->
            	 <!--分页--> 
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
    //去往第几页

    function Location() {

        var pageNum = $("#txtPageNum").val()

        if (pageNum != null && pageNum != "") {

            location.href = "news_kw_" + pageNum + ".html";

        }

        else {

            location.href = "#";

        }

    }

    //分页

    var $pageNum = parseInt($(".pageAll").html());

    var pageGo = $(".pageGo");

    $(".pageGo").attr("max", $pageNum).keyup(function () {

        if ($(".pageGo").val() > $pageNum) {

            $(".pageGo").val($pageNum)

        }

    });
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


