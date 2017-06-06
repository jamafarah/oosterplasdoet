<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Show events
     *
     * @return $this
     */
    public function index() {
        try {
            $news = News::orderByDesc('created_at')->get();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('news.index')->with(compact('news'));
    }

    /**
     * Show news
     *
     * @param $id
     * @return $this
     */
    public function show($id) {
        try {
            $news = News::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('news.show')->with(compact('news'));
    }
}