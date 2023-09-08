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

    @php
        // dd($data);
    @endphp

    <div class="container mt-3">
        <h2>計算機</h2>

        <div class="row">
            <div class="col">Num1 = {{ $data['num1'] }}</div>
            <div class="col">Num2 = {{ $data['num2'] }}</div>
        </div>

        @switch($data['option'])
            @case('+')
                @php
                    $result = $data['num1'] + $data['num2'];
                @endphp
            @break

            @case('-')
                @php
                    $result = $data['num1'] - $data['num2'];
                @endphp
            @break

            @case('*')
                @php
                    $result = $data['num1'] * $data['num2'];
                @endphp
            @break

            @case('/')
                @php
                    $result = $data['num1'] / $data['num2'];
                @endphp
            @break

            @default
                Default case...
        @endswitch

        <div class="row">
            <div class="col">
                {{ $data['num1'] }} {{$data['option']}} {{ $data['num2'] }} = {{ $result }}
            </div>
        </div>

    </div>
    <script>
        setInterval(() => {
            window.location.replace('/calculate');
        }, 5000);
    </script>


</body>

</html>
