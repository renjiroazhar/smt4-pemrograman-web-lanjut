<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{   
    public function blog()
    {
        $article = new BlogModel();
        $data['articles'] = $article->orderBy('id', 'DESC')->findAll();
        return view('blog', $data);
    }
    
    public function article()
    {
        return view('article');
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
