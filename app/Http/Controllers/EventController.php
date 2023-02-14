<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventStoreRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('pages.events', [
            'eventsname' => 'Events',
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)
    {
        $event = $request->validated();
        $event['user_id'] = Auth()->id();
        $event = Event::create($event);
        if ($request->hasFile('image')) {
            $event->addMediaFromRequest('image')
                ->usingName($request->title)
                ->toMediaCollection('images');
        }

        return redirect()->route('events.index')->with('message', 'Event created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $event->increment('views');
        return view('pages.events.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $attributes = $request->validate([
            'title'      => ['required'],
            'slug'     => ['required',  Rule::unique('events', 'slug')->ignore($event->id)],
            'body'      => ['required'],
            // 'start_date' => ['required'],
            // 'end_date'  => ['required'],
            'ticket_price' => ['required'],
            'place'       => ['required'],
            'street' => ['required'],
            'city' => ['required'],
            'company' => ['required'],

        ]);
        $event->update($attributes);

        if ($request->hasFile('image')) {
            $event->addMediaFromRequest('image')
                ->usingName($request->title)
                ->toMediaCollection('images');
        }

        return redirect()->route('admin.events.index')->with('message', 'Event Updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('message', 'Event Deleted Successfully');
    }
}
