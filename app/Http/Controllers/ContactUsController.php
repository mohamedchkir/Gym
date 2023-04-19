<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class ContactUsController extends Controller
{

    public function contact()
    {
        return view('LayoutFrontEnd.contact.index');
    }

    function index(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];


        try {
            Mail::send('LayoutFrontEnd.contact.sendEmail', $data, function($message) use($data) {
                $message->to('inbox-id@inbox.mailtrap.io')->subject($data['message']);
                $message->from($data['email'], $data['name'].' '.$data['last_name']);
            });
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Oops! An error occurred while sending your message. Please try again later.');
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');

    }
}
