<?php
// require_once __DIR__.'/vendor/monolog/monolog/src/Monolog/Logger.php';
// require_once __DIR__.'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
require_once __DIR__.'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::WARNING));

// add records to the log
$log->warning('EGO');
$log->error('ING');
