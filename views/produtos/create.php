<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Produtos */

$this->title = 'Adicionar Produto';
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
