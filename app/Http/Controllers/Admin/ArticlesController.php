<?php

namespace App\Http\Controllers\Admin;

use App\Model\Articles;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends BaseController
{
    protected $articlesLists;

    public function __construct()
    {
        parent::__construct();
        $this->articlesLists=Articles::with('user');
        view()->share('articlesDatas',['total'=>$this->articlesLists->count()]);
    }

    /**
     * 文章列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articlesLists=Articles::with('user')->join('users AS u','u.id','=','articles.user_id')->paginate(10);
        //dd($articlesLists);
        return view('admin/ArticlesList',['articlesLists'=>$articlesLists]);
    }

    public function addArticles()
    {
        dd('Articles/addArticles');
    }
}
