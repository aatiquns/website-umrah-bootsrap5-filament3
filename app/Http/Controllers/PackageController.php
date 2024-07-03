<?php

namespace App\Http\Controllers;

use App\Models\UmrahPackage;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $umrah_packages = UmrahPackage::get();

        return view('frontend.package.index', compact('umrah_packages'));
    }

    public function show( UmrahPackage $umrah_package)
    {
        return view('frontend.package.show', compact('umrah_package'));
    }
}
