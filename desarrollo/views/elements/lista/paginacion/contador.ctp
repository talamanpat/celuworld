<div class="ContenedorMensaje">
    <?php
    echo $this->Paginator->counter(array(
        'format' => __('Pagina %page% de %pages%, mostrando %current% celulares de %count% en total, 
                    empesando en el %start% y terminando en el %end%', true)
    ));
    ?>	
</div>