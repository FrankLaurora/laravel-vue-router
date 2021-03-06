<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();

        return response()->json([
            'success' => true,
            'data' => $articles
        ]);
    }
}
