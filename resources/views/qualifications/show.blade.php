@extends('layouts.app')

@section('title')
    Ver calificaciones de {{ $studentCourses[0]->student->name }}
@endsection


@section('content')
    <div class="w-full flex justify-center">
        <table class="table table-fixed w-full lg:w-3/4">
            <thead>
                <tr>
                    <th rowspan="2" class="px-3 py-1.5 bg-blue-800 text-white font-semibold border-white border">Curso</th>
                    <th colspan="2" class="px-3 py-1.5 bg-blue-800 text-white font-semibold border-white border">
                        Calificaciones
                    </th>
                    <th rowspan="2" class="px-3 py-1.5 bg-blue-800 text-white font-semibold border-white border">
                        Promedio
                    </th>
                    <th rowspan="2" class="px-3 py-1.5 bg-blue-800 text-white font-semibold border-white border">
                        Condicion
                    </th>
                    <th rowspan="2" class="px-3 py-1.5 bg-blue-800 text-white font-semibold border-white border">
                        Fecha Registro
                    </th>
                </tr>
                <tr>
                    <th class="px-3 py-1.5 bg-blue-800 text-white font-semibold border-white border">Unidad 1</th>
                    <th class="px-3 py-1.5 bg-blue-800 text-white font-semibold border-white border">Unidad 2</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studentCourses as $studentCourse)
                    @php
                        $average = ($studentCourse->unit_1 + $studentCourse->unit_2) / 2;
                        $condition = $average > 14 ? true : false;
                    @endphp
                    <tr class="border-b">
                        <td class="px-3 py-1.5 text-center">{{ $studentCourse->course->name }}</td>
                        <td class="px-3 py-1.5 text-center">{{ $studentCourse->unit_1 }}</td>
                        <td class="px-3 py-1.5 text-center">{{ $studentCourse->unit_2 }}</td>
                        <td class="px-3 py-1.5 text-center">{{ $average }}</td>
                        <td class="px-3 py-1.5 text-center font-semibold {{ $condition ? 'text-green-800' : 'text-red-500' }}">
                            {{ $condition ? "Aprobado" : "Reprobado" }}</td>
                        <td class="px-3 py-1.5 text-center">{{ $studentCourse->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
