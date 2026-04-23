<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::raw($data['message'], function ($message) use ($data) {
            $message->to('christybanga07@gmail.com')
                    ->subject($data['subject'])
                    ->replyTo($data['email'], $data['name']);
        });

        return back()->with('success', 'Message envoyé avec succès !');
    }
}
