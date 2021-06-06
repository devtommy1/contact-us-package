<?php

namespace Tal7aouy\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Mail;
use Tal7aouy\Contact\Mail\ContactMail;
use Tal7aouy\Contact\Models\Contact;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('talk::contact');
    }
    public function sendTo(Request $request)
    {
        try{
      Mail::to(config('talk.send_mail_to'))->send(new ContactMail($request->message,$request->fullname));
        Contact::create($request->all());
        return redirect()->route('contact-us');
        }catch(Exception $ex){
         return $ex->getMessage();
        }
    }
}
