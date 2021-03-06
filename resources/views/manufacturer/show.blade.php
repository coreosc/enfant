@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            {!! Breadcrumbs::render('manufacturer', $manufacturer) !!}
        </div>
        <div class="row">
            <div class="col col-lg-12">
                <h1>{{$manufacturer->name}}</h1>
                <p>{{$manufacturer->description}}</p>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col col-lg-12">
                <h3 itemprop="name"><a itemprop="url" title="" href="{{ $product->getPath() }}">{{$product->name}}</a></h3>
                <span itemprop="price">{{$product->price()}}</span>
                <p>
                    {{$product->description_short}}
                </p>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col col-lg-12">
                {{ $products->links() }}
            </div>
        </div>

    </div>

@endsection