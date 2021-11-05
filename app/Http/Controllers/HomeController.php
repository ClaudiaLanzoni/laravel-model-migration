<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Package;

class HomeController extends Controller
{
    public function index() {

        $package = Package::all();

        $data = ['package' => $package];

        return view('home', $data);
    }

    public function show($id) {
        
        $chosenPackage = Package::findOrFail($id);

        $dataPackage = ['chosenPackage' => $chosenPackage];

        return view('home', $dataPackage);
    }
}
