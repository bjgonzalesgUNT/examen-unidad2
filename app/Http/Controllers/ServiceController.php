<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {

        $services = Service::all();

        return view("services.index", ['services' => $services]);
    }

    public function create(): View
    {
        return view('services.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Service::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('services.index')->with('success', '');
    }
}
