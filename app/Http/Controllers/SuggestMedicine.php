<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class SuggestMedicine extends Controller
{
    public function index()
    {


        $removeCommaDiseases = array();
        $medicines = Medicine::all();
        foreach ($medicines as $medicine) {
            $getDiseases = $medicine->disease;
            $removeCommaDiseases[] = explode(',', $getDiseases);
        }

        // marge
        foreach ($removeCommaDiseases as $removeCommaDisease) {
            foreach ($removeCommaDisease as $removeCommaDisease2) {
                $diseases[] = $removeCommaDisease2;
            }
        }
        $role = session('role');
        if ($role) {
            return view('pages.suggestMedicine.index', compact('role', 'diseases'));
        } else {
            $role = 'guest';
            return redirect()->route('signIn');
        }
    }

    public function getMedicineByDisease(Request $request)
    {
        $disease = $request->disease;
        $medicines = Medicine::where('disease', 'LIKE', '%' . $disease . '%')->get();
        return $this->respondWithSuccess('Success', $medicines);
    }
}
