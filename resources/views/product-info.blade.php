@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>{{$products[0]['name']}}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

<div class="row">        
@foreach($products as $product)
<div class="col">
<div class="card" style="width: 36rem; margin-bottom:2rem">
  <img src="https://img.freepik.com/free-vector/white-product-podium-with-green-tropical-palm-leaves-golden-round-arch-green-wall_87521-3023.jpg" class="card-img-top" alt="product">
  
</div>
</div>
<div class="col text-left">
    <h1>{{ $product->name }}</h1>
    <p class="lead">{{ $product->description }}</p> <br />
      <h3><small class="text-muted">Rs.{{$product->price}}</small></h3>
        <a href="{{route('goToPayment', [$product->name, $product->price] ) }}"><button  class="btn btn-success">Buy Now</button></a>
@endforeach
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
