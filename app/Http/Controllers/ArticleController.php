<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articlesModel;

class ArticleController extends Controller
{
    public function article()
    {
        $modelArticle = new articlesModel();
        $article['articles'] = $modelArticle->getDataArticleByUser();
        return view('pages.article',$article);
    }

    public function user()
    {
        return view('pages.user');
    }
}
