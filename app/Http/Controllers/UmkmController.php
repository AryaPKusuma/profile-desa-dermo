<?php

namespace App\Http\Controllers;

use App\Models\umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    function index()
    {
        $umkms = umkm::paginate(10);
        //with(['products', 'features'])->
        return view('umkm', compact('umkms'));
    }

    function show($slug)
    {
        $umkm = Umkm::with([
            'products:id,umkm_id,name,photo,price,unit_type',
            'features:id,umkm_id,header,content'
        ])->where('slug', $slug)->firstOrFail();

        return view('umkmshow', compact('umkm'));
    }
}
