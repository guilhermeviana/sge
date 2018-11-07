<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parceiro */

$this->title = 'Atualizar Parceiro: ' . $model->RAZAO_SOCIAL;
$this->params['breadcrumbs'][] = ['label' => 'Parceiros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->REGISTRO, 'url' => ['view', 'id' => $model->REGISTRO]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="parceiro-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
