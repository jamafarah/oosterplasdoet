<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudieFormreuqest;
use Mail;
use App\WebsiteText;
use App\GunbanenInschrijvingen;
use Illuminate\Http\Request;
use App\Http\Requests\GunbaanFormRequest;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests\StudieFormRequest;
use App\Studie;

class StudiebegeleidingController extends Controller
{
    public function index()
    {
        $content = WebsiteText::where('textarea_name', 'studiebegeleiding')->firstOrFail();
        return view('studiebegeleiding')->with(compact('content'));
    }
    public function create()
    {
        return view('studiebegeleidingSignUp');
    }

    public function signup(StudieFormRequest $request)
    {
        $this->validate($request, [
            'Naam' => 'required|min:2|max:255',
            'Email' => 'required|email|max:254',
            'TelefoonNummer' => 'required|min:2|max:20',
            'Geboortedatum',
            'Adres' => 'required|min:2|max:255',
            'Studie' => 'required|min:2|max:255'
        ]);
        $studiebegeleidingSignup = new Studie();
        $studiebegeleidingSignup->fill($request->all());
        $studiebegeleidingSignup->save();




        \Mail::send('mails.studie',
            [
                'studiebegeleidingSignup' => $studiebegeleidingSignup
            ], function($message) use ($studiebegeleidingSignup)
            {
                $message->from('OosterplasGOET@OosterplasGOET.nl');
                $message->to($studiebegeleidingSignup->Email,$studiebegeleidingSignup->Naam)->subject('Inschrijving studiebegeleiding compleet');
            });

        \Mail::send('mails.studiebegeleiding',
            [
                'studiebegeleidingSignup' => $studiebegeleidingSignup
            ], function($message) use ($studiebegeleidingSignup)
            {
                $message->from($studiebegeleidingSignup->Email);
                $message->to('OosterplasGOET@OosterplasGOET.nl',$studiebegeleidingSignup->Naam)->subject('Nieuwe inschrijving studiebegeleiding');
            });

        Session::flash('success', 'Uw aanvraag is verzonden');

        return redirect('studiebegeleiding');


    }


}
