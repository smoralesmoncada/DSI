<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<a href="<?= Url::toRoute("site/create") ?>"> Ingresar estado convenio </a>


<?php $f = ActiveForm::begin([
	"method" => "get",
	"action" => Url::toRoute("site/view"),
	"enableClientValidation" => true,
	]);
?>

<div class="form-group">
<?= $f->field($form,"q")->input("search") ?>
</div>

<?=  Html::submitButton("Buscar", ["class" => "btn btn-primary"] ) ?>

<?php $f->end() ?>

<h3> <?= $search ?> </h3>


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