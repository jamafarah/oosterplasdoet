<?php

namespace App\Http\Controllers;

use Mail;
use App\GunbanenInschrijvingen;
use Illuminate\Http\Request;
use App\Http\Requests\GunbaanFormRequest;
use Illuminate\Support\Facades\DB;

class GunbaanController extends Controller
{
    public function create()
    {
        return view('gunbanenSignUp');
    }

    public function signup(GunbaanFormRequest $request)
    {
        $this->validate($request, [
        'Naam' => 'required|min:2|max:255',
		'Email' => 'required|email|max:254',
		'TelefoonNummer' => 'required|min:2|max:20',
		'Geboortedatum',
		'Adres' => 'required|min:2|max:255',
		'Studie' => 'required|min:2|max:255',
		'cv'
        ]);
        $gunbaanSignup = new GunbanenInschrijvingen();
        $gunbaanSignup->fill($request->all());
        $gunbaanSignup->save();




        \Mail::send('mails.gunbaan',
            [
                'Naam' => $gunbaanSignup->Naam,
                'Email' => $gunbaanSignup->Email,
                'Geboortedatum'=> $gunbaanSignup->Geboortedatum,
                'TelefoonNummer'=> $gunbaanSignup->TelefoonNummer,
                'Adres'=> $gunbaanSignup->Adres,
                'Studie'=> $gunbaanSignup->Studie
            ], function($message) use ($gunbaanSignup)
            {
                $message->from('OosterplasGOET@OosterplasGOET.nl');
                $message->to($gunbaanSignup->Email,$gunbaanSignup->Naam)->subject('Inschrijving Gunbanen compleet');
            });
        return redirect('gunbanen');


    }


}
