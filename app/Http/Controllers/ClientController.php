<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Email;
use App\Models\Service;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $main_phone = Phone::where('main',1)->first();
        $main_email = Email::where('main',1)->first();

        return view('pages.main', ['main_phone' => $main_phone, 'main_email' => $main_email]);
    }

    public function about()
    {
        $main_phone = Phone::where('main',1)->first();
        $main_email = Email::where('main',1)->first();

        return view('pages.about', ['main_phone' => $main_phone, 'main_email' => $main_email]);
    }

    public function contact()
    {
        $main_phone = Phone::where('main',1)->first();
        $main_email = Email::where('main',1)->first();

        $phones = Phone::get();
        $emails = Email::get();

        return view('pages.contact', ['main_phone' => $main_phone, 'main_email' => $main_email, 'phones' => $phones, 'emails' => $emails]);
    }

    public function services()
    {
        $main_phone = Phone::where('main',1)->first();
        $main_email = Email::where('main',1)->first();

        $services = Service::orderBy('created_at','DESC')->paginate(5);

        return view('pages.services', ['main_phone' => $main_phone, 'main_email' => $main_email, 'services' => $services]);
    }

    public function sendEmail()
    {
        $data = [
            'name' => 'John Doe',
            'message' => 'This is a test email from Laravel 12.'
        ];

        Mail::to('guevara.eh@gmail.com')->send(new ContactEmail($data));

        return response()->json(['success' => 'Email sent successfully.']);
    }

    public function contact_email(Request $request)
    {
        /*"first-name" => "Elard"
        "last-name" => "Guevara"
        "your-email" => "guevara.eh@gmail.com"
        "your-phone" => "951677400"
        "your-message" => "mensaje"*/
        //dd($request->collect());
        
        $data = [
            'name' => $request->input('last-name') . ' ' . $request->input('first-name'),
            'message' => $request->input('your-message'),
        ];

        /*Mail::to('guevara.eh@gmail.com')->send(new ContactEmail($data));

        return redirect(route('contact'))->with('success', 'Enviado');*/

        try {
            Mail::to('guevara.eh@gmail.com')->send(new ContactEmail($data));
            return redirect(route('contact'))->with('success', 'Enviado');
        } catch (\Exception $e) {
            return redirect(route('contact'))->with('error', 'No enviado');
        }
    }
}
