<section class="header-banner py-5 bg-blue-1 z-2">
    <div class="container">
      <div class="row items-center justify-between">
        <div class="col-auto">
          <div class="row x-gap-15 y-gap-15 items-center">
            <div class="col-auto md:d-none">
              <a href="#" class="text-12 text-white">+(1) 123 456 7890</a>
            </div>

            <div class="col-auto md:d-none">
              <div class="w-1 h-20 bg-white-20"></div>
            </div>

            <div class="col-auto">
              <a href="#" class="text-12 text-white">hi@gotrip.com</a>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="row x-gap-15 items-center jusify-between">
            <div class="col-auto">

              <div class="row x-gap-20 items-center xxl:d-none">
                <div class="col-auto">
                  <button class="d-flex items-center text-14 text-white" data-x-click="currency">
                    <span class="js-currencyMenu-mainTitle">USD</span>
                    <i class="icon-chevron-sm-down text-7 ml-10"></i>
                  </button>
                </div>

                <div class="col-auto">
                  <div class="w-1 h-20 bg-white-20"></div>
                </div>

                <div class="col-auto">
                  <button class="d-flex items-center text-14 text-white" data-x-click="lang">
                    <img src="{{ asset('frontend/img/general/lang.png')}}" alt="image" class="rounded-full mr-10">
                    <span class="js-language-mainTitle">United Kingdom</span>
                    <i class="icon-chevron-sm-down text-7 ml-15"></i>
                  </button>
                </div>
              </div>

            </div>

            <div class="col-auto xxl:d-none">
              <div class="w-1 h-20 bg-white-20"></div>
            </div>

            <div class="col-auto md:d-none">
              <a href="#" class="text-12 text-white">Become An Expert</a>
            </div>

            <div class="col-auto md:d-none">
              <div class="w-1 h-20 bg-white-20"></div>
            </div>

            <div class="col-auto">
              <a href="#" class="text-12 text-white">Sign In / Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <header data-add-bg="bg-dark-1" class="header mt-40 js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container container">
      <div class="row justify-between items-center">

        <div class="col-auto">
          <div class="d-flex items-center">
            <a href="index.html" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
              <img src="{{ asset('frontend/img/general/logo-light.svg')}}" alt="logo icon">
              <img src="{{ asset('frontend/img/general/logo-dark.svg')}}" alt="logo icon">
            </a>
          </div>
        </div>


        <div class="col-auto">
          <div class="d-flex items-center">

            <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
              <div class="mobile-overlay"></div>

              <div class="header-menu__content">
                <div class="mobile-bg js-mobile-bg"></div>

                <div class="menu js-navList">
                  <ul class="menu__nav text-white -is-active">

                      <li>
                          <a href="destinations.html">
                            Home
                          </a>
                        </li>


                    <li>
                      <a href="destinations.html">
                        About US
                      </a>
                    </li>

                    <li>
                      <a href="destinations.html">
                        Tours
                      </a>
                    </li>


                    <li class="menu-item-has-children">
                      <a data-barba href="#">
                        <span class="mr-10">Destination</span>
                        <i class="icon icon-chevron-sm-down"></i>
                      </a>

                      <ul class="subnav">
                        <li class="subnav__backBtn js-nav-list-back">
                          <a href="#"><i class="icon icon-chevron-sm-down"></i> Blog</a>
                        </li>
                        <li><a href="blog-list-1.html">Domestic</a></li>
                      </ul>

                    </li>
                    <li>
                      <a href="destinations.html">
                        Blog
                      </a>
                    </li>

                    <li>
                      <a href="contact.html">Contact</a>
                    </li>
                  </ul>
                </div>

                <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                </div>
              </div>
            </div>

            <div class="d-none xl:d-flex x-gap-20 items-center pl-20 text-white" data-x="header-mobile-icons" data-x-toggle="text-white">
              <div><a href="login.html" class="d-flex items-center icon-user text-inherit text-22"></a></div>
              <div><button class="d-flex items-center icon-menu text-inherit text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </header>
