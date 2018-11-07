<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\PDF_activate_item(pdfdoc, id)eForm */
?>
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-cubes"></i> Dados do Cliente</h3>
    </div>
    <div class="box-body">
        <div  class="panel-group collapse in">
            <div class="cliente-form">
                <?php $form = ActiveForm::begin(); ?>
                <div  class="panel panel-default">
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Informações Pessoais</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-5">
                                <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?=
                                $form->field($model, 'NASCIMENTO')->widget(DateControl::class, [
                                    'widgetOptions' => [
                                    ],
                                    'type' => DateControl::FORMAT_DATE,
                                ])
                                ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'CPFCNPJ')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-2">
                                <?=
                                $form->field($model, 'TIPO_IDENTIDADE')->dropDownList([
                                    0 => 'RG',
                                    1 => 'CNH',
                                    2 => 'CTPS',
                                    3 => 'INSC. ESTADUAL',
                                    4 => 'CRM',
                                    5 => 'CRA',
                                    6 => 'CRC',
                                    7 => 'CRO',
                                    8 => 'ID-E',
                                    9 => 'ID-M',
                                    10 => 'ID-A',
                                    11 => 'CRE',
                                    12 => 'CIE',
                                    13 => 'CFF',
                                    14 => 'PASSAPORTE',
                                    15 => 'CRF',
                                    16 => 'OUTROS']
                                )
                                ?>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <?= $form->field($model, 'IDENTIDADE')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'ORGAO_EXP')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?=
                                $form->field($model, 'DATA_EXPEDICAO')->widget(DateControl::class, [
                                    'widgetOptions' => [
                                    ],
                                    'type' => DateControl::FORMAT_DATE,
                                ])
                                ?>
                            </div>
                            <div class="col-md-3">
<?= $form->field($model, 'TELEFONE_RES')->widget(MaskedInput::className(), ['mask' => '(99)9999-9999']) ?>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?= $form->field($model, 'SEXO')->dropDownList(['0' => 'M', '1' => 'F']) ?>
                            </div>
                            <div class="col-md-3">
                                <?=
                                $form->field($model, 'ESTADO_CIVIL')->dropDownList([
                                    '0' => 'Solteiro',
                                    '1' => 'Casado',
                                    '2' => 'Divorciado',
                                    '3' => 'Viúvo',
                                    '4' => 'Outros'
                                ])
                                ?>
                            </div>
                            <div class="col-md-3">
<?= $form->field($model, 'TELEFONE_CEL')->widget(MaskedInput::className(), ['mask' => '(99)99999-9999']) ?>
                            </div>                        
                            <div class="col-md-3">
<?= $form->field($model, 'SIAPE')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
<?= $form->field($model, 'BENEFICIO')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
<?= $form->field($model, 'BENEFICIO2')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'MASP')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?=
                                $form->field($model, 'ESCOLARIDADE')->dropDownList([
                                    '0' => 'Nível básico',
                                    '1' => 'Nível médio incompleto',
                                    '2' => 'Nível médio completo',
                                    '3' => 'Nível superior incompleto',
                                    '4' => 'Nível superior completo',
                                    '6' => 'Pós graduado',
                                    '7' => 'Mestrado',
                                    '9' => 'Doutorado',
                                    '8' => 'Analfabeto'
                                ])
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Endereço </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-4">
                                <?= $form->field($model, 'ENDERECO')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'NUMERO')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'BAIRRO')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'CIDADE')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'CEP')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'UF')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'COMPLEMENTO')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?=
                                $form->field($model, 'TEMPO_MORADIA')->widget(DateControl::class, [
                                    'widgetOptions' => [
                                    ],
                                    'type' => DateControl::FORMAT_DATE,
                                ])
                                ?>
                            </div>


                        </div>
                    </div>
                </div>

                <div  class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Informações Complementares </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($model, 'PAI')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($model, 'MAE')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'NACIONALIDADE')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'NATURALIDADE')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-6">
<?= $form->field($model, 'CONJUGE')->textInput(['maxlength' => true]) ?>
                            </div>               


                        </div>
                    </div>
                </div>

                <div  class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Informações Comerciais </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-6">
                                <?= $form->field($model, 'EMPRESA')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'COD_ORGAO')->textInput() ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'ORGAO')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'ENDERECO_COM')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'NUMERO_COM')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'BAIRRO_COM')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'CIDADE_COM')->textInput(['maxlength' => true]) ?>
                            </div>

                            <div class="col-md-2">
                                <?= $form->field($model, 'CEP_COM')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-2">
                                <?= $form->field($model, 'UF_COM')->textInput(['maxlength' => true]) ?>
                            </div>

                            <div class="col-md-3">
<?= $form->field($model, 'TELEFONE_COM')->widget(MaskedInput::className(), ['mask' => '(99)9999-9999']) ?>
                            </div>


                            <div class="col-md-2">
                                <?= $form->field($model, 'DATA_PAGAMENTO')->widget(MaskedInput::className(), ['mask' => '99']) ?>
                            </div>
                            <div class="col-md-3">
                                <?=
                                $form->field($model, 'SALARIO')->widget(\kartik\money\MaskMoney::className(), ['name' => 'amount_brazil',
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
                                <?= $form->field($model, 'CARGO')->textInput(['maxlength' => true]) ?>
                            </div>

                            <div class="col-md-3">
                                <?=
                                $form->field($model, 'DATA_ADMISSAO')->widget(DateControl::class, [
                                    'widgetOptions' => [
                                    ],
                                    'type' => DateControl::FORMAT_DATE,
                                ])
                                ?>
                            </div>
                            <div class="col-md-1">
<?= $form->field($model, 'SPC')->checkBox() ?>
                            </div>
                            <div class="col-md-1">
<?= $form->field($model, 'SERASA')->checkBox() ?>
                            </div>
                        </div>
                    </div>
                </div>



                <div  class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Observacoes </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
<?= $form->field($model, 'OBSERVACAO')->textarea(['rows' => 6]) ?>
                            </div>

                        </div>
                    </div>
                </div>

                <div  class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Cadastro de Conta </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($model, 'TIPO_CONTA')->dropDownList(\yii\helpers\ArrayHelper::map(app\models\TipoConta::find()->asArray()->all(), 'REGISTRO', 'DESCRICAO')) ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                echo $form->field($model, 'BANCO')->widget(kartik\widgets\Select2::classname(), [
                                    'data' => \yii\helpers\ArrayHelper::map(app\models\Banco::find()->where(['EXCLUIDO' => '0'])->orderBy('banco asc')->asArray()->all(), 'NUMERO', 'BANCO'),
                                    //'language' => 'de',
                                    'options' => ['placeholder' => 'Selecione um banco'],
                                    'pluginOptions' => [
                                        'allowClear' => true,
                                        'highlight' => true,
                                    ],
                                ]);
                                ?>
                            </div>
                            <div class="col-md-6">
<?= $form->field($model, 'AGENCIA')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-6">
<?= $form->field($model, 'CONTA')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VERIFICAR ARQUIVO DE TEXTO DROPBOX --> 
                <br/>
                <div class="form-group">
<?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
                </div>

<?php ActiveForm::end(); ?>

            </div>
