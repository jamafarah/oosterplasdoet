<?php

namespace App\Http\Controllers;

use App\News;
use App\Event;
use App\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NewsFormRequest;
use App\Http\Requests\EventFormRequest;


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
        $this->validate($request, [

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $image = $request->file('img');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/nieuws');
        $image->move($destinationPath, $input['imagename']);

        $createnews = new News();
        $createnews->fill($request->all());
        $createnews->fill(['img' => $input['imagename']]);
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

        $this->validate($request, [

            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $image = $request->file('img');
        if($image!=null)
        {

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/nieuws');
        $image->move($destinationPath, $input['imagename']);
            $curimg=$input['imagename'];
        }
        else
        {
            $curimg =$news->img;
        }

        $news->fill($request->all());
        $news->fill(['img' => $curimg]);
        $news->save();
        return redirect('editnews');

    }

    public function deletenews($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect('editnews');

    }



    public function eventindex()
    {
        try {
            $event = Event::all();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        if ($this->isadmin()) {
            return view('admin/edit/event/index')->with(compact('event'));
        }
        else
        {
            return redirect('/');
        }
    }

    public function addevent()
    {
        if ($this->isadmin()) {
            return view('admin/edit/event/create');
        }
        else
        {
            return redirect('/');
        }
    }

    public function createevent(EventFormRequest $request)
    {
        $startdate = date('Y-m-d H:i:s', strtotime("$request->startDate $request->startTime"));
        $enddate = date('Y-m-d H:i:s', strtotime("$request->endDate $request->endTime"));
        $createevent = new Event();
        $createevent->fill($request->all());
        $createevent->fill(['startDate' => $startdate]);
        $createevent->fill(['endDate' => $enddate]);
        $createevent->save();
        return redirect('editevent');
    }

    public function changeevent($id) {
        try {
            $event = Event::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('admin/edit/event/edit')->with(compact('event'));
    }

    public function signupsevent($id) {
        try {
            $event = Event::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('admin/edit/event/signups')->with(compact('event'));
    }



    public function updateevent(EventFormRequest $request)
    {
        $startdate = date('Y-m-d H:i:s', strtotime("$request->startDate $request->startTime"));
        $enddate = date('Y-m-d H:i:s', strtotime("$request->endDate $request->endTime"));
        $event = Event::findOrFail($request->id);
        $event->fill($request->all());
        $event->fill(['startDate' => $startdate]);
        $event->fill(['endDate' => $enddate]);
        $event->save();
        return redirect('editevent');

    }

    public function deleteevent($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect('editevent');

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
