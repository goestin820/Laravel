<x-layout>
    <x-slot:title55688>
        Custom Title
    </x-slot>
 
    @foreach ($tasks as $task)
        {{ $task['id'] }} 
        {{ $task['name'] }} 
        <br>
        <hr>
    @endforeach
</x-layout>