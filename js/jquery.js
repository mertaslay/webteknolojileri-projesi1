$(function(){

    var kacresim=$(".donen").length;
    var cercevewidth=$(window).width();
    var cerceveheight=$(window).height();
    var toplamwidth=kacresim * cercevewidth;
    $(".ilerleyen").width(toplamwidth);
    $(".donen").width(cercevewidth);
    $(".kapla").height(cerceveheight);
    var index=0;

    $ilerlet=function(){
        $(".prosesbar").css({"width":"0 px"}).stop().animate({"width":"100%"},5000);
        $(".ilerleyen").animate({"left":"-"+(index*cercevewidth)+"px"},1000);
        if(kacresim==index+1){
            index=0;
        }
        else{
            index++;
        }
        
    }
    donen=setInterval($ilerlet,5000);

    $(".ileri").click(function(){
        if(kacresim==index+1){
            index=0;
        }
        else{
            index++;
        }
        $(".ilerleyen").animate({"left":"-"+(index*cercevewidth)+"px"},1000);
       
        clearInterval(donen);
        donen=setInterval($ilerlet,5000);
    });
    $(".geri").click(function(){
        if(index==0){
            index=kacresim-1;
        }
        else{
            index--;
        }
        $(".ilerleyen").animate({"left":"-"+(index*cercevewidth)+"px"},1000);
       
        clearInterval(donen);
        donen=setInterval($ilerlet,5000);
    });
    $(".donen").hover(function(){
        clearInterval(donen);
        $(".prosesbar").stop().animate({"width":"0%"},2000);

    },function(){
        donen=setInterval($ilerlet,5000);

    });

});
