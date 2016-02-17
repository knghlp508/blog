<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends BaseController
{
    /**
     * 主页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        dd('admin/index');
        return view('admin/Admin');
    }
}
