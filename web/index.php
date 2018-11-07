<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
 set_time_limit(0);
 
 //para conseguir gerar os relatórios
 ini_set("memory_limit","1024M");
$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
