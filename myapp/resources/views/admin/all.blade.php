@extends('base')

@section('title','Products')


@section('content')

<div class="container">
    <div class="box">
        <h3>All Products</h3>
        <div class="box-content">
            <a href="{{route('add')}}" class="btn btn-outline-success">Add Product</a>
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert" style="margin: 5px auto;">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close name1" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            @endif

            @if(session()->has('error'))
            <div class="alert alert-warning alert-dismissible" role="alert" style="margin: 5px auto;">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="btn-close name1" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            @endif
            <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Buying</th>
                    <th>Selling</th>
                    <th>Action</th>
                </tr>
                @forEach($products as $product)
                <tr>
                    <td><img src="/profileimages/{{$product->image}}" width='80' height='80' style="border-radius:50%" alt=""></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->buying}}</td>
                    <td>{{$product->selling}}</td>
                    <td>
                        <a href="/update/{{$product->id}}" class="btn btn-warning">Update</a>
                        <a href="/deleteproduct/{{$product->id}}" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
                @endforEach
            </table>
</div>
            <div class="pagination-links">
            {{$products->links()}}
            </div>
        </div>
    </div>
</div>

@include('includes/footer')

@endsection