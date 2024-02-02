@extends('base')

@section('title','Add')


@section('content')

<div class="container">
    <div class="box">
        <h3>Add Product</h3>
        <div class="box-content">
            @if($errors->any())

            @forEach($errors->all() as $err)
            <div class="alert alert-danger">
            {{$err}}
            </div>
            @endforEach

            @endif
            <form action="/addpost" method="post" enctype="multipart/form-data">
            @csrf


            
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" name="name" placeholder="Enter product name">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="category" placeholder="Enter category">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="description" placeholder="Enter description">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="buying" placeholder="Enter buying price">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="selling" placeholder="Enter selling price">
                    </div>
                    <div class="col-lg-6">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-lg-3">
                        <input type="submit" class="btn btn-primary" value="Add Product">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('includes/footer')

@endsection