<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class SearchArticleController extends Controller
{
    public function search(Request $request) 
    {
        $search = $request->input('search');
        
        $articles = Article::with('categories')
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();

        return $articles;
    }
}
