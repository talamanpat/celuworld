<div class="OrdenarPor">
    <?php echo $html->image('filtrosF2.jpg', array('alt' => 'filtros arriba','id'=>'filtrosFlecha'))?>
    <p>Ordenar por:</p>
    <ul><li><?php echo $this->Paginator->sort('marca', 'Marca.marca'); ?></li>
        <li><?php echo $this->Paginator->sort('modelo', 'modelo'); ?></li>
        <li><?php echo $this->Paginator->sort('nuevo/viejo', 'Especificacion.lanzamiento'); ?></li>
    </ul></ul>
</div> 