<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Emprestimo */

$this->title = 'Atualizar Emprestimo';
$this->params['breadcrumbs'][] = ['label' => 'Emprestimos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->REGISTRO, 'url' => ['view', 'id' => $model->REGISTRO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emprestimo-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
