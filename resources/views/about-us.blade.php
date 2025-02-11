@include('includes.head')

<body>
    @include('includes.navbar')

    <section class="our-story-section">
        <img class="our-story-vector" src="{{ asset('assets/images/abou-us-oranger-vector.webp') }}" alt="vector image">
        <img class="group-and-logo-mega" src="{{ asset('assets/images/new/AD200253.webp') }}" alt="A confident man dressed in a dark blazer and light pants stands in front of a modern house, with autumnal trees in the background.">
        <div class="container-fluid h-100 container-mb-about-us">
            <div class="row h-100">
                <div class="col-md-6 our-story-col">
                    <div>
                        <h1>Our History</h1>
                        <p>
                            Mega Contractors has been building a legacy in the construction industry by accumulating
                            more than 18 years of experience throughout the hundreds of well-executed projects the
                            company has worked on from coast to coast and delivered in a timely manner.
                            <br><br>
                            From taking on commercial projects to residential ones that range from luxury houses to
                            entire condos, Mega Contractors has been shaping communities and leaving its mark across the
                            country.
                        </p>
                        <a href="{{ route('contact-us') }}" aria-label="Go To Contact Page" class="btn-our-story">CONTACT US</a>
                    </div>
                </div>
                <div class="col-md-6 empty-col-mb"></div>
            </div>
        </div>
    </section>

    <section class="our-missin-vision-section">
        <img class="our-mission-vision-vector" src="{{ asset('assets/images/Vector 14.webp') }}" alt="vector image">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-6"></div>
                <div class="col-md-6 our-mission-vision-column">
                    <div>
                        <h2>OUR MISSION</h2>
                        <p>
                            At Mega Contractors, our mission is to transform residential and commercial construction
                            through exceptional craftsmanship, innovative solutions, and an unwavering commitment to
                            client satisfaction. We strive to exceed expectations in every project, creating lasting
                            value for our clients and the communities we serve.
                        </p>
                        <h2>OUR VISION</h2>
                        <p>
                            We envision a future where Mega Contractors leads the construction industry in quality,
                            sustainability, and innovation. Our goal is to be the preferred partner for residential and
                            commercial construction on the East Coast, renowned for our integrity, expertise, and our
                            ability to bring our clients' visions to life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-values-section">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-6 our-values-text">
                    <div>
                        <h2>OUR VALUES</h2>
                        <p>
                            Whether embarking on a new residential venture, seeking a luxurious living space, or needing
                            a reliable general contractor, Mega Contractors is your trusted partner. We are dedicated to
                            bringing your residential vision to life with unmatched professionalism and commitment.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 our-values-icons">
                    <div class="row">
                        <div class="col-md-4 mb-4 text-center">
                            <div class="value-box">
                                <img src="{{ asset('assets/images/icons/melhor-pratica 1.svg') }}" alt="Excellence icon">
                                <h3>Excellence</h3>
                                <p>
                                    We are committed to delivering the highest quality in every aspect of our work.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 text-center">
                            <div class="value-box">
                                <img src="{{ asset('assets/images/icons/aperto-de-mao 1.svg') }}" alt="Integrity icon">
                                <h3>Integrity</h3>
                                <p>
                                    We conduct our business with honesty, transparency, and respect.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 text-center">
                            <div class="value-box">
                                <img src="{{ asset('assets/images/icons/inovacao 1.svg') }}" alt="Innovation icon">
                                <h3>Innovation</h3>
                                <p>
                                    We embrace new ideas and technologies to provide cutting-edge solutions.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 text-center">
                            <div class="value-box">
                                <img src="{{ asset('assets/images/icons/foco 1.svg') }}" alt="Client Focus Icon">
                                <h3>Client Focus</h3>
                                <p>
                                    We prioritize our clients' needs and work diligently to exceed their expectations.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 text-center">
                            <div class="value-box">
                                <img src="{{ asset('assets/images/icons/comunidade 1.svg') }}" alt="Community Icon">
                                <h3>Community</h3>
                                <p>
                                    We contribute positively to the communities where we build, enhancing the quality of
                                    life through our projects.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 text-center">
                            <div class="value-box">
                                <img src="{{ asset('assets/images/icons/networking 1.svg') }}" alt="Teamwork Icon">
                                <h3>Teamwork</h3>
                                <p>
                                    We believe in the power of collaboration and foster a culture of mutual support and
                                    shared success.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-legacy-section">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-6 our-legacy-column">
                    <div>
                        <h3>OUR LEGACY</h3>
                        <p>
                            Mega Contractors has been building a legacy in the construction industry for over two
                            decades, delivering thousands of well-executed projects across the East Coast. Our CEO, JP
                            Miranda, brings extensive experience across a wide range of commercial and residential
                            projects, including single-family homes, condos, apartment complexes, and luxury residences.
                        </p>
                        <h3>OUR EXPERTISE</h3>
                        <p>
                            Mega Contractors is a single-owner construction company with 200 direct and indirect
                            employees. We are solutions-oriented, always prioritizing our clients' needs to ensure that
                            each residential project exceeds expectations. Whether crafting bespoke luxury residences or
                            developing multi-unit apartment complexes, we bring a commitment to excellence and
                            innovation to every phase of construction.
                        </p>
                        <h3>OUR APPROACH</h3>
                        <p>
                            We integrate development, design, general construction, construction management, and
                            investment expertise to tailor solutions that meet the unique demands of each project. As
                            both a general contractor and a specialist in concrete and framing, we offer seamless
                            project execution and superior quality.
                        </p>
                        <h3>OUR COMMITMENT</h3>
                        <p>
                            Whether embarking on a new residential venture, seeking a luxurious living space, or needing
                            a reliable general contractor, Mega Contractors is your trusted partner. We are dedicated to
                            bringing your residential vision to life with unmatched professionalism and commitment.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 usa-flag-bg" alt="An aerial view of a modern apartment building surrounded by parking spaces and a scenic landscape of autumn trees and open fields."></div>
            </div>
        </div>
    </section>

    <section class="clients-feedback-section">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-12">
                    <h3 class="clients-feedback-title">Clients' Feedback</h3>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 clients-feedback-column">
                            <img src="{{ asset('assets/images/aspas.webp') }}" alt="quotation marks">
                            <p>
                                I highly recommend Mega to everyone looking to get into the development market. I've
                                worked with them before and they have exceeded my expectations every time.
                            </p>

                            <div class="client-name-stars">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Michael J.</h3>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 clients-feedback-column clients-feedback-column-border"
                            style="">
                            <img src="{{ asset('assets/images/aspas.webp') }}" alt="quotation marks">
                            <p>
                                Mega worked on my construction project with such attention to detail and expertise that
                                the final result was flawless. I will work with them in the future and recommend it to
                                anyone I know.
                            </p>

                            <div class="client-name-stars">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>James A.</h3>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 clients-feedback-column">
                            <img src="{{ asset('assets/images/aspas.webp') }}" alt="quotation marks">
                            <p>
                                We had the opportunity to work with Mega Contractors in a luxury condo project we
                                invested in, and all I can say is that it was the right choice. They did an amazing job
                                from start to finish.
                            </p>

                            <div class="client-name-stars">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Melissa C.</h3>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-star">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="find-home-section">
        <div class="container-fluid">
            <div class="row find-row">
                <div class="col-md-6 find-col vector-find-home">
                    <img src="{{ asset('assets/images/FIND-HOME.webp') }}" alt="A joyful couple embracing in their new home, with the woman holding a set of keys featuring a house-shaped keychain, symbolizing the excitement of moving into a new place.">
                </div>
                <div class="col-md-6 find-col d-flex align-items-center justify-content-center flex-column form-find-home">
                    <h3>FIND YOUR<br>DREAM HOME</h3>
                    <form action="" class="mt-3">
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">STATE</div>
                                <input type="text" class="form-control">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">CITY</div>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">NUMBER OF BEDROOMS</div>
                                <input type="text" class="form-control">

                            </div>
                            <div class="col mb-3">

                                <div class="form-label">NUMBER OF BATHROOMS</div>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">PRICE RANGE</div>
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

                                <a href="{{ route('our-properties') }}" class="btn-find-home" aria-label="Go To Our Properties Page">SEARCH</a>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
{{-- 
    <section class="our-partners-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>OUR PARTNERS</h1>
                </div>
                <div class="col-md-12 text-center">
                    <div class="row">
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @include('includes.footer-site')
</body>

</html>
