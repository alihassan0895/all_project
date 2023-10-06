<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>

            </p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach($pro as $project)

                        <li data-filter=".{{ str_replace(' ', '_', $project->name)}}">{{$project->name}}</li>

                    @endforeach

                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            @foreach($projectes as $project)
                <div class="col-lg-4 col-md-6 portfolio-item {{str_replace(' ','_',$project->project_name)}}">
                    <div class="portfolio-wrap">

                        <img src="{{asset('storage/'.$project->image_name)}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('storage/'.$project->image_name)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$project->project_name}}"><i class="bx bx-plus"></i></a>
                            <a href="{{route('details.show',['id'=>$project->project_id])}}" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>


            @endforeach



        </div>

    </div>
</section>
