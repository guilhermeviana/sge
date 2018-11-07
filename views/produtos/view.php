<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos */

$this->title = $model->PRODUTO;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i> Informações </h3>
        
    </div>
    <div class="row" style="padding: 15px">
        <div class="col-md-12">
<div class="produtos-view">
    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->REGISTRO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->REGISTRO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Deseja realmente remover esse item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
        <?=
                DetailView::widget([
                    'model' => $model,
                    'condensed' => true,
                    'bordered' => true,
                    'striped' => false,
                    'attributes' => [
                        [
                            'group' => true,
                            'label' => 'Dados do Produto:',
                            'rowOptions' => ['class' => 'info']
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Produto',
                                    'attribute' => 'PRODUTO',
                                    'valueColOptions' => ['style' => 'width:40%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                                  [
                                    'label' => 'Tipo do Produto',
                                    'attribute' => 'TIPO_PRODUTO',
                                                                        'value' => $model->tIPOPRODUTO->DESCRICAO,

                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                    'valueColOptions' => ['style' => 'width:40%'],
                                ],
                          
                            ],
                        ],
                      
                        [
                            'columns' => [
                                [
                                    'label' => 'Parceiro',
                                    'attribute' => 'PARCEIRO',  
                                    'value' => $model->parceiro->RAZAO_SOCIAL,
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],

                                 [   
                                    'label' => 'Validade',
                                    'attribute' => 'VALIDADE',
                                                                        'format' => DateControl::FORMAT_DATE,

                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                    'valueColOptions' => ['style' => 'width:5%'],
                                ],

                                [   
                                    'label' => 'IDADE LIMITE DE COMISSIONAMENTO',
                                    'attribute' => 'IDADE_LIMITE_COMISSIONAMENTO',
                                    'labelColOptions' => ['style' => 'width: 10%; text-align: left; '],
                                    'valueColOptions' => ['style' => 'width:5%'],
                                ],
                           
                           
                          
                           
                             ],
                        ],            
                        [
                            'columns' => [
                                [
                                    'label' => 'Percentual de REFIN',
                                    'attribute' => 'PERCENTUAL_REFIN', 
                                    'value' => 'R$ '. number_format($model->PERCENTUAL_REFIN, 2, ',', '.'),
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                
                                  [
                                    'label' => 'Base Comissão do Produto',
                                    'attribute' => 'BASE_COMISSAO_PRODUTO',
                                      'value' => 'R$ '. number_format($model->BASE_COMISSAO_PRODUTO, 2, ',', '.'),
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                    'valueColOptions' => ['style' => 'width:2%'],
                                ],
                                [   
                                    'label' => 'Valor range',
                                    'attribute' => 'VALOR_RANGE',
                                    'value' => 'R$ '. number_format($model->VALOR_RANGE, 2, ',', '.'),
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                    'valueColOptions' => ['style' => 'width:5%'],
                                ],
                                                        

                             ],
                        ],        

                        [
                            'columns' => [
                          
                                [
                                    'label' => 'Observação',
                                    'attribute' => 'OBS',                                    
                                    'valueColOptions' => ['style' => 'width:90%'],
                                    'labelColOptions' => ['style' => 'width: 10%; text-align: left; '],
                                ],
                                 
                                                             

                             ],
                        ],                           
                   
                    ],
                ])
                ?>
</div></div></div></div>
