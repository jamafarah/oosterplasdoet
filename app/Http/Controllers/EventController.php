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

    /**
     * Show events
     *
     * @return $this
     */
    public function index() {
        try {
            $events = Event::orderBy('startDate')->get();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('event.index')->with(compact('events'));
    }

    /**
     * Show event
     *
     * @param Request $request
     * @param $id
     * @return $this
     */
    public function show($id) {
        try {
            $event = Event::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

        return view('event.show')->with(compact('event'));
    }
}