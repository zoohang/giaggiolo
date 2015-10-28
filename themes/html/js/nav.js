$(function(){

    //用户登录界面的位置
    var top;
    if(document.documentElement.clientHeight == 0){
        top=(document.body.clientHeight-275)/2;
    }else{
        top=(document.documentElement.clientHeight-275)/2;
    }
    $('#inplogin').css({
        'top':top
    });

    //打开用户登录界面
    $('#zc').click(function(){
        $('#plogin').show(300);
    });
    //关闭用户登录界面
    $('.close_login').click(function(){
        $('#plogin').hide(300);
    });


  //input标签
    $('.inputtxt').focus(function(){
        $(this).css('color','black');
        if ($(this).val() == $(this)[0].defaultValue) {
            $(this).val("");
        }
    });
    $('.inputtxt').blur(function(){
        if ($.trim($(this).val()) == "") {
            $(this).val($(this)[0].defaultValue);
            $(this).css('color','#999999');
        }
    });

    $('.login-txt').focus(function(){
        $(this).addClass('orgborder');
    });
    $('.login-txt').blur(function(){
        $(this).removeClass('orgborder');
    });


    //调用语言下拉框
    $.divselect("#divselect","#inputselect");

});





//语言下拉框
jQuery.divselect = function(divselectid,inputselectid) {
    var inputselect = $(inputselectid);
    $(divselectid+" cite").click(function(){
        var ul = $(divselectid+" ul");
        if(ul.css("display")=="none"){
            ul.slideDown("fast");
        }else{
            ul.slideUp("fast");
        }
    });
    $(divselectid+" ul li a").click(function(){
        var txt = $(this).text();
        $(divselectid+" cite").html(txt);
        var value = $(this).attr("selectid");
        inputselect.val(value);
        $(divselectid+" ul").hide();

    });
    $(document).click(function(){
        $(divselectid+" ul").hide();
    });
};