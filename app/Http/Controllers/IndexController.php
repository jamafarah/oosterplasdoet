<?php

namespace App\Http\Controllers;

use Session;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class IndexController extends Controller
{
    public function getIndex() {
        return view('index');
    }
}