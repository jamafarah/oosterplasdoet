<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedewerkerFormRequest;
use App\Medewerker;
use App\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EventFormRequest;


class MedewerkerController extends Controller
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
        try {
            $medewerkers = Medewerker::all();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        if ($user->isadmin) {
            return view('admin/edit/medewerker/index')->with(compact('medewerkers'));
        }
        else{
            return redirect('/');
        }
    }



    public function addmedewerker()
    {
        if ($this->isadmin()) {
            return view('admin/edit/medewerker/create');
        }
        else
        {
            return redirect('/');
        }
    }

    public function createmedewerker(MedewerkerFormRequest $request)
    {
        $this->validate($request, [

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $image = $request->file('img');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/medewerker');
        $image->move($destinationPath, $input['imagename']);

        $createmedewerker = new Medewerker();
        $createmedewerker->fill($request->all());
        $createmedewerker->fill(['img' => $input['imagename']]);
        $createmedewerker->save();
        return redirect('editmedewerker');
    }

    public function changemedewerker($id) {
        try {
            $medewerker = Medewerker::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('admin/edit/medewerker/edit')->with(compact('medewerker'));
    }



    public function updatemedewerker(MedewerkerFormRequest $request)
    {
        $medewerker = Medewerker::findOrFail($request->id);

        $this->validate($request, [

            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $image = $request->file('img');
        if($image!=null)
        {

            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/medewerker');
            $image->move($destinationPath, $input['imagename']);
            $curimg=$input['imagename'];
        }
        else
        {
            $curimg =$medewerker->img;
        }

        $medewerker->fill($request->all());
        $medewerker->fill(['img' => $curimg]);
        $medewerker->save();
        return redirect('editmedewerker');

    }

    public function deletemedewerker($id)
    {
        $medewerker = Medewerker::findOrFail($id);
        $medewerker->delete();
        return redirect('editmedewerker');

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
