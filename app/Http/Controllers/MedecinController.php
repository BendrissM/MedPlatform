<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medecin;
use App\User;
use Illuminate\Support\Facades\Hash;

class MedecinController extends Controller
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

    public function register() {
        return view('auth.register-medecin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|unique:users|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
            'specialty' => 'nullable|string|max:255',
            'inpe' => 'required|max:255'
        ]);

        $medecin = new Medecin;

        //create medecin Resouce
        $medecin->first_name = $request->input('first_name');
        $medecin->last_name = $request->input('last_name');
        $medecin->is_specialist = strlen($request->input('specialty')) !== 0 ? true : false;
        $medecin->specialty = $request->has('specialty') ? $request->input('specialty') : null;
        $medecin->inpe = $request->input('inpe');

        if ($medecin->save()) {
            // create user Resource
            $user = new User;
            $user->userable_type = 'App\Medecin';
            $user->userable_id = $medecin->id;
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            if ($user->save()) {
                return redirect('/');
            };
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
