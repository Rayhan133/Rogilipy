<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = session('role');
        if ($role) {
            return view('pages.about', compact('role'));
        } else {
            $role = 'guest';
            return view('pages.about', compact('role'));
        }
    }
}
