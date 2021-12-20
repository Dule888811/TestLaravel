@extends('layouts.app')

@section('content')
    <nav role="navigation">

        <ul>

            <ul class="categories">Categories
                @foreach($categories as $category)
                    <ul class="Subc hide">
                        @if($category->Subcategories()->count() > 0)
                            <br>
                            <h5 class="hide">Category Subcategiries{{$category->name}}</h5>:
                            <br>
                            @foreach($category->Subcategories()->get() as $subcategory)

                                @if($subcategory['category_id'] == $category['id'])
                                    <li class="hide">Subcategory:{{$subcategory['name']}}</li>
                                @else
                                    @continue;
                                @endif
                                <hr class="rounded">
                            @endforeach
                        @endif
                        @if($category->Products()->count() > 0)
                            @foreach($category->Products()->get() as $product)
                                @if($product['category_id'] == $category['id'])
                                    <ul class="categories-products-ul">Category Products:{{$category->name}}
                                        <li class="cat-products"><h5>Title:{{$product['title']}}</h5></li>
                                        <li class="cat-products">Name of use:{{$product->user['name']}}</li>
                                        <li class="cat-products">location:{{$product->user['location']}}</li>
                                        <li class="cat-products">phone:{{$product->user['phone']}}</li>
                                        <li class="cat-products">price:{{$product['price']}}</li>
                                        <li class="cat-products">1=new:{{$product['new']}}</li>
                                        <li class="cat-products">created at{{$product['created_at']}}</li>

                                        <a href="{{route('product', ['product' => $product])}}">Go to ads</a>
                                        <br>
                                        <hr class="rounded">
                                    </ul>
                                @else
                                    @continue;
                                @endif
                            @endforeach


                        @endif


                    </ul>

                @endforeach


            </ul>


        </ul>




    </nav>

    <div class="col-md-8 ">
        <div class="card margin-top">
            <div class="card-header">
                <form action ="{{route('search')}}" method="POST">
                    {{csrf_field()}}

                    <div class="form-input">

                        <input type="radio" class="align-content-center" id="title" name="result" value="title">
                        <label for="title">Title</label><br>
                        <input type="radio" id="description" name="result" value="description">
                        <label for="description">Description</label><br>


                        <input type="radio" class="price" id="price" name="result" value="price">
                        <label for="price">price</label><br>

                        <input type="radio" id="category" name="result" value="category">
                        <label for="category">category</label><br>
                        <input type="radio" id="location" name="result" value="location">
                        <label for="location">location</label><br>



                    </div>

                    <div class="form-input">

                        <label for="search">Search the products by this options up</label>
                        <input type="search" id="search" name="search">
                    </div>
                    <input type="submit"    value="Search"><br/>
                </form>


            </div>


        </div>
    </div>


    <div class="container text-center">

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

            @if($product->image != NULL)
                <div class="form-input">

                    <img  src="{{ asset('/storage/app/public/images/' . $product->image) }}" />
                </div>
            @endif



            <br><br>

        @endforeach
]    </div>








    </div>
@endsection
