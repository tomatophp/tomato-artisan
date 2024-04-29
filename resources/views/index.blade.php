<x-tomato-admin-layout>
    <x-slot:header>
        {{ trans('tomato-artisan::global.title') }}
    </x-slot:header>
    <x-slot:buttons>
        <x-tomato-logout />
    </x-slot:buttons>
    <x-slot:icon>
        bx bxs-terminal
    </x-slot:icon>

    <TomatoArtisan :commands="@js($commands)" route="{{url('/')}}" />
</x-tomato-admin-layout>
