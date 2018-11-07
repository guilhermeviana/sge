<?php

use yii\helpers\Html;
use app\components\GridView;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">
    
  

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>


    <?=
    GridView::widget([
        'boxTitle' => 'Clientes',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           // 'REGISTRO',
            //'ENVIA_CORRESPONDENCIA',
            //'TOMADOR_EMPRESTIMO',
            //'ENVIA_ENDERECAMENTO',
            //'ENVIA_TELEMARKETING',
            
            [ 
              'attribute' => 'NOME',
                
                
                
                ],
            //'NASCIMENTO',
            'CPFCNPJ',
            //   'TIPO_IDENTIDADE',
            'IDENTIDADE',
            [
                'attribute' => 'SEXO',
                //'format' => 'boolean',                           
                'filter' => ['0' => 'M', '1' => 'F'],
                'value' => function (\app\models\Cliente $model){
                    if ($model->SEXO == 1)
                        return "F";
                    else
                        return "M";
                }
            ],
           // 'ESTADO_CIVIL',
            //'CONJUGE',
            //'NASCIMENTO_CONJUGE',
            //'TIPO_RESIDENCIA',
            //'ENDERECO',
            //'BAIRRO',
            //'CIDADE',
            //'CEP',
            //'UF',
            //'TEMPO_MORADIA',
            //'VALOR_ALUGUEL',
            //'OBSERVACAO:ntext',
            //'CORRETOR',
            //'ATENDENTE',
            //'TELEFONE_RES',
            //'TELEFONE_PREFERENCIAL',
            //'OPERADORA_CEL',
            //'TELEFONE_CEL',
            //'EMPRESA',
            //'COD_ORGAO',
            //'ORGAO',
            //'ENDERECO_COM',
            //'NUMERO_COM',
            //'COMPLEMENTO_COM',
            //'BAIRRO_COM',
            //'CIDADE_COM',
            //'CEP_COM',
            //'UF_COM',
            //'TELEFONE_COM',
            //'TELEFONE_COM_2',
            //'RAMAL',
            //'DATA_PAGAMENTO',
            //'MASP',
            //'SALARIO',
            //'DATA_ADIANTAMENTO',
            //'ADIANTAMENTO',
            //'CARGO',
            //'NATUREZA_OCUPACAO',
            //'DATA_ADMISSAO',
            //'BANCO',
            //'AGENCIA',
            //'CONTA',
            //'DATA_ABERTURA_CONTA',
            //'SPC',
            //'SERASA',
            //'TIPOVENC',
            //'TAXAADM',
            //'INICIO_TAXA',
            //'FORMAPAG',
            //'USUARIO',
            //'DATAREGISTRO',
            //'USUARIOAT',
            //'DATAAT',
            //'EXCLUIDO',
            //'ORGAO_EXP',
            //'DATA_EXPEDICAO',
            //'NUMERO',
            //'COMPLEMENTO',
            //'BENEFICIO',
            //'SIAPE',
            //'PAI',
            //'MAE',
            //'NACIONALIDADE',
            //'NATURALIDADE',
            //'ESCOLARIDADE',
            //'EMAIL:email',
            //'CARTORIO',
            //'TIPO_CONTA',
            //'IDENTIFICADOR_DEBITO',
            //'IDENTIFICADOR_CLIENTE_BANCO',
            //'IDENTIFICADOR_MAILING',
            //'MARGEM_DISPONIVEL',
            //'DATA_CONSULTA_MARGEM',
            //'LIMITE_DISPONIVEL_SAQUE',
            //'LIMITE_COMPRA_DISPONIVEL',
            //'ULTIMO_CONTATO_CLIENTE',
            //'ROTA_ATENDIMENTO',
            [
                'class' => 'kartik\grid\ActionColumn',
                'options' => ['style' => 'width:15%'],
                'template' => '{view}{update}{delete}',
                'header' => 'Ações',
                'buttons' => [
                    'view' => function ($url) {
                        return Html::a('<button type="button" class="btn btn-default btn-xs"><i class=" fa fa-eye "></i></button>', $url);
                    },
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
    <?php Pjax::end(); ?>
</div>
