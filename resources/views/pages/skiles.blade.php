<section id="skills" class="skills section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Skills</h2>
        </div>

        <div class="row skills-content">

            @foreach($skiles as $skile)
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="progress">
                        <span class="skill">{{$skile->name}} <i class="val">{{$skile->rate}}%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{$skile->rate}}" aria-valuemin="0" aria-valuemax="{{$skile->rate}}"></div>
                        </div>
                    </div>
                </div>

            @endforeach



        </div>

    </div>
</section>
