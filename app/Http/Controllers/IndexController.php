<?php

namespace App\Http\Controllers;

use Session;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class IndexController extends Controller
{
    /**
     * Show index
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex() {
        return view('index');
    }
}