<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index(){
        // sleep(2);
        return view('store.index');
    }
    public function show(){
        return view('store.show');
    }
}
