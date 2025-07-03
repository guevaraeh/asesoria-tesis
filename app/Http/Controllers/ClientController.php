<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Email;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        
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

        return view('pages.services', ['main_phone' => $main_phone, 'main_email' => $main_email]);
    }
}
