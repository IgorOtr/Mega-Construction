@include('includes.head')

<body>
    @include('includes.navbar')

    <section class="our-properties-banner"></section>
    <section class="search-properties-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 col-image">
                    <img class="w-100" src="{{ asset('assets/images/new/efdbb01e29a6af3fff2aa2d51fbc4ca1-uncropped_scaled_within_1536_1152.webp') }}" alt="This image showcases a modern and minimalistic open-concept kitchen and living area. The kitchen features a large central island with a sleek, clean design, complemented by pendant lighting. The stools at the island add warmth and a rustic touch. The living area displays cozy seating with earthy accents like terrariums and plants on the coffee table, blending natural elements into the modern aesthetic.">
                </div>
                <div class="col-md-8 d-flex justify-content-center flex-column search-text-column">
                    <h1>
                        Search through our list of properties to find the one that best suits your needs and interests.
                    </h1>
                    <h3>
                        We have an exclusive selection of properties available for you.
                    </h3>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 form-search-column">
                    <form>
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <label for="" class="form-label">STATE</label>
                                <input type="text" class="form-control" placeholder="Search by State">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="" class="form-label">CITY</label>
                                <input type="text" class="form-control" placeholder="Search by City">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="" class="form-label">NUMBER OF BEDROOMS</label>
                                <input type="text" class="form-control" placeholder="Search by Number of Bedrooms">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="" class="form-label">NUMBER OF BATHROOMS</label>
                                <input type="text" class="form-control" placeholder="Search by Number of Bathrooms">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="" class="form-label">PRICE RANGE</label>
                                <input type="text" class="form-control" placeholder="Search by price range">
                            </div>
                            <div class="col-md-1 mb-3 position-relative">
                                <a href="#properties" class="btn-serach d-flex justify-content-center"><img width="25" src="{{ asset('assets/images/icons/lupa 1.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 search-map-column">
                    {{-- <img src="{{ asset('assets/images/508eb78a1ac6ca081729ffd6b984c99e.webp') }}" alt=""> --}}
                    <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9202.859487439277!2d-72.88528186480147!3d42.96363491295185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e0faba61c04651%3A0x4658f0c2e81d46da!2s36%20Boulder%20Ridge%20Dr%2C%20Mt%20Snow%2C%20VT%2005356%2C%20EUA!5e1!3m2!1spt-BR!2sbr!4v1737477433555!5m2!1spt-BR!2sbr" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="find-your-dream-section" id="properties">
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
                        <a href="{{ $property->p_zillow_url }}" target="_blank" aria-label="Go To Propertie Details Page">
                            <div class="property-card">
                                <div class="property-card-header">
                                    <img src="{{ asset('assets/images/properties_img/'.$property->p_cover_img) }}" alt="Propertie cover image">
                                </div>
                                <div class="property-card-body">
                                    <p class="property-price">{{ $property->p_price }}</p>
                                    <p class="property-info"><strong>{{ $property->p_bedroom }}</strong> beds  |  <strong>{{ $property->p_bathroom }}</strong> baths  |  <strong>{{ $property->p_area }}</strong> sqft  |  Active</p>
                                    <p class="property-address">{{ $property->p_address }}</p>
                                    <p class="mega-info">MLS ID 11MDPG2109426, MEGA CONSTRUCTION</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    @include('includes.footer-site')
</body>

</html>
