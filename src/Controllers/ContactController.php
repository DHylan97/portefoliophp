<?php

namespace App\Controllers;

use App\Utils\DB;
use App\Utils\View;

class ContactController
{
    public function contact()
    {
        DB::getInstance();
        View::render('contact');

    }
}