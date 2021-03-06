@extends('layout.master')
@section('title')
Laravel E-commerce 
@endsection
@section('content')
@if(Session::has('success'))
<div class="row">
   <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
     <div id="charge-message" class="alert alert-success">
        {{Session::get('success')}}
     </div>
   </div>
</div>
@endif
@foreach($product->chunk(3) as $productChunk)
<div class="row">
@foreach($productChunk as $product)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
      <img src="{{$product->imagepath}}" />
        <h4>{{$product->title}}</h4>
        <p class="description">{{$product->description}}</p>
        <div class="clearfix">
        <div class="pull-left price">Tk-{{$product->price}}</div>
        <a href="{{route('product.addToCart',['id'=> $product->id])}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
        </div>
      </div>
    </div>
  </div>
 @endforeach 
</div>
@endforeach
@endsection


