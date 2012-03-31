<?php
/*
 * talaman
 * 
 */
?>
<div id="sobreCeluworld" class="bloque">
    <h2>Sobre CELUWORLD</h2>
    <div id="sobreCeluworldBusqueda">
        <p id="uno">
            Empieza conociendo los <a href="<?php e($this->HProperties->APP); ?>lista/smartphones">smartphones</a> o las <a href="<?php e($this->HProperties->APP); ?>lista/tablets" >tablets</a> Ahora también puedes ver las últimas <a href="<?php e($this->HProperties->APP); ?>noticias">noticias</a>!
        </p>
        <form action="<?php e($this->HProperties->APP) ?>pages/busqueda" id="cse-search-box">
            <div>
                <p id="dos">
                    Si ya tienes un gadget en mente y deseas saber más sobre el, búscalo aquí 
                    <input type="hidden" name="cx" value="partner-pub-7255282604685005:8376935080" />
                    <input type="hidden" name="cof" value="FORID:10" />
                    <input type="hidden" name="ie" value="UTF-8" />
                    <input type="text" name="q" size="20" />
                    <input type="submit" name="sa" value="Buscar" />
                </p>

            </div>
        </form>
          <div >
<!--                <div><?php // e($this->element('global/twitterFollow')); ?></div>-->
                <div style="float: left;"><?php e($this->element('global/tweetHor')); ?></div>
                <div style="float: left; width: 70px;"><?php e($this->element('global/plusOneHorMedium')); ?></div>
                <div style="float: left;"><?php e($this->element('global/facebookLikeHor')); ?></div>
          </div>
    </div>
    <p>Nuestra misi&oacute;n es comunicar de forma sencilla, rápida y amigable información transparente de teléfonos celulares a nuestros usuarios, con el objetivo de que elijan de forma cómoda, sencilla e informada la elección de un teléfono celular.
        Con la visión de ser el medio de comunicación líder en la entrega de información y retroalimentación de teléfonos móviles a nivel hispano, manteniendo información actualizada, fidedigna y transparente.
    </p>
</div>
