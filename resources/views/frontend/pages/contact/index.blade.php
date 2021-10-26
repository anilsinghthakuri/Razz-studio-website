@extends('frontend.layouts.frontend_master')

@section('frontend_contents')

<section class="inner__header">
    <div class="inner__header--images">
        <div class="container-fluid">
            <div class="inner__header--pageName">
                <h2>Contact</h2>
                <p><a href="#">Home</a><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                    <span>Contact</span> </p>
            </div>
        </div>
    </div>
</section>

<section class="section contact">
    <div class="core__work section__Pt section__Pb">
        <div class="container">


            <div class="row ">
                <div class="col-md-4">
                    <div class="work-item work-item--contact mb-4 text-center">


                        <i aria-hidden="true" class="fas fa-headset"></i>


                        <h3 class="box-title mt-3 mb-3">
                            <a href="#">Customer Support</a>
                        </h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-item work-item--contact mb-4 text-center">


                        <i aria-hidden="true" class="far fa-envelope-open"></i>


                        <h3 class="box-title mt-3 mb-3">
                            <a href="#">Any Questions</a>
                        </h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>





                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-item work-item--contact mb-4 text-center">


                        <i aria-hidden="true" class="far fa-map"></i>


                        <h3 class="box-title mt-3 mb-3">
                            <a href="#">Our Address</a>
                        </h3>
                        <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>

<section class="section__Pb">
    <div class="map-google ">

        <img class="contact__img" src="{{asset('frontend/images/dhangadi.png')}}" alt="location">
    </div>
</section>

<section class="contact__form section__Pb">
    <div class="container">
        <div class="row">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Your Full Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Your Full Name">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Your Email Address</label>
                    <input type="email" class="form-control" id="inputPassword4" placeholder="Your Email Address">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Number">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Subject">
                </div>

                <div class="col-md-12">
                    <label for="inputZip" class="form-label">Leave A Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                        placeholder="Leace A Message"></textarea>


                </div>


                <div class="col-12 mt-5">
                    <button type="submit" class="btn btn-primary">Send Us</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
