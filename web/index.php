<?php

//EXPEDIA_ENV (dev,stag,prod) env var
//enable the mode of the code via env vars
$env = (getenv('EXPEDIA_ENV') && !empty(getenv('EXPEDIA_ENV'))) ? strtolower(getenv('EXPEDIA_ENV')) : 'stag';
defined('YII_ENV') or define('YII_ENV', $env);

if (!in_array($env, ['dev','stag','prod']))
        die ('hmm, are you sure you\'re on the correct environment?, please consult with our tech monkies to get this solved');


// disable debugging on Production (prod)
if (in_array(YII_ENV, ['dev','stag']))
   defined('YII_DEBUG') or define('YII_DEBUG', true);
else
   defined('YII_DEBUG') or define('YII_DEBUG', false);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
