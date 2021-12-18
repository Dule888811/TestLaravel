@extends('layouts.app')

@section('content')



    <div class="container text-center">



        @foreach ($products as $product)

            <div class="form-input">
                <label for="description">description:
                    <input type="text" name="description" value={{$product->description}}></label>
            </div>
            <div class="form-input">
                <label for="title">Title:
                    <input type="text" name="title" value={{$product->title}}></label>
            </div>
            <div class="form-input">
                <label for="price">Price:
                    <input type="text" name="price" value={{$product->price}}></label>
            </div>
            <div class="form-input">
                <label for="category">Category:

                    <input type="text" name="category" value={{\App\Category::find($product->category_id)['name']}}></label>
            </div>
            <div class="form-input">
                <label for="new">1=new:
                    <input type="text" name="new" value={{$product->new}}></label>
            </div>


            <br><br>

        @endforeach


    </div>

    <a style="text-align: center" href="{{route('admin.main')}}">Back to maintaining</a>

@endsection
