<div class="top__header">

    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div> <span><i class="fas fa-phone-volume"></i> (+468) 254 762 443</span>
                <span><i class="fas fa-envelope-open"></i> info@example.com</span>
                <span><i class="fas fa-map-marker-alt"></i> 205 Main Road, Dhangadhi</span>

            </div>

            <div class="social__media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"> <i class="fab fa-instagram"></i></a>
                <a href="#"> <i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

</div>


<!-- ============= COMPONENT ============== -->
<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light bg-light nav__bar--main">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="logo" src="{{asset('frontend/images/logo-2.jpg')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">


            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.home')}}"> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.business')}}">Business</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.about')}}"> About us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.team')}}"> team</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.community')}}"> community</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.newsroom')}}"> newsroom</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.careers')}}"> careers</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.contact')}}"> contact</a></li>

            </ul>

        </div>
    </div> <!-- container-fluid.// -->
</nav>
