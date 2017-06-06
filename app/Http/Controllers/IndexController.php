<?php

namespace App\Http\Controllers;

use App\News;
use App\Event;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Session;
use Mail;
use App\WebsiteText;
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
            $events = Event::orderByDesc('created_at')->limit(3)->get();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        try {
            $news = News::orderByDesc('created_at')->limit(3)->get();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        $gunbanen = Websitetext::where('textarea_name', 'homegunbanen')->firstOrFail();
        $studiebegeleiding = Websitetext::where('textarea_name', 'homestudiebegeleiding')->firstOrFail();
        $content = WebsiteText::where('textarea_name', 'homepagina')->firstOrFail();
        return view('index')->with(compact('events','news','content','gunbanen','studiebegeleiding'));
    }
}