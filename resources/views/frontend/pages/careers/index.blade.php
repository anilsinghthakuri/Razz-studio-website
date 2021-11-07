@extends('frontend.layouts.frontend_master')

@section('frontend_contents')

<section class="inner__header">
    <div class="inner__header--images">
        <div class="container-fluid">
            <div class="inner__header--pageName">
                <h2>Careers</h2>
                <p><a href="#">Home</a><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                    <span>Careers</span> </p>
            </div>
        </div>
    </div>
</section>


<section class="section news">
    <div class="core__work section__Pt section__Pb">
        <div class="container">
            <div class="section__title text-center ">
                <h4 class="mb-3">JOIN US</h4>
                <h2>A rewarding career awaits you at Golchha Group. Let's work together to repurpose our </h2>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-5">
                <div class="col-md-12 col-lg-6">
                    <div class="card pb-4">
                        <div class="text-center"> <img src="https://i.imgur.com/Dh7U4bp.png" width="200">
                            <p>
                                <span class="d-block mt-3">Subscribe to our newsletter in order not to miss new
                                    arrivals
                                    <br> promotions and discounts of our store</span>
                            </p>

                            <div class="mx-5">
                                <form action="{{route('frontend.career_form')}}" method="post">
                                    <div class="input-group mb-3 mt-4">
                                        @csrf
                                        <input type="email" class="form-control" placeholder="Enter email" name="email"
                                            aria-label="Recipient's username" aria-describedby="button-addon2" required>
                                        <button class="btn btn-success border-rad" type="submit"
                                            id="button-addon2">Subscribe
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="work-item d-flex mb-5">

                    <div class="work_box pt-5  ">

                        <div class="section__title pb-3 ">
                            <h4 class="mb-3">BENEFITS</h4>
                            <h2>Why Us?</h2>
                        </div>
                        <p>With an organization committed to its team members with a strong belief in work-life
                            balance and various other benefits, it’s easy to see why Golchha is cited as one of the
                            best employers in the country. Joining our team means working with people who have your
                            back and are invested in helping you build a strong future.
                        </p>

                    </div>
                    <img class="community-img " alt="Vue logo" src="{{asset('frontend/images/news-list-3.jpeg')}}">


                </div>
            </div>

            <!-- <div class="row mb-5 mt-3">
                    <div class=" col-md-12 col-lg-4 ">
                        <div class="work-item mb-5">


                            <img class="news-img " alt="Vue logo" src="images/news-list-3.jpeg">
                            <div class="work_box ">
                                <div class=" d-flex justify-content-between align-items-center mb-3">
                                    <span><i aria-hidden="true" class="far fa-user"></i> golchha</span>
                                    <span><i class="fas fa-calendar-week"></i> MAY 19, 2021</span>
                                </div>
                                <h3 class="box-title mb-3">
                                    <a href="#">गोल्छा ग्रुपले पाटन अस्पताललाई दियो १ करोड सहयोग</a>
                                </h3>
                                <a class="work-readmore" href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>



                        </div>
                    </div>
                    <div class=" col-md-12 col-lg-4 ">
                        <div class="work-item mb-5">


                            <img class="news-img " alt="Vue logo" src="images/news-list-3.jpeg">
                            <div class="work_box ">
                                <div class=" d-flex justify-content-between align-items-center mb-3">
                                    <span><i aria-hidden="true" class="far fa-user"></i> golchha</span>
                                    <span><i class="fas fa-calendar-week"></i> MAY 19, 2021</span>
                                </div>
                                <h3 class="box-title mb-3">
                                    <a href="#">गोल्छा ग्रुपले पाटन अस्पताललाई दियो १ करोड सहयोग</a>
                                </h3>
                                <a class="work-readmore" href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>



                        </div>
                    </div>
                    <div class=" col-md-12 col-lg-4 ">
                        <div class="work-item mb-5">


                            <img class="news-img " alt="Vue logo" src="images/news-list-3.jpeg">
                            <div class="work_box ">
                                <div class=" d-flex justify-content-between align-items-center mb-3">
                                    <span><i aria-hidden="true" class="far fa-user"></i> golchha</span>
                                    <span><i class="fas fa-calendar-week"></i> MAY 19, 2021</span>
                                </div>
                                <h3 class="box-title mb-3">
                                    <a href="#">गोल्छा ग्रुपले पाटन अस्पताललाई दियो १ करोड सहयोग</a>
                                </h3>
                                <a class="work-readmore" href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>



                        </div>
                    </div>

                </div>

                <div class="section__title ">
                    <h4 class="mb-3">NEWS AND UPDATES</h4>
                    <h2>Mentions</h2>
                </div>

                <div class="row ">
                    <div class="col-md-4">
                        <div class="work-item mb-5">


                            <img class="news-img " alt="Vue logo" src="images/news-list-3.jpeg">
                            <div class="work_box ">
                                <div class=" d-flex justify-content-between align-items-center mb-3">
                                    <span><i aria-hidden="true" class="far fa-user"></i> golchha</span>
                                    <span><i class="fas fa-calendar-week"></i> MAY 19, 2021</span>
                                </div>
                                <h3 class="box-title mb-3">
                                    <a href="#">गोल्छा ग्रुपले पाटन अस्पताललाई दियो १ करोड सहयोग</a>
                                </h3>
                                <a class="work-readmore" href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>



                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-item mb-5">


                            <img class="news-img " alt="Vue logo" src="images/news-list-3.jpeg">
                            <div class="work_box ">
                                <div class=" d-flex justify-content-between align-items-center mb-3">
                                    <span><i aria-hidden="true" class="far fa-user"></i> golchha</span>
                                    <span><i class="fas fa-calendar-week"></i> MAY 19, 2021</span>
                                </div>
                                <h3 class="box-title mb-3">
                                    <a href="#">गोल्छा ग्रुपले पाटन अस्पताललाई दियो १ करोड सहयोग</a>
                                </h3>
                                <a class="work-readmore" href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>



                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-item mb-5">


                            <img class="news-img " alt="Vue logo" src="images/news-list-3.jpeg">
                            <div class="work_box ">
                                <div class=" d-flex justify-content-between align-items-center mb-3">
                                    <span><i aria-hidden="true" class="far fa-user"></i> golchha</span>
                                    <span><i class="fas fa-calendar-week"></i> MAY 19, 2021</span>
                                </div>
                                <h3 class="box-title mb-3">
                                    <a href="#">गोल्छा ग्रुपले पाटन अस्पताललाई दियो १ करोड सहयोग</a>
                                </h3>
                                <a class="work-readmore" href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>



                        </div>
                    </div>

                </div> -->
        </div>

    </div>
</section>


@endsection
