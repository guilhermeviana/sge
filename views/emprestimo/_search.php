<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmprestimoSearch */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i> Buscar Empréstimo </h3>

    </div>
    <div class="row" style="padding: 15px">
        <div class="col-md-12">

            <div class="emprestimo-search">

                <?php
                $form = ActiveForm::begin([
                            'action' => ['index'],
                            'method' => 'get',
                            'options' => [
                                'data-pjax' => 1
                            ],
                ]);
                ?>
                
                <div class="row">
                    <div class="col-md-6">
                                        <?= $form->field($model, 'CATEGORIA')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Categoria::find()->where('EXCLUIDO = 0')->asArray()->all(), 'REGISTRO', 'DESCRICAO'), ['prompt' => 'Selecione']) ?>

                    </div>
              
                    <div class="col-md-6">
                               <?=
                $form->field($model, 'PRODUTO')->widget(kartik\widgets\Select2::classname(), [
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
                </div>
                
                        <div class="row">
                    <div class="col-md-6">
         <?=
                $form->field($model, 'CLIENTE')->widget(kartik\widgets\Select2::classname(), [
                    'data' => \yii\helpers\ArrayHelper::map(app\models\Cliente::find()->where(['EXCLUIDO' => 0])->orderBy('NOME asc')->asArray()->all(), 'REGISTRO', 'NOME'),
                    //'language' => 'de',
                    'options' => ['placeholder' => 'Selecione um cliente'],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'highlight' => true,
                    ],
                ]);
                ?>
                    </div>
              
                    <div class="col-md-6">
                                     <?= $form->field($model, 'STATUS')->dropDownList(['ABERTO' => 'ABERTO', 'QUITADO' => 'QUITADO', 'PENDENTE' => 'PENDENTE', 'CANCELADO' => 'CANCELADO'], ['prompt' => 'Selecione']) ?>

                        
                    </div>
                </div>



         

       


                <?php // echo $form->field($model, 'LOJA') ?>

                <?php // echo $form->field($model, 'CORRETOR_1') ?>

                <?php // echo $form->field($model, 'CORRETOR_2') ?>

                <?php // echo $form->field($model, 'CLIENTE') ?>

                <?php // echo $form->field($model, 'DATA') ?>

                <?php // echo $form->field($model, 'DATAINICIO') ?>

                <?php // echo $form->field($model, 'VALOR_BRUTO') ?>

                <?php // echo $form->field($model, 'SALDOANTERIOR') ?>

                <?php // echo $form->field($model, 'SALDO_RECOMPRA') ?>

                <?php // echo $form->field($model, 'SALDO_RETIDO') ?>

                <?php // echo $form->field($model, 'VALOR') ?>

                <?php // echo $form->field($model, 'JUROS') ?>

                <?php // echo $form->field($model, 'DATA_FATOR') ?>

                <?php // echo $form->field($model, 'TAXA') ?>

                <?php // echo $form->field($model, 'CATEGORIA') ?>

                <?php // echo $form->field($model, 'DIA') ?>

                <?php // echo $form->field($model, 'PARCELAS') ?>

                <?php // echo $form->field($model, 'VALORPARCELA') ?>

                <?php // echo $form->field($model, 'FORMULA') ?>

                <?php // echo $form->field($model, 'COMISSAO_FLEXIVEL') ?>

                <?php // echo $form->field($model, 'TAC') ?>

                <?php // echo $form->field($model, 'ESTADO') ?>

                <?php // echo $form->field($model, 'ESTADO_ANTERIOR_PENDENCIA') ?>

                <?php // echo $form->field($model, 'UTIL') ?>

                <?php // echo $form->field($model, 'CHAMADA') ?>

                <?php // echo $form->field($model, 'SISDEB') ?>

                <?php // echo $form->field($model, 'SISDEB_ATIVO') ?>

                <?php // echo $form->field($model, 'SISDEB_CONTA_CLIENTE') ?>

                <?php // echo $form->field($model, 'SISDEB_CONTA_CREDITO') ?>

                <?php // echo $form->field($model, 'TIPOVENC') ?>

                <?php // echo $form->field($model, 'DIVULGACAO') ?>

                <?php // echo $form->field($model, 'FORMADIVULGACAO') ?>

                <?php // echo $form->field($model, 'CONTRATO_DIGITADO') ?>

                <?php // echo $form->field($model, 'VEZES_CONTRATO_DIGITADO') ?>

                <?php // echo $form->field($model, 'DATA_ULTIMA_DIGITACAO') ?>

                <?php // echo $form->field($model, 'CONTRATO_ENVIADO') ?>

                <?php // echo $form->field($model, 'CONTRATO_ENVIADO_MATRIZ') ?>

                <?php // echo $form->field($model, 'CONTRATO_RECEBIDO_MATRIZ') ?>

                <?php // echo $form->field($model, 'CARTAO_CREDITO') ?>

                <?php // echo $form->field($model, 'CARTAO_COM_SAQUE') ?>

                <?php // echo $form->field($model, 'LIMITE_CARTAO_CREDITO') ?>

                <?php // echo $form->field($model, 'DINHEIRO_RAPIDO') ?>

                <?php // echo $form->field($model, 'REFIN_RECOMPRA') ?>

                <?php // echo $form->field($model, 'PERCENT_REFIN_ORIGINAL') ?>

                <?php // echo $form->field($model, 'BANCO_ORDEM_PAGAMENTO') ?>

                <?php // echo $form->field($model, 'AGENCIA_ORDEM_PAGAMENTO') ?>

                <?php // echo $form->field($model, 'NUMERO_ORDEM_PAGAMENTO') ?>

                <?php // echo $form->field($model, 'LIMITE_SAQUE_ORDEM_PAGAMENTO') ?>

                <?php // echo $form->field($model, 'CONTA_DEPOSITO') ?>

                <?php // echo $form->field($model, 'CONTRATO_ORIGINAL') ?>

                <?php // echo $form->field($model, 'REPASSADOEMPRESA') ?>

                <?php // echo $form->field($model, 'REPASSADOCORRETOR') ?>

                <?php // echo $form->field($model, 'TIPO_COMISSIONAMENTO') ?>

                <?php // echo $form->field($model, 'COMISSAO_ESTORNADA') ?>

                <?php // echo $form->field($model, 'COMISSAO_ADIANTADA') ?>

                <?php // echo $form->field($model, 'CONTRATO_VENDIDO') ?>

                <?php // echo $form->field($model, 'CONTRATO_RENOVADO') ?>

                <?php // echo $form->field($model, 'DATAREG') ?>

                <?php // echo $form->field($model, 'HORAREG') ?>

                <?php // echo $form->field($model, 'USUARIO') ?>

                <?php // echo $form->field($model, 'USUARIO_WEB') ?>

                <?php // echo $form->field($model, 'DATA_ATIVACAO') ?>

                <?php // echo $form->field($model, 'DATAAT') ?>

                <?php // echo $form->field($model, 'HORAAT') ?>

                <?php // echo $form->field($model, 'USUARIOAT') ?>

                <?php // echo $form->field($model, 'DATACANCEL') ?>

                <?php // echo $form->field($model, 'USUARIOCANCEL') ?>

                <?php // echo $form->field($model, 'OBS') ?>

                <?php // echo $form->field($model, 'EXCLUIDO') ?>

                <?php // echo $form->field($model, 'CONTRATO') ?>

                <?php // echo $form->field($model, 'BENS_DURAVEIS') ?>

                <?php // echo $form->field($model, 'REFERENCIA_BENS_DURAVEIS') ?>

                <?php // echo $form->field($model, 'ATENDENTE') ?>

                <?php // echo $form->field($model, 'ASSISTENTE') ?>

                <?php // echo $form->field($model, 'ANALISTA') ?>

                <?php // echo $form->field($model, 'TELEFONISTA') ?>

                <?php // echo $form->field($model, 'PROMOTOR') ?>

                <?php // echo $form->field($model, 'IDENTIFICAOCAO_CONTRATO') ?>

                <?php // echo $form->field($model, 'IDENTIFICACAO_CONTRATO_2') ?>

                <?php // echo $form->field($model, 'IDENTIFICADOR_CORREIO') ?>

                <?php // echo $form->field($model, 'COD_BARRAS_CONTRATO') ?>

                <?php // echo $form->field($model, 'CONTA') ?>

                <?php // echo $form->field($model, 'IDENTIFICACAO_CLIENTE') ?>

                <?php // echo $form->field($model, 'IOF') ?>

                <?php // echo $form->field($model, 'SEGURO') ?>

                <?php // echo $form->field($model, 'REGRA') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_COMISSAO') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_COMISSAO_CORRETOR_1') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_COMISSAO_CORRETOR_2') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_COMISSAO_REC') ?>

                <?php // echo $form->field($model, 'REGISTRO_TABELA_COMISSAO_TAC') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_REC_TAC') ?>

                <?php // echo $form->field($model, 'VALOR_REC_TAC') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_PAG_TAC') ?>

                <?php // echo $form->field($model, 'VALOR_PAG_TAC') ?>

                <?php // echo $form->field($model, 'VALOR_COMISSAO') ?>

                <?php // echo $form->field($model, 'VALOR_COMISSAO_CORRETOR_1') ?>

                <?php // echo $form->field($model, 'VALOR_COMISSAO_CORRETOR_2') ?>

                <?php // echo $form->field($model, 'VALOR_COMISSAO_REC') ?>

                <?php // echo $form->field($model, 'VALOR_PAGO_CONTRATO') ?>

                <?php // echo $form->field($model, 'VALOR_RECEB_CONTRATO') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_RECEB_BONUS') ?>

                <?php // echo $form->field($model, 'VALOR_RECEB_BONUS') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_PAGAR_BONUS') ?>

                <?php // echo $form->field($model, 'VALOR_PAGAR_BOMUS') ?>

                <?php // echo $form->field($model, 'VALOR_PAGAR_BONUS_CAPTADOR') ?>

                <?php // echo $form->field($model, 'VALOR_PAGAR_BONUS_ANALISTA') ?>

                <?php // echo $form->field($model, 'VALOR_PAGAR_BONUS_ATENDENTE') ?>

                <?php // echo $form->field($model, 'REPASSADO_BONUS_FUNCIONARIO') ?>

                <?php // echo $form->field($model, 'VALOR_PAGAR_BONUS_FUNCIONARIO') ?>

                <?php // echo $form->field($model, 'SUBSTABELECIDO') ?>

                <?php // echo $form->field($model, 'PERCENTUAL_SUBSTABELECIDO') ?>

                <?php // echo $form->field($model, 'COMISSAO_ALTERADA_MANUALMENTE') ?>

                <?php // echo $form->field($model, 'DESC_CPMF') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_COMISSAO_AGENCIADOR') ?>

                <?php // echo $form->field($model, 'VALOR_COMISSAO_AGENCIADOR') ?>

                <?php // echo $form->field($model, 'REPASSADO_AGENCIADOR') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_COMISSAO_CAPTADOR') ?>

                <?php // echo $form->field($model, 'VALOR_COMISSAO_CAPTADOR') ?>

                <?php // echo $form->field($model, 'REPASSADO_CAPTADOR') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_COMISSAO_ATENDENTE') ?>

                <?php // echo $form->field($model, 'VALOR_COMISSAO_ATENDENTE') ?>

                <?php // echo $form->field($model, 'REPASSADO_ATENDENTE') ?>

                <?php // echo $form->field($model, 'PORCENTAGEM_COMISSAO_ANALISTA') ?>

                <?php // echo $form->field($model, 'VALOR_COMISSAO_ANALISTA') ?>

                <?php // echo $form->field($model, 'REPASSADO_ANALISTA') ?>

                <?php // echo $form->field($model, 'DESC_ISS') ?>

                <?php // echo $form->field($model, 'DESC_OUTROS') ?>

                <?php // echo $form->field($model, 'DESC_ADIANTAMENTO') ?>

                <?php // echo $form->field($model, 'ENVIA_RELATORIO_REFIN') ?>

                <?php // echo $form->field($model, 'ENTRADA_ELETRONICA') ?>

                <?php // echo $form->field($model, 'ENVIADO_REPASSE_AGENTE') ?>

                <?php // echo $form->field($model, 'CAMPANHA') ?>

                <?php // echo $form->field($model, 'RECIBO_PAGAMENTO_CORRETOR') ?>

                <?php // echo $form->field($model, 'CONTRATO_RENEGOCIADO') ?>

                <?php // echo $form->field($model, 'DATA_CONFERENCIA') ?>

                <?php // echo $form->field($model, 'USUARIO_CONFERENCIA') ?>

                <?php // echo $form->field($model, 'NUMERO_BORDERO_BANCO')  ?>

                <?php // echo $form->field($model, 'NUM_RASTREIO_OBJETO') ?>

                <?php // echo $form->field($model, 'ATRASO_PAGAMENTO_CONTRATO')  ?>

                <div class="form-group">
                    <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Limpar', ['index'], ['class' => 'btn btn-default']) ?>    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div></div></div>
