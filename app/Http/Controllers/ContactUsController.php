<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class ContactUsController extends Controller
{
    function index(Request $request)

    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->message,
        ];


        try {
            Mail::send('LayoutFrontEnd.contact.sendEmail', $data, function($message) use($data) {
                $message->to('inbox-id@inbox.mailtrap.io')->subject($data['subject']);
                $message->from($data['email'], $data['first_name'].' '.$data['last_name']);
            });
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Oops! An error occurred while sending your message. Please try again later.');
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');

    }
}
