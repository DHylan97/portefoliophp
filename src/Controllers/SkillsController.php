<?php

namespace App\Controllers;

use App\Utils\DB;
use App\Utils\View;

class SkillsController
{
    public function skills()
    {
        DB::getInstance();
        View::render('skills');

    }
}