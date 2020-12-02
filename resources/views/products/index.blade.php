@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">


            <!-- <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @foreach($products as $product)
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0"> {{$product->name}}
                                </h3>
                                {{str_limit($product->description, 250)}}
                            </div>
                        </div>
                    @endforeach
                    <div class="mx-auto">
                    {{$products->links()}}
                    </div>
                </div>
            </div> -->


            <!-- <div class="card-group">
                @foreach($products as $product)
                            <div class="card" style="width: 18rem;">
                            <img src="{{$product->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text">{{str_limit($product->description, 250)}}</p>
                                <a href="#" class="btn btn-primary">{{$product->image}}</a>
                            </div>
                            </div>
                @endforeach
                <div class="mx-auto">
                                    {{$products->links()}}
                        </div>
            </div> -->
<div class="row">
            @foreach($products as $product)
            <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{$product->url}}" title="View Product">{{$product->name}}</a></h4>
                            <p class="card-text">{{str_limit($product->description, 250)}}</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">{{$product->price}} $</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
</div>
<div class="col-12">

                                    {{$products->links()}}

</div>


        </div>
    </div>
</div>
@endsection
