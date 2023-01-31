<x-tomato-admin-layout>
    <x-slot name="header">
        Artisan Terminal
    </x-slot>
    <x-slot name="headerBody">
        <x-tomato-logout />
    </x-slot>

    <TomatoArtisan :commands="@js($commands)" route="{{url('/')}}" />
</x-tomato-admin-layout>
