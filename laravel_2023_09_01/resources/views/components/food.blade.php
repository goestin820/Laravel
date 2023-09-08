<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h2 class="text-center">{{ $h2Text ?? 'h2Text ...' }}</h2>
    {{ $slot }}

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="d-grid gap-2">
                    <button class="btn btn-success" type="button" onclick="history.back()">Back</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
