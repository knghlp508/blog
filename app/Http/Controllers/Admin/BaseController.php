<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $currentController;

    protected $currentMethod;

    protected $routeKeyMaps=[
        'Articles/index'=>['title'=>'文章列表','remark'=>'管理文章列表','path'=>['主页','文章','文章列表']],
    ];

    public function __construct()
    {
        $currentRouteDatas=$this->getCurrentRouteDatas();
        $currentTitles=$this->getCurrentTitles();

        view()->share('shareDatas',['currentRouteDatas'=>$currentRouteDatas,'currentTitles'=>$currentTitles]);
    }

    /**
     * 获取当前路由的控制器以及方法名称
     * @return array
     */
    public function getCurrentRouteDatas()
    {
        list($controllers,$this->currentMethod) = explode('@',\Route::current()->getActionName());
        $this->currentController=substr(explode('\\',$controllers)[4],0,strpos(explode('\\',$controllers)[4],'Controller'));
        return ['controller'=>$this->currentController,'method'=>$this->currentMethod];
    }

    public function getCurrentTitles()
    {
        $currentRouteKeyMap=implode('/',$this->getCurrentRouteDatas());
        return $this->routeKeyMaps[$currentRouteKeyMap];
    }
}
