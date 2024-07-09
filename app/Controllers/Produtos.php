<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Produtos extends Controller
{
    public function index()
    {
        return view('produtos');
    }
}
