<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<h1>Ingresar estado</h1>
<h3><?= $mensaje ?></h3>

<?= Html::beginForm(
	Url::toRoute("site/request"),
	"get",
	['class' => 'form-inline']
	);
?>

<div class="form-group">
	
<?= Html::label("Introduce algo","nombre")?>
<?= Html::textInput("nombre",null, ["class" => "form-control"]) ?>
</div>

<?= Html::submitInput("Enviar algo",["class" => "btn-primary"]) ?>

<?= Html::endForm() ?>