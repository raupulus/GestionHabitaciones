<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReservasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'habitaciones_id') ?>

    <?= $form->field($model, 'fecha_entrada') ?>

    <?= $form->field($model, 'fecha_salida') ?>

    <?= $form->field($model, 'clientes_id') ?>

    <?= $form->field($model, 'precio') ?>

    <?php // echo $form->field($model, 'observacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
