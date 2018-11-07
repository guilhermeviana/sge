<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Parceiro */

$this->title = $model->RAZAO_SOCIAL;
$this->params['breadcrumbs'][] = ['label' => 'Parceiros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i> Informações </h3>
        
    </div>
    <div class="row" style="padding: 15px">
        <div class="col-md-12">
<div class="parceiro-view">

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
                            'label' => 'Dados do Parceiro:',
                            'rowOptions' => ['class' => 'info']
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Razão Social',
                                    'attribute' => 'RAZAO_SOCIAL',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Abreviação',
                                    'attribute' => 'ABREVIACAO',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'CPF/CNPJ',
                                    'attribute' => 'CPFCNPJ',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                         
                               
                            ],
                        ],               

                        [
                            'columns' => [
                                [
                                    'label' => 'Telefone Comercial',
                                    'attribute' => 'TELEFONE_COM',
                                    'valueColOptions' => ['style' => 'width: 12%'],
                                    'labelColOptions' => ['style' => 'width: 14.8%; text-align: left; '],
                                ],
                           
                            
                                [
                                    'label' => 'E-mail',
                                    'attribute' => 'CONTATO',
                                    'valueColOptions' => ['style' => 'width: 20%'],
                                    'labelColwOptions' => ['style' => 'width: 0.2%;'],
                                ],
                               
                            ],
                        ],    

                        [
                            'columns' => [
                                [
                                    'label' => 'Endereço',
                                    'attribute' => 'ENDERECO',
                                    'value' => $model->ENDERECO . ', ' . $model->NUMERO . ' - ' . $model->BAIRRO . '. ' . $model->CIDADE . ' - ' . $model->UF,
                                  
                                    'valueColOptions' => ['style' => 'width: 40%'],
                                    'labelColOptions' => ['style' => 'width: 4%; text-align: left; '],
                                ],
                             
                               
                             
                                [
                                    'label' => 'Cidade',
                                    'attribute' => 'CIDADE',
                                    'value' => $model->CIDADE . '-' . $model->UF,
                                    'valueColOptions' => ['style' => 'width: 20%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                           
                                [
                                    'label' => 'CEP',
                                    'attribute' => 'CEP',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColwOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                               
                            ],
                        ],  

                     

                                            
                   
                    ],
                ])
                ?>
</div></div></div></div>