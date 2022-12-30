<section id="hero" class="d-flex flex-column justify-content-center">
    @foreach($homes as $home)
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>{{$home->title}}</h1>
        <p>I'm <span class="typed" data-typed-items="Junior Web Developer"></span></p>
        <div class="social-links">
            <a href="{{$home->twitter}}" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="{{$home->github}}" target="_blank" class="github"><i class="bi bi-github"></i></a>
            <a href="{{$home->instagram}}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{$home->linkedin}}" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
    @endforeach
</section>
