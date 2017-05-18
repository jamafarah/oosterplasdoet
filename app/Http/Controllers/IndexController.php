<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        try {
            $news = News::orderBy('created_at')->limit(3)->get();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        return view('index')->with(compact('news'));
    }
}