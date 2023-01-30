<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Models\Contact;

class ContactController extends Controller
{
    public function contact_edit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'  => 'required',
            'name'   => 'required',
            'host'   => 'required',
            'encryption'    => 'required',
            'port'          => 'required',
            'username'      => 'required',
            'password'      => 'required',
        ]);

        if ($validator->fails()) {
            return getError();
        }

        $contact = Contact::where('id', 1)->first();
        $contact->update($request->except('_method', '_token'));
        return back();
    }

    /*/ public function mail($user)
    {
        $mail = Contact::find(1);

        $name = $user->name;
        $email = $user->email;
        $sender = $mail->email;
        $subject = $mail->subject;
        $message = $mail->message;
        $message = 'Testing';

        Mail::send('admin.mail.welcomeNotification', ['name' => $name, 'subject' => $subject, 'messages' => $message], function ($message) use ($email, $sender) {
            $message->sender($sender)->to($email)->subject('HSTUDIO');
        });
    }*/
}
