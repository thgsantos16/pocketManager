function message(e,a){"error"==a?$("#messages").css("background","#e65e5e"):$("#messages").css("background","#064037"),$("#messages").html(e),$("#messages").fadeIn(),$("#messages").css("top","25px"),setTimeout(function(){$("#messages").fadeOut(),$("#messages").css("top","-124px")},4300)}function navigate(e){old=state,state=e;var a=document.querySelector("[ng-app=pocketManager]"),s=angular.element(a).scope();s.$apply(function(){switch(old){case"root":s.rootView=!1;break;case"login":s.loginView=!1;break;case"register":s.registerView=!1;break;case"dashboard":s.dashboardView=!1}switch(state){case"root":s.rootView=!0;break;case"login":s.loginView=!0;break;case"register":s.registerView=!0;break;case"dashboard":s.dashboardView=!0}}),"root"!=state?($("main").css("width","30%"),$("main").css("marginLeft","35%")):($("main").css("width","50%"),$("main").css("marginLeft","25%"))}function innerPages(e){$("#noModal").css({padding:0,display:"block"}),$("main").css({width:"100%",marginLeft:0,height:"auto"}),$("#inner").css({background:"#FFF",padding:"2%"}),$("#logo").css({width:"0"}),$("#logo").fadeOut(),$("header").fadeIn(),$("header").css({top:0,marginBottom:"272px"}),$("body").css({background:"url(assets/img/bg2.jpg)"}),$.ajax({url:"http://localhost:8080/PocketManager/api/v1/listing/"+e+"?apiKey=123456",type:"GET",contentType:"application/json; charset=utf-8",success:function(e){var a=1,s=[];$.each(e,function(e,t){s[t.id]=t,a++});var t=document.querySelector("[ng-app=pocketManager]"),o=angular.element(t).scope();o.$apply(function(){o.expenses=s})},error:function(e,a,s){},timeout:12e4})}$(function(){$("body").fadeIn(1200),$("#messages").click(function(){$("#messages").fadeOut(),$("#messages").css("top","-124px")}),$.ajaxSetup({type:"POST",headers:{"cache-control":"no-cache"}}),$("#whiteShadow").click(function(){$("#whiteShadow").fadeOut(),$("#addExpense").fadeOut()})});