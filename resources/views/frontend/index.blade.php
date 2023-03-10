@extends('frontend.master_dashboard')
@section('main')


<section class="masthead -type-9">
    <div class="masthead-slider js-masthead-slider-9">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="masthead__bg bg-dark-3">
            <img src="{{ asset('frontend/img/masthead/9/bg.png')}}" alt="image">
          </div>

          <div class="container">
            <div class="row justify-center">
              <div class="col-xl-9">
                <div class="text-center">
                  <div class="text-white fw-500 uppercase mb-10">TOUR EXPERIENCE</div>
                  <h1 class="text-80 lg:text-60 sm:text-40 text-white">Find The Best Cruise<br class="md:d-none"> For You</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="masthead__bg bg-dark-3">
            <img src="{{asset('frontend/img/masthead/9/bg.png')}}" alt="image">
          </div>

          <div class="container">
            <div class="row justify-center">
              <div class="col-xl-9">
                <div class="text-center">
                  <div class="text-white fw-500 uppercase mb-10">TOUR EXPERIENCE</div>
                  <h1 class="text-80 lg:text-60 sm:text-40 text-white">Find The Best Cruise<br class="md:d-none"> For You</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="masthead__bg bg-dark-3">
            <img src="{{asset('frontend/img/masthead/9/bg.png')}}" alt="image">
          </div>

          <div class="container">
            <div class="row justify-center">
              <div class="col-xl-9">
                <div class="text-center">
                  <div class="text-white fw-500 uppercase mb-10">TOUR EXPERIENCE</div>
                  <h1 class="text-80 lg:text-60 sm:text-40 text-white">Find The Best Cruise<br class="md:d-none"> For You</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="masthead-slider__nav prev">
        <button class="button py-10 js-prev">
          <span class="h-1 w-48 bg-white"></span>
        </button>
      </div>

      <div class="masthead-slider__nav -next">
        <button class="button py-10 js-next">
          <span class="h-1 w-48 bg-white"></span>
        </button>
      </div>
    </div>

    <a href="#secondSection" class="masthead__scroll">
      <div class="d-flex items-center">
        <div class="text-white lh-15 text-right mr-10">
          <div class="fw-500">Scroll Down</div>
          <div class="text-15">to discover more</div>
        </div>

        <div class="-icon">
          <div></div>
          <div></div>
        </div>
      </div>
    </a>
  </section>

  <section class="layout-pt-lg layout-pb-md relative z--1" id="secondSection">
    <div data-anim-wrap class="container">
      <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-center text-center">
        <div class="col-auto">
          <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Popular Destinations</h2>
            <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
          </div>
        </div>
      </div>

      <div class="row x-gap-10 y-gap-10 pt-40 sm:pt-20">

        <div data-anim-child="slide-up delay-2" class="col-xl col-lg-3 col-6">
          <a href="#" class="citiesCard -type-5 d-flex items-center sm:flex-column sm:items-start px-20 py-20 sm:px-15 sm:py-20 bg-light-2 rounded-4">
            <i class="icon-destination text-24"></i>

            <div class="ml-10 sm:ml-0 sm:mt-10">
              <h4 class="text-16 fw-500">New York</h4>
              <p class="text-14">4,090 properties</p>
            </div>
          </a>
        </div>

        <div data-anim-child="slide-up delay-3" class="col-xl col-lg-3 col-6">
          <a href="#" class="citiesCard -type-5 d-flex items-center sm:flex-column sm:items-start px-20 py-20 sm:px-15 sm:py-20 bg-light-2 rounded-4">
            <i class="icon-destination text-24"></i>

            <div class="ml-10 sm:ml-0 sm:mt-10">
              <h4 class="text-16 fw-500">London</h4>
              <p class="text-14">4,090 properties</p>
            </div>
          </a>
        </div>

        <div data-anim-child="slide-up delay-4" class="col-xl col-lg-3 col-6">
          <a href="#" class="citiesCard -type-5 d-flex items-center sm:flex-column sm:items-start px-20 py-20 sm:px-15 sm:py-20 bg-light-2 rounded-4">
            <i class="icon-destination text-24"></i>

            <div class="ml-10 sm:ml-0 sm:mt-10">
              <h4 class="text-16 fw-500">Los Angeles</h4>
              <p class="text-14">4,090 properties</p>
            </div>
          </a>
        </div>

        <div data-anim-child="slide-up delay-5" class="col-xl col-lg-3 col-6">
          <a href="#" class="citiesCard -type-5 d-flex items-center sm:flex-column sm:items-start px-20 py-20 sm:px-15 sm:py-20 bg-light-2 rounded-4">
            <i class="icon-destination text-24"></i>

            <div class="ml-10 sm:ml-0 sm:mt-10">
              <h4 class="text-16 fw-500">Paris</h4>
              <p class="text-14">4,090 properties</p>
            </div>
          </a>
        </div>

        <div data-anim-child="slide-up delay-6" class="col-xl col-lg-3 col-6">
          <a href="#" class="citiesCard -type-5 d-flex items-center sm:flex-column sm:items-start px-20 py-20 sm:px-15 sm:py-20 bg-light-2 rounded-4">
            <i class="icon-destination text-24"></i>

            <div class="ml-10 sm:ml-0 sm:mt-10">
              <h4 class="text-16 fw-500">Istanbul</h4>
              <p class="text-14">4,090 properties</p>
            </div>
          </a>
        </div>

        <div data-anim-child="slide-up delay-7" class="col-xl col-lg-3 col-6">
          <a href="#" class="citiesCard -type-5 d-flex items-center sm:flex-column sm:items-start px-20 py-20 sm:px-15 sm:py-20 bg-light-2 rounded-4">
            <i class="icon-destination text-24"></i>

            <div class="ml-10 sm:ml-0 sm:mt-10">
              <h4 class="text-16 fw-500">Rome</h4>
              <p class="text-14">4,090 properties</p>
            </div>
          </a>
        </div>

        <div data-anim-child="slide-up delay-8" class="col-xl col-lg-3 col-6">
          <a href="#" class="citiesCard -type-5 d-flex items-center sm:flex-column sm:items-start px-20 py-20 sm:px-15 sm:py-20 bg-light-2 rounded-4">
            <i class="icon-destination text-24"></i>

            <div class="ml-10 sm:ml-0 sm:mt-10">
              <h4 class="text-16 fw-500">Madrid</h4>
              <p class="text-14">4,090 properties</p>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-center text-center">
        <div class="col-auto">
          <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Featured Cruise Deals</h2>
            <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
          </div>
        </div>
      </div>

      <div class="row y-gap-30 pt-40 sm:pt-20">

        <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">

          <a href="cruise-single.html" class="cruiseCard -type-1 rounded-4 ">
            <div class="cruiseCard__image">

              <div class="cardImage ratio ratio-6:5">
                <div class="cardImage__content">

                  <img class="rounded-4 col-12 js-lazy" src="#" data-src="{{asset('frontend/img/cities/1/1.png')}}" alt="image">


                </div>

                <div class="cardImage__wishlist">
                  <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                    <i class="icon-heart text-12"></i>
                  </button>
                </div>


                <div class="cardImage__leftBadge">
                  <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                    Cruise only
                  </div>
                </div>

              </div>

            </div>

            <div class="cruiseCard__content mt-10">
              <div class="text-14 lh-14 text-light-1 mb-5">Norwegian Getawayy</div>

              <h4 class="cruiseCard__title text-dark-1 text-18 lh-16 fw-500">
                <span>7 Night Cruise to the Western Mediterranean</span>
              </h4>

              <p class="text-light-1 lh-14 text-14 mt-5"></p>

              <div class="row y-gap-10 justify-between items-center">

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Sailing Date</div>
                  <div class="text-14 text-light-1">18/06/2022</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Departs</div>
                  <div class="text-14 text-light-1">Southampton</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Ports (7)</div>
                  <div class="text-14 text-light-1">Sete, Toulon...</div>
                </div>

              </div>

              <div class="row y-gap-20 justify-between items-center pt-5">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                    <div class="text-14 text-light-1">
                      <span class="text-15 text-dark-1 fw-500">4.82</span>
                      94 reviews
                    </div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-light-1">
                    From
                    <span class="text-16 fw-500 text-dark-1">US$72</span>
                  </div>
                </div>
              </div>
            </div>
          </a>

        </div>

        <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">

          <a href="cruise-single.html" class="cruiseCard -type-1 rounded-4 ">
            <div class="cruiseCard__image">

              <div class="cardImage ratio ratio-6:5">
                <div class="cardImage__content">


                  <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                    <div class="swiper-wrapper">

                      <div class="swiper-slide">
                        <img class="col-12 js-lazy" src="#" data-src="{{asset('frontend/img/cities/1/1.png')}}" alt="image">
                      </div>

                      <div class="swiper-slide">
                        <img class="col-12 js-lazy" src="#" data-src="{{asset('frontend/img/cities/1/1.png')}}" alt="image">
                      </div>

                      <div class="swiper-slide">
                        <img class="col-12 js-lazy" src="#" data-src="{{asset('frontend/img/cities/1/1.png')}}" alt="image">
                      </div>

                    </div>

                    <div class="cardImage-slider__pagination js-pagination"></div>

                    <div class="cardImage-slider__nav -prev">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                        <i class="icon-chevron-left text-10"></i>
                      </button>
                    </div>

                    <div class="cardImage-slider__nav -next">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                        <i class="icon-chevron-right text-10"></i>
                      </button>
                    </div>
                  </div>

                </div>

                <div class="cardImage__wishlist">
                  <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                    <i class="icon-heart text-12"></i>
                  </button>
                </div>


              </div>

            </div>

            <div class="cruiseCard__content mt-10">
              <div class="text-14 lh-14 text-light-1 mb-5">Norwegian Getaway</div>

              <h4 class="cruiseCard__title text-dark-1 text-18 lh-16 fw-500">
                <span>12 Night Cruise to the British Isles & Western Europe</span>
              </h4>

              <p class="text-light-1 lh-14 text-14 mt-5"></p>

              <div class="row y-gap-10 justify-between items-center">

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Sailing Date</div>
                  <div class="text-14 text-light-1">18/06/2022</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Departs</div>
                  <div class="text-14 text-light-1">Southampton</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Ports (7)</div>
                  <div class="text-14 text-light-1">Sete, Toulon...</div>
                </div>

              </div>

              <div class="row y-gap-20 justify-between items-center pt-5">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                    <div class="text-14 text-light-1">
                      <span class="text-15 text-dark-1 fw-500">4.82</span>
                      94 reviews
                    </div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-light-1">
                    From
                    <span class="text-16 fw-500 text-dark-1">US$72</span>
                  </div>
                </div>
              </div>
            </div>
          </a>

        </div>

        <div data-anim-child="slide-up delay-4" class="col-lg-3 col-sm-6">

          <a href="cruise-single.html" class="cruiseCard -type-1 rounded-4 ">
            <div class="cruiseCard__image">

              <div class="cardImage ratio ratio-6:5">
                <div class="cardImage__content">

                  <img class="rounded-4 col-12 js-lazy" src="#" data-src="{{asset('frontend/img/cities/1/1.png')}}" alt="image">


                </div>

                <div class="cardImage__wishlist">
                  <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                    <i class="icon-heart text-12"></i>
                  </button>
                </div>


                <div class="cardImage__leftBadge">
                  <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                    Best Seller
                  </div>
                </div>

              </div>

            </div>

            <div class="cruiseCard__content mt-10">
              <div class="text-14 lh-14 text-light-1 mb-5">Norwegian Getaway</div>

              <h4 class="cruiseCard__title text-dark-1 text-18 lh-16 fw-500">
                <span>11 Night Cruise to the Eastern Mediterranean</span>
              </h4>

              <p class="text-light-1 lh-14 text-14 mt-5"></p>

              <div class="row y-gap-10 justify-between items-center">

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Sailing Date</div>
                  <div class="text-14 text-light-1">18/06/2022</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Departs</div>
                  <div class="text-14 text-light-1">Southampton</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Ports (7)</div>
                  <div class="text-14 text-light-1">Sete, Toulon...</div>
                </div>

              </div>

              <div class="row y-gap-20 justify-between items-center pt-5">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                    <div class="text-14 text-light-1">
                      <span class="text-15 text-dark-1 fw-500">4.82</span>
                      94 reviews
                    </div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-light-1">
                    From
                    <span class="text-16 fw-500 text-dark-1">US$72</span>
                  </div>
                </div>
              </div>
            </div>
          </a>

        </div>

        <div data-anim-child="slide-up delay-5" class="col-lg-3 col-sm-6">

          <a href="cruise-single.html" class="cruiseCard -type-1 rounded-4 ">
            <div class="cruiseCard__image">

              <div class="cardImage ratio ratio-6:5">
                <div class="cardImage__content">

                  <img class="rounded-4 col-12 js-lazy" src="#" data-src="{{asset('frontend/img/cities/1/1.png')}}" alt="image">


                </div>

                <div class="cardImage__wishlist">
                  <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                    <i class="icon-heart text-12"></i>
                  </button>
                </div>


                <div class="cardImage__leftBadge">
                  <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                    Top Rated
                  </div>
                </div>

              </div>

            </div>

            <div class="cruiseCard__content mt-10">
              <div class="text-14 lh-14 text-light-1 mb-5">Norwegian Getawayy</div>

              <h4 class="cruiseCard__title text-dark-1 text-18 lh-16 fw-500">
                <span>13 Night Cruise to the Baltic Sea Western Europe</span>
              </h4>

              <p class="text-light-1 lh-14 text-14 mt-5"></p>

              <div class="row y-gap-10 justify-between items-center">

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Sailing Date</div>
                  <div class="text-14 text-light-1">18/06/2022</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Departs</div>
                  <div class="text-14 text-light-1">Southampton</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Ports (7)</div>
                  <div class="text-14 text-light-1">Sete, Toulon...</div>
                </div>

              </div>

              <div class="row y-gap-20 justify-between items-center pt-5">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                    <div class="text-14 text-light-1">
                      <span class="text-15 text-dark-1 fw-500">4.82</span>
                      94 reviews
                    </div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-light-1">
                    From
                    <span class="text-16 fw-500 text-dark-1">US$72</span>
                  </div>
                </div>
              </div>
            </div>
          </a>

        </div>

      </div>
    </div>
  </section>

  <section class="section-bg layout-pt-lg layout-pb-lg">
    <div class="section-bg__item -right -w-1165 bg-light-2"></div>

    <div class="section-bg__item -video-left">
      <div class="row y-gap-30">
        <div class="col-sm-6">
          <img src="{{asset('frontend/img/video/1.png')}}" alt="image">
        </div>

        <div class="col-sm-6">
          <img src="{{asset('frontend/img/video/2.png')}}" alt="image">
        </div>
      </div>
    </div>

    <div class="container lg:mt-30">
      <div class="row">
        <div class="offset-xl-6 col-xl-5 col-lg-6">
          <h2 class="text-30 fw-600">GoTrip is a World Leading Cruise Booking Platform</h2>
          <p class="text-dark-1 mt-40 lg:mt-20 sm:mt-15">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

          <div class="d-inline-block mt-40 lg:mt-30 sm:mt-20">

            <a href="#" class="button -md -blue-1 bg-yellow-1 text-dark-1">
              Learn More <div class="icon-arrow-top-right ml-15"></div>
            </a>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-md">
    <div data-anim-wrap class="container">
      <div data-anim-child="slide-up delay-1" class="row y-gap-30">
        <div class="col-xl-4 col-lg-5">
          <h2 class="text-30 fw-600">Why Choose Us</h2>
          <p class="mt-5">These popular destinations have a lot to offer</p>

          <p class="text-dark-1 mt-40 sm:mt-20">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

          <div class="d-inline-block mt-40 sm:mt-20">

            <a href="#" class="button -md -blue-1 bg-yellow-1 text-dark-1">
              Learn More <div class="icon-arrow-top-right ml-15"></div>
            </a>

          </div>
        </div>

        <div class="col-xl-6 offset-xl-1 col-lg-7">
          <div class="row y-gap-60">

            <div data-anim-child="slide-up delay-3" class="col-sm-6">
              <img src="{{asset('frontend/img/featureIcons/3/1.svg')}}" alt="image" class="size-60">
              <h5 class="text-18 fw-500 mt-10">Best Price Guarantee</h5>
              <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div data-anim-child="slide-up delay-4" class="col-sm-6">
              <img src="{{asset('frontend/img/featureIcons/3/2.svg')}}" alt="image" class="size-60">
              <h5 class="text-18 fw-500 mt-10">Best Price Guarantee</h5>
              <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div data-anim-child="slide-up delay-5" class="col-sm-6">
              <img src="{{asset('frontend/img/featureIcons/3/3.svg')}}" alt="image" class="size-60">
              <h5 class="text-18 fw-500 mt-10">Best Price Guarantee</h5>
              <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div data-anim-child="slide-up delay-6" class="col-sm-6">
              <img src="{{asset('frontend/img/featureIcons/3/4.svg')}}" alt="image" class="size-60">
              <h5 class="text-18 fw-500 mt-10">Best Price Guarantee</h5>
              <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div data-anim-child="slide-up" class="row y-gap-20 justify-center text-center">
        <div class="col-auto">
          <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Recommended Cruise</h2>
            <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
          </div>
        </div>
      </div>

      <div class="row y-gap-30 pt-40 sm:pt-20">

        <div data-anim-child="slide-up delay-2" class="col-lg-4 col-sm-6">

          <a href="cruise-single.html" class="cruiseCard -type-1 rounded-4 ">
            <div class="cruiseCard__image">

              <div class="cardImage ratio ratio-6:5">
                <div class="cardImage__content">

                  <img class="rounded-4 col-12 js-lazy" src="#" data-src="{{asset('frontend/img/hotels/1.png')}}" alt="image">


                </div>

                <div class="cardImage__wishlist">
                  <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                    <i class="icon-heart text-12"></i>
                  </button>
                </div>


                <div class="cardImage__leftBadge">
                  <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                    Cruise only
                  </div>
                </div>

              </div>

            </div>

            <div class="cruiseCard__content mt-10">
              <div class="text-14 lh-14 text-light-1 mb-5">Norwegian Getawayy</div>

              <h4 class="cruiseCard__title text-dark-1 text-18 lh-16 fw-500">
                <span>7 Night Cruise to the Western Mediterranean</span>
              </h4>

              <p class="text-light-1 lh-14 text-14 mt-5"></p>

              <div class="row y-gap-10 justify-between items-center">

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Sailing Date</div>
                  <div class="text-14 text-light-1">18/06/2022</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Departs</div>
                  <div class="text-14 text-light-1">Southampton</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Ports (7)</div>
                  <div class="text-14 text-light-1">Sete, Toulon...</div>
                </div>

              </div>

              <div class="row y-gap-20 justify-between items-center pt-5">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                    <div class="text-14 text-light-1">
                      <span class="text-15 text-dark-1 fw-500">4.82</span>
                      94 reviews
                    </div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-light-1">
                    From
                    <span class="text-16 fw-500 text-dark-1">US$72</span>
                  </div>
                </div>
              </div>
            </div>
          </a>

        </div>

        <div data-anim-child="slide-up delay-3" class="col-lg-4 col-sm-6">

          <a href="cruise-single.html" class="cruiseCard -type-1 rounded-4 ">
            <div class="cruiseCard__image">

              <div class="cardImage ratio ratio-6:5">
                <div class="cardImage__content">


                  <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                    <div class="swiper-wrapper">

                      <div class="swiper-slide">
                        <img class="col-12 js-lazy" src="#" data-src="{{asset('frontend/img/hotels/1.png')}}" alt="image">
                      </div>

                      <div class="swiper-slide">
                        <img class="col-12 js-lazy" src="#" data-src="{{asset('frontend/img/hotels/1.png')}}" alt="image">
                      </div>

                      <div class="swiper-slide">
                        <img class="col-12 js-lazy" src="#" data-src="{{asset('frontend/img/hotels/1.png')}}" alt="image">
                      </div>

                    </div>

                    <div class="cardImage-slider__pagination js-pagination"></div>

                    <div class="cardImage-slider__nav -prev">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                        <i class="icon-chevron-left text-10"></i>
                      </button>
                    </div>

                    <div class="cardImage-slider__nav -next">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                        <i class="icon-chevron-right text-10"></i>
                      </button>
                    </div>
                  </div>

                </div>

                <div class="cardImage__wishlist">
                  <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                    <i class="icon-heart text-12"></i>
                  </button>
                </div>


              </div>

            </div>

            <div class="cruiseCard__content mt-10">
              <div class="text-14 lh-14 text-light-1 mb-5">Norwegian Getaway</div>

              <h4 class="cruiseCard__title text-dark-1 text-18 lh-16 fw-500">
                <span>12 Night Cruise to the British Isles & Western Europe</span>
              </h4>

              <p class="text-light-1 lh-14 text-14 mt-5"></p>

              <div class="row y-gap-10 justify-between items-center">

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Sailing Date</div>
                  <div class="text-14 text-light-1">18/06/2022</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Departs</div>
                  <div class="text-14 text-light-1">Southampton</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Ports (7)</div>
                  <div class="text-14 text-light-1">Sete, Toulon...</div>
                </div>

              </div>

              <div class="row y-gap-20 justify-between items-center pt-5">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                    <div class="text-14 text-light-1">
                      <span class="text-15 text-dark-1 fw-500">4.82</span>
                      94 reviews
                    </div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-light-1">
                    From
                    <span class="text-16 fw-500 text-dark-1">US$72</span>
                  </div>
                </div>
              </div>
            </div>
          </a>

        </div>

        <div data-anim-child="slide-up delay-4" class="col-lg-4 col-sm-6">

          <a href="cruise-single.html" class="cruiseCard -type-1 rounded-4 ">
            <div class="cruiseCard__image">

              <div class="cardImage ratio ratio-6:5">
                <div class="cardImage__content">

                  <img class="rounded-4 col-12 js-lazy" src="#" data-src="{{asset('frontend/img/hotels/1.png')}}" alt="image">


                </div>

                <div class="cardImage__wishlist">
                  <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                    <i class="icon-heart text-12"></i>
                  </button>
                </div>


                <div class="cardImage__leftBadge">
                  <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                    Best Seller
                  </div>
                </div>

              </div>

            </div>

            <div class="cruiseCard__content mt-10">
              <div class="text-14 lh-14 text-light-1 mb-5">Norwegian Getaway</div>

              <h4 class="cruiseCard__title text-dark-1 text-18 lh-16 fw-500">
                <span>11 Night Cruise to the Eastern Mediterranean</span>
              </h4>

              <p class="text-light-1 lh-14 text-14 mt-5"></p>

              <div class="row y-gap-10 justify-between items-center">

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Sailing Date</div>
                  <div class="text-14 text-light-1">18/06/2022</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Departs</div>
                  <div class="text-14 text-light-1">Southampton</div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-dark-1 fw-500">Ports (7)</div>
                  <div class="text-14 text-light-1">Sete, Toulon...</div>
                </div>

              </div>

              <div class="row y-gap-20 justify-between items-center pt-5">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                    <div class="text-14 text-light-1">
                      <span class="text-15 text-dark-1 fw-500">4.82</span>
                      94 reviews
                    </div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-14 text-light-1">
                    From
                    <span class="text-16 fw-500 text-dark-1">US$72</span>
                  </div>
                </div>
              </div>
            </div>
          </a>

        </div>

      </div>
    </div>
  </section>

  <section class="section-bg layout-pt-lg layout-pb-lg bg-light-2">
    <div class="section-bg__item col-12">
      <img src="{{asset('frontend/img/backgrounds/11.png')}}" alt="image">
    </div>

    <div class="container">
      <div class="row justify-center pt-50 md:pt-30">
        <div class="col-xl-7 col-lg-10">
          <div class="overflow-hidden js-section-slider" data-pagination="js-testimonials-pag" data-slider-cols="base-1">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="text-center">
                  <div class="mb-40">
                    <img src="{{asset('frontend/img/misc/quote-2.svg')}}" alt="quote">
                  </div>

                  <div class="text-22 md:text-18 fw-600 text-white">
                    "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                  </div>

                  <div class="text-white mt-40 sm:mt-30">
                    <h5 class="text-15 lh-15 fw-500">Ali Tufan</h5>
                    <div class="text-14">Product Manager, Apple Inc</div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="text-center">
                  <div class="mb-40">
                    <img src="{{asset('frontend/img/misc/quote-2.svg')}}" alt="quote">
                  </div>

                  <div class="text-22 md:text-18 fw-600 text-white">
                    "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                  </div>

                  <div class="text-white mt-40 sm:mt-30">
                    <h5 class="text-15 lh-15 fw-500">Ali Tufan</h5>
                    <div class="text-14">Product Manager, Apple Inc</div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="text-center">
                  <div class="mb-40">
                    <img src="{{asset('frontend/img/misc/quote-2.svg')}}" alt="quote">
                  </div>

                  <div class="text-22 md:text-18 fw-600 text-white">
                    "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                  </div>

                  <div class="text-white mt-40 sm:mt-30">
                    <h5 class="text-15 lh-15 fw-500">Ali Tufan</h5>
                    <div class="text-14">Product Manager, Apple Inc</div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="text-center">
                  <div class="mb-40">
                    <img src="{{asset('frontend/img/misc/quote-2.svg')}}" alt="quote">
                  </div>

                  <div class="text-22 md:text-18 fw-600 text-white">
                    "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                  </div>

                  <div class="text-white mt-40 sm:mt-30">
                    <h5 class="text-15 lh-15 fw-500">Ali Tufan</h5>
                    <div class="text-14">Product Manager, Apple Inc</div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="text-center">
                  <div class="mb-40">
                    <img src="{{asset('frontend/img/misc/quote-2.svg')}}" alt="quote">
                  </div>

                  <div class="text-22 md:text-18 fw-600 text-white">
                    "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                  </div>

                  <div class="text-white mt-40 sm:mt-30">
                    <h5 class="text-15 lh-15 fw-500">Ali Tufan</h5>
                    <div class="text-14">Product Manager, Apple Inc</div>
                  </div>
                </div>
              </div>

            </div>

            <div class="pt-40 lg:pt-40 sm:pt-30">

              <div class="d-flex x-gap-15 items-center justify-center pt-30">
                <div class="col-auto">
                  <button class="d-flex items-center text-24 arrow-left-hover text-white js-prev">
                    <i class="icon icon-arrow-left"></i>
                  </button>
                </div>

                <div class="col-auto">
                  <div class="pagination -dots text-white-50 js-testimonials-pag"></div>
                </div>

                <div class="col-auto">
                  <button class="d-flex items-center text-24 arrow-right-hover text-white js-next">
                    <i class="icon icon-arrow-right"></i>
                  </button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-lg">
    <div data-anim-wrap class="container">
      <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
        <div class="col-auto">
          <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Get inspiration for your next trip</h2>
            <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>
          </div>
        </div>
      </div>

      <div class="row y-gap-30 pt-40">

        <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">

          <a href="#" class="blogCard -type-2 d-block bg-white rounded-4 shadow-4">
            <div class="blogCard__image">
              <div class="ratio ratio-1:1 rounded-4">
                <img class="img-ratio js-lazy" src="#" data-src="{{asset('frontend/img/blog/1.png')}}" alt="image">
              </div>
            </div>

            <div class="px-20 py-20">
              <h4 class="text-dark-1 text-16 lh-18 fw-500">10 European ski destinations you should visit this winter</h4>
              <div class="text-light-1 text-15 lh-14 mt-10">April 06, 2022</div>
            </div>
          </a>

        </div>

        <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">

          <a href="#" class="blogCard -type-2 d-block bg-white rounded-4 shadow-4">
            <div class="blogCard__image">
              <div class="ratio ratio-1:1 rounded-4">
                <img class="img-ratio js-lazy" src="#" data-src="{{asset('frontend/img/blog/2.png')}}" alt="image">
              </div>
            </div>

            <div class="px-20 py-20">
              <h4 class="text-dark-1 text-16 lh-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
              <div class="text-light-1 text-15 lh-14 mt-10">April 06, 2022</div>
            </div>
          </a>

        </div>

        <div data-anim-child="slide-up delay-4" class="col-lg-3 col-sm-6">

          <a href="#" class="blogCard -type-2 d-block bg-white rounded-4 shadow-4">
            <div class="blogCard__image">
              <div class="ratio ratio-1:1 rounded-4">
                <img class="img-ratio js-lazy" src="#" data-src="{{asset('frontend/img/blog/1.png')}}" alt="image">
              </div>
            </div>

            <div class="px-20 py-20">
              <h4 class="text-dark-1 text-16 lh-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
              <div class="text-light-1 text-15 lh-14 mt-10">April 06, 2022</div>
            </div>
          </a>

        </div>

        <div data-anim-child="slide-up delay-5" class="col-lg-3 col-sm-6">

          <a href="#" class="blogCard -type-2 d-block bg-white rounded-4 shadow-4">
            <div class="blogCard__image">
              <div class="ratio ratio-1:1 rounded-4">
                <img class="img-ratio js-lazy" src="#" data-src="{{asset('frontend/img/blog/2.png')}}" alt="image">
              </div>
            </div>

            <div class="px-20 py-20">
              <h4 class="text-dark-1 text-16 lh-18 fw-500">The best times & places to see the Northern Lights in Iceland</h4>
              <div class="text-light-1 text-15 lh-14 mt-10">April 06, 2022</div>
            </div>
          </a>

        </div>

      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-md bg-blue-1">
    <div class="container">
      <div class="row y-gap-30 justify-between items-center">
        <div class="col-auto">
          <div class="d-flex y-gap-20 flex-wrap items-center">
            <div class="icon-newsletter text-60 sm:text-40 text-white"></div>

            <div class="ml-30">
              <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
              <div class="text-white">Sign up and we'll send the best deals to you</div>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
            <div>
              <input class="bg-white h-60" type="text" placeholder="Your Email">
            </div>

            <div>
              <button class="button -md h-60 bg-yellow-1 text-dark-1">Subscribe</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
