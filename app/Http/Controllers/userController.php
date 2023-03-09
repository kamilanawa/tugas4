<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\makanan;

class userController extends Controller
{
    public function welcome(){
        $mk['modelMakanan']=makanan::all();
        return view('welcome',$mk);
    }
}
