<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::latest('id')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function create(): View
    {
        return view('articles.create');
    }

    public function store(StoreArticleRequest $request): RedirectResponse
    {
        // Check if user has permission to create article
        if (!Gate::allows('create-article')) {
            abort(403, "You don't have permission to write an article!");
        }
        
        $article = Article::create($request->validated());
        
        return redirect()
            ->route('articles.edit', $article)
            ->with('success', 'Article created successfully.');
    }

    public function edit(Article $article): View
    {
        return view('articles.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, Article $article): RedirectResponse
    {
        $article->update($request->validated());

        return redirect()
            ->route('articles.edit', $article)
            ->with('success', 'Article mis à jour.');
    }

    public function destroy(Article $article): RedirectResponse
    {
        // Check if user has permission to delete article
        if (!Gate::allows('delete-article', $article)) {
            abort(403, "You don't have permission to delete this article!");
        }
        
        $article->delete();
        
        return redirect()->route('articles.index')
            ->with('status', '🗑️ Article deleted successfully.');
    }
}
