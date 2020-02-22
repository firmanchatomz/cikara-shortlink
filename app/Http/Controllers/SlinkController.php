<?php

namespace App\Http\Controllers;

use App\Slink;
use App\Domain;
use Illuminate\Http\Request;

class SlinkController extends Controller
{
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
        $domain = Domain::where('status','aktif')->first();
        $shortlink = createshortlink(domain($domain));
        Slink::create([
            'link_original' => $request->link_original,
            'link_short' => $shortlink,
            'view' => 0,
        ]);

        
        return redirect('/')->with('link',$shortlink);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slink  $slink
     * @return \Illuminate\Http\Response
     */
    public function show(Slink $slink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slink  $slink
     * @return \Illuminate\Http\Response
     */
    public function edit(Slink $slink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slink  $slink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slink $slink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slink  $slink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slink $slink)
    {
        //
    }
}
