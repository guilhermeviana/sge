<?php
use kartik\tabs\TabsX;



/* @var $this yii\web\View */
/* @var $model app\models\Cliente */

$this->title = $model->NOME;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i> Informações </h3>
    </div>
    <div class="row" style="padding: 15px">
        <div class="col-md-12">
            <div class="cliente-view">
                <?php
                $searchModel = new \app\models\EmprestimoSearch();
                $searchModel->CLIENTE = $model->REGISTRO;
                $searchModel->EXCLUIDO = 0;
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


                echo TabsX::widget([
                    'position' => TabsX::POS_ABOVE,
                    'align' => TabsX::ALIGN_LEFT,
                    'bordered' => true,
                    'items' => [
                        [
                            'label' => '<i class="fa fa-user"></i> Dados do cliente',
                            'content' => $this->render('/cliente/viewCliente', [
                                'model' => $model,                               
                            ]),
                            'active' => true,
                            'encode' => false,
                        ],    
                          [
                            'label' => '<i class="fa fa-random"></i> Empréstimos do cliente',
                            'content' => $this->render('/cliente/viewEmprestimo', [
                                'dataProvider' => $dataProvider,
                                'model' => $model
                            ]),                          
                            'encode' => false,
                        ], 
                 
                    ],
                ]);
                ?>


            </div>

        </div>


    </div>

</div>



                            