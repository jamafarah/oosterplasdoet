<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\WebsiteText;

class PartnerController extends Controller
{
    /**
     * Show events
     *
     * @return $this
     */
    public function getIndex() {
        try {
            $content = WebsiteText::where('textarea_name', 'partners')->firstOrFail();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        return view('partners')->with(compact('content'));
    }
}