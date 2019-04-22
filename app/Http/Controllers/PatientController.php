<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\User;
use App\Http\Resources\Patient as PatientResource;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::latest()->paginate(10);
        return PatientResource::collection($patients);
    }

    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register-patient');
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
            'password' => 'required|string|min:6|confirmed'
        ]);

        $patient = new Patient;

        //create Patient Resouce
        $patient->first_name = $request->input('first_name');
        $patient->last_name = $request->input('last_name');

        if ($patient->save()) {
            // create user Resource
            $user = new User;
            $user->userable_type = 'App\Patient';
            $user->userable_id = $patient->id;
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
        $patient = Patient::findOrFail($id);
        return new PatientResource($patient);
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
        $patient = Patient::findOrFail($id);

        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->age = $request->age;

        if ($patient->save()) {
            return new PatientResource($patient);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        if ($patient->delete()) {
            return new PatientResource($patient);
        }
    }
}
