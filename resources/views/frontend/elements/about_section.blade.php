<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>About</h2>
        </div>
        @foreach($abouts as $about)
        <div class="row">
            <div class="col-lg-4">
                <img src="{{asset($about->image)}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content about-p">
                <p style="text-align: justify;" class="lead">{{$about->title_1}}<br><br>
                    {{$about->title_2}}<br><br>
                    {{$about->title_3}}</p><br>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about->birthday}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Country:</strong> <span>{{$about->country}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->city}}</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$about->age}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about->degree}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$about->email}}</span></li>
                        </ul>
                    </div>
                </div>
                <a href="https://drive.google.com/file/d/1jqnn4c84WEu6CHvdUu9m8FTZKMD6nr8t/view?usp=sharing" target="_blank" class="sim-btn hvr-bounce-to-top mt-2">Download Rusume</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
