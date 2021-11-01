<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::all();
        $latest = Registration::select('id')->latest()->first();
        $nextId = $latest->id + 1;
        return view('registration.index', compact('registrations'))->with('nextId', $nextId);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        return view('registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Registration::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'nationality' => $request->nationality,
        ]);

        $latest = Registration::select('id')->latest()->first();

        return redirect()->route('guestQualification.index', $latest->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Registration::where('id','=',$id)->first();
        return view('registration.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Registration::where('id','=',$id)->first();
        return view('registration.edit', compact('data'));
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
        Registration::where('id','=',$id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'nationality' => $request->nationality,
        ]);

        $latest = Registration::select('id')->latest()->first();

        return redirect()->route('guestQualification.index', $latest->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Registration::where('id','=',$id)->first()->delete();
        return redirect()->route('registration.index');
    }
}
