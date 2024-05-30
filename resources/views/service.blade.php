@extends("layouts.app")

@section("title")
    servicios
@endsection

@section("content")
    <ul class="">
        @forelse ($services as $service)
            <li class="p-2 text-lg font-semibold">
                {{ $service["title"] }}
            </li>
        @empty
            <p class="text-xl font-bold uppercase text-red-500">
                No existen servicios para mostrar
            </p>
        @endforelse
    </ul>
@endsection
