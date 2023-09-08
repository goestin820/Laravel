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
    <div class="container mt-3">
        <div class="row">
            <div class="col me-5">
                <a href="{{route('foods.f1')}}">
                    <img src="{{asset('images/01.png')}}" alt="" srcset="">
                </a>
            </div>          
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <a href="{{route('foods.f2')}}">
                    <img src="{{asset('images/02.jpg')}}" alt="" srcset="" class="w-100">
                </a>
            </div>
            <div class="col-6">
                <a href="{{route('foods.f3')}}">
                    <img src="{{asset('images/03.jpg')}}" alt="" srcset="" class="w-100">
                </a>
            </div>
        </div>
    </div>


</body>
</html>
