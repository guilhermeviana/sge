<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Parceiro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-cubes"></i> Dados do Parceiro</h3>
    </div>
    <div class="box-body">
        <div  class="panel-group collapse in">
            <div class="parceiro-form">
                <?php $form = ActiveForm::begin(); ?>
                <div  class="panel panel-default">
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Informações Gerais</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-6">
                                <?= $form->field($model, 'RAZAO_SOCIAL')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'ABREVIACAO')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'CPFCNPJ')->textInput(['maxlength' => true]) ?>
                            </div>

                            <div class="col-md-3">
                                <?= $form->field($model, 'TELEFONE_COM')->widget(MaskedInput::className(), ['mask' => '(99)9999-9999']) ?>

                            </div>
                            
                           
                            <div class="col-md-3">
                                <?= $form->field($model, 'CONTATO')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'ENDERECO')->textInput(['maxlength' => true]) ?>
                            </div>
                             <div class="col-md-2">
                                <?= $form->field($model, 'NUMERO')->input(['number']) ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'COMPLEMENTO')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'BAIRRO')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'CIDADE')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'UF')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'CEP')->widget(MaskedInput::className(), ['mask' => '99999-999']) ?>
                            </div>


                            <div class="col-md-12">
                                <?= $form->field($model, 'OBSERVACAO')->textarea(['rows' => 6]) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
