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
            <div class="element" style="background: rgb(82, 82, 238);">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="hero-section-text mt-5">
                        <h6 class="text-white">Are you looking for your dream Shop?</h6>

                        <h1 class="hero-title text-white mt-4 mb-4">Online Platform. <br> Shop with us</h1>

                        <a href="{{route('login')}}" class="custom-btn custom-border-btn btn" style="color: white; font-weight: bold; padding: 10px 50px;">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="elements">
                <div class="box2">
                    <div class="add-bg">
                        <h3 style="color: #555;">REGISTER</h3>
                    </div>
                    @if($errors->any())

                    @forEach($errors->all() as $err)
                    <div class="alert alert-danger">
                    {{$err}}
                    </div>
                    @endforEach

                    @endif
                    <form action="/registerpost" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="">Username</label>
                                <input type="text" name="username" placeholder="Enter Username" value="">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Enter Email" value="">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Enter Password" value="">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Confirm Password</label>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" value="">
                            </div>
                            
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success" style="margin-top: 10px;">Register</button>
                            </div>
                            <p>Already have an account? <a href="{{route('login')}}">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes/footer')

@endsection