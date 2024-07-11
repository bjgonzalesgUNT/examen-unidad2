<header class="flex w-full flex-col bg-indigo-800 md:flex-row md:px-2">
    <div class="flex w-full items-center justify-between gap-3 p-2.5 text-xl uppercase">
        <a class="flex items-center justify-center gap-2" href="/">
            <img src="{{ asset('/icons/exam.svg') }}" alt="home_icon" class="size-8 md:size-10" />
            <div class="text-white">
                <span class="text-xl font-black uppercase md:text-2xl">
                    {{ 'EXAMEN U2' }}
                </span>
            </div>
        </a>
        <div class="flex items-center md:hidden">
            <button wire:click="handleShowHamburguerMenu">
                <img src="{{ asset('/icons/menu.svg') }}" alt="hamburger_icon" class="size-6" />
            </button>
        </div>
    </div>

    <div class="{{ $showHamburguerMenu ? 'block' : 'hidden' }} w-full md:block">
        <div class="md:flex-row md:gap-2 md:flex md:justify-end h-full">
            @include('components.navbar-item', [
                'title' => 'ingreso',
                'ref' => 'qualifications.create',
            ])
            @include('components.navbar-item', [
                'title' => 'listar',
                'ref' => 'qualifications.index',
            ])
        </div>

    </div>
</header>
