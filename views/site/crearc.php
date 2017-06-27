<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	?>

	<h1>Crear Coordinador</h1>
	<h3><?= $msg ?></h3>
	<?php 
		$form = ActiveForm::begin(["method" => "post",'enableClientValidation' => true,]);
	?>
	<div class="form-group">
		<?= $form->field($model, "id_coordinador_convenio")->input("text") ?>   
	</div>

	<div class="form-group">
		<?= $form->field($model, "rut_coordinador_convenio")->input("text") ?>   
	</div>

	<div class="form-group">
		<?= $form->field($model, "nombre_coordinador_convenio")->input("text") ?>   
	</div>

	<div class="form-group">
		<?= $form->field($model, "dv_coordinador_convenio")->input("text") ?>   
	</div>

	<div class="form-group">
		<?= $form->field($model, "fecha_inicio")->input("date") ?>   
	</div>

	<div class="form-group">
		<?= $form->field($model, "fecha_fin")->input("date") ?>   
	</div>

	<div class="form-group">
		<?= $form->field($model, "vigente")->input("text") ?>   
	</div>

	<div class="form-group">
		<?= $form->field($model, "esexterno")->input("text") ?>   
	</div>

	<div class="form-group">
		<?= $form->field($model, "unidad_academica")->input("text") ?>   
	</div>

	<div class="form-group">
		<?= $form->field($model, "email")->input("text") ?>   
	</div>

	<div class="form-group">
		<?= $form->field($model, "id_institucion")->input("text") ?>   
	</div>

	<?= Html::submitButton("Crear", ["class" => "btn btn-primary"]) ?>

	<?php $form->end() ?>