@include('includes.head')

<body>
    @include('includes.navbar')

    <section class="our-properties-banner"></section>
    <section class="search-properties-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 col-image">
                    <img class="w-100" src="{{ asset('assets/images/search-image.png') }}" alt="">
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
                                <input type="text" class="form-control" placeholder="Search by location">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="" class="form-label">CITY</label>
                                <input type="text" class="form-control" placeholder="Search by price range">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="" class="form-label">NUMBER OF BEFROOMS</label>
                                <input type="text" class="form-control" placeholder="Search by location">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="" class="form-label">NUMBER OF BATHROOMS</label>
                                <input type="text" class="form-control" placeholder="Search by price range">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="" class="form-label">PRICE RANGE</label>
                                <input type="text" class="form-control" placeholder="Search by price range">
                            </div>
                            <div class="col-md-1 mb-3 position-relative">
                                <button type="submit" class="btn-serach"><img src="{{ asset('assets/images/icons/lupa 1.svg') }}" alt=""></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 search-map-column">
                    <img src="{{ asset('assets/images/508eb78a1ac6ca081729ffd6b984c99e.png') }}" alt="">
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
                                    <img src="{{ asset('assets/images/properties_img/'.$property->p_cover_img) }}" alt="">
                                </div>
                                <div class="property-card-body">
                                    <p class="property-price">{{ $property->p_price }}</p>
                                    <p class="property-info"><strong>{{ $property->p_bedroom }}</strong> beds  |  <strong>{{ $property->p_bathroom }}</strong> baths  |  <strong>{{ $property->p_area }}</strong> sqft  |  Active</p>
                                    <p class="property-address">{{ $property->p_address }}</p>
                                    <p class="mega-info">MLS ID 11MDPG2109426, MEGA CONSTRUCTION</p>
                                </div>
                            </div>
                        </div>
                        </a>
                
                @endforeach

            </div>
        </div>
    </section>

    @include('includes.footer-site')
</body>

</html>
