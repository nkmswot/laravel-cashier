@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!--<div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-header">Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--{{ __('You are logged in!') }} -->
                    

<div class="row">        
@foreach($products as $product)
<div class="col">
<div class="card" style="width: 18rem; margin-bottom:2rem">
  <img src="https://img.freepik.com/free-vector/white-product-podium-with-green-tropical-palm-leaves-golden-round-arch-green-wall_87521-3023.jpg" class="card-img-top" alt="product">
  <div class="card-body">
    <h5 class="card-title">{{$product->name }}</h5>
    <p class="card-text">{{$product->description}}</p>
    <div class="row">
        <div class="col">
            <h3><small class="text-muted">Rs.{{$product->price}}</small></h4>
        </div>

        <div class="col">
            <a href="{{ URL('/product/'.$product->id) }}" class="btn btn-secondary">Read More</a>
        </div>
    </div>
    
  </div>
</div>
</div>
@endforeach
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
