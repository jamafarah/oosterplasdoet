<?php

namespace App\Http\Controllers;

use Session;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class IndexController extends Controller
{
    public function getIndex() {
        return view('index');
    }

    public function postIndex(Request $request) {
        try {
            $this->validate($request, [
                'emailaddress' => 'required|email|max:255',
                'first_name' => 'required|min:2|max:255',
                'last_name' => 'required|min:2|max:255',
                'message' => 'required|min:2|max:10000'
            ]);


            $ip = $request->ip();
            $name = Input::get('first_name') . ' ' . Input::get('last_name');
            $emailaddress = Input::get('emailaddress');
            $message = Input::get('message');
            $this->sendContactEmail($ip, $name, $emailaddress, $message);

            Session::flash("success", "Uw bericht is verzonden");

        } catch (ValidationException $e) {
            Session::flash("error", "Er is een fout opgetreden bij het contact opnemen");
            return view('index');
        }
    }

    private function sendContactEmail($ip, $emailaddress, $name, $message) {
        // Generate email
        Mail::send('mails.contactOosterplas', [
            'ip' => $ip,
            'name' => $name,
            'message' => $message,
        ], function ($m) use ($name, $emailaddress) {
            $m->from($emailaddress, $name);

            $m->to(config('app.email'), "Oosterplas")->subject('Contactformulier');
        });
    }
}
