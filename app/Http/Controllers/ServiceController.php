<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {

        $services = [
            ['title' => 'Servicio 1'],
            ['title' => 'Servicio 2'],
            ['title' => 'Servicio 3'],
            ['title' => 'Servicio 4'],
            ['title' => 'Servicio 5'],
        ];

        return view("service", ['services' => $services]);
    }
}
