@include('includes.head')

<body>
    @include('includes.navbar')

    <section class="constructions-section development-section">
        <img src="{{ asset('assets/images/Vector-constructions.png') }}" alt="">
        <div class="container-fluid" style="height: 100%;">
            <div class="row" style="height: 100%;">
                <div class="col-md-6"></div>
                <div
                    class="col-md-6 constructions-presentation d-flex justify-content-center align-items-center flex-column">
                    <div class="">
                        <h1>Development</h1>
                        <p>
                            Our mission is to help shape communities and build futures across the US, leaving our
                            signature mark of trust and professionalism. That's why, we undertake development projects
                            from East Coast that can improve lives and create opportunities.
                            <br><br>
                            Whether it's a commercial development or a residential one, we have almost two decades of
                            experience to make sure it's completed flawlessly. Look through the featured and completed
                            projects we have worked on recently.
                        </p>
                        <a href="{{ route('contact-us') }}">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-projects">
        <div class="container" style="height: 100%;">
            <div class="row" style="height: 100%;">
                <div class="col-md-4" style="margin-top: -136px;">
                    <h1 class="mb-4">
                        Features Projects
                    </h1>
                    <div class="w-100 text-end">
                        <img class="fetured-projects-vector" src="{{ asset('assets/images/Vector 7.png') }}"
                            alt="">
                    </div>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7 margin-negative">
                    <div class="w-100 text-center mb-3">
                        <img src="{{ asset('assets/images/female-working-environment-projects.jpg') }}" alt="">
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="find-your-dream-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12" style="border-left: 18px solid #fb5000;">
                    <h1>Find your dream home</h1>
                    <h2>Browse through our portfolio</h2>
                </div>
            </div>
            <div class="row mb-3">


                @foreach ($properties as $property)
                    <div class="col-md-4 mb-3">
                        <a href="{{ $property->p_zillow_url }}" target="_blank">
                            <div class="property-card">
                                <div class="property-card-header">
                                    <img src="{{ asset('assets/images/properties_img/' . $property->p_cover_img) }}"
                                        alt="">
                                </div>
                                <div class="property-card-body">
                                    <p class="property-price">{{ $property->p_price }}</p>
                                    <p class="property-info"><strong>{{ $property->p_bedroom }}</strong> beds |
                                        <strong>{{ $property->p_bathroom }}</strong> baths |
                                        <strong>{{ $property->p_area }}</strong> sqft | Active</p>
                                    <p class="property-address">{{ $property->p_address }}</p>
                                    <p class="mega-info">MLS ID 11MDPG2109426, MEGA CONSTRUCTION</p>
                                </div>
                            </div>
                    </div>
                    </a>
                @endforeach


            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center w-100">
                        <a href="{{ route('our-properties') }}" class="btn-find-your-dreams w-100">SEE MORE</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="completed-projects completed-projects-development">
        <img src="{{ asset('assets/images/Vector 3.png') }}" alt="">
        <h1>Completed<br>Projects</h1>
    </section>

    @include('includes.footer-site')
</body>

</html>
