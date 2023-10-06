@extends('layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
{{--<x-alert/>--}}
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style=' background: url("{{asset('storage/picture/proflie.jpg')}}") top center'>
        <div class="hero-container" data-aos="fade-in">
            <h1>{{ucfirst($user->name)}}</h1>
            <p>I'm <span class="typed" data-typed-items="{{$user->job_title}}"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->

        @include('pages.about')
        <!-- End About Section -->

        <!-- ======= Facts Section ======= -->

        <!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
       @include('pages.skiles')
        <!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
     @include('pages.experience')
        <!-- End Resume Section -->


        <!-- ======= Testimonials Section ======= -->

       <!-- End Testimonials Section -->

        <!-- End Portfolio Section -->
        @include('pages.portfolio')
        <!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        @include('pages.content')
        <!-- End Contact Section -->

@endsection
