$(document).ready(function(){
    $(window).resize(function(){
        $('.main-banner').height($('.logo-banner img').height()-10);
        $('.row').css('margin-top',$('body').height()-$('.row').height()-($('body').height()*10/100)+'px');
    });
    $('.main-banner').height($('.logo-banner img').height()-10);
    $('.row').css('margin-top',$('body').height()-$('.row').height()-($('body').height()*10/100)+'px');
});