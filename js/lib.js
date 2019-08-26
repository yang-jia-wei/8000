$(document).ready(function(){
    $("#citylist").load("city.asp");

    $('#welcome').mouseover(function(){
         $("#citylist").css("display","block");
     });

    $('#welcome').mouseout(function(){
         $("#citylist").css("display","none");
     });
})