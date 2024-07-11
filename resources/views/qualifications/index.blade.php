@extends('layouts.app')

@section('title')
    Ver calificaciones
@endsection

@section('content')
    <div class="flex flex-col justify-center w-full items-center">
        <table class="table-fixed table">
            <thead>
                <tr>
                    <x-tables.th value="id" />
                    <x-tables.th value="estudiante" />
                    <x-tables.th value="opciones" />
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="border-b">
                        <td class="px-3 py-1.5 text-center">{{ $student->id }}</td>
                        <td class="px-3 py-1.5 text-center">{{ $student->name }}</td>
                        <td class="px-3 py-1.5 text-center">
                            <a href="{{ route('qualifications.show', $student->id) }}" class="underline text-sky-800">
                                Ver calificacion
                            </a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
