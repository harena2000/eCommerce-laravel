<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HarenaController extends Controller
{

    public function showName($name)
    {
        $result = Tools::printName($name);
        return $result;
    }
}
