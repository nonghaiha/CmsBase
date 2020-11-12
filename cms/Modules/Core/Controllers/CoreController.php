<?php

namespace Cms\Modules\Core\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CoreController extends Controller
{
    public function welcome(){
        if (Auth::user()){
            return redirect()->route('admin.index');
        }else{
            return view('Core::views.welcome');
        }
    }
}
