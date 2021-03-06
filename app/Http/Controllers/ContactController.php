<?php

namespace App\Http\Controllers;

use App\Message;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    function index()
    {

        return view('contact');
    }

    function uploadMessage(Request $request)
    {
        $user = Sentinel::getUser();
        $message = new Message;
        $message->user_id = $user->id;
        $message->from_mail = $request->email;
        $message->user_name = $request->name;
        $message->message = $request->msg;
        $message->tel_number = $request->phone;
        $message->save();

        Session::put('success_contact',"success_contact");
        return redirect()->back();


    }
}
