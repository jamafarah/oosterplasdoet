<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponsorFormRequest;
use App\Sponsor;
use App\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EventFormRequest;
use Validator;
use Session;
use Input;


class SponsorController extends Controller
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
            $sponsors = Sponsor::all();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
        if ($user->isadmin) {
            return view('admin/edit/sponsor/index')->with(compact('sponsors'));
        }
        else{
            return redirect('/');
        }
    }



    public function addsponsor()
    {
        if ($this->isadmin()) {
            return view('admin/edit/sponsor/create');
        }
        else
        {
            return redirect('/');
        }
    }

    public function createsponsor(SponsorFormRequest $request)
    {
        $rules = [
            'img'  => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            Session::flash('error', 'Sponsoren moeten een afbeelding hebben');
            return redirect()->route('addsponsor')->withInput()->withErrors($validator);
        }
        $this->validate($request, [

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $image = $request->file('img');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/sponsor');
        $image->move($destinationPath, $input['imagename']);

        $createsponsor = new Sponsor();
        $createsponsor->fill($request->all());
        $createsponsor->fill(['img' => $input['imagename']]);
        $createsponsor->save();
        return redirect('editsponsor');
    }

    public function changesponsor($id) {
        try {
            $sponsor = Sponsor::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('admin/edit/sponsor/edit')->with(compact('sponsor'));
    }



    public function updatesponsor(SponsorFormRequest $request)
    {
        $sponsor = Sponsor::findOrFail($request->id);

        $this->validate($request, [

            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $image = $request->file('img');
        if($image!=null)
        {

            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/sponsor');
            $image->move($destinationPath, $input['imagename']);
            $curimg=$input['imagename'];
        }
        else
        {
            $curimg =$sponsor->img;
        }

        $sponsor->fill($request->all());
        $sponsor->fill(['img' => $curimg]);
        $sponsor->save();
        return redirect('editsponsor');

    }

    public function deletesponsor($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->delete();
        return redirect('editsponsor');

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
