<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TipoProduto */

$this->title = $model->DESCRICAO;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i> Informações </h3>
        
    </div>
    <div class="row" style="padding: 15px">
        <div class="col-md-12">
            <div class="alunos-view">





                <?=
                DetailView::widget([
                    'model' => $model,
                    'condensed' => true,
                    'bordered' => true,
                    'striped' => false,
                    'attributes' => [
                        [
                            'group' => true,
                            'label' => 'Dados do tipo de produto:',
                            'rowOptions' => ['class' => 'info']
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Descrição',
                                    'attribute' => 'DESCRICAO',
                                    'valueColOptions' => ['style' => 'width:40%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Referência',

                                    'attribute' => 'REFERENCIA',
                                    //'value' => 'rg',//$matricula->oferta->turma->nome,
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                    'valueColOptions' => ['style' => 'width:40%'],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Observação',
                                    'attribute' => 'OBSERVACAO',                                    
                                    'valueColOptions' => ['style' => 'width:85%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                            ],
                        ],                        
                   
                    ],
                ])
                ?>
                <p>
                <?= Html::a('Voltar', ['index'], ['class' => 'btn btn-warning', 'style' => 'margin-right:20px']) ?>
                <?= Html::a('Alterar', ['update', 'id' => $model->REGISTRO], ['class' => 'btn btn-primary']) ?>
                </p>
            </div>
        </div>
    </div>
</div>


