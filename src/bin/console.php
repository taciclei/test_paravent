<?php

require __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Console\Application;
use App\Commands\OuraganCommand;

$application = new Application();

$application->add(new OuraganCommand());

$application->run();