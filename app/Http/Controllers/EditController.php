<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NewsFormRequest;


class EditController extends Controller
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
            return view('admin/admin')->with(compact('user'));
        }
        else{
            return redirect('/');
        }
    }

    public function newsindex()
    {
        try {
            $news = News::all();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        if ($this->isadmin()) {
            return view('admin/edit/news/index')->with(compact('news'));
        }
        else
        {
            return redirect('/');
        }
    }

    public function addnews()
    {
        if ($this->isadmin()) {
            return view('admin/edit/news/create');
        }
        else
        {
            return redirect('/');
        }
    }

    public function createnews(NewsFormRequest $request)
    {
        $createnews = new News();
        $createnews->fill($request->all());
        $createnews->save();
        return redirect('editnews');
    }

    public function changenews($id) {
        try {
            $news = News::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('admin/edit/news/edit')->with(compact('news'));
    }



    public function updatenews(NewsFormRequest $request)
    {
        $news = News::findOrFail($request->id);
        $news->fill($request->all());
        $news->save();
        return redirect('editnews');

    }

    public function deletenews($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect('editnews');

    }

    public function editevent()
    {
        if ($this->isadmin()) {
            return view('admin/edit/event/index');
        }
        else
        {
            return redirect('/');
        }
    }


    public function editsponsor()
    {
        if ($this->isadmin()) {
            return view('admin/edit/sponsor/index');
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
