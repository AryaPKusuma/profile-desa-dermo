<?php

namespace App\Http\Controllers;

use App\Models\umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    function index()
    {
        $umkms = umkm::paginate(10);

        return view('umkm', compact('umkms'));
    }
}
