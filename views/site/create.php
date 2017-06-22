<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<a href="<?= Url::toRoute("site/view") ?>">Ver estado de convenios </a>

<h1> Crear Estado Convenio</h1>
<h3> <?= $msg ?> </h3>

<?php $form = ActiveForm::begin([
	"method" => "post",
	"enableClientValidation" => true,
	]);
?>

<div class="form-group">
<?= $form->field($model, "ID")->input("text") ?>
</div>

<div class="form-group">
<?= $form->field($model, "EstadoConvenio")->input("text") ?>
</div>

<div class="form-group">
<?= $form->field($model, "Descripcion")->input("text") ?>
</div>

<div class="form-group">
<?= $form->field($model, "Vigente")->input("text") ?>
</div>

<?= Html::submitButton("Crear", ["class" => "btn btn-primary"]) ?>


<?php $form->end() ?>