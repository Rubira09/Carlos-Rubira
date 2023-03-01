<?php

require __DIR__.'./vendor/autoload.php';
use app\controller\GitController;

$git = new GitController();
echo  $git->iniciar();