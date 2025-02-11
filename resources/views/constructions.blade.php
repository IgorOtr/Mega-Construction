@include('includes.head')

<style>
    @media screen and (max-width: 768px) {
        .constructions-section {
            height: 855px;
        }

        .constructions-section img {
            height: 550px;
        }

        .constructions-presentation p {
            margin-top: 100px;
        }

        .get-an-estimate-testimonial {
            border: none
        }

        .featured-projects {
            height: 650px;
            padding-top: 0px
        }

        .featured-projects .col-md-7 {
            margin-top: -300px;
        }

        .featured-projects-vector {
            display: none;
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

    <section class="constructions-section">
        <img src="{{ asset('assets/images/Vector-constructions.webp') }}" alt="vector image">
        <div class="container-fluid" style="height: 100%;">
            <div class="row" style="height: 100%;">
                <div class="col-md-6"></div>
                <div
                    class="col-md-6 constructions-presentation d-flex justify-content-center align-items-center flex-column">
                    <div class="">
                        <h1>Construction</h1>
                        <p>
                            We, more than anybody, understand the importance of guaranteeing a well-executed project.
                            That's
                            why we take safety and knowledge of building codes across the US very seriously.
                            <br><br>
                            At Mega Contractors we're able to deliver projects in a timely manner because we have the
                            ability and a well-structured team that works together through every step of the way.
                            <br><br>
                            From commercial projects to residential ones, we're shaping communities and building futures
                            from coast to coast. Search through some of the featured and completed projects we have
                            worked
                            on to get a glimpse of our expertise.
                        </p>
                        <a href="{{ route('contact-us') }}" aria-label="Go To Contact Page">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="get-an-estimate-section" id="estimate">
        <img class="get-an-estimate-vector" src="{{ asset('assets/images/Vector-8.webp') }}" alt="vector image">
        <div class="container">
            <div class="row">
                <div class="col-md-6 get-an-estimate-form">
                    <h3>GET AN<br>ESTIMATE</h3>

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
                        <div class="row mb-3">
                            <div class="g-recaptcha" data-sitekey="6LehDsYqAAAAAEvRweNISAz73_Zgyfc2qtqAztpN"></div>
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

    <section class="featured-projects">
        <div class="container" style="height: 100%;">
            <div class="row" style="height: 100%;">
                <div class="col-md-4" style="margin-top: -35px;">
                    <h3 class="mb-4">
                        Featured Projects
                    </h3>
                    <div class="w-100 text-end">
                        <img class="featured-projects-vector" src="{{ asset('assets/images/Vector 7.webp') }}"
                            alt="vector image">
                    </div>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <div class="w-100 text-center mb-3">
                        <img src="{{ asset('assets/images/new/DJI_20241118125005_0685_D.jpg') }}" alt="This aerial image captures the construction of a building foundation and wooden framing, surrounded by construction materials, vehicles, and workers.">
                    </div>
                    <p>
                        Browse through our portfolio to find the home of your dreams. From luxurious designs to
                        residential suburbs, we have high-quality properties available for every style and personality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="photo-gallery-section completed-projects-carousel">
        <img class="vector-completed-projects" src="{{ asset('assets/images/Vector 3.webp') }}" alt="vector image">
        <h3>Completed<br>Projects</h3>
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
                    <img class="d-block w-100" alt="This image showcases a completed residential project, highlighting its modern architectural design, clean lines, and functionality. It emphasizes attention to detail and quality construction, featuring balconies, large windows, and contrasting siding. The Completed Projects label ensures it stands out as part of a portfolio presentation."
                        src="{{ asset('assets/images/new/AD202572.webp') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="A modern house with clean lines and large windows, surrounded by vibrant autumn trees and greenery in the foreground."
                        src="{{ asset('assets/images/new/AD200238.webp') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="This image highlights a residential building featuring a combination of modern and traditional design elements. It showcases brick accents on the lower level, contrasting siding on upper levels, and clean windows for a polished appearance. The layout demonstrates a focus on functionality and aesthetic appeal, ideal for suburban living."
                        src="{{ asset('assets/images/new/AD202607.webp') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="This image captures a modern multi-family residential building, combining clean lines and materials such as brick and siding for a balanced aesthetic. The large windows offer abundant natural light, while balconies provide outdoor spaces for residents. Ample parking and the presence of vehicles suggest a well-utilized urban community. Let me know if you'd like any analysis or information highlighted further!"
                        src="{{ asset('assets/images/new/AD202539.webp') }}">
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer-site')
</body>

</html>
