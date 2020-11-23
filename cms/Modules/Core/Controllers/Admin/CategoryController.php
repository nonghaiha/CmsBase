<?php
namespace Cms\Modules\Core\Controllers\Admin;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('Core::views.category.index');
    }
}
