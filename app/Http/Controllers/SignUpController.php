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
use Carbon\Carbon;
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

        return view('forms.signup')->with(compact('event'));
    }

    public function postSignUp(Request $request, $id) {
        // Validate fields
        try {
            $event = Event::findOrFail($id);

            $this->validate($request, [
                'emailaddress' => 'required|max:255',
                'first_name' => 'required|min:2|max:255',
                'last_name' => 'required|min:2|max:255',
                'birthdate' => 'required|date',
                'appendices.*.first_name' => 'required|min:2|max:255',
                'appendices.*.last_name' => 'required|min:2|max:255',
                'appendices.*.birthdate' => 'required|date',
            ]);


            $signup = new Signup();
            $signup->event_id = 1;
            $signup->emailaddress = $request->get("emailaddress");
            $signup->first_name = $request->get("first_name");
            $signup->last_name = $request->get("last_name");
            $signup->birthdate = '2017-03-07';

            $signup->save();


            $signupAppendices = [];
            foreach($request->get('appendices') AS $appendix) {
                $signupAppendix = new SignupAppendix();
                $signupAppendix->fill($appendix);
                $signupAppendix->signup_id = $signup->id;

                $signupAppendix->save();
//                $signup->appendices()->save($signupAppendix);
            }



            // Generate email


            // Send email

        } catch (ModelNotFoundException $e) {
            abort(404);
        } catch (ValidationException $e) {
            //dd($e->validator->failed());
            return view('forms.signup')->with(compact('event'));
        }

    }
} 