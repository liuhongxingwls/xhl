$(document).ready(function(){
    if($('.back').length >0){
        $('.back').unbind('click').bind('click',function(){
            window.history.back();
        })
    }
});