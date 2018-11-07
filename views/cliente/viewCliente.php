<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
?>


<?php
Modal::begin([
    'options' => [
        'tabindex' => false // important for Select2 to work properly
    ],
    'header' => '<div id="titulo"></div>',
    'id' => 'modal',
    'size' => 'modal-lg',
]);
echo "<div id='modalContent'></div>";
Modal::end();
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i> Informações </h3>

    </div>
    <div class="row" style="padding: 15px">
        <div class="col-md-12">

            <div class="cliente-view">

                <div style="margin-bottom: 20px">
                    <?= Html::a('Atualizar', ['update', 'id' => $model->REGISTRO], ['class' => 'btn btn-primary']) ?>
                    <?=
                    Html::a('Remover', ['delete', 'id' => $model->REGISTRO], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Deseja realmente remover esse item?',
                            'method' => 'post',
                        ],
                    ])
                    ?>

                    <?=
                    Html::button('Novo Empréstimo', ['value' => Url::to('../emprestimo/create?id=' . $model->REGISTRO), 'class' => 'btn btn-success showModalButton', 'titulo-modal' => '<i class="fa fa-check-square"></i> Novo <small>empréstimo</small>',
                    ]);
                    ?>
                </div>


                <?php
                
                
                    switch ($model->ESCOLARIDADE):
                        
                        case 0: 
                            $model->ESCOLARIDADE ='NÍVEL BÁSICO';
                            break;
                        case 1: 
                            $model->ESCOLARIDADE ='NÍVEL MÉDIO INCOMPLETO';
                            break;
                        case 2: 
                            $model->ESCOLARIDADE ='NÍVEL MÉDIO COMPLETO';
                            break;
                        case 3:
                            $model->ESCOLARIDADE ='NÍVEL SUPERIOR INCOMPLETO';
                            break;
                        case 4: 
                            $model->ESCOLARIDADE = 'NÍVEL SUPERIOR COMPLETO';
                            break;
                        case 6:
                            $model->ESCOLARIDADE = 'PÓS GRADUADO';
                            break;
                        case 7: 
                            $model->ESCOLARIDADE ='MESTRADO';
                            break;
                        case 9: 
                            $model->ESCOLARIDADE ='DOUTORADO';
                            break;
                        case 8:
                            $model->ESCOLARIDADE ='ANALFABETO';
                            break;

                        
                    endswitch;
                
                    switch ($model->TIPO_IDENTIDADE):
                        case 0:
                            $model->TIPO_IDENTIDADE = 'RG';
                            break;
                        case 1:
                            $model->TIPO_IDENTIDADE = 'CNH';
                            break;
                        case 2:
                            $model->TIPO_IDENTIDADE ='CTPS';
                            break;
                        case 3: 
                            $model->TIPO_IDENTIDADE = 'INSC. ESTADUAL';
                            break;
                        case 4:
                            $model->TIPO_IDENTIDADE ='CRM';
                            break;
                        case 5:
                            $model->TIPO_IDENTIDADE = 'CRA';
                            break;
                        case 6:
                            $model->TIPO_IDENTIDADE = 'CRC';
                            break;
                        case 7: 
                            $model->TIPO_IDENTIDADE = 'CRO';
                            break;
                        case 8:
                            $model->TIPO_IDENTIDADE = 'ID-E';
                            break;
                        case 9: 
                            $model->TIPO_IDENTIDADE = 'ID-M';
                            break;
                        case 10:
                            $model->TIPO_IDENTIDADE ='ID-A';
                            break;
                        case 11: 
                            $model->TIPO_IDENTIDADE ='CRE';
                            break;
                        case 12:
                            $model->TIPO_IDENTIDADE = 'CIE';
                            break;
                        case 13: $model->TIPO_IDENTIDADE ='CFF';
                            break;
                        case 14: 
                            $model->TIPO_IDENTIDADE ='PASSAPORTE';
                            break;
                        case 15:
                            $model->TIPO_IDENTIDADE = 'CRF';
                            break;
                        case 16:
                            $model->TIPO_IDENTIDADE = 'OUTROS';
                            break;
     
                    endswitch;
              
                
                
                    switch ($model->ESTADO_CIVIL):
                        case 0: 
                            $model->ESTADO_CIVIL = 'Solteiro';
                            break;
                        case 1:
                            $model->ESTADO_CIVIL = 'Casado';
                            break;  
                        case 2:
                            $model->ESTADO_CIVIL = 'Divorciado';
                            break;
                        case 3:
                            $model->ESTADO_CIVIL = 'Viúvo';
                            break;
                        case 4: 
                            $model->ESTADO_CIVIL = 'Outros';
                            break;                                
                    endswitch;
                ?>


                <?=
                DetailView::widget([
                    'model' => $model,
                    'condensed' => true,
                    'bordered' => true,
                    'striped' => false,
                    'attributes' => [
                        [
                            'group' => true,
                            'label' => 'Informações Pessoais:',
                            'rowOptions' => ['class' => 'info']
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Nome',
                                    'attribute' => 'NOME',
                                    'valueColOptions' => ['style' => 'width: 30%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Nascimento',
                                    'attribute' => 'NASCIMENTO',
                                    'format' => DateControl::FORMAT_DATE,
                                    'valueColOptions' => ['style' => 'width: 25%'],
                                    'labelColOptions' => ['style' => 'width: 15%; text-align: left; '],
                                ],
                                [
                                    'label' => 'CPF/CNPJ',
                                    'attribute' => 'CPFCNPJ',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Tipo Identidade',
                                    'attribute' => 'TIPO_IDENTIDADE',
                                    'value' => $model->TIPO_IDENTIDADE, // == 0 ? 'RG' : '', $model->TIPO_IDENTIDADE == 1 ? 'CNH' : '', $model->TIPO_IDENTIDADE == 2 ? 'CTPS' : '', $model->TIPO_IDENTIDADE == 3 ? 'INSC. ESTADUAL' : '', $model->TIPO_IDENTIDADE == 4 ? 'CRM' : '', $model->TIPO_IDENTIDADE == 5 ? 'CRA' : '', $model->TIPO_IDENTIDADE == 6 ? 'CRC' : '', $model->TIPO_IDENTIDADE == 7 ? 'CRO' : '', $model->TIPO_IDENTIDADE == 8 ? 'ID-E' : '', $model->TIPO_IDENTIDADE == 9 ? 'ID-M' : '', $model->TIPO_IDENTIDADE == 10 ? 'ID-A' : '', $model->TIPO_IDENTIDADE == 11 ? 'CRE' : '', $model->TIPO_IDENTIDADE == 12 ? 'CIE' : '', $model->TIPO_IDENTIDADE == 13 ? 'CFF' : '', $model->TIPO_IDENTIDADE == 14 ? 'PASSAPORTE' : '', $model->TIPO_IDENTIDADE == 15 ? 'CRF' : '', $model->TIPO_IDENTIDADE == 16 ? 'OUTROS' : '',
                                    'valueColOptions' => ['style' => 'width: 11%'],
                                    'labelColOptions' => ['style' => 'width: 9.6%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Identidade',
                                    'attribute' => 'IDENTIDADE',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 8%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Sexo',
                                    'attribute' => 'SEXO',
                                    'value' => $model->SEXO ? 'Feminino' : 'Masculino',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Estado Cívil',
                                    'attribute' => 'ESTADO_CIVIL',
                                    'value' => $model->ESTADO_CIVIL,// == 0 ? $a = 'SOLTEIRO' : '', $model->ESTADO_CIVIL == 1 ? $a = 'CASADO' : '', $model->ESTADO_CIVIL == 2 ? $a = 'DIVORCIADO' : '', $model->ESTADO_CIVIL == 3 ? $a = 'VIÚVO' : '', $model->ESTADO_CIVIL == 4 ? $a = 'OUTROS' : '', $a ? $a : $a,
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 7%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Orgão Expedidor',
                                    'attribute' => 'ORGAO_EXP',
                                    'valueColOptions' => ['style' => 'width: 6%'],
                                    'labelColOptions' => ['style' => 'width: 7.1%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Data Expedição',
                                    'attribute' => 'DATA_EXPEDICAO',
                                    'format' => DateControl::FORMAT_DATE,
                                    'valueColOptions' => ['style' => 'width: 4%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Telefone Residencial',
                                    'attribute' => 'TELEFONE_RES',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Telefone Celular',
                                    'attribute' => 'TELEFONE_CEL',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'SIAPE',
                                    'attribute' => 'SIAPE',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Benefício',
                                    'attribute' => 'BENEFICIO',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'MASP',
                                    'attribute' => 'MASP',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Escolaridade',
                                    'attribute' => 'ESCOLARIDADE',
                                    'value' => $model->ESCOLARIDADE, ///== 0 ? 'NÍVEL BÁSICO' : $model->ESCOLARIDADE == 1 ? 'NÍVEL MÉDIO INCOMPLETO' : $model->ESCOLARIDADE == 2 ? 'NÍVEL MÉDIO COMPLETO' : $model->ESCOLARIDADE == 3 ? 'NÍVEL SUPERIOR INCOMPLETO' : $model->ESCOLARIDADE == 4 ? 'NÍVEL SUPERIOR COMPLETO' : $model->ESCOLARIDADE == 5 ? 'PÓS GRADUADO' : $model->ESCOLARIDADE == 6 ? 'MESTRADO' : $model->ESCOLARIDADE == 7 ? 'DOUTORADO' : $model->ESCOLARIDADE == 8 ? 'ANALFABETO' : '',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Endereço',
                                    'attribute' => 'ENDERECO',
                                    'valueColOptions' => ['style' => 'width: 15%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Bairro',
                                    'attribute' => 'BAIRRO',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Cidade',
                                    'attribute' => 'CIDADE',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'CEP',
                                    'attribute' => 'CEP',
                                    'valueColOptions' => ['style' => 'width: 2%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                                [
                                    'label' => 'UF',
                                    'attribute' => 'UF',
                                    'valueColOptions' => ['style' => 'width: 3%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Complemento',
                                    'attribute' => 'COMPLEMENTO',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Pai',
                                    'attribute' => 'PAI',
                                    'valueColOptions' => ['style' => 'width: 40%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Mãe',
                                    'attribute' => 'MAE',
                                    'valueColOptions' => ['style' => 'width: 40%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Cônjuge',
                                    'attribute' => 'CONJUGE',
                                    'valueColOptions' => ['style' => 'width: 20%'],
                                    'labelColOptions' => ['style' => 'width: 3%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Nacionalidade',
                                    'attribute' => 'NACIONALIDADE',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 3%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Naturalidade',
                                    'attribute' => 'NATURALIDADE',
                                    'valueColOptions' => ['style' => 'width: 15%'],
                                    'labelColOptions' => ['style' => 'width: 3%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Empresa',
                                    'attribute' => 'EMPRESA',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Cod',
                                    'attribute' => 'COD_ORGAO',
                                    'valueColOptions' => ['style' => 'width: 2%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Orgão',
                                    'attribute' => 'ORGAO',
                                    'valueColOptions' => ['style' => 'width: 15%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Endereço Comercial',
                                    'attribute' => 'ENDERECO_COM',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 10%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Número',
                                    'attribute' => 'NUMERO_COM',
                                    'valueColOptions' => ['style' => 'width: 6%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Bairro',
                                    'attribute' => 'BAIRRO_COM',
                                    'valueColOptions' => ['style' => 'width: 15%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Cidade',
                                    'attribute' => 'CIDADE_COM',
                                    'valueColOptions' => ['style' => 'width: 15%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Complemento Comercial',
                                    'attribute' => 'COMPLEMENTO_COM',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 10%; text-align: left; '],
                                ],
                                [
                                    'label' => 'CEP',
                                    'attribute' => 'CEP_COM',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                                [
                                    'label' => 'UF',
                                    'attribute' => 'UF_COM',
                                    'valueColOptions' => ['style' => 'width: 2%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Telefone Comercial',
                                    'attribute' => 'TELEFONE_COM',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 7%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'Data Pagamento',
                                    'attribute' => 'DATA_PAGAMENTO',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 7%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Salário',
                                    'attribute' => 'SALARIO',
                                    'value' => 'R$ ' . number_format($model->SALARIO, 2, ',', '.'),
                                    'valueColOptions' => ['style' => 'width: 3%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Cargo',
                                    'attribute' => 'CARGO',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 7%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Data Admissão',
                                    'attribute' => 'DATA_ADMISSAO',
                                    'format' => DateControl::FORMAT_DATE,
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 7%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'SPC',
                                    'attribute' => 'SPC',
                                    'value' => $model->SPC ? 'SIM' : 'NÃO',
                                    'valueColOptions' => ['style' => 'width: 2%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                                [
                                    'label' => 'SERASA',
                                    'attribute' => 'SERASA',
                                    'value' => $model->SERASA ? 'SIM' : 'NÃO',
                                    'valueColOptions' => ['style' => 'width: 2%'],
                                    'labelColOptions' => ['style' => 'width: 2%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Observações',
                                    'attribute' => 'OBSERVACAO',
                                    'valueColOptions' => ['style' => 'width: 60%'],
                                    'labelColOptions' => ['style' => 'width: 7%; text-align: left; '],
                                ],
                            ],
                        ],
                        [
                            'columns' => [
                                [
                                    'label' => 'BANCO',
                                    'attribute' => 'BANCO',
                                    'value' => $model->BANCO ? $model->banco->BANCO  : 'NÃO INFORMADO',
                                    'valueColOptions' => ['style' => 'width: 7%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Agência',
                                    'attribute' => 'AGENCIA',
                                    'valueColOptions' => ['style' => 'width: 5%'],
                                    'labelColOptions' => ['style' => 'width: 5%; text-align: left; '],
                                ],
                                [
                                    'label' => 'Conta',
                                    'attribute' => 'CONTA',
                                    'valueColOptions' => ['style' => 'width: 10%'],
                                    'labelColOptions' => ['style' => 'width: 7%; text-align: left; '],
                                ],
                            ],
                        ],
                    ],
                ])
                ?>


            </div></div></div></div>


