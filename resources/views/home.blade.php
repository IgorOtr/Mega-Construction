@include('includes.head')

<style>
    @media screen and (max-width: 768px) {
        .form-find-home h1 {
            font-size: 49px;
            text-align: left;
        }
    }
</style>

<body>
    @include('includes.navbar')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible w-100" role="alert">
            <div class="d-flex">
                <div>
                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon alert-icon">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l5 5l10 -10"></path>
                    </svg>
                </div>
                <div>
                    {{ session('success') }}
                </div>
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            <div class="d-flex">
                <div>
                    <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon alert-icon">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                        <path d="M12 8v4"></path>
                        <path d="M12 16h.01"></path>
                    </svg>
                </div>
                <div>
                    {{ session('error') }}
                </div>
            </div>
        </div>
    @endif

    <section class="hero-banner">
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('assets/videos/-1ff4-4e02-9182-542e635521ac.mp4') }}" type="video/mp4">
        </video>

        <div class="container container-hero-banner">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="hero-banner__title">Shaping communities.</h1>
                    <h1 class="hero-banner__title_2">Building futures.</h1>
                    <a href="{{ route('our-properties') }}" class="btn-hero">Find Your Dream Home</a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
    </section>

    <section class="separator"></section>

    <section class="about-us-section">
        <div class="container-fluid">
            <div class="row about-us-row">
                <div class="col-md-6 about-us-column">
                    <div>
                        <h1>About Us</h1>
                        <p>
                            Mega Contractors has been building a legacy in the construction industry by accumulating
                            more than 18 years of experience throughout the hundreds of well-executed projects the
                            company has worked on from coast to coast and delivered in a timely manner.
                            <br><br>
                            From taking on commercial projects to residential ones that range from luxury houses to
                            entire condos, Mega Contractors has been shaping communities and leaving its mark across the
                            country.
                            <br><br>
                            We're a solutions-oriented company, focused on understanding our clients' needs to make sure
                            the outcome of each project exceeds their expectations. We take pride in working flawlessly
                            with our clients on three fronts: Development, Construction, and Investment.
                            <br><br>
                            Whether you want to take a commercial project off the drawing board, are looking for a
                            luxurious house to call your own or have it as an investment, Mega Contractors is your
                            number-one choice.

                        </p>
                        <a href="{{ route('contact-us') }}" class="btn-about-us">Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6 vector-col">
                    <img class="img-about-us-section" src="{{ asset('assets/images/mask-group.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="topics-section">

        <div class="container">
            <div class="row">

                <div class="owl-carousel owl-theme owl-loaded owl-drag">

                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all;">
                            <div class="owl-item active" style="margin-right: 20px;">
                                <div class="item">
                                    <div class="card-topics text-center">
                                        <div class="ct-head">
                                            <h1>General Contractor</h1>
                                            <div class="line-separator w-100"></div>
                                            <p>
                                                As a general contractor, we oversee all aspects of construction,
                                                ensuring timely and efficient project completion.
                                            </p>
                                        </div>
                                        <div class="ct-body">
                                            <img style="width: 100%"
                                                src="{{ asset('assets/images/drawing-project.png') }}" alt="">
                                        </div>
                                        <div class="ct-footer">
                                            <a href="" class="btn-topics">Get in touch with us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="margin-right: 20px;">
                                <div class="item">
                                    <div class="card-topics text-center">
                                        <div class="ct-head">
                                            <h1>ARCHITECTuRE & DESIGN</h1>
                                            <div class="line-separator w-100"></div>
                                            <p>
                                                Our architectural and design solutions are tailored to meet our clients'
                                                needs, focused on delivering aesthetically pleasing and functional homes
                                                and communities.
                                            </p>
                                        </div>
                                        <div class="ct-body">
                                            <img style="width: 100%; height: 490px;" src="{{ asset('assets/images/architeture.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="ct-footer">
                                            <a href="" class="btn-topics">Get in touch with us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="margin-right: 20px;">
                                <div class="item">
                                    <div class="card-topics text-center">
                                        <div class="ct-head">
                                            <h1>CONSTRUCTION MANAGEMENT</h1>
                                            <div class="line-separator w-100"></div>
                                            <p>
                                                We have the expertise needed in managing construction projects to ensure our quality standards are met.
                                            </p>
                                        </div>
                                        <div class="ct-body">
                                            <img style="width: 100%" src="{{ asset('assets/images/contruction.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="ct-footer">
                                            <a href="" class="btn-topics">Get in touch with us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="margin-right: 20px;">
                                <div class="item">
                                    <div class="card-topics text-center">
                                        <div class="ct-head">
                                            <h1>Development</h1>
                                            <div class="line-separator w-100"></div>
                                            <p>
                                                We work with a wide range of businesses to develop quality projects that help shape communities.
                                            </p>
                                        </div>
                                        <div class="ct-body">
                                            <img style="width: 100%"
                                                src="{{ asset('assets/images/development.jpg') }}" alt="">
                                        </div>
                                        <div class="ct-footer">
                                            <a href="" class="btn-topics">Get in touch with us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="margin-right: 20px;">
                                <div class="item">
                                    <div class="card-topics text-center">
                                        <div class="ct-head">
                                            <h1>Investment</h1>
                                            <div class="line-separator w-100"></div>
                                            <p>
                                                Our investment solutions are suited to meet our clients' needs, focused on delivering high-quality projects.
                                            </p>
                                        </div>
                                        <div class="ct-body">
                                            <img style="width: 100%"
                                                src="{{ asset('assets/images/investment.jpg') }}" alt="">
                                        </div>
                                        <div class="ct-footer">
                                            <a href="" class="btn-topics">Get in touch with us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav d-none">
                        <button type="button" role="presentation" class="owl-prev disabled">
                            <span aria-label="Previous">‹</span>
                        </button>
                        <button type="button" role="presentation" class="owl-next">
                            <span aria-label="Next">›</span>
                        </button>
                    </div>
                </div>

                {{-- <div class="col-md-4 tex-center mb-4">
                    <div class="card-topics text-center">
                        <div class="ct-head">
                            <h1>General Contractor</h1>
                            <div class="line-separator w-100"></div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis rerum aut
                                aliquid fugit praesentium est eum atque quisquam eos?
                            </p>
                        </div>
                        <div class="ct-body">
                            <img style="width: 100%" src="{{ asset('assets/images/drawing-project.png') }}"
                                alt="">
                        </div>
                        <div class="ct-footer">
                            <a href="" class="btn-topics">Get in touch with us</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 tex-center mb-4">
                    <div class="card-topics text-center">
                        <div class="ct-head">
                            <h1>General Contractor</h1>
                            <div class="line-separator w-100"></div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis rerum aut
                                aliquid fugit praesentium est eum atque quisquam eos?
                            </p>
                        </div>
                        <div class="ct-body">
                            <img style="width: 100%" src="{{ asset('assets/images/drawing-project.png') }}"
                                alt="">
                        </div>
                        <div class="ct-footer">
                            <a href="" class="btn-topics">Get in touch with us</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 tex-center mb-4">
                    <div class="card-topics text-center">
                        <div class="ct-head">
                            <h1>General Contractor</h1>
                            <div class="line-separator w-100"></div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis rerum aut
                                aliquid fugit praesentium est eum atque quisquam eos?
                            </p>
                        </div>
                        <div class="ct-body">
                            <img style="width: 100%" src="{{ asset('assets/images/drawing-project.png') }}"
                                alt="">
                        </div>
                        <div class="ct-footer">
                            <a href="" class="btn-topics">Get in touch with us</a>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>

    <section class="art-1"></section>

    <section class="find-home-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 vector-find-home"></div>
                <div class="col-md-6 d-flex align-items-center justify-content-center flex-column form-find-home">
                    <h1>FIND YOUR<br>DREAM HOME</h1>
                    <form action="" class="mt-3">

                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">STATE</div>
                                <select class="form-select">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">CITY</div>
                                <select class="form-select">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">NUMBER OF BEDROOMS</div>
                                <select class="form-select">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                            </div>
                            <div class="col mb-3">

                                <div class="form-label">NUMBER OF BATHROOMS</div>
                                <select class="form-select">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">PRICE RANGE</div>
                                <select class="form-select">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <button type="submit" class="btn-find-home">SEARCH</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="photo-gallery-section">
        <div id="carousel-indicators-dot" class="carousel slide carousel-fade h-100 w-100" data-bs-ride="carousel">
            <div class="carousel-indicators carousel-indicators-dot">
                <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="0" class="active"
                    aria-current="true"></button>
                <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="1"
                    class=""></button>
                <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="2"
                    class=""></button>
                <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="3"
                    class=""></button>
            </div>
            <div class="carousel-inner h-100">
                <div class="carousel-item active">
                    <img class="d-block w-100" alt=""
                        src="{{ asset('assets/images/analog-landscape-city-with-buildings.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt=""
                        src="{{ asset('assets/images/3d-house-model-with-modern-architecture.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt=""
                        src="{{ asset('assets/images/3d-rendering-house-model (1).jpg') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt=""
                        src="{{ asset('assets/images/house-is-listed-1-5-million.jpg') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="get-an-estimate-section">
        <img class="get-an-estimate-vector" src="{{ asset('assets/images/Vector-8.png') }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 get-an-estimate-form">
                    <h1>GET AN<br>ESTIMATE</h1>

                    <form action="{{ route('send-get-an-estimate') }}" method="POST" class="mt-3">
                        @csrf
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-label">NAME</div>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">EMAIL</div>
                                <input type="text" class="form-control" name="email">

                            </div>
                            <div class="col mb-3">

                                <div class="form-label">PHONE</div>
                                <input type="text" class="form-control" name="phone">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">CITY</div>
                                <input type="text" class="form-control" name="city">

                            </div>
                            <div class="col mb-3">

                                <div class="form-label">SUBJECT</div>
                                <input type="text" class="form-control" name="subject">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">YOUR MESSAGE</div>
                                <textarea class="form-control" name="message" rows="6"></textarea>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <button type="submit" class="btn-find-home">GET AN ESTIMATE</button>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 get-an-estimate-testimonial">


                    <div id="carousel-indicators-dot-2"
                        class="carousel slide carousel-fade w-100 carousel-get-an-estimate" data-bs-ride="carousel">
                        <div class="carousel-indicators carousel-indicators-dot carousel-get-an-estimate-indicators">
                            <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#carousel-indicators-dot-2"
                                data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carousel-indicators-dot-2"
                                data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#carousel-indicators-dot-2"
                                data-bs-slide-to="3"></button>
                        </div>
                        <div class="carousel-inner w-100">
                            <div class="carousel-item w-100 active">
                                <div class="">
                                    <img src="{{ asset('assets/images/aspas.png') }}" alt="">
                                    <p>
                                        I highly recommend Mega to everyone looking to get into the development market.
                                        I've worked
                                        with
                                        them before and they have exceeded my expectations every time.
                                    </p>
                                    <div class="name-and-stars-testimonial">
                                        <h2>Michael</h2>
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item w-100">
                                <div class="">
                                    <img src="{{ asset('assets/images/aspas.png') }}" alt="">
                                    <p>
                                        I highly recommend Mega to everyone looking to get into the development market.
                                        I've worked
                                        with
                                        them before and they have exceeded my expectations every time.
                                    </p>
                                    <div class="name-and-stars-testimonial">
                                        <h2>Michael 2</h2>
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item w-100">
                                <div class="">
                                    <img src="{{ asset('assets/images/aspas.png') }}" alt="">
                                    <p>
                                        I highly recommend Mega to everyone looking to get into the development market.
                                        I've worked
                                        with
                                        them before and they have exceeded my expectations every time.
                                    </p>
                                    <div class="name-and-stars-testimonial">
                                        <h2>Michael 3</h2>
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item w-100">
                                <div class="">
                                    <img src="{{ asset('assets/images/aspas.png') }}" alt="">
                                    <p>
                                        I highly recommend Mega to everyone looking to get into the development market.
                                        I've worked
                                        with
                                        them before and they have exceeded my expectations every time.
                                    </p>
                                    <div class="name-and-stars-testimonial">
                                        <h2>Michael 4</h2>
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="art-2">
        <img class="art-2-vector-orange" src="{{ asset('assets/images/Vector 7.png') }}" alt="">
        <img class="art-2-vector-black" src="{{ asset('assets/images/Vector 9.png') }}" alt="">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        From blueprint to reality
                    </h1>
                    <p>
                        Subscribe to our newsletter to be on the loop about our latest news and projects.
                    </p>
                    <a class="btn-art-2" href="">SUBSCRIBE NOW</a>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>

    @include('includes.footer-site')
</body>

</html>
