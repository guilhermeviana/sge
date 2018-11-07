<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of GerarBackup
 *
 * @author guilherme
 */
class BackupController extends \yii\base\Controller {

    public function actionGerar() {

        // Como a geração do backup pode ser demorada, retiramos
        // o limite de execução do script
        set_time_limit(0);

        
        //echo getcwd() . '/backup'; exit();
        $backup = new \app\components\BackupDatabase(getcwd() . '/backup', 5);
        $backup->setDatabase('localhost', 'sistema', 'root', '');
        if ($backup->generate() == 1){
            \Yii::$app->getSession()->setFlash('success', 'BACKUP GERADO COM SUCESSO');



        header('Location: /sysfinance/web/');
        exit();
        }else{
            \Yii::$app->getSession()->setFlash('error', 'ERRO AO GERAR BACKUP');
            
        }
    }

}
