<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebsiteTextFormRequest;
use App\News;
use App\Event;
use App\Signup;
use App\WebsiteText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NewsFormRequest;
use App\Http\Requests\EventFormRequest;


class PageEditController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $user = Auth::user();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        if ($user->isadmin) {
            return view('admin/pageedit/index');
        }
        else{
            return redirect('/');
        }
    }

    public function editpage($page)
    {
        try {
            $text = WebsiteText::where('textarea_name', $page)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        if ($this->isadmin()) {
            return view('admin/pageedit/gunbaanedit')->with(compact('text'));
        }
        else
        {
            return redirect('/');
        }
    }

    public function updatepagecontent(WebsiteTextFormRequest $request)
    {
        try {
            $text = WebsiteText::where('textarea_name', $request->textarea_name)->firstOrFail();
            $text->fill($request->all());
            $text->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        if ($this->isadmin()) {
            return view('admin/pageedit/gunbaanedit')->with(compact('text'));
        }
        else
        {
            return redirect('/');
        }
    }

    public function isadmin()
    {
        try {
            $user = Auth::user();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        if ($user->isadmin) {
            return true;
        }
        else{
            return false;
        }
    }


}
