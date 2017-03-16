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
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class EventController extends Controller {

    public function index() {
        try {
            $events = Event::all();

        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('event.index')->with(compact('events'));
    }

    public function show(Request $request, $id) {
        try {
            $event = Event::findOrFail($id);


        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('event.show')->with(compact('event'));
    }

    public function signup(Request $request, $id) {

    }
}