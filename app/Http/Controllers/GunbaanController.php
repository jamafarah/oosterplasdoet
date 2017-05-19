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
                'gunbaanSignup' => $gunbaanSignup
            ], function($message) use ($gunbaanSignup)
            {
                $message->from('OosterplasGOET@OosterplasGOET.nl');
                $message->to($gunbaanSignup->Email,$gunbaanSignup->Naam)->subject('Inschrijving Gunbanen compleet');
            });

        \Mail::send('mails.gunbaaninschrijvingorg',
            [
                'gunbaanSignup' => $gunbaanSignup
            ], function($message) use ($gunbaanSignup)
            {
                $message->from($gunbaanSignup->Email);
                $message->to('OosterplasGOET@OosterplasGOET.nl',$gunbaanSignup->Naam)->subject('Nieuwe inschrijving Gunbanen');
            });
        return redirect('gunbanen');


    }


}
