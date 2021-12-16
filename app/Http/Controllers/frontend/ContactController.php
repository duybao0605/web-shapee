<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Http\Requests\ContactPostRequest;

class ContactController extends Controller
{
    //
    

    public function sendContact(ContactPostRequest $request){
        $contact = Contact::create([
            'userId'=> 1,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success', 'your message,here');   
    }

}
