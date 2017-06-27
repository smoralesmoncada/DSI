<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\data\Pagination;
use yii\widgets\LinkPager;
?>

<table class="table table-bordered">
	<tr>
		<th>Id Coordinador</th>
		<th>Rut Coordinador</th>
		<th>Nombre Coordinador</th>
		<th>DV Coordinador</th>
		<th>Fecha Inicio</th>
		<th>Fecha Fin</th>
		<th>Vigente</th>
		<th>Es Externo</th>
		<th>Unidad Academica</th>
		<th>Email</th>
		<th>Id Institucion</th>
	</tr>
	<?php foreach ($model as $row): ?>
		<tr>
			<td><?= $row->id_coordinador_convenio ?></td>
			<td><?= $row->rut_coordinador_convenio ?></td>
			<td><?= $row->nombre_coordinador_convenio ?></td>
			<td><?= $row->dv_coordinador_convenio ?></td>
			<td><?= $row->fecha_inicio ?></td>
			<td><?= $row->fecha_fin ?></td>
			<td><?= $row->vigente ?></td>
			<td><?= $row->esexterno ?></td>
			<td><?= $row->unidad_academica ?></td>
			<td><?= $row->email ?></td>
			<td><?= $row->id_institucion ?></td>
		</tr>
	<?php endforeach ?>
</table>