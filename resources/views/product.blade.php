@extends('layouts.app')

@section('content')


    <ul class="products-ul">Product Title:{{$product['title']}}
        <li class="product">Name of use:{{$product->user['name']}}</li>
        <li class="product">location:{{$product->user['location']}}</li>
        <li class="product">description:{{$product['description']}}</li>
        <li class="product">phone:{{$product->user['phone']}}</li>
        <li class="product">price:{{$product['price']}}</li>
        <li class="product">1=new:{{$product['new']}}</li>
        <li class="product">created at{{$product['created_at']}}</li>
        <a href="{{route('user',['user' => $product->user])}}">Go to user</a><br>
        <a href="{{route('admin.main')}}">Back to maintaining</a>

    </ul>



@endsection
