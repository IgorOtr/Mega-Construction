@include('includes.head')

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

    <section class="investment-section">
        <div class="dark-background"></div>
        <img src="{{ asset('assets/images/Vector 15.webp') }}" alt="vector image">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-6 empty-col"></div>
                <div
                    class="col-md-6 investment-presentation-form d-flex justify-content-center align-items-center flex-column">
                    <div>
                        <h1>INVESTMENT</h1>
                        <p class="investment-presentation-subtitle">
                            At Mega Contractors,
                            we also work on projects based on
                            investment purposes.

                        </p>
                        <p class="investment-presentation-paragraph">
                            Be it a residential or non-residential project, we have a highly skilled workforce and the
                            expertise to see it through to completion. Get in touch with us today to learn more about
                            our work:
                        </p>
                        <form action="{{ route('send-investment') }}" class="investment-form"  method="POST">
                            @csrf
                            <div class="row w-100 mb-3">
                                <div class="col">
                                    <div class="form-label">NAME</div>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row w-100 mb-3">
                                <div class="col">
                                    <div class="form-label">EMAIL</div>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row w-100 mb-3">
                                <div class="col">
                                    <div class="form-label">PHONE</div>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>
                            <div class="row w-100 mb-2">
                                <div class="col">
                                    <div class="form-label">MESSAGE</div>
                                    <textarea class="form-control" name="message" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="g-recaptcha" data-sitekey="6LehDsYqAAAAAEvRweNISAz73_Zgyfc2qtqAztpN"></div>
                            </div>
                            <div class="row w-100 mb-2">
                                <div class="col">
                                    <button class="btn-investment w-100">GET IN TOUCH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="help-us-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="border-left: 18px solid #fb5000;">
                    <h3>
                        Help us shape communities and build futures. Why invest in Mega Contractors?
                    </h3>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row mb-3 py-4 px-3" style="border-bottom: 1px solid #fb5000;">
                        <div class="col-md-3 investment-icons">
                            <img src="{{ asset('assets/images/icons/sucesso 1.svg') }}" alt="success icone">
                        </div>
                        <div class="col-md-9 d-flex justify-content-center align-items-center flex-column">
                            <h2 class="mb-3">20+ years of experience</h2>
                            <p>
                                Our years of expertise have allowed us to deliver high-quality projects that surpass our
                                clients' expectations.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3 py-4 px-3" style="border-bottom: 1px solid #fb5000;">
                        <div class="col-md-3 investment-icons">
                            <img id="lampada" src="{{ asset('assets/images/icons/solucao 1.svg') }}" style="" alt="light icon">
                        </div>
                        <div class="col-md-9 d-flex justify-content-center align-items-center flex-column">
                            <h2 class="mb-3">Cost-effective solutions</h2>
                            <p>
                                We aim to provide our clients and investors with comprehensive financing solutions.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3 py-4 px-3">
                        <div class="col-md-3 investment-icons">
                            <img src="{{ asset('assets/images/icons/despesa 1.svg') }}" alt="coin icon">
                        </div>
                        <div class="col-md-9 d-flex justify-content-center align-items-center flex-column">
                            <h2 class="mb-3">Financial strength and established relationships with lenders</h2>
                            <p>
                                Since we've been in the market for over 20+ years, we've garnered and fostered strong
                                relationships with longtime investors and lenders.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    @include('includes.footer-site')
</body>

</html>
