<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventsRequest;
use App\Models\Events;
use Illuminate\Support\Facades\Redirect;

class EventBroteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boos = Events::all();
        return view('index', compact('boos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventsRequest $request)
    {
        Events::FirstOrCreate([
            'titre' => $request->input('titre'),
            'description' =>$request->input('description')
        ]);
        return Redirect::route('Home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eventShow = Events::FindOrFail($id);
        return view('show', compact('eventShow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eventEdit = Events::FindOrFail($id);
        return view('edit', compact('eventEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $eventUpdt = Events::FindOrFail($id);
         $eventUpdt->update([
            'titre' => $request->input('titre'),
            'description' =>$request->input('description')
        ]);
        return Redirect::route('Home', $eventUpdt);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Events::destroy($id);

        return Redirect::route('Home');
    }
}
