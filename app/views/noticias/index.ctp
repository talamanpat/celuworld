<h1 id="tituloPagina"><?php e('Noticias'); ?></h1>
<!--<nav>-->
   <?php  //echo $this->element('lista/paginacion/contador'); ?>
    <?php //echo $this->element('lista/paginacion/navegador'); ?>
<!--</nav>-->
<?php
$i = 0;
foreach ($noticias as $noticia):
    ?>
    <?php
    echo $this->element('noticias/noticiaLista', array('noticia' => $noticia));
    ?>
    <?php
    if ($i == 3) {
        ?>
        <aside>
            <div style="margin-left: 0px; width: 730px;">
                <?php echo $this->element('addsense/celuworld10'); ?>
            </div>
        </aside>
        <?php
    }
    $i++;
endforeach;
?>
<nav>
    <?php echo $this->element('lista/paginacion/contador'); ?>
    <?php echo $this->element('lista/paginacion/navegador'); ?>
</nav>
<aside>
    <div style="margin-top: 50px;margin-left: 0px; width: 730px;"><?php echo $this->element('addsense/celuworld10'); ?></div>
</aside>