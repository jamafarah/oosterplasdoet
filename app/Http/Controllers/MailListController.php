<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Requests\MailFormRequest;
use App\MailListContact;


class MailListController extends Controller
{
    /**
     * Show events
     *
     * @return $this
     */
    public function signup(MailFormRequest $request)
    {
        $this->validate($request, [
            'Naam' => 'required|min:2|max:255',
            'Email' => 'required|email|max:254'
        ]);
        $mailcontact = new MailListContact();
        $mailcontact->fill($request->all());
        $mailcontact->save();
        return redirect('/');

    }
}