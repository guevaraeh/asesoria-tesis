<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Email;
use App\Models\Service;

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
        $general = DB::table('generals')->first();

        $main_phone = Phone::where('main',1)->first();
        $services = Service::orderBy('created_at','DESC')->get();

        return view('admin.app',['phones' => $phones, 'emails' => $emails, 'services' => $services, 'main_phone' => $main_phone, 'general' => $general]);
    }

    public function update(Request $request)
    {
        DB::table('generals')->updateOrInsert(
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
        );

        /*$general = General::updateOrCreate(
            ['id' => 1],
            [
                'description' => $request->input('description'), 
                'address' => $request->input('location'),
                'map' => $request->input('map'), 
                'cv' => $request->input('cv'),
                'facebook' => $request->input('facebook'), 
                'x' => $request->input('x'),
                'linkedin' => $request->input('linkedin'), 
                'instagram' => $request->input('instagram'),
            ],
        );*/
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
