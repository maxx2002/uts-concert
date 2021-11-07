<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_home = "";
        $active_band = "active";
        $active_event = "";

        $bands = Band::all();

        return view('band.band', compact('active_home', 'active_band', 'active_event','bands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active_home = "";
        $active_band = "active";
        $active_event = "";

        $bands = Band::all();

        return view('band.createBand', compact('active_home', 'active_band', 'active_event', 'bands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Band::create([
            'band_name' => $request->band_name,
            'genre' => $request->genre,
            'band_member' => $request->band_member,
            'band_price' => $request->band_price,
            'band_email' => $request->band_email,
            'band_phone' => $request->band_phone,
            'band_poster' => $request->file('band_poster')->store('band-posters')
        ]);

        return redirect(route('bands.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $active_home = "";
        $active_band = "active";
        $active_event = "";
        $band = Band::where('id', $id)->first();

        return view('band.bandDetails', compact('band', 'active_home', 'active_band', 'active_event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active_home = "";
        $active_band = "active";
        $active_event = "";
        $band = Band::findOrFail($id);

        return view('band.editBand', compact('band', 'active_home', 'active_band', 'active_event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $band = Band::findOrFail($id);
        $id = $request->id;

        $poster = $request->file('band_poster');

        if ($poster) {
            Storage::delete($request->oldImage);

            $band->update([
                'band_name' => $request->band_name,
                'genre' => $request->genre,
                'band_member' => $request->band_member,
                'band_price' => $request->band_price,
                'band_email' => $request->band_email,
                'band_phone' => $request->band_phone,
                'band_poster' => $poster->store('band-posters')
            ]);
        } else {
            $band->update([
                'band_name' => $request->band_name,
                'genre' => $request->genre,
                'band_member' => $request->band_member,
                'band_price' => $request->band_price,
                'band_email' => $request->band_email,
                'band_phone' => $request->band_phone,
            ]);
        }        

        return redirect()->route('bands.show', ['band' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $band = Band::findOrFail($id);
        Storage::delete($band->band_poster);
        $band->delete();
        
        return redirect(route('bands.index'));
    }
}
