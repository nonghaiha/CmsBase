<?php

namespace Cms\Modules\Core;

use Illuminate\View\View;

class ViewComposer
{
    protected $global = [];

    public function compose(View $view)
    {
        $view->with('global', $this->global);
    }
}
