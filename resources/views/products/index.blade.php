@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
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
            </div>
        </div>
    </div>
</div>
@endsection
