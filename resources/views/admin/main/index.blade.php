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

                        @endforeach
                    @endif
                            <br>
                               @if($category->Products()->count() > 0)
                            <br>
                            <h5 class="hide">Category Products:{{$category->name}}</h5>:
                            <br>
                                  @foreach($category->Products()->get() as $product)
                                @if($product['category_id'] == $category['id'])
                                        <li><h5>Title:{{$product['title']}}</h5></li>
                                        <li>Name of use:{{$product->user['name']}}</li>
                                        <li>location:{{$product->user['location']}}</li>
                                        <li>phone:{{$product->user['phone']}}</li>
                                        <li>price:{{$product['price']}}</li>
                                        <li>1=new:{{$product['new']}}</li>
                                        <li>created at{{$product['created_at']}}</li>
                                    <br><br>
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
