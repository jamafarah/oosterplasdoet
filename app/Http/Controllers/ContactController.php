<?php

namespace App\Http\Controllers;

use Session;
use Mail;
use Illuminate\Http\Request;
use Validator;
use Input;

class ContactController extends Controller
{
    /**
     * Validate idea form and send email to oosterplas
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postIdea(Request $request) {

        $rules = [
            'emailaddress'  => 'required|email|max:255',
            'first_name'    => 'required|min:2|max:255',
            'last_name'     => 'required|min:2|max:255',
            'message'       => 'required|min:2|max:10000'
        ];

        $validator = Validator::make($request->all(), $rules);

        // Check if validators fails
        if ($validator->fails()) {
            Session::flash('error', 'Een of meerdere velden kloppen niet');
            return redirect()->route('index')->withInput()->withErrors($validator);
        }


        // Prepare variables
        $ip             = $request->ip();
        $name           = $request->get('first_name') . ' ' . $request->get('last_name');
        $emailaddress   = $request->get('emailaddress');
        $message        = $request->get('message');

        // Send email
        $this->sendContactEmail($ip, $emailaddress, $name, $message);

        // Flash
        Session::flash('success', 'Uw bericht is verzonden');

        return redirect()->route('index');
    }

    /**
     * Send contact email to oosterplas
     *
     * @param $ip IP
     * @param $emailaddress Email
     * @param $name Full name
     * @param $msg Message
     */
    private function sendContactEmail($ip, $emailaddress, $name, $msg) {
        Mail::send('mails.contact', [
            'ip' => $ip,
            'name' => $name,
            'msg' => $msg,
        ], function ($m) use ($emailaddress, $name) {
            $m->from($emailaddress, $name);
            $m->to(config('app.emails.contact'), 'Oosterplas')->subject('Contactformulier');
        });
    }
}
