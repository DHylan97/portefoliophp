<?php

namespace App\Controllers;

use App\Utils\DB;
use App\Utils\View;

class BaseController
{
    public function aboutme()
    {
        DB::getInstance();
        View::render('aboutme');

    }
}