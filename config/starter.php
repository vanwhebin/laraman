#!/usr/bin/env php
<?php
/*
 * Please don't edit this file,this is auto generate by laraman
 */

use Illuminate\Container\Container;

require_once __DIR__.'/vendor/itinysun/laraman/fixes/WorkmanFunctions.php';

require __DIR__.'/vendor/autoload.php';

include_once './vendor/itinysun/laraman/fixes/ConsoleOutputHack.php';

class_alias(\Symfony\Component\Console\Output\ConsoleOutputHack::class,Symfony\Component\Console\Output\ConsoleOutput::class);

$app = new \Itinysun\Laraman\Console\ConsoleApp($_ENV['APP_BASE_PATH'] ?? dirname(__FILE__));
$status = $app->runServerCommand();
exit($status);
