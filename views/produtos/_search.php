<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i> Buscar Produto </h3>

    </div>
    <div class="row" style="padding: 15px">
        <div class="col-md-12">

<div class="produtos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>
    
          <div class="row">
                    
              
                    <div class="col-md-4">
                               <?=
                $form->field($model, 'REGISTRO')->widget(kartik\widgets\Select2::classname(), [
                    'data' => \yii\helpers\ArrayHelper::map(app\models\Produtos::find()->where(['EXCLUIDO' => 0])->orderBy('produto asc')->asArray()->all(), 'REGISTRO', 'PRODUTO'),
                    //'language' => 'de',
                    'options' => ['placeholder' => 'Selecione um produto'],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'highlight' => true,
                    ],
                ]);
                ?>
                        
                    </div>
              <div class="col-md-4">
                   <?=
                $form->field($model, 'PARCEIRO')->widget(kartik\widgets\Select2::classname(), [
                    'data' => \yii\helpers\ArrayHelper::map(app\models\Parceiro::find()->where(['EXCLUIDO' => 0])->orderBy('RAZAO_SOCIAL asc')->asArray()->all(), 'REGISTRO', 'RAZAO_SOCIAL'),
                    //'language' => 'de',
                    'options' => ['placeholder' => 'Selecione um parceiro'],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'highlight' => true,
                    ],
                ]);
                ?>

                    </div>
               
    
   
                    
              
                    <div class="col-md-4">
                               <?=
                $form->field($model, 'TIPO_PRODUTO')->widget(kartik\widgets\Select2::classname(), [
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
          
                </div>

    





    <?php // echo $form->field($model, 'FLEX') ?>

    <?php // echo $form->field($model, 'PRODUTO_SEGURO') ?>

    <?php // echo $form->field($model, 'VALOR_PREMIO') ?>

    <?php // echo $form->field($model, 'VALOR_PARCELA') ?>

    <?php // echo $form->field($model, 'TIPOPAGAMENTO') ?>

    <?php // echo $form->field($model, 'TIPOJUROS') ?>

    <?php // echo $form->field($model, 'VALORJUROS') ?>

    <?php // echo $form->field($model, 'OBS') ?>

    <?php // echo $form->field($model, 'UTILIZA_TAC_DEDUTIVA') ?>

    <?php // echo $form->field($model, 'TAC') ?>

    <?php // echo $form->field($model, 'LIMITETAC') ?>

    <?php // echo $form->field($model, 'TACFIXO') ?>

    <?php // echo $form->field($model, 'INATIVO') ?>

    <?php // echo $form->field($model, 'VALIDADE') ?>

    <?php // echo $form->field($model, 'IDADE_LIMITE_COMISSIONAMENTO') ?>

    <?php // echo $form->field($model, 'PERCENTUAL_REFIN') ?>

    <?php // echo $form->field($model, 'PRODUTO_CARTAO') ?>

    <?php // echo $form->field($model, 'CATEGORIA_CARTAO') ?>

    <?php // echo $form->field($model, 'EXCLUIDO') ?>

    <?php // echo $form->field($model, 'LIMITETACMENOR') ?>

    <?php // echo $form->field($model, 'TACFIXOMENOR') ?>

    <?php // echo $form->field($model, 'COMISSAO_REFIN_RECUPERA') ?>

    <?php // echo $form->field($model, 'BASE_COMISSAO_PRODUTO') ?>

    <?php // echo $form->field($model, 'VALOR_RANGE') ?>

    <?php // echo $form->field($model, 'PONDERACAO') ?>

    <?php // echo $form->field($model, 'LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA') ?>

    <?php // echo $form->field($model, 'ATUALIZACAO') ?>

    <?php // echo $form->field($model, 'EMITE_BORDERO') ?>

    <?php // echo $form->field($model, 'STATUS_PADRAO') ?>

    <?php // echo $form->field($model, 'FILIAL_INTEG_FINANCEIRO') ?>

    <?php // echo $form->field($model, 'SCE_SYNC') ?>

             <div class="form-group">
                    <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Limpar', ['index'], ['class' => 'btn btn-default']) ?>    </div>

    <?php ActiveForm::end(); ?>

</div>
            </div>
</div>
</div>

