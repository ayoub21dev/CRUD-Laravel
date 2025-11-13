<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display the article creation form
     */
    public function create()
    {
        return view('articles.create');
    }


    public function store(StoreArticleRequest $request)
    {
     
        return redirect()
            ->route('articles.create')
            ->with('status', 'Form submitted successfully! (Database saving will be added in chapter 3.1.5)');
    }
}