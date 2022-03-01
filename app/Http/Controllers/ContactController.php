<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
            return view('pages.contact', compact('role'));
        } else {
            $role = 'guest';
            return view('pages.contact', compact('role'));
        }
    }
}
