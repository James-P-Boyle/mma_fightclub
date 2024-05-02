<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'tires_needed' => 'required',
            'message' => 'nullable'
        ]);

        $toEmail = "jamesboyle9292@gmail.com"; 
        $subject = $request->tires_needed  . " " . " tires needed from"  . " " .  $request->location;

        $message = $request->name . "," . " " . $request->email . "\n\nMessage: " . $request->message; // Combine the form data into a message

        try {
            Mail::to($toEmail)->send(new TestEmail($subject, $message));
    
            session()->flash('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to send email. Please try again.');
        }
    
        return redirect()->back();
    }
}
