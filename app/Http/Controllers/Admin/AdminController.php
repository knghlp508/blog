<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Articles;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin')->withPages(Articles::all());
    }
}
