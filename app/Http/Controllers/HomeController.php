<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function home()
    {
        $train = Train::where('departure_date', '2023-12-21')->get();
        return view("home", compact("train"));
    }
}
