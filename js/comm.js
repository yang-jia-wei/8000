// JavaScript Document

$(function(){
   var nav=$(".header"); //得到导航对象
   var win=$(window); //得到窗口对象
   var sc=$(document);//得到document文档对象。
   win.scroll(function(){
   if(sc.scrollTop()>=200){
       nav.addClass("fixednav"); 
    }else{
       nav.removeClass("fixednav");
    }})
});

function tabSwitch(tabHd,tabBd){
        tabHd.each(function(index){
            $this=$(this);
            $this.click(function(){
                $(this).addClass('hover').siblings().removeClass('hover');
                tabBd.eq(index).addClass('active').siblings().removeClass('active');
            });
        });
    }
tabSwitch($('.hisyear-list li'),$('.words-cont-wrap .words-cont'));

//隐藏所有元素
 document.documentElement.classList.add('js-enabled');

    $(function (){  
        //显示隐藏  
        $(".i4").hover(function (){  
            var flag = $(".weixin").is(":hidden");  
            if(flag){  
                $(".weixin").show();  
            }else{  
                $(".weixin").hide(); ;  
            }  
        });  
		
        $(".i1").hover(function (){  
            var flag = $(".mob").is(":hidden");  
            if(flag){  
                $(".mob").show();  
            }else{  
                $(".mob").hide(); ;  
            }  
        });  
    }); 

$(document).ready(function(){
     $('#welcome').mouseover(function(){
         $("#cslist").css("display","block");
     });

     $('#welcome').mouseout(function(){
         $("#cslist").css("display","none");
     });
 })


