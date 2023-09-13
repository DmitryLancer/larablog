<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        return view('main.index');
    }
}
