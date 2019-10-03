<?php

namespace Kazak71\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Kazak71\Contact\Mail\ContactMail;
use Kazak71\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function store(Request $request){
        Mail::to('kazak.71@gmail.com')->send(new ContactMail($request->name, 'us@example.com', 'Laravel'));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
