<?php

namespace App\Controllers\Errors;

use App\Controller;

class EDb extends Controller
{
    protected function handle()
    {
        $this->view->display(TEMPLATES . '/errors/db.php');
    }
}
