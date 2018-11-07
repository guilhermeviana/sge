<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoProduto */

$this->title = 'Novo Tipo Produto';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-produto-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
