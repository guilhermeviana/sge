<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\PDF_activate_item(pdfdoc, id)eForm */
?>
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-cubes"></i> Dados do Produto</h3>
    </div>
    <div class="box-body">
        <div  class="panel-group collapse in">
            <div class="produtos-form">
                <?php $form = ActiveForm::begin(); ?>
                <div  class="panel panel-default">
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Informações Gerais</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-6">

                                <?php
                                echo $form->field($model, 'PARCEIRO')->widget(kartik\widgets\Select2::classname(), [
                                    'data' => \yii\helpers\ArrayHelper::map(app\models\Parceiro::find()->where(['EXCLUIDO' => 0])->orderBy('razao_social asc')->asArray()->all(), 'REGISTRO', 'RAZAO_SOCIAL'),
                                    //'language' => 'de',
                                    'options' => ['placeholder' => 'Selecione um parceiro'],
                                    'pluginOptions' => [
                                        'allowClear' => true,
                                        'highlight' => true,
                                    ],
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6">

                                <?php
                                echo $form->field($model, 'TIPO_PRODUTO')->widget(kartik\widgets\Select2::classname(), [
                                    'data' => \yii\helpers\ArrayHelper::map(app\models\TipoProduto::find()->where(['EXCLUIDO' => 0])->orderBy('descricao asc')->asArray()->all(), 'REGISTRO', 'DESCRICAO'),
                                    //'language' => 'de',
                                    'options' => ['placeholder' => 'Selecione um tipo de produto'],
                                    'pluginOptions' => [
                                        'allowClear' => true,
                                        'highlight' => true,
                                    ],
                                ]);
                                ?>
                            </div>
                            <div class="col-md-12">
<?= $form->field($model, 'PRODUTO')->textInput(['maxlength' => true]) ?>
                            </div>










                            <div class="col-md-4">
<?=
$form->field($model, 'VALIDADE')->widget(DateControl::class, [
    'widgetOptions' => [
    ],
    'type' => DateControl::FORMAT_DATE,
])
?>
                            </div>
                            <div class="col-md-4">
<?= $form->field($model, 'IDADE_LIMITE_COMISSIONAMENTO')->input('number') ?>
                            </div>
                            <div class="col-md-4">
<?=
$form->field($model, 'PERCENTUAL_REFIN')->widget(\kartik\money\MaskMoney::className(), ['name' => 'amount_brazil',
    'value' => 0.01,
    'pluginOptions' => [
        'prefix' => 'R$ ',
        'thousands' => '.',
        'decimal' => ',',
        'precision' => 2
    ],])
?>
                            </div>
                            
                        </div>
                        
                         <div class="row">




                            <div class="col-md-4">
                                <?=
                                $form->field($model, 'BASE_COMISSAO_PRODUTO')->widget(\kartik\money\MaskMoney::className(), ['name' => 'amount_brazil',
                                    'value' => 0.01,
                                    'pluginOptions' => [
                                        'prefix' => 'R$ ',
                                        'thousands' => '.',
                                        'decimal' => ',',
                                        'precision' => 2
                                    ],])
                                ?>
                            </div>
                            <div class="col-md-4">
                                <?=
                                $form->field($model, 'VALOR_RANGE')->widget(\kartik\money\MaskMoney::className(), ['name' => 'amount_brazil',
                                    'value' => 0.01,
                                    'pluginOptions' => [
                                        'prefix' => 'R$ ',
                                        'thousands' => '.',
                                        'decimal' => ',',
                                        'precision' => 2
                                    ],])
                                ?>
                            </div>
                            
                            <div class="col-md-4">
                                <?=
                                $form->field($model, 'PONDERACAO')->widget(\kartik\money\MaskMoney::className(), ['name' => 'amount_brazil',
                                    'value' => 0.01,
                                    'pluginOptions' => [
                                        'prefix' => 'R$ ',
                                        'thousands' => '.',
                                        'decimal' => ',',
                                        'precision' => 2
                                    ],])
                                ?>
                            </div>





                            <div class="col-md-12">
<?= $form->field($model, 'OBS')->textarea(['rows' => 6]) ?>
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
