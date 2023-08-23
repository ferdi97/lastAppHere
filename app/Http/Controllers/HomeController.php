<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function DashBoard()
    {
        return view('dashboard');
    }

    public function index()
    {
        $data = User::get();
        return view('index', compact('data'));
    }
    public function create()
    {
        return view('create');
    }
}
