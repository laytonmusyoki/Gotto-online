@extends('base')


@section('title','Products')


@section('content')


<div class="container">
<table class="table table-striped">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>
    @forEach($items as $item)
    <tr>
        <td><img src="profileimages/{{$item->image}}" width='100' height="100" style="border-radius:50%;" alt=""></td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->quantity}}</td>
        <td>{{($item->quantity) * ($item->price)}}</td>
    </tr>
    @endforEach
</table>
</div>



@include('includes/footer')

@endsection