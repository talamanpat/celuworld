
<div id="contenedor-vt-telefono" class="contenedor"> 
    <div class="ColIz"><div id="SliderVt">
            <div class="container">
                <div class="example">
                    <div class="slides">
                        <div class="slides_container">
                            <?php $i = 1;
                            foreach ($celular['Foto'] as $foto): ?>
                                <div class="slide">
                                    <?php
                                    e($this->Html->link(
                                                    $imagen->redimensionar(
                                                            $celular['Celular']['id_celular'] .
                                                            "/" . $foto['nombre'], 253, $celular['Marca']['marca'] .
                                                            " " . $celular['Celular']['modelo'] . " " . $i), $this->HProperties->APP . 'img/celulares/' .
                                                    $celular['Celular']['id_celular'] . "/" . $foto['nombre'], array('escape' => false,
                                                'rel' => $celular['Celular']['id_celular'])
                                            )
                                    );
                                    $i++;
                                    ?>
                                </div>
                                <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
<?php echo $this->element('scripts/fancy', array('rel' => $celular['Celular']['id_celular'],
    'cel' => $celular['Marca']['marca'] . " " . $celular['Celular']['modelo'])); ?>

        </div>
    </div>
    <div class="ColDer" >
        <div class="container">
            <div class="example" >
<?php
if (count($celular['Video']) == 1) {
    e($youtube->video($celular['Video'][0]['url']));
} else if (count($celular['Video']) > 1) {
    ?>
                    <div class="slidesVideo" >
                        <div class="slides_container">
    <?php foreach ($celular['Video'] as $video): ?>
                                <div class="slide" >
                                <?php e($youtube->video($video['url'])); ?>
                                </div>
                                <?php endforeach; ?>
                        </div>
                    </div>
    <?php
} else {
    echo $this->element('addsense/celuworld6');
}
?> 
            </div>
        </div>
    </div>
</div>