@extends('layouts.app')
@section('content')
    <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{$project->name}}</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Portfoio Details</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

{{--            <div class="row gy-4">--}}

                <div class="col-lg-12">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @foreach($images as $img)
                                <div class="swiper-slide">
                                    <img src="{{asset('storage/'.$img->name)}}" alt="">
                                </div>
                            @endforeach


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>


                            <li><strong>Project date</strong>: {{date('Y,F d', strtotime($project->date))}}</li>
                           @if($project->link<>null)
                            <li><strong>Project URL</strong>: <a href="{{$project->link}}">{{$project->link}}</a></li>
                            @endif
                        </ul>
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            {{$project->description}}
                        </p>
                    </div>
                    <div class="portfolio-description">

                    </div>
                </div>

{{--            </div>--}}

        </div>
    </section>
    </main>
    <!-- End Portfolio Details Section -->
@endsection
