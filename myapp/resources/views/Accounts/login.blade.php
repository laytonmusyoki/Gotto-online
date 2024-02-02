@extends('base')
@section('title','Login')




@section('content')


<style>
    .element{
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgb(82, 82, 238);
    height: 100%;
    padding: 20px;
}
.my-container{
    box-shadow: hsl(0, 0%, 80%) 0 0 16px;
    padding: 10px;
}
label{
        font-size: 20px;
        color: #610c27 ;
    }
</style>

<div class="container" style="margin-top: 20px;">
    <div class="row my-container">
        <div class="col-lg-6">
            <div class="elements">
                <div class="box2">
                    <div class="add-bg">
                        <h3 style="color: #555;">Login</h3>
                    </div>

                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert" style="margin: 5px auto;">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close name1" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                    @endif

                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible" role="alert" style="margin: 5px auto;">
                    <strong>{{ session('error') }}</strong>
                    <button type="button" class="btn-close name1" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                    @endif

                    <form action="/loginpost" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="">Username</label>
                                <input type="text" name="username" required placeholder="Enter Username" >
                            </div>
                            <div class="col-lg-12">
                                <label for="">Password</label>
                                <input type="password" name="password" required placeholder="Enter Password" >
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success" style="margin-top: 10px;">Login</button>
                            </div>
                            <p style="font-weight: bolder;">Don't have an account? <a href="{{route('register')}}">Register</a></p>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-12 mt-2 d-flex align-items-center mt-lg-0">
                    <p style="margin-top: 40px;">Design: <a class="sponsored-link" rel="sponsored" href="" style="color: red;" target="_blank">LaytonSoftwares</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="element" style="background: rgb(82, 82, 238); margin-bottom: 15px;">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="hero-section-text mt-5">
                        <h6 class="text-white">Are you looking for your dream Shop?</h6>

<h1 class="hero-title text-white mt-4 mb-4">Online Platform. <br> Shop with us</h1>

                        <a href="{{route('register')}}" class="custom-btn custom-border-btn btn" style="color: white; font-weight: bold; padding: 10px 50px;">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes/footer')


@endsection