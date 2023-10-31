<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function show()
    {
        return view('show', ['comics'=>Comic::all()]);
    }
}
