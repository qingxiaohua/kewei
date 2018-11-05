/**
 * Created by APPLE on 2016/1/12.
 */
var H=$(window).height();
var W=$(window).width();

//判断是否滑到底部
var scrollSide=function() {
    var scrollHeight = $(window).scrollTop();
    var bodyH=$("body").height();
    return (bodyH<=H+scrollHeight)?true:false;
}



//验证码
function djstime(){
    var validate=$(".validate").first();
    var i = 90;
	validate.attr("disabled",true);
	validate.val("还剩"+i+"秒");
	time0 = setInterval(function(){
		i=i-1;
		if(i<0){
			validate.attr("disabled",false);
			validate.val("再次获取");
			clearInterval(time0)
		}else{
			validate.attr("disabled",true);
			validate.val("还剩"+i+"秒");
		}
	},1000)
}

	//分页
	var $pageNum=parseInt($(".pageAll").html());
	var pageGo=$(".pageGo");
	$(".pageGo").attr("max",$pageNum).keyup(function(){
		if($(".pageGo").val()>$pageNum){
		    $(".pageGo").val($pageNum)
		}
	});


























