<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller


{
    public function create(){
        return view('contact');
    }

   
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'title' => 'required',
        'message' => 'required'
    ]);

    Contact::create($validated);

    $details = [
        'name' => $validated['name'],
        'email' => $validated['email'],
        'phone' => $validated['phone'],
        'title' => $validated['title'],
        'message' => $validated['message']
    ];

    Mail::to('contact@manutrade.com')->send(new ContactMail($details));

    return redirect()->route('contact.create')->with('success', 'Message sent successfully!');
}
}