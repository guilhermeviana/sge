<?php

use yii\helpers\Html;
use app\components\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProdutosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-index">

   
    <?php Pjax::begin(); ?>
<?php  echo $this->render('_search', ['model' => $searchModel]);  ?>

    
    <?=
    GridView::widget([
         'boxTitle' => 'Produtos',
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           // 'REGISTRO',
             'PRODUTO',
            [
                'attribute' => 'PARCEIRO',
                'value' => function (\app\models\Produtos $model) {
                    $parceiro = app\models\Parceiro::find()->where(['REGISTRO' => $model->PARCEIRO])->all();

                    foreach ($parceiro as $linha) {
                        return $linha->RAZAO_SOCIAL;   
                    }
                },
            ],
            [
                 'attribute' => 'TIPO_PRODUTO',
                'value' => function (\app\models\Produtos $modelo) {
                    $tipos = app\models\TipoProduto::find()->where(['REGISTRO' => $modelo->TIPO_PRODUTO])->all();
                    foreach ($tipos as $t){
                        return $t->DESCRICAO;
                    }                    
                },
                
                ],
            //'REFERENCIA',
           
            //'FLEX',
            //'PRODUTO_SEGURO',
            //'VALOR_PREMIO',
            //'VALOR_PARCELA',
            //'TIPOPAGAMENTO',
            //'TIPOJUROS',
            //'VALORJUROS',
            //'OBS:ntext',
            //'UTILIZA_TAC_DEDUTIVA',
            //'TAC',
            //'LIMITETAC',
            //'TACFIXO',
            //'INATIVO',
            //'VALIDADE',
            //'IDADE_LIMITE_COMISSIONAMENTO',
            //'PERCENTUAL_REFIN',
            //'PRODUTO_CARTAO',
            //'CATEGORIA_CARTAO',
            //'EXCLUIDO',
            //'LIMITETACMENOR',
            //'TACFIXOMENOR',
            //'COMISSAO_REFIN_RECUPERA',
            //'BASE_COMISSAO_PRODUTO',
            //'VALOR_RANGE',
            //'PONDERACAO',
            //'LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA',
            //'ATUALIZACAO',
            //'EMITE_BORDERO',
            //'STATUS_PADRAO',
            //'FILIAL_INTEG_FINANCEIRO',
            //'SCE_SYNC',
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
    ]);
    ?>
    <?php Pjax::end(); ?>
</div>
