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
        <h2>Table</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $item['id'] }}</th>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['mobile'] }}</td>
                    </tr>
                @endforeach


                {{-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr> --}}

            </tbody>
        </table>


    </div>


</body>

</html>
