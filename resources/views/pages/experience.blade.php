<section id="resume" class="resume">
    <div class="container">



        <div class="row">

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Professional Experience</h3>
                @foreach($experiences as $experience)


                    <div class="resume-item">
                        <h4>{{$experience->name}}</h4>
                        <h5>{{$experience->date_st}} - {{$experience->date_end}}</h5>

                        <ul>
                            <li>{{$experience->description}}</li>

                        </ul>
                    </div>
                @endforeach

            </div>


        </div>

    </div>
</section>
