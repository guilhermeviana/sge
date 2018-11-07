<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */

$this->title = 'Atualizar Cliente: ' . $model->NOME;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NOME, 'url' => ['view', 'id' => $model->REGISTRO]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="cliente-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
