<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Parceiro */

$this->title = 'Adicionar Parceiro';
$this->params['breadcrumbs'][] = ['label' => 'Parceiros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parceiro-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
