<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParceiroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parceiro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'REGISTRO') ?>

    <?= $form->field($model, 'RAZAO_SOCIAL') ?>

    <?= $form->field($model, 'ABREVIACAO') ?>

    <?= $form->field($model, 'CPFCNPJ') ?>

    <?= $form->field($model, 'IESTADUAL') ?>

    <?php // echo $form->field($model, 'TELEFONE_COM') ?>

    <?php // echo $form->field($model, 'TELEFONE_FAX') ?>

    <?php // echo $form->field($model, 'TELEFONE_CON') ?>

    <?php // echo $form->field($model, 'CONTATO') ?>

    <?php // echo $form->field($model, 'ENDERECO') ?>

    <?php // echo $form->field($model, 'BAIRRO') ?>

    <?php // echo $form->field($model, 'CIDADE') ?>

    <?php // echo $form->field($model, 'UF') ?>

    <?php // echo $form->field($model, 'CEP') ?>

    <?php // echo $form->field($model, 'OBSERVACAO') ?>

    <?php // echo $form->field($model, 'LOGOTIPO') ?>

    <?php // echo $form->field($model, 'EMPRESA') ?>

    <?php // echo $form->field($model, 'ALERTA_RECOMPRAS') ?>

    <?php // echo $form->field($model, 'PLANO_CONTAS') ?>

    <?php // echo $form->field($model, 'FORCA_DIG_NUM_CONTRATO') ?>

    <?php // echo $form->field($model, 'NUM_CARACTERES') ?>

    <?php // echo $form->field($model, 'CONTA_TRANSFERENCIA_COMISSAO') ?>

    <?php // echo $form->field($model, 'EMAIL_COMERCIAL') ?>

    <?php // echo $form->field($model, 'EMAIL_FISCAL') ?>

    <?php // echo $form->field($model, 'EMAIL_COMISSIONAMENTO') ?>

    <?php // echo $form->field($model, 'EXCLUIDO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
