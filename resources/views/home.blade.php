@include('includes.head')

<style>
    .bg-overlay {
        background-color: #141414cf;
        position: absolute;
        top: 0px;
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 768px) {
        .form-find-home h1 {
            font-size: 49px;
            text-align: left;
            width: 90%;
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
        <div class="bg-overlay"></div>
        <video autoplay muted loop preload="metadata" playsinline id="myVideo">
            <source src="{{ asset('assets/videos/-1ff4-4e02-9182-542e635521ac.webm') }}">
        </video>

        <div class="container container-hero-banner">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="hero-banner__title">Shaping communities.</h1>
                    <h2 class="hero-banner__title_2">Building futures.</h2>
                    <a href="{{ route('our-properties') }}" class="btn-hero">Find Your Dream Home</a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
    </section>

    <section class="separator"></section>

    <section class="about-us-section" id="main-content">
        <div class="container-fluid">
            <div class="row about-us-row">
                <div class="col-md-6 about-us-column">
                    <div>
                        <h2>About Us</h2>
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
                    <img width="605" class="img-about-us-section"
                        src="{{ asset('assets/images/new/AD200095.webp') }}"
                        alt="A smiling man in a checkered shirt standing in front of a construction site with an orange border accentuating the image.">
                </div>
            </div>
        </div>
    </section>

    <section class="topics-section">

        <div class="container topic-container">
            <div class="row">

                <div class="owl-carousel owl-theme owl-loaded owl-drag">

                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all;">
                            <div class="owl-item active" style="margin-right: 20px;">
                                <div class="item">
                                    <div class="card-topics text-center">
                                        <div class="ct-head">
                                            <h3>General Contractor</h3>
                                            <div class="line-separator w-100"></div>
                                            <p>
                                                As a general contractor, we oversee all aspects of construction,
                                                ensuring timely and efficient project completion.
                                            </p>
                                        </div>
                                        <div class="ct-body">
                                            <img style="width: 100%"
                                                src="{{ asset('assets/images/new/AD202267.webp') }}"
                                                alt="A woman wearing a safety helmet and high-visibility jacket, writing on a notepad at a construction site during daylight.">
                                        </div>
                                        <div class="ct-footer">
                                            <a href="{{ route('contact-us') }}" class="btn-topics">Get in touch with
                                                us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="margin-right: 20px;">
                                <div class="item">
                                    <div class="card-topics text-center">
                                        <div class="ct-head">
                                            <h3>ARCHITECTuRE & DESIGN</h3>
                                            <div class="line-separator w-100"></div>
                                            <p>
                                                Our architectural and design solutions are tailored to meet our clients'
                                                needs, focused on delivering aesthetically pleasing and functional homes
                                                and communities.
                                            </p>
                                        </div>
                                        <div class="ct-body">
                                            <img style="width: 100%;"
                                                src="{{ asset('assets/images/new/AD200180.webp') }}"
                                                alt="View from above of construction workers assembling a staircase in a modern home, with tools and materials scattered around.">
                                        </div>
                                        <div class="ct-footer">
                                            <a href="{{ route('contact-us') }}" class="btn-topics">Get in touch with
                                                us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="margin-right: 20px;">
                                <div class="item">
                                    <div class="card-topics text-center">
                                        <div class="ct-head">
                                            <h3>CONSTRUCTION MANAGEMENT</h3>
                                            <div class="line-separator w-100"></div>
                                            <p>
                                                We have the expertise needed in managing construction projects to ensure
                                                our quality standards are met.
                                            </p>
                                        </div>
                                        <div class="ct-body">
                                            <img style="width: 100%"
                                                src="{{ asset('assets/images/new/AD200232.webp') }}"
                                                alt="Modern home with sleek black exterior, large windows, and glass railing, surrounded by a landscaped yard and trees.">
                                        </div>
                                        <div class="ct-footer">
                                            <a href="{{ route('contact-us') }}" class="btn-topics">Get in touch with
                                                us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="margin-right: 20px;">
                                <div class="item">
                                    <div class="card-topics text-center">
                                        <div class="ct-head">
                                            <h3 style="margin-top: 32px;">Development</h3>
                                            <div class="line-separator w-100"></div>
                                            <p>
                                                We work with a wide range of businesses to develop quality projects that
                                                help shape communities.
                                            </p>
                                        </div>
                                        <div class="ct-body">
                                            <img style="width: 100%;"
                                                src="{{ asset('assets/images/new/AD200569.webp') }}"
                                                alt="A row of modern apartment buildings with balconies, stone accents, and well-maintained surroundings, viewed from the street.">
                                        </div>
                                        <div class="ct-footer">
                                            <a href="{{ route('development') }}" class="btn-topics">Get in touch with
                                                us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="margin-right: 20px;">
                                <div class="item">
                                    <div class="card-topics text-center">
                                        <div class="ct-head">
                                            <h3 style="margin-top: 32px;">Investment</h3>
                                            <div class="line-separator w-100"></div>
                                            <p>
                                                Our investment solutions are suited to meet our clients' needs, focused
                                                on delivering high-quality projects.
                                            </p>
                                        </div>
                                        <div class="ct-body">
                                            <img style="width: 100%;"
                                                src="{{ asset('assets/images/new/AD200078.webp') }}"
                                                alt="A modern two-story home under construction, featuring large glass windows and a stone façade, with a gravel driveway leading up to the property, surrounded by an expansive lawn and scenic views.">
                                        </div>
                                        <div class="ct-footer">
                                            <a href="{{ route('investment') }}" class="btn-topics">Get in touch with
                                                us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav d-none">
                        <button type="button" role="presentation" class="owl-prev disabled"
                            aria-label="Return to previous topic">
                            <span aria-label="Previous">‹</span>
                        </button>
                        <button type="button" role="presentation" class="owl-next" aria-label="Go to next topic">
                            <span aria-label="Next">›</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="art-1"></section>

    <section class="find-home-section">
        <div class="container-fluid">
            <div class="row find-row">
                <div class="col-md-6 find-col vector-find-home">
                    <img src="{{ asset('assets/images/FIND-HOME.webp') }}"
                        alt="A joyful couple embracing in their new home, with the woman holding a set of keys featuring a house-shaped keychain, symbolizing the excitement of moving into a new place.">
                </div>
                <div
                    class="col-md-6 find-col d-flex align-items-center justify-content-center flex-column form-find-home">
                    <h3>FIND YOUR<br>DREAM HOME</h3>
                    <form action="" class="mt-3">
                        <div class="row">
                            <div class="col mb-3">

                                <label for="state" class="form-label">STATE</label>
                                <input id="state" type="text" class="form-control">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">

                                <label for="city" class="form-label">CITY</label>
                                <input id="city" type="text" class="form-control">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <label for="number_of_bedrooms" class="form-label">NUMBER OF BEDROOMS</label>
                                <input id="number_of_bedrooms" type="text" class="form-control">

                            </div>
                            <div class="col mb-3">

                                <label for="number_of_bathrooms" class="form-label">NUMBER OF BATHROOMS</label>
                                <input id="number_of_bathrooms" type="text" class="form-control">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <label class="form-label">PRICE RANGE</label>
                                <select class="form-select">
                                    <option value="" selected>Select an option</option>
                                    <option value="1">$0 - $100.000</option>
                                    <option value="2">$100.000 - $300.000</option>
                                    <option value="3">$300.000+</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <a href="{{ route('our-properties') }}" aria-label="Go To Our Properties Home"
                                    class="btn-find-home">SEARCH</a>

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
                    aria-current="true" aria-label="Go To First Picture"></button>
                <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="1" class=""
                    aria-label="Go To Second Picture"></button>
                <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="2" class=""
                    aria-label="Go To Third Picture"></button>
                <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="3" class=""
                    aria-label="Go To Fourth Picture"></button>
            </div>
            <div class="carousel-inner h-100">
                <div class="carousel-item active">
                    <img class="d-block w-100 owl-images"
                        alt="A modern house with clean lines and large windows, surrounded by vibrant autumn trees and greenery in the foreground."
                        src="{{ asset('assets/images/new/AD200238.webp') }}">
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100 owl-images"
                        alt="A modern house under construction, surrounded by lush greenery and autumn-colored trees, with workers actively completing the facade and entryway details."
                        src="{{ asset('assets/images/new/AD200124.webp') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 owl-images"
                        alt="A modern apartment building with gray siding and white trim, surrounded by trees and parked cars in the foreground."
                        src="{{ asset('assets/images/new/AD202603.webp') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 owl-images"
                        alt="An aerial view of a modern apartment complex surrounded by dense autumnal woods and a serene pond, showcasing organized parking lots and well-maintained pathways connecting the buildings."
                        src="{{ asset('assets/images/new/DJI_20241118165302_0775_D.webp') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="get-an-estimate-section" id="estimate">
        <img class="get-an-estimate-vector" src="{{ asset('assets/images/Vector-8.webp') }}" alt="image-vector">
        <div class="container">
            <div class="row">
                <div class="col-md-6 get-an-estimate-form">
                    <h3>GET AN<br>ESTIMATE</h1>

                        <form action="{{ route('send-get-an-estimate') }}" method="POST" class="mt-3"
                            id="get-an-estimate-form">
                            @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="name" class="form-label">NAME</label>
                                    <input id="name" type="text" class="form-control" name="name"
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">

                                    <label for="email" class="form-label">EMAIL</label>
                                    <input id="email" type="text" class="form-control" name="email"
                                        required>

                                </div>
                                <div class="col mb-3">

                                    <label for="phone" class="form-label">PHONE</label>
                                    <input id="phone" type="text" class="form-control" name="phone"
                                        required>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">

                                    <label for="city-get-estimate" class="form-label">CITY</label>
                                    <input id="city-get-estimate" type="text" class="form-control" name="city"
                                        required>

                                </div>
                                <div class="col mb-3">

                                    <label for="subject" class="form-label">SUBJECT</label>
                                    <input id="subject" type="text" class="form-control" name="subject"
                                        required>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">

                                    <label for="your-message" class="form-label">YOUR MESSAGE</label>
                                    <textarea id="your-message" class="form-control" name="message" rows="6"></textarea>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="g-recaptcha" data-sitekey="6LehDsYqAAAAAEvRweNISAz73_Zgyfc2qtqAztpN">
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
                        <div
                            class="carousel-indicators carousel-indicators-dot carousel-get-an-estimate-indicators indicators-home">
                            <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="0"
                                class="active" aria-label="Go To First Review"></button>
                            <button type="button" data-bs-target="#carousel-indicators-dot-2" data-bs-slide-to="1"
                                aria-label="Go To Second Review"></button>
                            <button type="button" data-bs-target="#carousel-indicators-dot-2" data-bs-slide-to="2"
                                aria-label="Go To Third Review"></button>
                            <button type="button" data-bs-target="#carousel-indicators-dot-2" data-bs-slide-to="3"
                                aria-label="Go To Fourth Review"></button>
                        </div>
                        <div class="carousel-inner w-100">
                            <div class="carousel-item w-100 active">
                                <div class="">
                                    <img src="{{ asset('assets/images/aspas.webp') }}" alt="quotation marks">
                                    <p>
                                        If you're looking for a reliable and talented construction company, look no
                                        further than Mega. They are the best in the business.
                                    </p>
                                    <div class="name-and-stars-testimonial">
                                        <h2>Michael L.</h2>
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
                                    <img src="{{ asset('assets/images/aspas.webp') }}" alt="quotation marks">
                                    <p>
                                        Working with Mega was a pleasure. They are a highly skilled team that
                                        consistently exceeded my expectations.
                                    </p>
                                    <div class="name-and-stars-testimonial">
                                        <h2>Oliver A.</h2>
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
                                    <img src="{{ asset('assets/images/aspas.webp') }}" alt="quotation marks">
                                    <p>
                                        Mega is a fantastic partner for any construction project. They are professional,
                                        responsive, and always go the extra mile.
                                    </p>
                                    <div class="name-and-stars-testimonial">
                                        <h2>Amelia J.</h2>
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
                                    <img src="{{ asset('assets/images/aspas.webp') }}" alt="quotation marks">
                                    <p>
                                        I highly recommend Mega to everyone looking to get into the development market.
                                        I've worked with them before and they have exceeded my expectations every time.
                                    </p>
                                    <div class="name-and-stars-testimonial">
                                        <h2>Emma P.</h2>
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
        <div class="dark-background"></div>
        <img class="art-2-vector-orange" src="{{ asset('assets/images/Vector 7.webp') }}" alt="image-vector">
        <img class="art-2-vector-black" src="{{ asset('assets/images/Vector 9.webp') }}" alt="image-vector">

        <div class="container">
            <div class="row">
                <div class="col-md-6 mbl-fix">
                    <h3>
                        From blueprint to reality
                    </h3>
                    <p>
                        Subscribe to our newsletter to be on the loop about our latest news and projects.
                    </p>
                    <a class="btn-art-2" href="{{ route('contact-us') }}"
                        aria-label="Go to Contact Us Page">SUBSCRIBE NOW</a>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>


    @include('includes.footer-site')

    <script>
        $(document).ready(function() {
            $("img:not(.owl-images)").each(function() {
                if (!$(this).attr("loading")) {
                    $(this).attr("loading", "lazy");
                }
                if (!$(this).attr("width") || !$(this).attr("height")) {
                    $(this).attr("width", this.width);
                    $(this).attr("height", this.height);
                }
            });
        });
    </script>



</body>

</html>
