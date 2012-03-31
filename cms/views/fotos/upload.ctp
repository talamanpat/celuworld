<script type="text/javascript">
var numero = 0; //Esta es una variable de control para mantener nombres
            //diferentes de cada campo creado dinamicamente.
evento = function (evt) { //esta funcion nos devuelve el tipo de evento disparado
   return (!evt) ? event : evt;
}

//Aqui se hace lamagia... jejeje, esta funcion crea dinamicamente los nuevos campos file
addCampo = function () { 
//Creamos un nuevo div para que contenga el nuevo campo
   nDiv = document.createElement('div');
//con esto se establece la clase de la div
   nDiv.className = 'archivo';
//este es el id de la div, aqui la utilidad de la variable numero
//nos permite darle un id unico
   nDiv.id = 'file' + (++numero);
//creamos el input para el formulario:
   nCampo = document.createElement('input');
//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
   nCampo.name = 'archivos[]';
//Establecemos el tipo de campo
   nCampo.type = 'file';
//Ahora creamos un link para poder eliminar un campo que ya no deseemos
   a = document.createElement('a');
//El link debe tener el mismo nombre de la div padre, para efectos de localizarla y eliminarla
   a.name = nDiv.id;
//Este link no debe ir a ningun lado
   a.href = '#';
//Establecemos que dispare esta funcion en click
   a.onclick = elimCamp;
//Con esto ponemos el texto del link
   a.innerHTML = 'Eliminar';
//Bien es el momento de integrar lo que hemos creado al documento,
//primero usamos la función appendChild para adicionar el campo file nuevo
   nDiv.appendChild(nCampo);
//Adicionamos el Link
   nDiv.appendChild(a);
//Ahora si recuerdan, en el html hay una div cuyo id es 'adjuntos', bien
//con esta función obtenemos una referencia a ella para usar de nuevo appendChild
//y adicionar la div que hemos creado, la cual contiene el campo file con su link de eliminación:
   container = document.getElementById('adjuntos');
   container.appendChild(nDiv);
}
//con esta función eliminamos el campo cuyo link de eliminación sea presionado
elimCamp = function (evt){
   evt = evento(evt);
   nCampo = rObj(evt);
   div = document.getElementById(nCampo.name);
   div.parentNode.removeChild(div);
}
//con esta función recuperamos una instancia del objeto que disparo el evento
rObj = function (evt) { 
   return evt.srcElement ?  evt.srcElement : evt.target;
}
</script>



<?php


//echo $form->create('Foto', array('action' => 'upload'));
//echo $form->input('celular_id',array( 'value' => $Celu['Celular']['id_celular'],'type'=>'hidden')); 
//	echo $form->input('celu',array('value'=> $cel));

echo $this->Form->create('Foto', array('action' => 'upload', 'type' => 'file'));
?><h2>Modelo:<?php echo $Celular['Celular']['modelo']?></h2><?php 
echo $form->input('celu',array('value'=> $cel,'type'=>'hidden'));
echo $form->input('sit',array('value'=> $sit,'type'=>'hidden'));
echo $this->Form->label('Elige las imagenes a subir:');
echo $this->Html->div('buttom',"<input type='file' name='archivos[]' />", array('id' =>'adjuntos'));
echo "<div class='actions'><ul><li>".$this->Html->link('Subir otra imagen', '#', 
		array('onClick' => 'addCampo()'))."</li></ul></div>";
echo $form->end('Subir'); ?>


        <!-- Esta div contendrá todos los campos file que creemos
   <div id="adjuntos">
        <!-- Hay que prestar atención a esto, el nombre de este campo debe siempre terminar en []
        como un vector, y ademas debe coincidir con el nombre que se da a los campos nuevos 
        en el script -->
        <!--<input type="file" name="archivos[]" /><br />
   </div>-->

   <!--<a href="#" onClick="addCampo()">Subir otro archivo</a> -->
   <!--<dd><input type="submit" value="Subir" id="envia" name="envia" /></dd>
     </dl> 
</form>-->


