<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Emprestimo */

$this->title = 'Visualizar empréstimo';
$this->params['breadcrumbs'][] = ['label' => 'Emprestimos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i> Informações </h3>

    </div>
    <div class="row" style="padding: 15px">
        <div class="col-md-12">
            <div class="emprestimo-view">





                <?=
                DetailView::widget([
                    'model' => $model,
                    'condensed' => true,
                    'bordered' => true,
                    'striped' => false,
                    'enableEditMode' => true,
                    'attributes' => [
                        [
                            'group' => true,
                            'label' => 'Informações do empréstimo:',
                            'rowOptions' => ['class' => 'info']
                        ],
                        [ 
                            'columns' => [
                                [
                                    'label' => 'Produto',
                                    'attribute' => 'PRODUTO',
                                    'value' => $model->produto->PRODUTO,
                                    'valueColOptions' => ['style' => 'width: 85%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                            
                            ]
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Cliente',
                                    'attribute' =>
                                    'CLIENTE',
                                    'value' => $model->cliente->NOME,
                                    'valueColOptions' => ['style' => 'width: 35%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Categoria',
                                    'attribute' => 'CATEGORIA',
                                    'value' => $model->categoria->DESCRICAO,
                                    'valueColOptions' => ['style' => 'width: 35%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ]
                            ]
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Valor LIQ',
                                    'attribute' => 'VALOR',
                                     //$a = money_format('%.2n', $model->VALOR);
                                    'value' => 'R$ ' . number_format($model->VALOR, 2, ',', '.'),                  
                                    'valueColOptions' => ['style' => 'width: 20%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Saldo anterior',
                                    'attribute' => 'SALDOANTERIOR',
                                    'value' => 'R$ ' . number_format($model->SALDOANTERIOR, 2, ',', '.'), 
                                    'valueColOptions' => ['style' => 'width: 20%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Valor bruto',
                                    'attribute' => 'VALOR_BRUTO',
                                    'value' => 'R$ ' . number_format($model->VALOR_BRUTO, 2, ',', '.'),
                                    'valueColOptions' => ['style' => 'width: 20%'],
                                    'labelColOptions' => ['style' => 'width: 14%; text-align: left; '],
                                ],
                            ]
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Parcelas',
                                    'attribute' => 'PARCELAS',
                                    'value' => $model->PARCELAS,
                                    'valueColOptions' => ['style' => 'width: 35%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Valor da parcela',
                                    'attribute' => 'VALORPARCELA',
                                    'value' => 'R$ ' . number_format($model->VALORPARCELA, 2, ',', '.'),
                                    'valueColOptions' => ['style' => 'width: 35%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ]
                            ]
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Data',
                                    'attribute' => 'DATA',
                                    'value' => $model->DATA,
                                    'format' => DateControl::FORMAT_DATE,
                                    'valueColOptions' => ['style' => 'width: 20%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Data Início',
                                    'attribute' => 'DATAINICIO',
                                    'value' => $model->DATAINICIO,
                                    'format' => DateControl::FORMAT_DATE,
                                    'valueColOptions' => ['style' => 'width: 20%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                                [
                                    'label' => 'STATUS',
                                    'attribute' => 'STATUS',
                                    'value' => $model->STATUS,
                                    'valueColOptions' => ['style' => 'width: 20%'],
                                    'labelColOptions' => ['style' => 'width: 14%; text-align: left; '],
                                ],
                            ]
                        ],
                         [
                            'columns' => [
                                [
                                    'label' => 'Observação',
                                    'attribute' => 'OBS',
                                    'value' => $model->OBS,               
                                    'valueColOptions' => ['style' => 'width: 85%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                               
                                
                            ]
                        ],
                       
                    ],
                ])
                ?>
                <p>
                <?= Html::a('Alterar', ['update', 'id' => $model->REGISTRO], ['class' => 'btn btn-primary']) ?>
                <?=
                Html::a('Apagar', ['delete', 'id' => $model->REGISTRO], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Deseja realmente remover o registro?',
                        'method' => 'post',
                    ],
                ])
                ?>
                </p>



            </div></div></div></div>
