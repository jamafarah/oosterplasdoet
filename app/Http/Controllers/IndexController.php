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
                'emailaddress'  => 'required|email|max:255',
                'first_name'    => 'required|min:2|max:255',
                'last_name'     => 'required|min:2|max:255',
                'message'       => 'required|min:2|max:10000'
            ]);


            $ip             = $request->ip();
            $name           = $request->get('first_name') . ' ' . $request->get('last_name');
            $emailaddress   = $request->get('emailaddress');
            $message        = $request->get('message');

            Session::flash("success", "Uw bericht is verzonden");
            $this->sendContactEmail($ip, $emailaddress, $name , $message);
            return view('index');
        } catch (ValidationException $e) {
            $request->session()->forget('success');
            Session::flash("error", "Een of meerdere velden kloppen niet");
            return view('index');
        }
    }

    private function sendContactEmail($ip, $emailaddress, $name, $message) {
        Mail::send('mails.contact', [
            'ip' => $ip,
            'name' => $name,
            'msg' => $message,
        ], function ($m) use ($emailaddress, $name) {
            $m->from($emailaddress, $name);
            $m->to(config('app.emails.contact'), "Oosterplas")->subject('Contactformulier');
        });
    }
}
