function celuPopup (URL,name){ 
    window.open(URL,"Analisis","width=400,height=500,scrollbars=NO") 
} 

$(document).ready(function(){
        
//    analisis
    $(".analisisBoton").click(function(){
        $("#analisis").slideToggle("slow");
    });
    /*$("#analisis").css({
        display: 'none'
    });*/
    
    
    
//    paises
    $("ul.sub-menu li a").click(function() {
        var text = $(this).html();
        $(".mensajePais").html("Cargando...");
        $("ul.sub-menu").hide();
    });     
    
    $("div#filtrosFix").slideDown("slow"); 
});

