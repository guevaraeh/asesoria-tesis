<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Email;
use App\Models\Service;
use App\Models\General;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::get();
        $emails = Email::get();

        $general = null;
        $general = General::first();

        $main_phone = Phone::where('main',1)->first();
        $services = Service::orderBy('created_at','DESC')->get();

        return view('admin.app',['phones' => $phones, 'emails' => $emails, 'services' => $services, 'main_phone' => $main_phone, 'general' => $general]);
    }

    public function update(Request $request)
    {
        /*DB::table('generals')->updateOrInsert(
            ['id' => 1],
            [
                'description' => $request->input('description'), 
                'address' => $request->input('address'),
                'map' => $request->input('map'), 
                'cv' => $request->input('cv'),
                'facebook' => $request->input('facebook'), 
                'x' => $request->input('x'),
                'linkedin' => $request->input('linkedin'), 
                'instagram' => $request->input('instagram'),
            ],
        );*/

        /*$general = General::updateOrCreate(
            ['id' => 1],
            [
                'description' => $request->input('description'), 
                'address' => $request->input('address'),
                'map' => $request->input('map'), 
                'cv' => $request->input('cv'),
                'facebook' => $request->input('facebook'), 
                'x' => $request->input('x'),
                'linkedin' => $request->input('linkedin'), 
                'instagram' => $request->input('instagram'),
            ],
        );*/
        //dd($request);

        $general = General::first();
        if(!isset($general))
            $general = new General;

        $general->description = $request->input('description');
        $general->address = $request->input('address');
        $general->map = $request->input('map');
        //$general->cv = $request->input('cv');
        if($request->hasFile('cv'))
        {
            $filename = $request->file('cv')->getClientOriginalName();  
            $request->file('cv')->move(public_path('cv'), $filename);
            $general->cv = $filename;
        }
        $general->facebook = $request->input('facebook');
        $general->x = $request->input('x');
        $general->linkedin = $request->input('linkedin');
        $general->instagram = $request->input('instagram');
        $general->save();

        return redirect(route('index'))->with('success', 'Información actualizada');
    }

    public function download_cv()
    {
        $ruta = public_path("cv\Professional_CV_Jhon.pdf");
        if (file_exists($ruta)) {
            return response()->download($ruta);
            } else {
            abort(404, 'Archivo no encontrado.');
        }
    }
}
