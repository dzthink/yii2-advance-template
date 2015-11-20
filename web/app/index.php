<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
$global = require(__DIR__.'/../../common/config/main.php');
$config = require(__DIR__ . '/../../app/config/main.php');
$config = array_merge($global, $config);
(new yii\web\Application($config))->run();