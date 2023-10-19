<?php

namespace App\Http\Controllers\ml;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainModelController extends Controller
{
    public function index(){
        return view('admin.modeltrain.index');
    }
}
