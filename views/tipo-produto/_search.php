<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipoProdutoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-produto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'REGISTRO') ?>

    <?= $form->field($model, 'DESCRICAO') ?>

    <?= $form->field($model, 'REFERENCIA') ?>

    <?= $form->field($model, 'OBSERVACAO') ?>

    <?= $form->field($model, 'EXCLUIDO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
