<x-layout>
    <x-slot:title>Dashboard</x-slot:title>
    <h1>{{ request()->user()->email }}</h1>
</x-layout>
