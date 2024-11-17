@extends('frontend.frontend_dashboard')
@section('main')

@section('title')
    Agent List-Ishal Realestate
@endsection

        <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('frontend/assets/images/shape/shape-9.png') }});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('frontend/assets/images/shape/shape-10.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Agent </h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Agent List </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- agents-page-section -->
        <section class="agents-page-section agents-list">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar agent-sidebar">
                            
                            <div class="category-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Status Of Property</h5>
                                </div>
                                <ul class="category-list clearfix">
                                    <li><a href="{{ route('rent.property') }}">For Rent <span>({{ count($rentproperty) }})</span></a></li>
                                    <li><a href="{{ route('buy.property') }}">For Sale <span>({{ count($buyproperty) }})</span></a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="agents-content-side">
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left">
                                    <h5>Search Reasults: <span>Showing {{ count($agent) }} Listings</span></h5>
                                </div>

                            </div>
                            <div class="wrapper list">
                                <div class="agents-list-content list-item">
                                    @foreach($agent as $item)
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{ (!empty($item->photo)) ? url('upload/agent_images/'.$item->photo) : url('upload/no_image.jpg') }}" alt="" style="width:270px; height:330px;">
                                            </figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="{{ route('agent.details',$item->id) }}">{{ $item->name }}</a></h4>
                                                        <span class="designation">{{ $item->username }}</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="{{ route('agent.details',$item->id) }}" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="pagination-wrapper">
                                {{ $agent->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- agents-page-section end -->


        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <span>Subscribe</span>
                            <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form action="contact.html" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                    <button type="submit">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->




@endsection