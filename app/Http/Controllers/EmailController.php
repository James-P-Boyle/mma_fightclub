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
            'message' => 'nullable'
        ]);

        $toEmail = "jamesboyle9292@gmail.com"; 
        $subject = "Email from"  . " " .  $request->email;

        $message = $request->name . "," . "\n\nMessage: " . $request->message;

        try {
            Mail::to($toEmail)->send(new TestEmail($subject, $message));
            dd('error');
            session()->flash('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            dd($e);
            session()->flash('error', 'Failed to send email. Please try again.');
        }
    
        return redirect()->back();
    }
}
