<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;


class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::select('id', 'name', 'description', 'disease')
            ->get();
        $role = session('role');
        if ($role) {
            return view('pages.medicine.index', compact('role', 'medicines'));
        } else {
            $role = 'guest';
            return view('pages.medicine.index', compact('role', 'medicines'));
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:medicines',
            'description' => 'required',
        ]);

        try {
            $doctor = new Medicine();
            $doctor->name = $request->name;
            $doctor->description = $request->description;
            $doctor->disease = $request->disease;
            $doctor->save();
            Session::flash('message', 'Medicines Successfully created!');
            Session::flash('class', 'success');
            return redirect()->back();
        } catch (Exception $e) {
            Session::flash('message', 'Medicines is not created!');
            Session::flash('class', 'danger');
            return redirect()->back();
        }
    }

    public function destroy(Medicine $medicine)
    {
        if ($medicine) {
            $medicine->delete();
            Session::flash('message', 'Medicine Successfully deleted!');
            Session::flash('class', 'success');
            return redirect()->back();
        } else {
            Session::flash('message', 'Medicine is not deleted!');
            Session::flash('class', 'danger');
            return redirect()->back();
        }
    }
}
