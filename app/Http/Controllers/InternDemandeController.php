<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InternDemandeController extends Controller
{
    public function sendMessage () {

        Mail::send('emails.forget-password', compact('token'), function($message) {
            $message->to(request()->email);
            $message->subject('Demande de stage');
        });
    }
}
