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
            'category' => 'required|string',
        ]);

        // Prepare the email data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->mobile_number,
            'service' => $request->category,
        ];
        try {
            // Send the email
            Mail::to('pramodsharma2696@gmail.com')->send(new sendQuoteMail($data));
            // Return a JSON response
            return response()->json(['success' => true, 'message' => 'Your message has been sent successfully!']);
        } catch (\Exception $e) {
            // Handle any exceptions that may occur
            return response()->json(['success' => false, 'message' => 'Failed to send email. Please try again later.'], 500);
        }
    }
}
