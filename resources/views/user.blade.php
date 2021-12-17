@extends('layouts.app')

@section('content')



    <div class="container text-center">


        @dd($products);
        @foreach ($products as $product)
            <div class="form-input">
                <label for="destripton">destripton:
                    <input type="text" name="Productdescription" value={{$product->description}}></label>
            </div>
            <div class="form-input">
                <label for="title">Title:
                    <input type="text" value={{$product->title}} name="Producttitle"></label>
            </div>
            <div class="form-input">
                <label for="price">Price:
                    <input type="text" value={{$product->price}} name="Productprice"></label>
            </div>
            <div class="form-input">
                <label for="price">Price:
                    <input type="text" value={{$product->category->name}} name="Productcategory"></label>
            </div>
            <div class="form-input">
                <label for="Productnew">1=new:
                    <input type="text" value={{$product->new}} name="Productnew"></label>
            </div>


            <br><br>

        @endforeach


    </div>

    <a style="text-align: center" href="{{route('admin.main')}}">Back to maintaining</a>

@endsection
