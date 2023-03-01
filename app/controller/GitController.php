<?php

namespace App\controller;

use app\model\GitModel;

class GitController
{

public function iniciar()
{
    $GitModel = new Gitmodel();
    return $GitModel->dados();
}
       
}