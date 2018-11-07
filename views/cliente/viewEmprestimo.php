<?php

use kartik\grid\GridView;
use yii\helpers\Html;
?>


<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i> Emprestimos de <?= $model->NOME ?> </h3>

    </div>
    <div class="row" style="padding: 15px">
        <div class="col-md-12">



            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                //'botaoAdicionar' => false,
                //   'boxTitle' => 'Empréstimos do(a) ' . $model->NOME . '',
                'columns' => [
                    [
                        'class' => 'kartik\grid\ExpandRowColumn',
                        'expandIcon' => '<span class="fa fa-plus-square-o"></span>',
                        'collapseIcon' => '<span class="fa fa-minus-square-o"></span>',
                        'value' => function ($model, $key, $index, $column) {
                            return kartik\grid\GridView::ROW_COLLAPSED;
                        },
                        'headerOptions' => ['style' => 'width: 5%'],
                        'detail' => function (app\models\Emprestimo $model) {
                            //         $p = \app\models\PerguntasRespostas::find()->where(['id_questionario' => $model->id])->one();
                            //echo $model->pergunta->respostas;
                            $searchModel = new \app\models\EmprestimoSearch();
                            $searchModel->REGISTRO = $model->REGISTRO;

                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                            $dataProvider->setSort([
                                'defaultOrder' => [
                                    'DATA' => SORT_DESC
                                ]
                            ]);

                            return Yii::$app->controller->renderPartial('detalheEmprestimo', [
                                        'model' => $model,
                            ]);
                        }
                    ],
                    //  'REGISTRO',
                    // 'TIPO_EMPRESTIMO',
                    [
                        'attribute' => 'PRODUTO',
                        'header' => 'PRODUTO',
                        'headerOptions' => ['style' => 'width: 25%'],
                        'value' => function (app\models\Emprestimo $model) {
                            $produto = app\models\Produtos::findOne($model->PRODUTO);
                            return $produto->PRODUTO . ' / ' . $produto->parceiro->RAZAO_SOCIAL;
                        }
                    ],
                    // 'CAPTADOR',
                    // 'CORRETOR',
                    // 'LOJA',
                    //'CORRETOR_1',
                    //'CORRETOR_2',     
                    [
                        'attribute' => 'DATA',
                        'header' => 'DATA',
                        'headerOptions' => ['style' => 'width: 10%'],
                        'format' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                    ],
                    //'DATAINICIO',
                    
                    [
                        'attribute' => 'VALOR_BRUTO',
                        'header' => 'VALOR BRUTO',
                        'headerOptions' => ['style' => 'width: 12.5%'],
                        'value' => function (app\models\Emprestimo $model) {
                            $a = number_format($model->VALOR_BRUTO, 2, ',', '.');
                            return 'R$ ' . $a;
                        }
                    ],
                    //'SALDOANTERIOR',
                    //'SALDO_RECOMPRA',
                    //'SALDO_RETIDO',
                    [
                        'attribute' => 'VALOR',
                        'header' => 'VALOR LIQ',
                        'headerOptions' => ['style' => 'width: 12.5%'],
                        'value' => function (app\models\Emprestimo $model) {
                            $a = number_format($model->VALOR, 2, ',', '.');
                            return 'R$ ' . $a;
                        }
                    ],
                    //'JUROS',
                    //'DATA_FATOR',
                    //'TAXA',
                    [
                        'attribute' => 'CATEGORIA',
                        'header' => 'CATEGORIA',
                        'headerOptions' => ['style' => 'width: 20%'],
                        'value' => function (app\models\Emprestimo $model) {
                            $cliente = app\models\Categoria::findOne($model->CATEGORIA);
                            return $cliente->DESCRICAO;
                        }
                    ],
                   // [
                      //  'attribute' => 'STATUS',
                      //  'header' => 'STATUS',
                      //  'headerOptions' => ['style' => 'width: 10%'],
                  //  ],
                    //'DIA',
                    //'PARCELAS',
                    //'VALORPARCELA',
                    //'FORMULA',
                    //'COMISSAO_FLEXIVEL',
                    //'TAC',
                    //'ESTADO',
                    //'ESTADO_ANTERIOR_PENDENCIA',
                    //'UTIL',
                    //'CHAMADA',
                    //'SISDEB',
                    //'SISDEB_ATIVO',
                    //'SISDEB_CONTA_CLIENTE',
                    //'SISDEB_CONTA_CREDITO',
                    //'TIPOVENC',
                    //'DIVULGACAO',
                    //'FORMADIVULGACAO',
                    //'CONTRATO_DIGITADO',
                    //'VEZES_CONTRATO_DIGITADO',
                    //'DATA_ULTIMA_DIGITACAO',
                    //'CONTRATO_ENVIADO',
                    //'CONTRATO_ENVIADO_MATRIZ',
                    //'CONTRATO_RECEBIDO_MATRIZ',
                    //'CARTAO_CREDITO',
                    //'CARTAO_COM_SAQUE',
                    //'LIMITE_CARTAO_CREDITO',
                    //'DINHEIRO_RAPIDO',
                    //'REFIN_RECOMPRA',
                    //'PERCENT_REFIN_ORIGINAL',
                    //'BANCO_ORDEM_PAGAMENTO',
                    //'AGENCIA_ORDEM_PAGAMENTO',
                    //'NUMERO_ORDEM_PAGAMENTO',
                    //'LIMITE_SAQUE_ORDEM_PAGAMENTO',
                    //'CONTA_DEPOSITO',
                    //'CONTRATO_ORIGINAL',
                    //'REPASSADOEMPRESA',
                    //'REPASSADOCORRETOR',
                    //'TIPO_COMISSIONAMENTO',
                    //'COMISSAO_ESTORNADA',
                    //'COMISSAO_ADIANTADA',
                    //'CONTRATO_VENDIDO',
                    //'CONTRATO_RENOVADO',
                    //'DATAREG',
                    //'HORAREG',
                    //'USUARIO',
                    //'USUARIO_WEB',
                    //'DATA_ATIVACAO',
                    //'DATAAT',
                    //'HORAAT',
                    //'USUARIOAT',
                    //'DATACANCEL',
                    //'USUARIOCANCEL',
                    //'OBS:ntext',
                    //'EXCLUIDO',
                    //'CONTRATO',
                    //'BENS_DURAVEIS',
                    //'REFERENCIA_BENS_DURAVEIS',
                    //'ATENDENTE',
                    //'ASSISTENTE',
                    //'ANALISTA',
                    //'TELEFONISTA',
                    //'PROMOTOR',
                    //'IDENTIFICAOCAO_CONTRATO',
                    //'IDENTIFICACAO_CONTRATO_2',
                    //'IDENTIFICADOR_CORREIO',
                    //'COD_BARRAS_CONTRATO',
                    //'CONTA',
                    //'IDENTIFICACAO_CLIENTE',
                    //'IOF',
                    //'SEGURO',
                    //'REGRA',
                    //'PORCENTAGEM_COMISSAO',
                    //'PORCENTAGEM_COMISSAO_CORRETOR_1',
                    //'PORCENTAGEM_COMISSAO_CORRETOR_2',
                    //'PORCENTAGEM_COMISSAO_REC',
                    //'REGISTRO_TABELA_COMISSAO_TAC',
                    //'PORCENTAGEM_REC_TAC',
                    //'VALOR_REC_TAC',
                    //'PORCENTAGEM_PAG_TAC',
                    //'VALOR_PAG_TAC',
                    //'VALOR_COMISSAO',
                    //'VALOR_COMISSAO_CORRETOR_1',
                    //'VALOR_COMISSAO_CORRETOR_2',
                    //'VALOR_COMISSAO_REC',
                    //'VALOR_PAGO_CONTRATO',
                    //'VALOR_RECEB_CONTRATO',
                    //'PORCENTAGEM_RECEB_BONUS',
                    //'VALOR_RECEB_BONUS',
                    //'PORCENTAGEM_PAGAR_BONUS',
                    //'VALOR_PAGAR_BOMUS',
                    //'VALOR_PAGAR_BONUS_CAPTADOR',
                    //'VALOR_PAGAR_BONUS_ANALISTA',
                    //'VALOR_PAGAR_BONUS_ATENDENTE',
                    //'REPASSADO_BONUS_FUNCIONARIO',
                    //'VALOR_PAGAR_BONUS_FUNCIONARIO',
                    //'SUBSTABELECIDO',
                    //'PERCENTUAL_SUBSTABELECIDO',
                    //'COMISSAO_ALTERADA_MANUALMENTE',
                    //'DESC_CPMF',
                    //'PORCENTAGEM_COMISSAO_AGENCIADOR',
                    //'VALOR_COMISSAO_AGENCIADOR',
                    //'REPASSADO_AGENCIADOR',
                    //'PORCENTAGEM_COMISSAO_CAPTADOR',
                    //'VALOR_COMISSAO_CAPTADOR',
                    //'REPASSADO_CAPTADOR',
                    //'PORCENTAGEM_COMISSAO_ATENDENTE',
                    //'VALOR_COMISSAO_ATENDENTE',
                    //'REPASSADO_ATENDENTE',
                    //'PORCENTAGEM_COMISSAO_ANALISTA',
                    //'VALOR_COMISSAO_ANALISTA',
                    //'REPASSADO_ANALISTA',
                    //'DESC_ISS',
                    //'DESC_OUTROS',
                    //'DESC_ADIANTAMENTO',
                    //'ENVIA_RELATORIO_REFIN',
                    //'ENTRADA_ELETRONICA',
                    //'ENVIADO_REPASSE_AGENTE',
                    //'CAMPANHA',
                    //'RECIBO_PAGAMENTO_CORRETOR',
                    //'CONTRATO_RENEGOCIADO',
                    //'DATA_CONFERENCIA',
                    //'USUARIO_CONFERENCIA',
                    //'NUMERO_BORDERO_BANCO',
                    //'NUM_RASTREIO_OBJETO',
                    //'ATRASO_PAGAMENTO_CONTRATO',
                    [
                        'class' => 'kartik\grid\ActionColumn',
                        'controller' => 'emprestimo',
                        'options' => ['style' => 'width:15%'],
                        'template' => '{update}{delete}',
                        'header' => 'Ações',
                        'buttons' => [
                            'update' => function ($url) {
                                return Html::a('<button style="margin-left: 10px;" type="button" class="btn btn-warning btn-xs"><i class=" fa  fa-pencil "></i></button>', $url);
                            },
                            'delete' => function ($url) {
                                return Html::a('<button style="margin-left: 10px;" type="button" class="btn btn-danger btn-xs"><i class=" fa  fa-trash "></i></button>', $url, ['data-method' => 'post', 'data-confirm' => Yii::t('yii', 'Você tem certeza que deseja remover esse item?'),
                                ]);
                            },
                        ],
                    ],
                ],
            ]);
            ?>
        </div> 
    </div> 
</div> 