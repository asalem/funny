<?php

// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    die('You are not allowed to access this file.');
}

//EXPEDIA_ENV (dev,stag,prod) env var
//enable the mode of the code via env vars
$env = (getenv('EXPEDIA_ENV') && !empty(getenv('EXPEDIA_ENV'))) ? strtolower(getenv('EXPEDIA_ENV')) : 'stag';

if ($env == 'prod')
    die('You are not allowed to access this file.');

defined('YII_ENV') or define('YII_ENV', 'test');


// disable debugging on Production (prod)
if (in_array(YII_ENV, ['dev','stag','test']))
   defined('YII_DEBUG') or define('YII_DEBUG', true);
else
   defined('YII_DEBUG') or define('YII_DEBUG', false);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/test.php';

(new yii\web\Application($config))->run();
