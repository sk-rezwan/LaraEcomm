<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.home');
    }
    public function shirts()
    {
        return view('front.shirts');
    }
    public function shirt()
    {
        return view('front.shirt');
    }

}
