@extends('layouts.app')

@section('content')
    <div class="container text-center">

        @foreach ($products as $product)
            <div class="form-input">
                <label for="destripton">destripton:
                    <input type="text"  name="Productdescription" value={{$product->description}}></label>
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
                <label for="price">Category:
                    <input type="text" value={{$product->category->name}} name="Productcategory"></label>
            </div>
            <div class="form-input">
            <label for="price">UserName:
                <input type="text" value={{$product->user->name}} name="UserName"></label>
            </div>
            <div class="form-input">
            <label for="price">location:
                <input type="text" value={{$product->user->location}} name="location"></label>
            </div>
            <div class="form-input">
            <label for="price">phone:
                <input type="text" value={{$product->user->phone}} name="phone"></label>
            </div>



            <br><br>

        @endforeach
]    </div>








    </div>
@endsection
