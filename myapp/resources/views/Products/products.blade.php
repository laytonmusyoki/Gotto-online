@extends('base')


@section('title','Products')


@section('content')



<section class="job-section recent-jobs-section section-padding">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-12 mb-4">
                            <h2>Recent Products</h2>

                            <p><strong>Over 10k latest products</strong> Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit eismuod larehai</p>
                        </div>

                        <div class="clearfix"></div>

                        <!-- start -->
                        @forEach($items as $item)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="job-thumb job-thumb-box">
                                <div class="job-image-box-wrap">
                                    <a href="job-details.html">
                                        <img src="images/jobs/it-professional-works-startup-project.jpg" class="job-image img-fluid" alt="">
                                    </a>

                                    <div class="job-image-box-wrap-info d-flex align-items-center">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">Internship</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge">Freelance</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="job-body">
                                    <h4 class="job-title">
                                        <img src="profileimages/{{$item->image}}" width='150' height="150" style="border-radius:50%;" alt="">
                                    </h4>

                                    <div class="d-flex align-items-center">
                                        <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                            <img src="images/logos/salesforce.png" class="job-image me-3 img-fluid" alt="">

                                            <p class="mb-0">{{$item->name}}</p>
                                        </div>

                                        <a href="#" class="bi-bookmark ms-auto me-2">
                                        </a>

                                        <a href="#" class="bi-heart">
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <p class="job-location">
                                            <i class="custom-icon bi-geo-alt me-1"></i>
                                            Kuala, Malaysia
                                        </p>

                                        <p class="job-date">
                                            <i class="custom-icon bi-clock me-1"></i>
                                            10 hours ago
                                        </p>
                                    </div>

                                    <div class="d-flex align-items-center border-top pt-3">
                                        <p class="job-price mb-0">
                                            <i class="custom-icon bi-cash me-1"></i>
                                            Ksh {{$item->selling}}
                                        </p>

                                        <a  class="custom-btn btn ms-auto update-cart" data-action="add" data-product="{{$item->id}}" id="btn">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforEach
                        <!-- end -->
                    </div>
                </div>
            </section>

            
            <script>
                 var csrf_token = "{{ csrf_token() }}";
                var updateBtns = document.getElementsByClassName('update-cart')
                for(var i=0;i<updateBtns.length;i++){
                    updateBtns[i].addEventListener('click',function(){
                        var productId=this.dataset.product;
                        var action=this.dataset.action;
                        console.log('productId:',productId,'action:',action);

                        Senddata(productId,action);
                    })
                }
                function Senddata(productId,action){
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                        fetch('http://127.0.0.1:8000/cartpost', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-Token': csrfToken,
                            },
                            body: JSON.stringify({'productId': productId, 'action': action})
                        })

                }
            </script>



@include('includes/footer')



@endsection


