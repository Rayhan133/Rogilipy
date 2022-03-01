<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::select('id', 'name', 'phone', 'address', 'email')
            ->where('role', 'patient')
            ->get();


        $role = session('role');
        if ($role) {
            return view('pages.patientList', compact('role', 'users'));
        } else {
            $role = 'guest';
            return view('pages.patientList', compact('role', 'users'));
        }
    }


    public function destroy($patient)
    {
        $patient = User::findOrFail($patient);
        $patient->delete();
        Session::flash('message', 'Patient Successfully deleted!');
        Session::flash('class', 'success');
        return redirect()->route('patientList');
    }
}
