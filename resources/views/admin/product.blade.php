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
        <a href="{{route('admin.user',['user_id' => $product->user['id']])}}">Go to user</a><br>
        @if($product->image != NULL)
            <div class="form-input">

                <img  src="{{ asset('/storage/app/public/images/' . $product->image) }}" />
            </div>
        @endif
        <a href="{{route('admin.main')}}">Back to maintaining</a>

    </ul>



@endsection
