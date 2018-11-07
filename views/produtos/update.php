<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos */

$this->title = 'Atualizar Produto: ' . $model->PRODUTO;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->REGISTRO, 'url' => ['view', 'id' => $model->REGISTRO]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="produtos-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
