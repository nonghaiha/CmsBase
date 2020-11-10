<?php

namespace Cms\Modules\Core\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('Core::views.layout.index');
    }
}
