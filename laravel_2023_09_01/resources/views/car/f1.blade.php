<x-car>
    <x-slot:title>
        F1 Title
    </x-slot>

    <div class="container mt-3">
        <h2>F1</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
        <div class="row mt-5">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('cars.index') }}" role="button">Link index</a>
            </div>
        </div>        
    </div>
</x-car>