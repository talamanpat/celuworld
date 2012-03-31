<div class="celulares view">
<h2><?php  __('Celular');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Celular'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $celular['Celular']['id_celular']; ?>
			&nbsp;
		</dd>
<!--		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cel Esp Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $celular['Celular']['cel_esp_id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Marca'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($celular['Marca']['marca'], array('controller' => 'marcas', 'action' => 'view', $celular['Marca']['id_marca'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modelo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $celular['Celular']['modelo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vigente'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilidad->booleanos($celular['Celular']['vigente']); ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lanzamiento');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $celular['Especificacion']['lanzamiento'];?>
	</dl>
	
	
	
	
	<!--  -->
	
	
	
	<!-- <div class="related"> -->
<!--		<h3><?php __('Especificaciones');?></h3>
	<?php if (!empty($celular['Especificacion'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Analisis');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php //echo $celular['Especificacion']['analisis'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Evaluacion');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $celular['Especificacion']['evaluacion'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('So');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $sos[$celular['Especificacion']['so_id']];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Smart');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['smart']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Basico');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['basico']);?>
&nbsp;</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tablet');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['tablet']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Touch');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['touch']);?>
&nbsp;</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Simple');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['simple']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('chips');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $celular['Especificacion']['chips'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('teclado numerico');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['teclado_numerico']);?>
&nbsp;</dd>
	
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teclado');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['teclado']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Slide');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['slide']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Flip');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['flip']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bluetooth');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['bluetooth']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Wifi');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['wifi']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modem');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['modem']);?>
&nbsp;</dd>
                
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mp3');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['mp3']);?>
&nbsp;</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Radio');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['radio']);?>
&nbsp;</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('tv');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['tv']);?>
&nbsp;</dd>
                
                
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('G');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $celular['Especificacion']['g'];?>
&nbsp;</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gps');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['gps']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Memoria telefono');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $celular['Especificacion']['memoria_telefono'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sd');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['sd']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sd Default');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $celular['Especificacion']['sd_default'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sd Maximo');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $celular['Especificacion']['sd_max'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Camara');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $celular['Especificacion']['camara'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Flash');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['flash']);?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Video Llamada');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $utilidad->booleanos($celular['Especificacion']['video_llamada']);?>
&nbsp;</dd>
		
&nbsp;</dd>
<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Cel Esp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $celular['Especificacion']['id_cel_esp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Celular Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $celular['Especificacion']['celular_id'];?>
&nbsp;</dd> 
		</dl>
	<?php endif; ?>-->
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Editar Especificacion', true), array('controller' => 'especificaciones', 'action' => 'edit', $celular['Especificacion']['id_cel_esp'])); ?></li>
			</ul>
		</div>
	<!-- </div> -->
	
	
	
	<!--  -->
	
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Celular', true), array('action' => 'edit', $celular['Celular']['id_celular'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Celular', true), array('action' => 'delete', $celular['Celular']['id_celular']), null, sprintf(__('Are you sure you want to delete # %s?', true), $celular['Celular']['id_celular'])); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Celular', true), array('action' => 'add')); ?> </li>
	</ul>
        <?php echo $this->element('menuGeneral'); ?>
