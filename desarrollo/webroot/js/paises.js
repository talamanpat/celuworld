  $(document).ready(function() {
                 $("ul.sub-menu li a").click(function() {
                var text = $(this).html();
                $(".mensajePais").html("Cargando...");
                $("ul.sub-menu").hide();
            });           
        });