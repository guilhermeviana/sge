<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipoProduto */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-cubes"></i> Dados do Tipo de Produto</h3>
    </div>
    <div class="box-body">
        <div  class="panel-group collapse in">


            <div class="tipo-produto-form">

                <?php $form = ActiveForm::begin(); ?>

                <div class="row">

                    <div class="col-md-6">
                        <?= $form->field($model, 'DESCRICAO')->textInput(['maxlength' => true]) ?>

                    </div>

           

                    <div class="col-md-6">
                        <?= $form->field($model, 'REFERENCIA')->textInput(['maxlength' => true]) ?>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <?= $form->field($model, 'OBSERVACAO')->textarea(['rows' => 6]) ?>

                    </div>

                </div>









            </div>
        </div>
        <div class="box-footer text-right"> 
            <?= Html::a('Voltar', ['index'], ['class' => 'btn btn-warning']) ?>
            <?= Html::submitButton('Salvar', ['class' => 'btn btn-success', 'style' => 'margin-left: 20px']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
