<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
        </div>

        {{--                role="form" class="php-email-form"--}}


        <x-alert_email/>
        {{--        <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
        {{--            <strong>Your message!</strong> Was send Successfully--}}

        {{--        </div>--}}
        <div class="row" data-aos="fade-in">

            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="info">
                    <div class="row">
                        <div class="col-sm-6">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{$user->email}}</p>
                        </div>

                        <div class="col-sm-6">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+{{ $user->phone}}</p>

                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{route('welcome.store')}}" method="post" class="email">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 ">
                            @error('name')
                            <span style="color: darkred">
                                      {{$message}}
                                    </span>
                            <br>
                            @enderror
                            <label for="name">Your Name</label>
                            <input type="text" name="name" value="{{old('name')}}" class=" form-control" id="name"
                                   required>
                        </div>
                        <div class="form-group col-md-6">
                            @error('email')
                            <span style="color: darkred">
                                      {{$message}}
                                    </span>
                            <br>
                            @enderror
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        @error('subject')
                        <span style="color: darkred">
                                      {{$message}}
                                    </span>
                        <br>
                        @enderror
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" value="{{old('subject')}}" name="subject" id="subject"
                               required>
                    </div>
                    <div class="form-group">
                        @error('message')
                        <span style="color: darkred">
                                      {{$message}}
                                    </span>
                        <br>
                        @enderror
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" required>
                                    {{old('message')}}

                                </textarea>
                    </div>
                    {{--                            <div class="my-3">--}}
                    {{--                                <div class="loading">Loading</div>--}}
                    {{--                                <div class="error-message"></div>--}}
                    {{--                                <div class="sent-message">Your message has been sent. Thank you!</div>--}}
                    {{--                            </div>--}}
                    <div class="text-center">
                        <button type="submit" name="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</section>
