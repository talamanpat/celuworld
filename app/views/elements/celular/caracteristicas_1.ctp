<h2 id="titulo-caracteristicas" class="subTitulo">Características</h2>
<div id="contenedor-vt-carac"> 
    <div class="CaracteriticaContenedorTabla" id="carac1"> 
        <table > 
            <?php
            e($utilidad->rowBoolMandatory($celular['Especificacion']['pantalla_multitactil'], "Multitouch","No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['modem'], "Modem", "No"));
            e($utilidad->rowTxtMandatory($celular['Especificacion']['memoria_telefono'], "Mem. Interna"));
            e($utilidad->rowTxtMandatory($celular['Especificacion']['tipo_memoria'], "Mem. Externa"));
            e($utilidad->rowTxtMandatory($celular['Especificacion']['sd_default'], "Default"));
            e($utilidad->rowTxtMandatory($celular['Especificacion']['sd_max'], "Expandible"));
            e($utilidad->rowTxtMandatory($celular['Especificacion']['camara'] . " MPX", "Camara"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['flash'], "Flash", "No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['video_llamada'], "Video llamada", "No")); 
            e($utilidad->rowBoolMandatory($celular['Especificacion']['flash_player'], "Flash Player", "No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['java_app'], "java apps", "No"));
            ?>
        </table>
    </div> 
    <div class="CaracteriticaContenedorTabla" id="carac2"> 
        <table > 
            <?php
            e($utilidad->rowBoolMandatory($celular['Especificacion']['wifi'], "Wifi", "No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['3g'], "3g", "No"));
            e($utilidad->rowBool($celular['Especificacion']['4g'], "4g"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['edge'], "Edge", "No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['gprs'], "Gprs", "No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['wap'], "Wap", "No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['bluetooth'], "Bluetooth", "No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['gps'], "Gps", "No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['tv'], "Tv", "No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['mp3'], "Mp3", "No"));
            e($utilidad->rowBoolMandatory($celular['Especificacion']['radio'], "Radio", "No"));
            ?>

        </table>
    </div> 
    <div class="CaracteriticaContenedorTabla"  id="carac3"> 
        <table > 
            <?php
            
            function multiTouch($var){
                if ($var==1){
                    return "multi-touch";
                }
            }
            

           e($utilidad->rowTxtMandatory($celular['Especificacion']['procesador'], "Procesador"));
           e($utilidad->rowTxt($celular['Especificacion']['gpu'], "gpu"));
           e($utilidad->rowTxt($celular['Especificacion']['ram'], "Ram"));            
            
//            e($utilidad->rowTxtMandatory($celular['Especificacion']['g'] . "g", "Internet Móvil", "No"));
            e($utilidad->rowTxtMandatory($celular['Especificacion']['dimensiones'], "Dimensiones"));
            e($utilidad->rowTxt($celular['Especificacion']['colores'], "Colores"));
            e($utilidad->rowTxtMandatory($celular['Especificacion']['pantalla_tipo'].
                    " de ".$celular['Especificacion']['pantalla_tamano'].
                    "'' ".multiTouch($celular['Especificacion']['pantalla_multitactil']), "Pantalla y más"));
            e($utilidad->rowTxtMandatory($celular['Especificacion']['pantalla_resolucion'], "Resolucion"));
            e($utilidad->rowTxtMandatory($celular['Especificacion']['peso'], "Peso"));
            e($utilidad->rowTxtMandatory($celular['Especificacion']['bateria_duracion'], "Duración bateria"));
//           e($utilidad->rowTxtMandatory($celular['Especificacion']['chips'], "Chips"));
             ?>

        </table>
    </div> 

</div>