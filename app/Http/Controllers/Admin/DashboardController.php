<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard', [
          'categories' => Category::lastCategories(5),
          'articles' => Article::lastArticles(5),
          'category_count' => Category::count(),
          'article_count' => Article::count(),
        ]);
    }
}
