@extends('layouts.app')

@section('title')
    ver servicio #{{ $service->id }}
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

        <form class="bg-indigo-300 w-1/3 flex flex-col gap-2 shadow-md rounded-md p-2">
            @csrf @method('PATCH')
            <div class="w-full">
                <label for="title">titulo</label>
                <input type="text" name="title" class="w-full rounded-md shadow-md p-1" value="{{ $service->title }}">
            </div>
            <div class="w-full">
                <label for="description">descripcion</label>
                <input type="text" name="description" class="w-full rounded-md shadow-md p-1"
                    value="{{ $service->description }}">
            </div>

        </form>
    </div>
@endsection
