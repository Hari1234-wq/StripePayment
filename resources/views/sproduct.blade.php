<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col col-md-4">
            @if(Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success')}}


@php

Session::forget('success');
@endphp
</div>

    @endif
  <div class="card" style="width: 18rem;">
  <img src="https://media.istockphoto.com/id/1316968335/photo/shopping-cart-full-of-food-on-yellow-background-grocery-and-food-store-concept.jpg?s=1024x1024&w=is&k=20&c=eDIXkTpOPEeJz6NWm6XC4YtyTX2LoxCbBASEQzQh_mI=" alt="...">
  <div class="card-body">
   
    <h5 class="card-title">iPhone</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{ route('stripe.checkout',['price' => 50, 'product' => 'iPhone'])}}" class="btn btn-primary">Pay Now</a>
  </div>
</div>
</div>
<div class="col col-md-4">
  <div class="card" style="width: 18rem;">
  <img src="https://media.istockphoto.com/id/1316968335/photo/shopping-cart-full-of-food-on-yellow-background-grocery-and-food-store-concept.jpg?s=1024x1024&w=is&k=20&c=eDIXkTpOPEeJz6NWm6XC4YtyTX2LoxCbBASEQzQh_mI=" alt="...">
  <div class="card-body">
    <h5 class="card-title">Apple</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{ route('stripe.checkout',['price' => 10, 'product' => 'apple']) }}" class="btn btn-primary">Pay Now</a>
  </div>
</div>
</div>
<div class="col col-md-4">
  <div class="card" style="width: 18rem;">
  <img src="https://media.istockphoto.com/id/1316968335/photo/shopping-cart-full-of-food-on-yellow-background-grocery-and-food-store-concept.jpg?s=1024x1024&w=is&k=20&c=eDIXkTpOPEeJz6NWm6XC4YtyTX2LoxCbBASEQzQh_mI=" >
  <div class="card-body">
    <h5 class="card-title">Watch</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{ route('stripe.checkout',['price' => 20, 'product' => 'watch'])}}" class="btn btn-primary">Pay Now</a>
  </div>
</div>
</div>



        </div>
    </div>
  </body>
</html>
