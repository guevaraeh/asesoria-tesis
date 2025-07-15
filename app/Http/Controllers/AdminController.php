<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Email;
use App\Models\Service;
use App\Models\Comment;
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
        $comments = Comment::orderBy('created_at','DESC')->get();

        return view('admin.app',['phones' => $phones, 'emails' => $emails, 'services' => $services, 'comments' => $comments, 'main_phone' => $main_phone, 'general' => $general]);
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
        //$request->input('description.text') = explode("\\r\\n", $request->input('description.text'));
        //dd(explode("\r\n", $request->input('description.text')));

        $general = General::first();
        if(!isset($general))
            $general = new General;

        $general->description = ["main" => $request->input('description.main'), "text" => explode("\r\n", $request->input('description.text'))];
        $general->address = $request->input('address');

        /*$general->map = $request->input('map');
        if (preg_match('/@(-?\d+\.\d+),(-?\d+\.\d+)/', $request->input('map'), $matches)) {
            $lat = $matches[1];
            $lng = $matches[2];
            $general->map_embed = "https://www.google.com/maps?q={$lat},{$lng}&z=18&output=embed";
        }*/

        $general->map = $request->input('map');
        $general->map_embed = null;
        $name = null;
        if (preg_match('#/place/([^/@]+)#', $request->input('map'), $nameMatch)) {
            $name = urldecode(str_replace('+', ' ', $nameMatch[1]));
        }
        // Extraer coordenadas y zoom
        if (preg_match('/@(-?\d+\.\d+),(-?\d+\.\d+),(\d+)z/', $request->input('map'), $coordMatch)) {
            $lat = $coordMatch[1];
            $lng = $coordMatch[2];
            $zoom = $coordMatch[3];

            if (!$name) {
                // Si no hay nombre, solo usar lat/lng
                $query = "$lat,$lng";
            } else {
                // Nombre con espacios convertidos a '+', para URL
                $query = urlencode($name);
            }

            // Construir link embed con q=nombre y ll=lat,lng (para centrar mapa)
            // &output=embed para iframe
            $general->map_embed = "https://www.google.com/maps?q={$query}&ll={$lat},{$lng}&z={$zoom}&output=embed";
        }


        //$general->map = $request->input('map');
        if($request->hasFile('cv'))
        {
            $filename = $request->file('cv')->getClientOriginalName();  
            $request->file('cv')->move(public_path('cv'), $filename);
            $general->cv = $filename;
        }

        $general->renacyt = $request->input('renacyt');

        $general->facebook = $request->input('facebook');
        $general->x = $request->input('x');
        $general->linkedin = $request->input('linkedin');
        $general->instagram = $request->input('instagram');
        $general->save();

        return redirect(route('index'))->with('success', 'Información actualizada');
    }

    public function download_cv()
    {
        $cv = General::first()->cv;
        $ruta = public_path("cv/".$cv);
        if (file_exists($ruta)) {
            return response()->download($ruta);
            } else {
            abort(404, 'Archivo no encontrado.');
        }
    }
}
