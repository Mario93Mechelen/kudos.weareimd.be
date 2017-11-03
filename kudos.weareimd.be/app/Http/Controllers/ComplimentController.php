<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use \Auth;

class ComplimentController extends Controller
{

    public function showReceived()
    {

        $id=4;
        $compliments = App\Compliment::all()->where('receiver_id', $id);
        return view('compliments/received', compact('compliments'));

    }

    public function showGiven()
    {

        $id=4;
        $compliments = App\Compliment::all()->where('sender_id', $id);
        return view('compliments/given', compact('compliments'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = \Illuminate\Support\Facades\Auth::user();

        $compliment = new App\Compliment();
        $compliment->sender_id = $user->id;
        $compliment->receiver_id = request('receiver');
        $compliment->body = request('compliment');
        $compliment->save();

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compliment  $compliment
     * @return \Illuminate\Http\Response
     */
    public function show(Compliment $compliment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compliment  $compliment
     * @return \Illuminate\Http\Response
     */
    public function edit(Compliment $compliment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compliment  $compliment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compliment $compliment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compliment  $compliment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compliment $compliment)
    {
        //
    }
}
