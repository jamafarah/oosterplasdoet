<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\WebsiteText;

class OverOnsController extends Controller
{
    /**
     * Show events
     *
     * @return $this
     */
    public function getIndex() {
        try {
            $content = WebsiteText::where('textarea_name', 'overons')->firstOrFail();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        return view('overons')->with(compact('content'));
    }
}