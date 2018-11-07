<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoProduto */

$this->title = 'Alterar Tipo Produto: ' . $model->DESCRICAO;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DESCRICAO, 'url' => ['view', 'id' => $model->REGISTRO]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="tipo-produto-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
