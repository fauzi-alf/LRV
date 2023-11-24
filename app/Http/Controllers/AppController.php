<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinations;

class AppController extends Controller
{
    public function home(){
        return view("home");
    }
    public function data_wisata(){
        $destinations = Destinations::get();

        $data = ([
            "destinations" => $destinations,
        ]);
        return view("data_wisata", $data);
    }
    public function hapus_wisata($id){
        Destinations::where("id",$id)->delete();
        return redirect("data-wisata");
    }
    public function tambah_wisata(){
        return view("tambah_wisata");
    }
    public function proses_tambah_wisata(Request $request){
        $name = $request->name;
        $location = $request->location;
        $details = $request->details;
        $day_open = $request->day_open;
        $time_open = $request->time_open;
        $pricing = $request->pricing;

        Destinations::create([
            "name" => $name,
            "location" => $location,
            "details" => $details,
            "day_open" => $day_open,
            "time_open" => $time_open,
            "pricing" => $pricing
        ]);

        session()->flash("pesan","Berhasil Ditambah");

        return redirect('data-wisata');
    }
    public function edit_wisata($id){
        $destinations = Destinations::find($id);
    
        if (!$destinations) {
            abort(404);
        }
    
        return view("edit_wisata", ['destinations' => $destinations]);
    }
    public function proses_edit_wisata(Request $request){
        $id = $request->id;
        $name = $request->name;
        $location = $request->location;
        $details = $request->details;
        $day_open = $request->day_open;
        $time_open = $request->time_open;
        $pricing = $request->pricing;
        

        Destinations::where("id",$id)->update([
            "name" => $name,
            "location" => $location,
            "details" => $details,
            "day_open" => $day_open,
            "time_open" => $time_open,
            "pricing" => $pricing
            
        ]);

        session()->flash("pesan","Data Berhasil Diedit");

        return redirect("data-wisata/".$id."/edit");
    }
}
