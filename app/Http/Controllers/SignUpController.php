<?php
/**
 * Created by PhpStorm.
 * User: mystique
 * Date: 05/03/17
 * Time: 22:06
 */

namespace App\Http\Controllers;

use App\Event;
use App\Signup;
use App\SignupAppendix;
use Mail;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class SignUpController extends Controller {

    public function getSignUp($id) {
        try {
            $event = Event::findOrFail($id);

        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('signup.signup')->with(compact('event'));
    }

    public function postSignUp(Request $request, $id) {
        // Validate fields
        try {
            $event = Event::findOrFail($id);

            $this->validate($request, [
                'emailaddress' => 'required|email|max:255',
                'first_name' => 'required|min:2|max:255',
                'last_name' => 'required|min:2|max:255',
                'birthdate' => 'required|date',
                'appendices.*.first_name' => 'required|min:2|max:255',
                'appendices.*.last_name' => 'required|min:2|max:255',
                'appendices.*.birthdate' => 'required|date',
            ]);


            $signup = new Signup();
            $signup->emailaddress = $request->get('emailaddress');
            $signup->first_name = $request->get('first_name');
            $signup->last_name = $request->get('last_name');
            $signup->birthdate = $request->get('birthdate');

            $event->signups()->save($signup);

            $signupAppendices = [];
            if (is_array($request->get('appendices'))) {
                foreach($request->get('appendices') AS $appendix) {
                    $signupAppendix = new SignupAppendix();
                    $signupAppendix->fill($appendix);
                    $signupAppendix->signup_id = $signup->id;

                    $signup->appendices()->save($signupAppendix);
                }
            }

        $this->sendSignupEmail($event, $signup, $signupAppendices);

            return view('signup.success')->with(compact('event'));
        } catch (ModelNotFoundException $e) {
            abort(404);
        } catch (ValidationException $e) {
            //dd($e->validator->failed());
            return view('signup.signup')->with(compact('event'));
        }

    }


    private function sendSignupEmail($event, Signup $signup, $signupAppendices) {
        // Send mail to organisation
        Mail::send('mails.signup', [
            'event' => $event,
            'signup' => $signup,
            'signupAppendices' => $signupAppendices,
        ], function ($m) use ($signup) {
            $m->from(config('app.emails.signup'), 'Oosterplas inschrijving');
            $m->to(config('app.emails.signup'), "Oosterplas")->subject('Inschrijving evenement');
        });

        // Send mail to signup
        Mail::send('mails.signupConfirmation', [
            'event' => $event,
            'signup' => $signup,
            'signupAppendices' => $signupAppendices,
        ], function ($m) use ($signup, $event) {
            $m->from(config('app.emails.signup'), 'Inschrijving ' . $event->name);
            $m->to($signup->emailaddress, $signup->getFullName())->subject('Inschrijving evenement');
        });
    }
}