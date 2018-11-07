<?php

use yii\helpers\Html;
use app\components\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoProdutoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo de Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-produto-index">

    
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'boxTitle' => 'Tipos de Produtos',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'REGISTRO',
            'DESCRICAO',
            'REFERENCIA',
            'OBSERVACAO:ntext',
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
