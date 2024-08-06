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

    function show($slug)
    {
        $umkm = Umkm::with([
            'products:id,umkm_id,name,photo,price,unit_type',
            'features:id,umkm_id,header,content'
        ])->where('slug', $slug)->firstOrFail();

        return view('umkmshow', compact('umkm'));
    }

    public function search(Request $request)
    {
        $search = $request->get('query');
        if ($search) {
            $umkms = Umkm::where('name', 'LIKE', "%{$search}%")
                ->orWhere('category', 'LIKE', "%{$search}%")
                ->paginate(10);
        } else {
            $umkms = Umkm::paginate(10);
        }

        return view('umkmsearch', compact('umkms'))->render();
    }
}
