<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container mt-3">
        <h2>XXX大飯店</h2>
        
        @php
        // dd($data123)    ;
        @endphp
        <a href="{{ route('helloF1') }}" class="btn btn-success">F1 自助餐 {{ $data123['s1'] }}</a>
        <a href="{{ route('helloF2') }}" class="btn btn-primary">F2 中式料理</a>
        <a href="{{ route('helloF3') }}" class="btn btn-warning">F3 西式料理</a>

        {{-- <a href="/f1" class="btn btn-success">F1 自助餐</a>
        {{-- <a href="/f2" class="btn btn-primary">F2 中式料理</a> --}}
        {{-- <a href="/f3" class="btn btn-warning">F3 西式料理</a> --}}
    </div>
    <div class="container">
        <img src="{{ asset('images/01.jpg') }}" alt="">
    </div>


</body>

</html>
