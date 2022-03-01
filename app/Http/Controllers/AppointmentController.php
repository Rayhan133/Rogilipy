<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;


class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::select()
            ->with('doctor')
            ->with('patient')
            ->get();
        $doctors = Doctor::all();
        $role = session('role');
        if ($role) {
            return view('pages.appointment.index', compact('role', 'appointments', 'doctors'));
        } else {
            $role = 'guest';
            return view('pages.appointment.index', compact('role', 'appointments', 'doctors'));
        }
    }
    public function store(Request $request)
    {
        $user = session('user');
        $appointment = new Appointment();
        $appointment->patients_id = $user->id;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->date = Date('Y-m-d');
        $appointment->start_time = $request->startTime;
        $appointment->end_time = $request->endTime;
        $appointment->save();
        return redirect()->route('appointment.index');
    }
    public function destroy($appointment)
    {

        $findAppointment = Appointment::findOrFail($appointment);
        if ($findAppointment) {
            $findAppointment->delete();
            Session::flash('message', 'Appointment Successfully deleted!');
            Session::flash('class', 'success');
            return redirect()->back();
        } else {
            Session::flash('message', 'Appointment is not deleted!');
            Session::flash('class', 'danger');
            return redirect()->back();
        }
    }
}
