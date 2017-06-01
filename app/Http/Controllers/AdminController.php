<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
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

    public function logout()
    {
        auth()->logout();
        return redirect('beheerder');
    }


}
