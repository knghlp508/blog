<?php

namespace App\Http\Controllers\Admin;

use App\Model\Articles;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends BaseController
{

    /**
     * 文章列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articlesLists=Articles::user();dd($articlesLists);
        $articlesLists=Articles::paginate(10);

        return view('admin/ArticlesList',['articlesLists'=>$articlesLists]);
    }

    public function addArticles()
    {
        dd('Articles/addArticles');
    }
}
