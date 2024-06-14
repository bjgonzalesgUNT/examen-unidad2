@extends('layouts.app')

@section('title')
    servicios
@endsection

@section('content')
    <a class="p-3 rounded-md shadow-md bg-indigo-800 hover:ring-1 hover:bg-indigo-950 hover:ring-indigo-300 text-white"
        href="{{ route('services.create') }}">
        Crear servicio
    </a>
    <table class="mt-4 table-fixed bg-indigo-300">
        <thead>
            <tr>
                <th class="p-2 text-lg font-semibold">Titulo</th>
                <th class="p-2 text-lg font-semibold">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($services as $service)
                <tr class="p-2 text-lg font-semibold">
                    <td class="text-center">{{ $service->title }}</td>
                    <td class="text-center">{{ $service->description }}</td>
                </tr>
            @empty
                <tr class="text-xl font-bold uppercase text-red-500">
                    <td> No existen servicios para mostrar</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
