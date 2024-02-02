@extends('base')

@section('title','Update')


@section('content')

<div class="container">
    <div class="box">
        <h3>Update Product</h3>
        <div class="box-content">
            @if($errors->any())

            @forEach($errors->all() as $err)
            <div class="alert alert-danger">
            {{$err}}
            </div>
            @endforEach

            @endif
            <form action="/updatepost/{{$id->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')


            
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" name="name" value="{{$id->name}}" placeholder="Enter product name">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="category" value="{{$id->category}}"  placeholder="Enter category">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="description" value="{{$id->description}}" placeholder="Enter description">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="buying" value="{{$id->buying}}" placeholder="Enter buying price">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="selling" value="{{$id->selling}}" placeholder="Enter selling price">
                    </div>
                    <div class="col-lg-6">
                        <input type="file" name="image" value="profileimages/{{$id->image}}" class="form-control">
                    </div>
                    <div class="col-lg-3">
                        <input type="submit" class="btn btn-primary" value="Update Product">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('includes/footer')

@endsection