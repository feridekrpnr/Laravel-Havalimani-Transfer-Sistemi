@php
    $setting=\App\Http\Controllers\HomeController::getsetting()

@endphp
@extends('layouts.home')

@section('title', $setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords', $setting->keywords)
@section('header')
    @include('home._header')
@endsection
@section('content')




    <div class="rooms-w3ls bg-li py-5" id="price">
        <div class="container-fluid py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-bl font-weight-bold">En Uygun Araçlar</h3>
            <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3"></p>

            <div class="row">
                @foreach($daily as $rs)
                    <div class="col-lg-4 price-mobamus">
                        <div class="price-top">

                            <a href="{{route('transfer',['id' => $rs->id,'slug' => $rs->title])}}">
                                <img src="{{ Storage::url($rs->image) }}" alt="" class="img-fluid" />
                            </a>
                        </div>
                        <div class="price-w3ls-bottom p-4">
                            <h4 class="my-2"><a href="{{route('transfer',['id' => $rs->id,'slug' => $rs->title])}}">{{$rs->title}}</a></h4>
                            <div class="lm-item-price">
                                <h6>
                                    <span class="price-midd-head">{{$rs->baseprice}}</span>

                                </h6>
                            </div>

                            <a href="{{route('transfer',['id' => $rs->id,'slug' => $rs->slug])}}" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rooms-w3ls bg-li py-5" id="price">
            <div class="container-fluid py-xl-5 py-lg-3">
                <h3 class="tittle text-center text-bl font-weight-bold">En Son Eklenenler</h3>
                <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3"></p>

                <div class="row">
                    @foreach($last as $rs)
                        <div class="col-lg-4 price-mobamus">
                            <div class="price-top">

                                <a href="{{route('transfer',['id' => $rs->id,'slug' => $rs->title])}}">
                                    <img src="{{ Storage::url($rs->image) }}" alt="" class="img-fluid" />
                                </a>
                            </div>
                            <div class="price-w3ls-bottom p-4">
                                <h4 class="my-2"><a href="{{route('transfer',['id' => $rs->id,'slug' => $rs->title])}}">{{$rs->title}}</a></h4>
                                <div class="lm-item-price">
                                    <h6>
                                        <span class="price-midd-head">{{$rs->baseprice}}</span>

                                    </h6>
                                </div>

                                <a href="{{route('transfer',['id' => $rs->id,'slug' => $rs->slug])}}" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rooms-w3ls bg-li py-5" id="price">
                <div class="container-fluid py-xl-5 py-lg-3">
                    <h3 class="tittle text-center text-bl font-weight-bold">Sizin İçin Seçtiklerimiz</h3>
                    <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3"></p>

                    <div class="row">
                        @foreach($picked as $rs)
                            <div class="col-lg-4 price-mobamus">
                                <div class="price-top">

                                    <a href="{{route('transfer',['id' => $rs->id,'slug' => $rs->title])}}">
                                        <img src="{{ Storage::url($rs->image) }}" alt="" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="price-w3ls-bottom p-4">
                                    <h4 class="my-2"><a href="{{route('transfer',['id' => $rs->id,'slug' => $rs->title])}}">{{$rs->title}}</a></h4>
                                    <div class="lm-item-price">
                                        <h6>
                                            <span class="price-midd-head">{{$rs->baseprice}}</span>

                                        </h6>
                                    </div>

                                    <a href="{{route('transfer',['id' => $rs->id,'slug' => $rs->slug])}}" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="{{asset('assets')}}/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('assets')}}/assets/img/portfolio/01-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="{{asset('assets')}}/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('assets')}}/assets/img/portfolio/02-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Explore</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="{{asset('assets')}}/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('assets')}}/assets/img/portfolio/03-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="{{asset('assets')}}/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('assets')}}/assets/img/portfolio/04-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="{{asset('assets')}}/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('assets')}}/assets/img/portfolio/05-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="{{asset('assets')}}/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('assets')}}/assets/img/portfolio/06-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Window</li>
                                    <li>Category: Photography</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

