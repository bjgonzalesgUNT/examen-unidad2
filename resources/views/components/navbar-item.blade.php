<a
    href="{{ route($ref) }}"
    class="{{ setActive($ref) ? "bg-indigo-500" : "" }} flex items-center justify-center border-b border-b-white py-2 px-4 text-center font-semibold uppercase text-white hover:bg-indigo-700 md:border-none"
>
    {{ $title }}
</a>
