<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class AppController extends Controller
{
    public function index()
    {
        return view('layouts/app');
    }

    public function getMenuItems()
    {
        $menu = json_encode(Voyager::model('MenuItem')->where('menu_id', 1)->get());

        return $menu;
    }
}
