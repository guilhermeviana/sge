<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'REGISTRO') ?>

    <?= $form->field($model, 'ENVIA_CORRESPONDENCIA') ?>

    <?= $form->field($model, 'TOMADOR_EMPRESTIMO') ?>

    <?= $form->field($model, 'ENVIA_ENDERECAMENTO') ?>

    <?= $form->field($model, 'ENVIA_TELEMARKETING') ?>

    <?php // echo $form->field($model, 'NOME') ?>

    <?php // echo $form->field($model, 'NASCIMENTO') ?>

    <?php // echo $form->field($model, 'CPFCNPJ') ?>

    <?php // echo $form->field($model, 'TIPO_IDENTIDADE') ?>

    <?php // echo $form->field($model, 'IDENTIDADE') ?>

    <?php // echo $form->field($model, 'SEXO') ?>

    <?php // echo $form->field($model, 'ESTADO_CIVIL') ?>

    <?php // echo $form->field($model, 'CONJUGE') ?>

    <?php // echo $form->field($model, 'NASCIMENTO_CONJUGE') ?>

    <?php // echo $form->field($model, 'TIPO_RESIDENCIA') ?>

    <?php // echo $form->field($model, 'ENDERECO') ?>

    <?php // echo $form->field($model, 'BAIRRO') ?>

    <?php // echo $form->field($model, 'CIDADE') ?>

    <?php // echo $form->field($model, 'CEP') ?>

    <?php // echo $form->field($model, 'UF') ?>

    <?php // echo $form->field($model, 'TEMPO_MORADIA') ?>

    <?php // echo $form->field($model, 'VALOR_ALUGUEL') ?>

    <?php // echo $form->field($model, 'OBSERVACAO') ?>

    <?php // echo $form->field($model, 'CORRETOR') ?>

    <?php // echo $form->field($model, 'ATENDENTE') ?>

    <?php // echo $form->field($model, 'TELEFONE_RES') ?>

    <?php // echo $form->field($model, 'TELEFONE_PREFERENCIAL') ?>

    <?php // echo $form->field($model, 'OPERADORA_CEL') ?>

    <?php // echo $form->field($model, 'TELEFONE_CEL') ?>

    <?php // echo $form->field($model, 'EMPRESA') ?>

    <?php // echo $form->field($model, 'COD_ORGAO') ?>

    <?php // echo $form->field($model, 'ORGAO') ?>

    <?php // echo $form->field($model, 'ENDERECO_COM') ?>

    <?php // echo $form->field($model, 'NUMERO_COM') ?>

    <?php // echo $form->field($model, 'COMPLEMENTO_COM') ?>

    <?php // echo $form->field($model, 'BAIRRO_COM') ?>

    <?php // echo $form->field($model, 'CIDADE_COM') ?>

    <?php // echo $form->field($model, 'CEP_COM') ?>

    <?php // echo $form->field($model, 'UF_COM') ?>

    <?php // echo $form->field($model, 'TELEFONE_COM') ?>

    <?php // echo $form->field($model, 'TELEFONE_COM_2') ?>

    <?php // echo $form->field($model, 'RAMAL') ?>

    <?php // echo $form->field($model, 'DATA_PAGAMENTO') ?>

    <?php // echo $form->field($model, 'MASP') ?>

    <?php // echo $form->field($model, 'SALARIO') ?>

    <?php // echo $form->field($model, 'DATA_ADIANTAMENTO') ?>

    <?php // echo $form->field($model, 'ADIANTAMENTO') ?>

    <?php // echo $form->field($model, 'CARGO') ?>

    <?php // echo $form->field($model, 'NATUREZA_OCUPACAO') ?>

    <?php // echo $form->field($model, 'DATA_ADMISSAO') ?>

    <?php // echo $form->field($model, 'BANCO') ?>

    <?php // echo $form->field($model, 'AGENCIA') ?>

    <?php // echo $form->field($model, 'CONTA') ?>

    <?php // echo $form->field($model, 'DATA_ABERTURA_CONTA') ?>

    <?php // echo $form->field($model, 'SPC') ?>

    <?php // echo $form->field($model, 'SERASA') ?>

    <?php // echo $form->field($model, 'TIPOVENC') ?>

    <?php // echo $form->field($model, 'TAXAADM') ?>

    <?php // echo $form->field($model, 'INICIO_TAXA') ?>

    <?php // echo $form->field($model, 'FORMAPAG') ?>

    <?php // echo $form->field($model, 'USUARIO') ?>

    <?php // echo $form->field($model, 'DATAREGISTRO') ?>

    <?php // echo $form->field($model, 'USUARIOAT') ?>

    <?php // echo $form->field($model, 'DATAAT') ?>

    <?php // echo $form->field($model, 'EXCLUIDO') ?>

    <?php // echo $form->field($model, 'ORGAO_EXP') ?>

    <?php // echo $form->field($model, 'DATA_EXPEDICAO') ?>

    <?php // echo $form->field($model, 'NUMERO') ?>

    <?php // echo $form->field($model, 'COMPLEMENTO') ?>

    <?php // echo $form->field($model, 'BENEFICIO') ?>

    <?php // echo $form->field($model, 'SIAPE') ?>

    <?php // echo $form->field($model, 'PAI') ?>

    <?php // echo $form->field($model, 'MAE') ?>

    <?php // echo $form->field($model, 'NACIONALIDADE') ?>

    <?php // echo $form->field($model, 'NATURALIDADE') ?>

    <?php // echo $form->field($model, 'ESCOLARIDADE') ?>

    <?php // echo $form->field($model, 'EMAIL') ?>

    <?php // echo $form->field($model, 'CARTORIO') ?>

    <?php // echo $form->field($model, 'TIPO_CONTA') ?>

    <?php // echo $form->field($model, 'IDENTIFICADOR_DEBITO') ?>

    <?php // echo $form->field($model, 'IDENTIFICADOR_CLIENTE_BANCO') ?>

    <?php // echo $form->field($model, 'IDENTIFICADOR_MAILING') ?>

    <?php // echo $form->field($model, 'MARGEM_DISPONIVEL') ?>

    <?php // echo $form->field($model, 'DATA_CONSULTA_MARGEM') ?>

    <?php // echo $form->field($model, 'LIMITE_DISPONIVEL_SAQUE') ?>

    <?php // echo $form->field($model, 'LIMITE_COMPRA_DISPONIVEL') ?>

    <?php // echo $form->field($model, 'ULTIMO_CONTATO_CLIENTE') ?>

    <?php // echo $form->field($model, 'ROTA_ATENDIMENTO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
