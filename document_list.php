<?php

require './bootstrap.php';

use App\Components\Console\Console;

$console = new Console($argv);
$console->command()->parametersIsEqualOrDie(4, 'Ambiguous number of parameters!');
