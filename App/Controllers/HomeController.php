<?php

namespace App\Controllers;

use App\Helpers\SessionHelper;
use Core\Controller;

class HomeController extends Controller
{
    public function index(){
        View::render('home/index');
    }
}
