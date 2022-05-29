<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    
    public function blog()
    {
        return view('blog');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function article1()
    {
        return view('article1');
    }
    
    public function article2()
    {
        return view('article2');
    }
    
    public function article3()
    {
        return view('article3');
    }
}
