<?php

use yii\helpers\Html;
use \app\components\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ParceiroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parceiros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parceiro-index">
    
    
  
                        
     
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'boxTitle' => "Parceiros",
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
            'attribute' => 'RAZAO_SOCIAL',
            'label'=>'Razão Social', 
            'options'=>['style'=>'width:40%']
            ],
            [
            'attribute' => 'ABREVIACAO',
            'label'=>'Abreviação', 
            'options'=>['style'=>'width:18%']
            ],
            [
            'attribute' => 'CPFCNPJ',
            'label'=>'CPF/CNPJ', 
            'options'=>['style'=>'width:20%']
            ],
            
            //'REGISTRO',
            //'TELEFONE_COM',
            //'TELEFONE_FAX',
            //'TELEFONE_CON',
            //'CONTATO',
            //'ENDERECO',
            //'BAIRRO',
            //'CIDADE',
            //'UF',
            //'CEP',
            //'OBSERVACAO:ntext',
            //'LOGOTIPO',
            //'EMPRESA',
            //'ALERTA_RECOMPRAS',
            //'PLANO_CONTAS',
            //'FORCA_DIG_NUM_CONTRATO',
            //'NUM_CARACTERES',
            //'CONTA_TRANSFERENCIA_COMISSAO',
            //'EMAIL_COMERCIAL:email',
            //'EMAIL_FISCAL:email',
            //'EMAIL_COMISSIONAMENTO:email',
            //'EXCLUIDO',

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
                    return Html::a('<button style="margin-left: 10px;" type="button" class="btn btn-danger btn-xs"><i class=" fa  fa-trash "></i></button>', $url, ['data-method'=> 'post', 'data-confirm' => Yii::t('yii', 'Você tem certeza que deseja remover esse item?'),
]);
                },
            ],
        ],

        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
