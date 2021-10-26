<section class="section footer">
		<div class="core__footer section__Pt section__Pb">
			<div class="container">

				<div class="row pt-4 pb-4">
					<div class="col-md-3">
						<div class="footer-item ">


							<a href="#"><img class="logo mb-4" src="{{asset('frontend/images/logo-2.jpg')}}" alt=""></a>
							<div class="footer_box ">
								<p class="footer-text mb-4">
									Pulvinar seneictus morbi to quisque nunc tos towa faucibus netus etiam mone lestie
									nice disease
								</p>
								<div class="social__media social__media--footer">

									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"> <i class="fab fa-instagram"></i></a>
									<a href="#"> <i class="fab fa-youtube"></i></a>
								</div>
							</div>



						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-item ">



							<div class="footer_box ">
								<h4 class="mb-4">Business</h4>
								<div class="menu-list-footer">
									<li><a href="#">Automobiles</a></li>
									<li><a href="#">Electronics</a></li>
									<li><a href="#">Finance</a></li>
									<li><a href="#">Insurance</a></li>
									<li><a href="#">Bioscience</a></li>
									<li><a href="#">Alternative Energy</a></li>

								</div>
							</div>



						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-item ">



							<div class="footer_box ">
								<h4 class="mb-4">Corporate</h4>
								<div class="menu-list-footer">
									<li><a href="#">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Community</a></li>
									<li><a href="#">Newsroom</a></li>
								</div>
							</div>



						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-item ">



							<div class="footer_box ">
								<h4 class="mb-4">Recent News</h4>
								<div class="d-flex align-items-center mb-3">
									<div class="img-footer"><img class="footer-news" src="{{asset('frontend/images/news-list-1.jpeg')}}"
											alt="news"></div>
									<div class="footer__news--contain"><a href="#">Lorem Ipsum Dolor Sit Amet </a>
										<span><i class="fas fa-calendar-week"></i> March 13, 2021</span></div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<div class="img-footer"><img class="footer-news" src="{{asset('frontend/images/news-list-1.jpeg')}}"
											alt="news"></div>
									<div class="footer__news--contain"><a href="#">Lorem Ipsum Dolor Sit Amet </a>
										<span><i class="fas fa-calendar-week"></i> March 13, 2021</span></div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<div class="img-footer"><img class="footer-news" src="{{asset('frontend/images/news-list-1.jpeg')}}"
											alt="news"></div>
									<div class="footer__news--contain"><a href="#">Lorem Ipsum Dolor Sit Amet </a>
										<span><i class="fas fa-calendar-week"></i> March 13, 2021</span></div>
								</div>
							</div>



						</div>
					</div>


				</div>
			</div>
		</div>
		<div class="footer__bottom">
			<div class="container">
				<div class=" d-flex justify-content-between align-items-center">
					<p>© 2021 Raaz Group Of Management. All Rights Reserved.</p>
					<p>Handcrafted by : <a href="#" target="blank">Bikash Bist</a></p>
				</div>
			</div>
		</div>
	</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('frontend/scripts/script.js')}}"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {

        window.addEventListener('scroll', function () {

            if (window.scrollY > 200) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
    // DOMContentLoaded  end
</script>
