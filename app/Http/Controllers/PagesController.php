<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Crud;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }
    public function shop()
    {
        $data = Crud::all();
        return view('frontend.pages.shop',compact('data'));
        // return view('frontend.pages.shop');
    }
}
