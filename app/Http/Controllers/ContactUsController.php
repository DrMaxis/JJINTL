<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use App\Mail\ConfirmEmailSentToJJ;
use App\Mail\ContactRequestRecieved;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {


        try {


            $validator = $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|max:255',
                'company' => 'required|max:255',
                'subject' => 'required|max:255',
                'message' => 'required|max:60000',
            ]);
            $email = $this->addToEmailsTable($request, null);

            Mail::send(new ConfirmEmailSentToJJ($email));
            Mail::send(new ContactRequestRecieved($email));
                




            if (Mail::failures()) {
                return back()->withErrores('Errors', 'A problem occured when sending your email');
            }

            return redirect()->route('confirm-contact', ['email' => $request->email])->with('success_message', 'Email sent. We will reach out to you soon!');
        } catch (Exception $e) {
            $this->addToEmailsTable($email, $e->getMessage());
            return back()->withErrores('Error ' . $e->getMessage());
        }
    }


    protected function addToEmailsTable($request, $error)
    {

        $email = new Email;
        $email = Email::create([
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return $email;
    }


    protected function confirm($email)
    {
        if (!session()->has('success_message')) {
            return redirect('/');
        }

        $email = Email::where('email', '=', $email)->first();

        return view('confirmContact')->with([
            'email' => $email,

        ]);
    }
}
