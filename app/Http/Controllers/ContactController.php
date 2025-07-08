<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Email;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_phone()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_phone(Request $request)
    {
        //dd($request->collect());

        $phone = new Phone;
        $phone->number = $request->input('number');
        $phone->main = $request->input('main');
        if($request->input('main') == '1')
            Phone::query()->update(['main' => 0]);
        $phone->save();

        return redirect(route('index'))->with('success', 'Número registrado');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create_email()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_email(Request $request)
    {
        $email = new Email;
        $email->email = $request->input('email');
        $email->main = $request->input('main');
        if($request->input('main') == '1')
            Email::query()->update(['main' => 0]);
        $email->save();

        return redirect(route('index'))->with('success', 'Correo registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_phone(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_phone(Request $request, Phone $phone)
    {
        $phone->number = $request->input('number');
        $phone->save();

        return redirect(route('index'))->with('success', 'Número editado');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_email(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_email(Request $request, Email $email)
    {
        $email->email = $request->input('email');
        $email->save();

        return redirect(route('index'))->with('success', 'Correo editado');
    }

    public function main_phone(Phone $phone)
    {
        Phone::query()->update(['main' => 0]);
        $phone->main = 1;
        $phone->save();

        return redirect(route('index'))->with('success', 'Número principal');
    }

    public function main_email(Email $email)
    {
        Email::query()->update(['main' => 0]);
        $email->main = 1;
        $email->save();

        return redirect(route('index'))->with('success', 'Número principal');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy_phone(Phone $phone)
    {
        if($phone->main == 1)
        {
            $ph = Phone::where('main','<>',1)->first();
            if($ph)
            {
                $ph->main = 1;
                $ph->save();        
            }
        }
        $phone->delete();
        return redirect(route('index'))->with('success', 'Número eliminado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_email(Email $email)
    {
        if($email->main == 1)
        {
            $em = Email::where('main','<>',1)->first();
            if($em)
            {
                $em->main = 1;
                $em->save();        
            }
        }
        $email->delete();
        return redirect(route('index'))->with('success', 'Correo eliminado');
    }
}
