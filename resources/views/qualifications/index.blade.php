@extends('layouts.app')

@section('title')
    Ver calificaciones
@endsection

@section('content')
    <div class="flex flex-col justify-center w-full items-center">
        <table class="table-fixed table">
            <thead>
                <tr>
                    <th class="uppercase font-semibold px-3 py-1.5 text-center bg-blue-800 text-white">ID</th>
                    <th class="uppercase font-semibold px-3 py-1.5 text-center bg-blue-800 text-white">Estudiante</th>
                    <th class="uppercase font-semibold px-3 py-1.5 text-center bg-blue-800 text-white">opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="border-b">
                        <td class="px-3 py-1.5 text-center">{{ $student->id }}</td>
                        <td class="px-3 py-1.5 text-center">{{ $student->name }}</td>
                        <td class="px-3 py-1.5 text-center">
                            <a href="{{ route('qualifications.show', $student->id) }}"
                                class="underline text-sky-800">
                                Ver calificacion
                            </a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
