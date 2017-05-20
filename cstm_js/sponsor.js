$(document).ready(function(){
    $(".title_2013").css({"display":"none"});
    $(".title_2014").css({"display":"none"});
    $("#selector .selector_bar").css({"margin":"0 50px 0 50px","top":"80px","height":"150px","width":"200px","border-radius":"50%","transition":"1s"});
    $("#spon_2014").click(function(){
        $(".spon_image2013").slideUp(1000);
        $(".spon_image2014").slideDown(1000);
        $("#selector .selector_bar").css({"top":"0px","transition":"1s"});
        $(".title_2013").css({"height":"0px","width":"0px","display":"none","transition":"1s"});
        $(".title_2014").css({"height":"30px","padding":"5px 0 5px 0","width":"200px","display":"block","transition":"1s"});
    });
    $("#spon_2013").click(function(){
        $(".spon_image2014").slideUp(1000);
        $(".spon_image2013").slideDown(1000);
        $("#selector .selector_bar").css({"top":"0px","transition":"1s"});
        $(".title_2014").css({"height":"0px","width":"0px","display":"none","transition":"1s"});
        $(".title_2013").css({"height":"30px","padding":"5px 0 5px 0","width":"200px","display":"block","transition":"1s"});
    });
});