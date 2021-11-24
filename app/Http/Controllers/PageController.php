<?php
namespace App\Http\Controllers;

class PageController extends Controller
{
    public function __invoke()
    {
        return view ('generatePage');
    }



}

