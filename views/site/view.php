<?php
use yii\helpers\Url;
?>

<a href="<?= Url::toRoute("site/create") ?>"> Ingresar estado convenio </a>

<h3>Estado de convenios</h3>

<table class="table table-bordered">
 <tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Descripcion</th>
	<th>Vigencia</th>
	<th></th>
	<th></th>
 </tr>

 <?php foreach ($model as $row): ?> 
 <tr>
 	<td> <?= $row->id_estado_convenio ?> </td>
 	<td> <?= $row->nombre_estado_convenio ?> </td>
 	<td> <?= $row->descripcion ?> </td>
 	<td> <?= $row->vigente ?> </td>
 	<td> <a href="#"> Editar </a> </td>
 	<td> <a href="#"> Eliminar </a> </td>
 </tr>
 <?php endforeach ?>

</table>