<?php

namespace App\Http\Controllers;
use App\Http\Controllers\myController;
use Illuminate\Http\Request;

class myController extends Controller
{
    //
    public function index() {
        return view('welcome');
    }
}
