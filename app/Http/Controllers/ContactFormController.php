<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function sendMail(Request $request)
    {
        $recipient = "abdllahbounafaa@gmail.com";
        Mail::to($recipient)->send(new ContactMail($request));
        return back()->with('success', "Email send successfuly, we will answer you as soon as possible");
    }
}
