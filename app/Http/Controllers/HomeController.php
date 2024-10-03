<?php

namespace App\Http\Controllers;

use App\Mail\sendQuoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function sendContactMail(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'service' => 'required|string',
        ]);

        // Prepare the email data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->mobile_number,
            'service' => $request->service,
        ];
        // Send the email
        Mail::to(config('pramodsharma2696@gmail.com'))->send(new sendQuoteMail($data));
        // Mail::to(config('mail.from.address'))->send(new sendQuoteMail($data));
        // Redirect or return response
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
