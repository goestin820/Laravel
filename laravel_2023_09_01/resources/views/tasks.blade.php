<x-layout>
    <x-slot:title>
        Custom Title
    </x-slot>
 
    @foreach ($tasks as $task)
        {{ $task['id'] }} 
        {{ $task['name'] }} 
        <br>
        <hr>
        <br>
    @endforeach
</x-layout>