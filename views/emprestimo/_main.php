<?php

use kartik\tabs\TabsX;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Editais */
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i> Informações </h3>
     
     </div>
    <div class="row" style="padding: 15px">
        <div class="col-md-12">
            <div class="editais-view">
                <?php
                


                echo TabsX::widget([
                    'position' => TabsX::POS_ABOVE,
                    'align' => TabsX::ALIGN_LEFT,
                    'bordered' => true,
                    'items' => [
                        [
                            'label' => '<i class="fa fa-book"></i> Informações',
                            'content' => $this->render('/produtos/index', [
                                'model' => $model,
                                
                            ]),
                            'active' => true,
                            'encode' => false,
                        ],
                        
                    ],
                ]);
                ?>


            </div>

        </div>


    </div>

</div>
