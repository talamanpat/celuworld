 <h1 id="tituloPagina">Smartphones</h1>
<nav>
    <?php echo $this->element('lista/filtros', array('titulo' => 'Smartphones')); ?>
    <?php echo $this->element('lista/paginacion/orden'); ?>
    <?php echo $this->element('lista/paginacion/contador'); ?>
    <?php echo $this->element('lista/paginacion/navegador'); ?>
</nav>
<?php
$i = 1;
foreach ($celulares as $celular):
    echo $this->element('lista/celularLista', array("celular" => $celular));
    if ($i == 2 || $i==4) {
        ?>
        <aside>
            <div style="margin-left: 0px;width: 730px; margin-top: 40px; margin-bottom: 30px;">
                <?php echo $this->element('addsense/celuworld10'); ?>
            </div>
        </aside>
        <?php
    }
     if ($i==6) {
        ?>
        <aside>
          <div style=" margin-top: 40px; margin-bottom: 30px;margin-left: 0px; width: 730px;"><?php echo $this->element('addsense/celuworld3'); ?>
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