@extends('layouts.app')

@section('title')
    servicios
@endsection

@section('content')
    <div class="w-full flex justify-end items-center">
        <a class="p-3 rounded-md shadow-md bg-indigo-800 hover:ring-1 hover:bg-indigo-950 hover:ring-indigo-300 text-white"
            href="{{ route('services.create') }}">
            Crear servicio
        </a>
    </div>
    <div class="w-full px-40">
        <table class="mt-4 table-fixe w-full">
            <thead>
                <tr>
                    @include('components.table.TableTh', ['value' => 'titulo'])
                    @include('components.table.TableTh', ['value' => 'descripcion'])
                    @include('components.table.TableTh', ['value' => 'acciones'])
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                    <tr>
                        @include('components.table.TableTd', ['value' => $service->title])
                        @include('components.table.TableTd', ['value' => $service->description])
                        @component('components.table.TableTdActions')
                            @slot('show')
                                @include('components.buttons.btn-show', [
                                    'route' => 'services.show',
                                    'id' => $service->id,
                                ])
                            @endslot
                            @slot('edit')
                                @include('components.buttons.btn-edit', [
                                    'route' => 'services.edit',
                                    'id' => $service->id,
                                ])
                            @endslot
                            @slot('delete')
                                @include('components.buttons.btn-delete', [
                                    'route' => 'services.destroy',
                                    'id' => $service->id,
                                ])
                            @endslot
                        @endcomponent
                    </tr>
                @empty
                    <tr class="text-xl font-bold uppercase text-red-500">
                        <td> No existen servicios para mostrar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
