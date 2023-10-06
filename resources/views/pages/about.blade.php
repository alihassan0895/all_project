<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <p> {{$user->about}}</p>
        </div>
        <div class="section-title">
            <h2>Education</h2>
            <p>
                {{$user->education}}</p>
        </div>
        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{asset('storage/picture/proflie.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{$user->job_title}}</h3>

                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{date('Y-F-d', strtotime($user->birthday))}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ url()->current()}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+ {{ $user->phone}}</span></li>
{{--                            <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{$user->address}}</span></li>--}}
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{($age->y)}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{$user->email}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End About Section -->
