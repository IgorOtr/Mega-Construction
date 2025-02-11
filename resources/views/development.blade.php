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

    <section class="constructions-section development-section">
        <img src="{{ asset('assets/images/Vector-constructions.webp') }}" alt="vector image">
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
                        <a href="{{ route('contact-us') }}" aria-label="Go To Contact Page">CONTACT US</a>
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
                        <img src="{{ asset('assets/images/new/DJI_20241118125005_0685_D.jpg') }}"
                            alt="This aerial image captures the construction of a building foundation and wooden framing, surrounded by construction materials, vehicles, and workers.">
                    </div>
                    <p>
                        Browse through our portfolio to find the home of your dreams. From luxurious designs to
                        residential suburbs, we have high-quality properties available for every style and personality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="find-your-dream-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12" style="border-left: 18px solid #fb5000;">
                    <h3>Find your dream home</h3>
                    <h2>Browse through our portfolio</h2>
                </div>
            </div>
            <div class="row mb-3">


                @foreach ($properties as $property)
                    <div class="col-md-4 mb-3">
                        <a href="{{ $property->p_zillow_url }}" target="_blank" aria-label="Go To Propertie Details">
                            <div class="property-card">
                                <div class="property-card-header">
                                    <img src="{{ asset('assets/images/properties_img/' . $property->p_cover_img) }}"
                                        alt="propertie cover image">
                                </div>
                                <div class="property-card-body">
                                    <p class="property-price">{{ $property->p_price }}</p>
                                    <p class="property-info"><strong>{{ $property->p_bedroom }}</strong> beds |
                                        <strong>{{ $property->p_bathroom }}</strong> baths |
                                        <strong>{{ $property->p_area }}</strong> sqft | Active
                                    </p>
                                    <p class="property-address">{{ $property->p_address }}</p>
                                    <p class="mega-info">MLS ID 11MDPG2109426, MEGA CONSTRUCTION</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center w-100">
                        <a href="{{ route('our-properties') }}" aria-label="Go To Our Properties Page" class="btn-find-your-dreams w-100">SEE MORE</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="photo-gallery-section completed-projects-carousel">
        <img class="vector-completed-projects" src="{{ asset('assets/images/Vector 3.webp') }}" alt="">
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
                    <img class="d-block w-100" alt="This image showcases a completed multi-family residential project, framed by an orange graphic with the text Completed Projects. It highlights the finished structure's design and aesthetic."
                        src="{{ asset('assets/images/new/AD200554.webp') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="A modern house with clean lines and large windows, surrounded by vibrant autumn trees and greenery in the foreground."
                        src="{{ asset('assets/images/new/AD200238.webp') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="This image highlights a section of a completed multi-family building, showcasing its modern design with a combination of siding, stonework, and private balconies. It emphasizes the quality and attention to detail in the construction."
                        src="{{ asset('assets/images/new/AD200563.webp') }}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="An aerial view of a modern apartment complex surrounded by dense autumnal woods and a serene pond, showcasing organized parking lots and well-maintained pathways connecting the buildings."
                        src="{{ asset('assets/images/new/DJI_20241118165302_0775_D.webp') }}">
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer-site')
</body>

</html>