</div>
	<div class="related">
	<h3><?php __('Related Fotos');?></h3>
	<?php if (!empty($celular['Foto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id Foto'); ?></th>
	<!-- <th><?php __('Celular Id'); ?></th> -->	
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Imagen'); ?></th>
		<th><?php __('Size'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($celular['Foto'] as $foto):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $foto['id_foto'];?></td>
	<!-- <td><?php echo $foto['celular_id'];?></td> -->		
			<td><?php echo $foto['nombre'];?></td>
			<td><?php echo $imagen->redimensionar($foto['celular_id']."/".
			$foto['nombre'],200);?></td>
			
			<td><?php printf("%.1f", ($foto['size']/1024))?> KB</td>
			<td class="actions">
				<?php echo $this->Html->link($utilidad->booleanos($foto['show']),
				array('controller' => 'fotos', 'action' =>'fotoPrincipal/'.$foto['id_foto'].'/'.$foto['celular_id']));;?>
				<?php echo $this->Html->link('Borrar', array('controller' => 'fotos', 'action' => 'delete', 
				$foto['id_foto']."/".$foto['celular_id']),
				null, 'Estas seguro?' );?>
				
				
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar Fotos', true), array('controller' => 'fotos', 'action' => 'upload', $celular['Celular']['id_celular']));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Precios');?></h3>
	<?php if (!empty($celular['Precio'])):?>
        
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id Precio'); ?></th>
<!-- <th><?php __('Celular Id'); ?></th> -->		
		<th><?php __('Referencia'); ?></th>
		<th><?php __('Pais'); ?></th>
		<th><?php __('Precio'); ?></th>
		<th><?php __('Fecha'); ?></th>
		<th><?php __('Descripcion_corta'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($celular['Precio'] as $precio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $precio['id_precio'];?></td>
	<!-- <td><?php echo $precio['celular_id'];?></td> -->		
			<td><?php echo $referencias[$precio['referencia_id']];?></td>
			<td><?php echo $paises[$referencias_pais[$precio['referencia_id']]];?></td>
			<td><?php echo $precio['precio'];?></td>
			<td><?php echo $precio['fecha'];?></td>
			<td><?php echo $precio['descripcion_corta'];?></td>
<!-- 		<td><?php echo $precio['descripcion'];?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'precios', 'action' => 'view', $precio['id_precio'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'precios', 'action' => 'edit', $precio['id_precio'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'precios', 'action' => 'delete', $precio['id_precio']."/".$precio['celular_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $precio['id_precio'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar Precios', true), array('controller' => 'precios', 'action' => 'add', $celular['Celular']['id_celular']));?> </li>
		</ul>
	</div>
</div>

<div class="related">
	<h3><?php __('Related Videos');?></h3>
	<?php if (!empty($celular['Video'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id Video'); ?></th>
		<th><?php __('Celular Id'); ?></th>
		<th><?php __('Url'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($celular['Video'] as $video):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $video['id_video'];?></td>
			<td><?php echo $video['celular_id'];?></td>
			<td><?php echo $video['url'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'videos', 'action' => 'delete', $video['id_video']."/".$video['celular_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $video['id_video'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Video', true), array('controller' => 'videos', 'action' => 'add',$celular['Celular']['id_celular']));?> </li>
		</ul>
	</div>
</div>
<!--<div class="related">
	<h3><?php __('Related Comentarios');?></h3>
	<?php if (!empty($celular['Comentario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id Comentario'); ?></th>
		<th><?php __('Celular Id'); ?></th>
		<th><?php __('Usuario Id'); ?></th>
		<th><?php __('Comentario'); ?></th>
		<th><?php __('Fecha'); ?></th>
		<th><?php __('Anonimo'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($celular['Comentario'] as $comentario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $comentario['id_comentario'];?></td>
			<td><?php echo $comentario['celular_id'];?></td>
			<td><?php echo $comentario['usuario_id'];?></td>
			<td><?php echo $comentario['comentario'];?></td>
			<td><?php echo $comentario['fecha'];?></td>
			<td><?php echo $comentario['anonimo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comentario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario', true), array('controller' => 'comentarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Evaluaciones');?></h3>
	<?php if (!empty($celular['Evaluacion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id Evaluacion'); ?></th>
		<th><?php __('Usuario Id'); ?></th>
		<th><?php __('Celular Id'); ?></th>
		<th><?php __('Calificacion'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($celular['Evaluacion'] as $evaluacion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $evaluacion['id_evaluacion'];?></td>
			<td><?php echo $evaluacion['usuario_id'];?></td>
			<td><?php echo $evaluacion['celular_id'];?></td>
			<td><?php echo $evaluacion['calificacion'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'evaluaciones', 'action' => 'view', $evaluacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'evaluaciones', 'action' => 'edit', $evaluacion['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'evaluaciones', 'action' => 'delete', $evaluacion['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evaluacion', true), array('controller' => 'evaluaciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
