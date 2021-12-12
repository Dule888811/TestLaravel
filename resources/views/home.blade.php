@extends('layouts.app')

@section('content')
    @if(count($errors))
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    @dd($products)
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card margin-top">
                <div class="card-header">
                <form action ="{{route('ads.store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-input ">
                        <label for="destripton">destripton:
                            <input type="text"  name="description" id="description"></label>
                    </div>
                   <div class="form-input">
                    <label for="title">Title:
                        <input type="text" class="align-content-center" name="title" id="title"></label>
                    </div>
                    <div class="form-input">
                        <label for="price">Price:
                            <input type="text" class="align-content-center" name="price" id="price"></label>
                    </div>
                    <div class="form-input">
                    <input type="radio" class="align-content-center" id="new" name="result" value="1">
                     <label for="new">new</label><br>
                     <input type="radio" id="old" name="result" value="0">
                        <label for="new">old</label><br>
                    </div>
                    <div class="form-input">
                    <select class="selectpicker form-control" name="category" id="category" data-live-search="true">
                    <option>---------Select category----------</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-input">
                        <label for="image">image:
                        <input type="file" name="image"></label>
                    </div>
                    <input type="submit"    value="Create"><br/>
                </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
