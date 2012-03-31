<?php
/*
 * talaman
 */
?>

<script type="text/javascript">
    function celuPopup (URL,name){ 
        window.open(URL,"Analisis","width=400,height=500,scrollbars=NO") 
    } 

    $(document).ready(function(){

        //checkbox
        $('#toggle-all').click(function(){
            $('input[type=checkbox]').checkBox('toggle');
            return false;
        });
				
        $('#check-all').click(function(){
            $('input[type=checkbox]').checkBox('changeCheckStatus', true);
            return false;
        });
        $('#uncheck-all').click(function(){
            $('input[type=checkbox]').checkBox('changeCheckStatus', false);
            return false;
        });

           
        //    paises
        $("ul.sub-menu li a").click(function() {
            var text = $(this).html();
            $(".mensajePais").html("Cargando...");
            $("ul.sub-menu").hide();
        });     
       
        $("img#cargandoLista").hide();
//        $("img#cargandoLista").css( "display","none")
//        $("div#filtrosFix").slideDown("slow"); 
        $("div#filtrosFix").show("slow");
    }); 

</script>   