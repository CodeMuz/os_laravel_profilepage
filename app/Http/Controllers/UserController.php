<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function sendEmailReminder(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/contact')
                ->withInput()
                ->withErrors($validator);
        }

        $privatekey = env('NOCAPTCHA_SECRET');
        $resp = recaptcha_check_answer($privatekey,
            $_SERVER["REMOTE_ADDR"],
            $_POST["recaptcha_challenge_field"],
            $_POST["recaptcha_response_field"]);

        if (!$resp->is_valid) {
            // What happens when the CAPTCHA was entered incorrectly
            $request->session()->flash('alert-danger', 'CAPTCHA was entered incorrectly');

        } else {
            $email = new \stdClass();
            $email->name = $request->name;
            $email->from = $request->email;
            $email->subject = $request->subject;
            $email->message = $request->message;

            Mail::send('emails.contact_email', ['body' => $email->message], function ($m) use ($email) {

                $m->from($email->from, $email->name);

                //Not needed. All email is routing to app owner via config/mail.php
                //$m->to('mrwynnes@gmail.com', $email->name);

                $m->subject($email->subject);
            });

            $request->session()->flash('alert-success', 'Your message has been sent successfully!');


        }

        return redirect('/contact');


    }
}