<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;



class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::select('id', 'name', 'designation', 'phone', 'address', 'email')
            ->get();

        $role = session('role');
        if ($role) {
            return view('pages.doctor.index', compact('role', 'doctors'));
        } else {
            $role = 'guest';
            return view('pages.doctor.index', compact('role', 'doctors'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:doctors',
            'phone' => 'required|unique:doctors',
            'designation' => 'required',
            'address' => 'required',
            'email' => 'required|unique:doctors',
        ]);

        try {
            $doctor = new Doctor();
            $doctor->name = $request->name;
            $doctor->designation = $request->designation;
            $doctor->phone = $request->phone;
            $doctor->address = $request->address;
            $doctor->email = $request->email;
            $doctor->save();
            Session::flash('message', 'Doctor Successfully created!');
            Session::flash('class', 'success');
            return redirect()->back();
        } catch (Exception $e) {
            Session::flash('message', 'Doctor is not created!');
            Session::flash('class', 'danger');
            return redirect()->back();
        }
    }


    public function destroy($doctor)
    {

        $findDoctor = Doctor::findOrFail($doctor);
        if ($findDoctor) {
            $findDoctor->delete();
            Session::flash('message', 'Doctor Successfully deleted!');
            Session::flash('class', 'success');
            return redirect()->back();
        } else {
            Session::flash('message', 'Doctor is not deleted!');
            Session::flash('class', 'danger');
            return redirect()->back();
        }
    }
}
