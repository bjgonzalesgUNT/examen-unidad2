@extends('layouts.app')

@section('title')
    editar servicio #{{ $service->id }}
@endsection

@section('content')
    <div class="flex flex-col justify-center w-full items-center">

        @include('partials.validate-form-errors', ['errors' => $errors])

        <form method="POST" class="bg-indigo-300 w-1/3 flex flex-col gap-2 shadow-md rounded-md p-2"
            action="{{ route('services.update', $service) }}">
            @method('PATCH')
            @include('services.partials.form-fields', ['btnTitle' => 'actualizar'])
        </form>
    </div>
@endsection
