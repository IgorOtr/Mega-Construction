@include('includes.head')

<body>
    @include('includes.navbar')

    <section class="investment-section">
        <img src="{{ asset('assets/images/Vector 15.png') }}" alt="">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-6"></div>
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
                        <form action="">
                            <div class="row w-100 mb-3">
                                <div class="col">
                                    <div class="form-label">NAME</div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row w-100 mb-3">
                                <div class="col">
                                    <div class="form-label">EMAIL</div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row w-100 mb-3">
                                <div class="col">
                                    <div class="form-label">PHONE</div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row w-100 mb-2">
                                <div class="col">
                                    <div class="form-label">MESSAGE</div>
                                    <textarea class="form-control" name="example-textarea-input" rows="6"></textarea>
                                </div>
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
                    <h1>
                        Help us shape communities and build futures. Why invest in Mega Contractors?
                    </h1>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row mb-3 py-4 px-3" style="border-bottom: 1px solid #fb5000;">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/icons/sucesso 1.svg') }}" alt="">
                        </div>
                        <div class="col-md-9 d-flex justify-content-center align-items-center flex-column">
                            <h2 class="mb-3">18+ years of experience</h2>
                            <p>
                                Our years of expertise have allowed us to deliver high-quality projects that surpass our clients' expectations.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3 py-4 px-3" style="border-bottom: 1px solid #fb5000;">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/icons/solucao 1.svg') }}" alt="">
                        </div>
                        <div class="col-md-9 d-flex justify-content-center align-items-center flex-column">
                            <h2 class="mb-3">Cost-effective solutions</h2>
                            <p>
                                We aim to provide our clients and investors with comprehensive financing solutions.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3 py-4 px-3">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/icons/despesa 1.svg') }}" alt="">
                        </div>
                        <div class="col-md-9 d-flex justify-content-center align-items-center flex-column">
                            <h2 class="mb-3">Financial strength and established relationships with lenders</h2>
                            <p>
                                Since we've been in the market for over 18+ years, we've garnered and fostered strong relationships with longtime investors and lenders.
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
