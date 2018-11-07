<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Emprestimo */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-cubes"></i> Dados do Empréstimo</h3>
    </div>
    <div class="box-body">
        <div  class="panel-group collapse in">
            <div class="emprestimo-form">

<?php $form = ActiveForm::begin(); ?>

                <div class="row">

                    <div class="col-md-6">

<?php
$data = \app\models\Produtos::find()->select('produtos.REGISTRO, produtos.PRODUTO, produtos.PARCEIRO, parceiro.RAZAO_SOCIAL')
        ->distinct(true)
        ->leftJoin('parceiro', 'produtos.PARCEIRO = parceiro.REGISTRO')
        ->orderBy('produtos.PRODUTO ASC')
        ->where('produtos.EXCLUIDO = 0')
        ->asArray()
        ->all();


?>





<?=
$form->field($model, 'PRODUTO')->widget(kartik\widgets\Select2::classname(), [
    'data' => \yii\helpers\ArrayHelper::map($data, 'REGISTRO', 'PRODUTO','RAZAO_SOCIAL'),
    //\yii\helpers\ArrayHelper::map(app\models\Produtos::find()->where(['EXCLUIDO' => 0])->orderBy('produto asc')->asArray()->all(), 'REGISTRO', 'PRODUTO'),
    //'language' => 'de',
    'disabled' => false,
    'options' => ['placeholder' => 'Selecione um produto'],
    'pluginOptions' => [
        'allowClear' => true,
        'highlight' => true,
    ],
]);
?>
                    </div> 
                    <div class="col-md-6">
                        <?= $form->field($model, 'LOJA')->dropDownList(\yii\helpers\ArrayHelper::map(app\models\Empresa::find()->asArray()->all(), 'REGISTRO', 'RAZAO_SOCIAL')) ?>
                    </div>  


                </div>



                <div class="row">


                    <div class="col-md-6">
<?php
if (Yii::$app->request->get('id')) {
    $disable = true;
} else {
    $disable = false;
}
echo $form->field($model, 'CLIENTE')->widget(kartik\widgets\Select2::classname(), [
    'data' => \yii\helpers\ArrayHelper::map(app\models\Cliente::find()->where(['EXCLUIDO' => 0])->orderBy('NOME asc')->asArray()->all(), 'REGISTRO', 'NOME'),
    //'language' => 'de',
    'disabled' => $disable,
    'options' => ['placeholder' => 'Selecione um cliente', $disable],
    'pluginOptions' => [
        'allowClear' => true,
        'highlight' => true,
    ],
]);
?>

                    </div> 
                    <div class="col-md-6">
                        <?= $form->field($model, 'CATEGORIA')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Categoria::find()->where('EXCLUIDO = 0')->asArray()->all(), 'REGISTRO', 'DESCRICAO')) ?>
                    </div> 
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <?=
                        $form->field($model, 'VALOR_BRUTO')->widget(\kartik\money\MaskMoney::className(), ['name' => 'amount_brazil',
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
                        $form->field($model, 'SALDOANTERIOR')->widget(\kartik\money\MaskMoney::className(), ['name' => 'amount_brazil',
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
                        $form->field($model, 'VALOR')->widget(\kartik\money\MaskMoney::className(), ['name' => 'amount_brazil',
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
                    <div class="col-md-2">
<?= $form->field($model, 'PARCELAS')->input('number') ?>
                    </div>   
                    <div class="col-md-2">
<?=
$form->field($model, 'VALORPARCELA')->widget(\kartik\money\MaskMoney::className(), ['name' => 'amount_brazil',
    'value' => 0.01,
    'pluginOptions' => [
        'prefix' => 'R$ ',
        'thousands' => '.',
        'decimal' => ',',
        'precision' => 2
    ],])
?>
                    </div> 
                    <div class="col-md-3">

                        <?=
                        $form->field($model, 'DATA')->widget(DateControl::class, [
                            'widgetOptions' => [
                            ],
                            'type' => DateControl::FORMAT_DATE,
                        ])
                        ?>
                    </div>   
                    <div class="col-md-3">
                        <?=
                        $form->field($model, 'DATAINICIO')->widget(DateControl::class, [
                            'type' => DateControl::FORMAT_DATE,
                        ])
                        ?>
                    </div> 
                    <div class="col-md-2">
<?= $form->field($model, 'STATUS')->dropDownList(['ATIVO' => 'ATIVO', 'QUITADO' => 'QUITADO', 'CANCELADO' => 'CANCELADO']) ?>
                    </div> 




                </div>

                <div class="row">

                    <div class="col-md-12">
                        <?= $form->field($model, 'OBS')->textarea() ?>

                    </div>
                </div>


                <div class="form-group">
<?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
                </div>

                        <?php ActiveForm::end(); ?>

            </div></div></div></div>




