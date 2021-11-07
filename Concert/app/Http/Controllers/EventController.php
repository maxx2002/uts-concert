<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_home = "";
        $active_band = "";
        $active_event = "active";

        $events = Event::all();

        return view('event.event', compact('active_home', 'active_band', 'active_event', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active_home = "";
        $active_band = "";
        $active_event = "active";

        $bands = Band::all();

        return view('event.createEvent', compact('active_home', 'active_band', 'active_event', 'bands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Request()->validate([
            'event_poster' => 'image',
        ]);

        Event::create([
            'event_name' => $request->event_name,
            'band_id' => $request->band_id,
            'organizer' => $request->organizer,
            'date' => $request->date,
            'location' => $request->location,
            'ticket_price' => $request->ticket_price,
            'event_instagram' => $request->event_instagram,
            'contact_person' => $request->contact_person,
            'contact_phone' => $request->contact_phone,
            'event_poster' => $request->file('event_poster')->store('event-posters')
        ]);

        return redirect(route('events.index'));
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
        $active_band = "";
        $active_event = "active";
        
        $event = Event::where('id', $id)->first();

        return view('event.eventDetails', compact('active_home', 'active_band', 'active_event', 'event'));
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
        $active_band = "";
        $active_event = "active";
        
        $event = Event::findOrFail($id);
        $bands = Band::all();

        return view('event.editEvent', compact('active_home', 'active_band', 'active_event', 'event', 'bands'));
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
        $event = Event::findOrFail($id);
        $id = $request->id;

        $poster = $request->file('event_poster');

        Request()->validate([
            'event_poster' => 'image',
        ]);

        if ($poster) {
            Storage::delete($request->oldImage);

            $event->update([
                'event_name' => $request->event_name,
                'band_id' => $request->band_id,
                'organizer' => $request->organizer,
                'date' => $request->date,
                'location' => $request->location,
                'ticket_price' => $request->ticket_price,
                'event_instagram' => $request->event_instagram,
                'contact_person' => $request->contact_person,
                'contact_phone' => $request->contact_phone,
                'event_poster' => $poster->store('event-posters')
            ]);
        } else {
            $event->update([
                'event_name' => $request->event_name,
                'band_id' => $request->band_id,
                'organizer' => $request->organizer,
                'date' => $request->date,
                'location' => $request->location,
                'ticket_price' => $request->ticket_price,
                'event_instagram' => $request->event_instagram,
                'contact_person' => $request->contact_person,
                'contact_phone' => $request->contact_phone
            ]);
        }        

        return redirect()->route('events.show', ['event' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        Storage::delete($event->event_poster);
        $event->delete();

        return redirect(route('events.index'));
    }
}
