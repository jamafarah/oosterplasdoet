<?php

namespace App\Http\Controllers;

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
        DB::table('gunbanen_inschrijvingen')->insert(
            ['Naam' => $request->get('naam'),
            'Email' => $request->get('email'),
            'Geboortedatum' => $request->get('geboortedatum'),
            'TelefoonNummer' => $request->get('telefoon'),
            'Adres' => $request->get('adres'),
            'Studie' => $request->get('studie'),
            'CV' => $request->get('cv')]
        );
        return redirect('gunbanen');


    }


}
