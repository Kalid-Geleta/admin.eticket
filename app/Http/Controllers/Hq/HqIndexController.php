<?php

namespace App\Http\Controllers\Hq;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;

class HqIndexController extends Controller
{
    //
    public function index(){
        $drivers=Driver::all();
        return view('hq.index');
    }
}
