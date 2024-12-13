@include('includes.head')

<body>
    @include('includes.navbar')

    <section class="hero-banner">
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('assets/videos/-1ff4-4e02-9182-542e635521ac.mp4') }}" type="video/mp4">
        </video>

        <div class="container container-hero-banner">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="hero-banner__title">Shaping communities.</h1>
                    <h1 class="hero-banner__title_2">Building futures.</h1>
                    <a href="" class="btn-hero">Find Your Dream Home</a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
    </section>

    <section class="">
        <div class="container container-hero-banner">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="hero-banner__title">Shaping communities.</h1>
                    <h1 class="hero-banner__title_2">Building futures.</h1>
                    <a href="" class="btn-hero">Find Your Dream Home</a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
    </section>

    <section class="separator"></section>

    <section class="about-us-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 about-us-column">
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
                        <a href="" class="btn-about-us">Contact Us</a>
                    </div>
                </div>
                <div class="col-6 vector-col">
                    <img class="img-about-us-section" src="{{ asset('assets/images/mask-group.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="topics-section">
        <div class="container">
            <div class="row">

                <div class="col-md-4 tex-center">
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

                <div class="col-md-4 tex-center">
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

                <div class="col-md-4 tex-center">
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

    <section class="photo-gallery-section"></section>

    <section class="get-an-estimate-section">
        <img class="get-an-estimate-vector" src="{{ asset('assets/images/Vector-8.png') }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 get-an-estimate-form">
                    <h1>GET AN<br>ESTIMATE</h1>

                    <form action="" class="mt-3">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-label">NAME</div>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">EMAIL</div>
                                <input type="text" class="form-control">

                            </div>
                            <div class="col mb-3">

                                <div class="form-label">PHONE</div>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">CITY</div>
                                <input type="text" class="form-control">

                            </div>
                            <div class="col mb-3">

                                <div class="form-label">SUBJECT</div>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">YOUR MESSAGE</div>
                                <textarea class="form-control" name="example-textarea-input" rows="6"></textarea>

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
                    <div class="">
                        <img src="{{ asset('assets/images/aspas.png') }}" alt="">
                        <p>
                            I highly recommend Mega to everyone looking to get into the development market. I've worked
                            with
                            them before and they have exceeded my expectations every time.
                        </p>
                        <div class="name-and-stars-testimonial">
                            <h2>Michael J.</h2>
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
