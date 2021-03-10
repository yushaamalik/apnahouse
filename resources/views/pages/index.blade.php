@extends('layouts.stack')
@section('content')
<div class="main-container">
    <section class="cover imagebg height-60 text-center" data-overlay="3">
        <div class="background-image-holder">
            <img alt="background" src="/stack/img/knowledge-1.jpg" />
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <h1>Apna House</h1>
                    <p class="lead">
                        Build your dream homes
                    </p>
                    <div class="boxed boxed--lg bg--white text-left">
                        <form class="form--horizontal row m-0">
                            <div class="col-md-8">
                                <input type="text" name="search" placeholder="Type search keywords here" />
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn--primary type--uppercase">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="cta cta-4 space--xxs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="label label--inline">New</span>
                    <span>Recieve lifetime free content and bugfix updates when you
                        <a href="https://themeforest.net/item/stack-multipurpose-html-with-page-builder/19337626?ref=medium_rare">purchase Stack</a> today</span>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="text-center space--xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Browse Plans</h2>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="space--sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="masonry">
                        
                        <div class="masonry__container row">
                            <div class="masonry__item col-md-6 col-lg-3"></div>
                            @foreach($plans as $plan)
                            <div class="masonry__item col-md-6 col-lg-3">
                                <div class="product">
                                    <a href="#">
                                        <img alt="Image" src="{{ asset('/storage/plan_attachments/'. $plan->plan_files)}}" />
                                    </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5>{{$plan->plan_name}}</h5>
                                        </div>
                                        <div>
                                            <span class="h4 inline-block">PKR {{$plan->price}}</span>
                                            
                                        </div>
                                        <div>
                                            {{-- <a class="btn btn--primary" href="modification-request/{{$plan->id}}/{{$plan->architect_id}}">
                                                <span class="btn__text">Modification Request</span>
                                            </a> --}}
                                            <div class="modal-instance">
                                                <a href="#" class="modal-trigger"> <span class="btn__text">Modification Request</span></a>
                                                <div class="modal-container">
                                                    <div class="modal-content section-modal">
                                                        <section class="unpad ">
                                                            <div class="container">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-6">
                                                                        <div class="boxed boxed--lg bg--white text-center feature">
                                                                            
                                                                            <div class="modal-close modal-close-cross"></div>
                                                                            
                                                                            <h3>Create Modification Request</h3>
                                                                            {{-- <h5>{{$plan->id}} | {{$plan->architect_id}}</h5>  --}}
                                                                            <div class="feature__body">
                                                                                    <form method="POST" action="/modification-request-save/{{$plan->id}}/{{$plan->architect_id}}">
                                                                                        @csrf
                                                                                    <input type="hidden" name="architectId" value="{{$plan->architect_id}}">
                                                                                    <input type="hidden" name="planId" value="{{$plan->id}}">    

                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <input type="text" name="title" placeholder="Title">
                                                                                        </div>
                                                                                        
                                                                                        <div class="col-md-12">
                                                                                            <button class="btn btn--primary type--uppercase" type="submit">Create</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end of row-->
                                                                                </form>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end of row-->
                                                            </div>
                                                            <!--end of container-->
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            <!--end item-->
                        </div>
                        <!--end masonry container-->
                    </div>
                    <!--end masonry-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
  
    @endsection