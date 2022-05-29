<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Home extends BaseController
{
    public function index()
    {
        $article = new BlogModel();
        $data['articles'] = $article->orderBy('id', 'DESC')->findAll();
        return view('index', $data);
    }
}
