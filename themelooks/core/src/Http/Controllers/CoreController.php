<?php

namespace Themelooks\Core\Http\Controllers;

use App\Http\Controllers\Controller;

class CoreController extends Controller
{
    public function index()
    {

        return view('core::core.index');
    }
}
