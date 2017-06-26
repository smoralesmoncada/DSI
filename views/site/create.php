<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Crear Institucion</h1>
<h3><?= $msg ?></h3>
<?php $form = ActiveForm::begin([
    "method" => "post",
 'enableClientValidation' => true,
]);
?>
<div class="form-group">
 <?= $form->field($model, "Nombre Institución")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "ID Tipo Institución")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "ID Institución")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "ID País")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "Vigente")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "ID Internacional")->input("text") ?>   
</div>


<div class="form-group">
 <?= $form->field($model, "RUT")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "Razón Social")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "Dirección")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "Telefono")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "Email")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "Llink")->input("text") ?>   
</div>



<?= Html::submitButton("Crear", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>
