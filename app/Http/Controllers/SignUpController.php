<?php
/**
 * Created by PhpStorm.
 * User: mystique
 * Date: 05/03/17
 * Time: 22:06
 */

namespace App\Http\Controllers;


class SignUpController extends Controller {

    public function getSignUp() {
        return view('pages.signup');
    }

    public function postSignUp() {
        // Validate fields
        // Send email


    }

} 