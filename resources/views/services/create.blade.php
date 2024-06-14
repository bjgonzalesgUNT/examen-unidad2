@extends('layouts.app')

@section('title')
    Crear Servicio
@endsection

@section('content')
    <div class="flex flex-col justify-center w-full items-center">
        @if ($errors->any())
            <div class="w-1/3 mb-2 rounded-md bg-red-500 text-white p-2 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-white">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" class="bg-indigo-300 w-1/3 flex flex-col gap-2 shadow-md rounded-md p-2"
            action="{{ route('services.store') }}">
            @csrf
            <div class="w-full">
                <label for="title">titulo</label>
                <input type="text" name="title" class="w-full rounded-md shadow-md p-1">
            </div>
            <div class="w-full">
                <label for="description">descripcion</label>
                <input type="text" name="description" class="w-full rounded-md shadow-md p-1">
            </div>
            <input type="submit"
                class="w-full bg-indigo-800 uppercase text-white rounded-md p-2 font-bold cursor-pointer hover:bg-indigo-900 transition-all duration-300 ease-in-out hover:ring-2 hover:ring-white"
                value="guardar">
        </form>
    </div>
@endsection
