<section>
    <div class="contenedor-vt">
        <div class="VtBarraTituloPrincipal">
            <h2><?php e($celular['Marca']['marca']); ?> - <?php e($celular['Celular']['modelo']); ?></h2>
        </div>
        <div class="ColIz">
            <article>
                <?php e($this->element('lista/celularLista/slideImg', array('celular' => $celular))); ?>
            </article>
        </div>
        <div class="ColDer">
            <div class="contenedorCelular">
                <article>
                    <div class="celularBloqueSup">
                        <div  class="celularBloqueSupCol">
                            <?php $utilidad->especificacionesLista($celular['Especificacion'], $sos); ?>
                        </div>
                    </div>
                </article>
                <div class="celularBloqueInf">
<!--                    <article>
                        <?php e($this->element('lista/celularLista/precios', array('celular' => $celular))); ?>
                      </article>
                    <article>
                        <?php e($this->element('lista/celularLista/socialMas', array('celular' => $celular))); ?>
                    </article>       -->
                        <?php e($this->element('lista/celularLista/preciosSocialMas', array('celular' => $celular))); ?>
               
                </div>
            </div>
        </div>
    </div>
</section>