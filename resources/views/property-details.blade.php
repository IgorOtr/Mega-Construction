@include('includes.head')

<body>
    @include('includes.navbar')

    <section class="our-properties-banner"></section>
    <section class="search-properties-section mb-5">
        <div class="container">
            <div class="row mb-3 mt-4">
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
                                <button type="submit" class="btn-serach"><img
                                        src="{{ asset('assets/images/icons/lupa 1.svg') }}" alt=""></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-5 mt-4">
                <div class="col-md-3 property-main-delatils-column">
                    <div class="row">
                        <div class="col-4 text-center">
                            <img src="{{ asset('assets/images/icons/Pin.svg') }}" alt="">
                        </div>
                        <div class="col-8">
                            <h1>Vermont</h1>
                            <p>
                                Burlington - VE
                            </p>
                        </div>
                        <div class="col-md-12 property-address">
                            41 Kibbe Farm Road, South Hero, VT 05486
                        </div>
                        <div class="col-md-12 property-price">
                            $997,500
                        </div>
                        <div class="col-md-12 mb-2 property-request-tour">
                            <a href="" class="btn-request-a-tour">REQUEST A TOUR</a>
                        </div>
                        <div class="col-md-12 property-contact-agent">
                            <a href="" class="btn-contact-agent">CONTACT AGENT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 property-images">
                    <img src="{{ asset('assets/images/3d-rendering-house-model (2).jpg') }}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 property-info-column">
                    <h1>Discover your new home!</h1>
                    <p>
                        <span>Lorem Ipsum is simply dummy text of the printing</span>
                        <br><br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6 property-price-and-info-column">
                            <h2>$997,500</h2>
                            <p>41 Kibbe Farm Road, South Hero, VT 05486</p>
                            <div class="row mt-5 mb-3">
                                <div class="col-6 property-info-column">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-buildings">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 21v-15c0 -1 1 -2 2 -2h5c1 0 2 1 2 2v15" />
                                        <path d="M16 8h2c1 0 2 1 2 2v11" />
                                        <path d="M3 21h18" />
                                        <path d="M10 12v0" />
                                        <path d="M10 16v0" />
                                        <path d="M10 8v0" />
                                        <path d="M7 12v0" />
                                        <path d="M7 16v0" />
                                        <path d="M7 8v0" />
                                        <path d="M17 12v0" />
                                        <path d="M17 16v0" />
                                    </svg>
                                    Single Family Residence
                                </div>
                                <div class="col-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-hammer">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M11.414 10l-7.383 7.418a2.091 2.091 0 0 0 0 2.967a2.11 2.11 0 0 0 2.976 0l7.407 -7.385" />
                                        <path
                                            d="M18.121 15.293l2.586 -2.586a1 1 0 0 0 0 -1.414l-7.586 -7.586a1 1 0 0 0 -1.414 0l-2.586 2.586a1 1 0 0 0 0 1.414l7.586 7.586a1 1 0 0 0 1.414 0z" />
                                    </svg>
                                    Built in 1929
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6 property-info-column">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                    $1,002,900 Zestimate
                                </div>
                                <div class="col-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-ruler">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M5 4h14a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1h-7a1 1 0 0 0 -1 1v7a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1" />
                                        <path d="M4 8l2 0" />
                                        <path d="M4 12l3 0" />
                                        <path d="M4 16l2 0" />
                                        <path d="M8 4l0 2" />
                                        <path d="M12 4l0 3" />
                                        <path d="M16 4l0 2" />
                                    </svg>
                                    $412/sqft
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 property-info-beds-column">
                            <div class="row mb-5">
                                <div class="col-4">
                                    <h2>5</h2>
                                    <p>beds</p>
                                </div>
                                <div class="col-4">
                                    <h2>4</h2>
                                    <p>baths</p>
                                </div>
                                <div class="col-4">
                                    <h2>2,420</h2>
                                    <p>sqft</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 property-info-column mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin-2">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 18.5l-3 -1.5l-6 3v-13l6 -3l6 3l6 -3v7" />
                                        <path d="M9 4v13" />
                                        <path d="M15 7v5" />
                                        <path
                                            d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />
                                        <path d="M19 18v.01" />
                                    </svg>
                                    0,74 Acres lot
                                </div>
                                <div class="col-12 property-info-column mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                    $--HOA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row mb-4">
                        <div class="col-4">
                            <a href="" class="btn-videos">
                                <svg width="34" height="24" viewBox="0 0 34 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.9886 2.8035C31.568 2.57836 31.0943 2.4716 30.618 2.49458C30.1417 2.51756 29.6804 2.66941 29.2833 2.934L24.3981 6.1965V4.5285C24.3969 3.52675 23.9992 2.56636 23.2922 1.85801C22.5852 1.14966 21.6267 0.751191 20.6268 0.75H4.21515C3.2153 0.751191 2.25675 1.14966 1.54975 1.85801C0.842751 2.56636 0.445036 3.52675 0.443848 4.5285V19.4715C0.445036 20.4733 0.842751 21.4336 1.54975 22.142C2.25675 22.8503 3.2153 23.2488 4.21515 23.25H20.6268C21.6267 23.2488 22.5852 22.8503 23.2922 22.142C23.9992 21.4336 24.3969 20.4733 24.3981 19.4715V17.8035L29.2833 21.066C29.6803 21.3309 30.1416 21.4828 30.618 21.5058C31.0945 21.5287 31.5682 21.4217 31.9887 21.1962C32.4092 20.9707 32.7608 20.6351 33.006 20.2252C33.2512 19.8153 33.3808 19.3464 33.381 18.8685V5.1315C33.3807 4.65359 33.251 4.18471 33.0058 3.77477C32.7607 3.36483 32.4091 3.02916 31.9886 2.8035ZM21.4038 19.4715C21.4038 19.678 21.322 19.876 21.1763 20.022C21.0305 20.168 20.8329 20.25 20.6268 20.25H4.21515C4.00907 20.25 3.81144 20.168 3.66572 20.022C3.52 19.876 3.43813 19.678 3.43813 19.4715V4.5285C3.43813 4.32203 3.52 4.12401 3.66572 3.97802C3.81144 3.83202 4.00907 3.75 4.21515 3.75H20.6268C20.8329 3.75 21.0305 3.83202 21.1763 3.97802C21.322 4.12401 21.4038 4.32203 21.4038 4.5285V19.4715ZM30.3867 18.198L24.3981 14.1975V9.8025L30.3867 5.802V18.198Z"
                                        fill="#EFEFEF" />
                                </svg>
                                Videos
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="" class="btn-photos">
                                <svg width="26" height="25" viewBox="0 0 26 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_310_302)">
                                        <path
                                            d="M22.9531 0H0V22.0703H3.04688V25H26V2.92969H22.9531V0ZM1.52344 1.46484H21.4297V20.6055H1.52344V1.46484ZM24.4766 4.39453V23.5352H4.57031V22.0703H22.9531V4.39453H24.4766Z"
                                            fill="#EFEFEF" />
                                        <path
                                            d="M3.04688 17.627H19.9062V2.92969H3.04688V17.627ZM4.57031 11.342L6.90189 9.13696L10.3992 12.5L9.63753 13.2324H4.57031V11.342ZM4.57031 16.1621V14.6973H10.2687L14.5264 10.6033L18.3828 14.2706V16.1621H4.57031ZM18.3828 4.39453V12.2103L14.5205 8.53729L11.4766 11.4641L6.91061 7.07397L4.57031 9.28745V4.39453H18.3828Z"
                                            fill="#EFEFEF" />
                                        <path
                                            d="M11.4766 9.57031C12.7366 9.57031 13.7617 8.58459 13.7617 7.37305C13.7617 6.1615 12.7366 5.17578 11.4766 5.17578C10.2166 5.17578 9.19141 6.1615 9.19141 7.37305C9.19141 8.58459 10.2166 9.57031 11.4766 9.57031ZM11.4766 6.64062C11.8965 6.64062 12.2383 6.96926 12.2383 7.37305C12.2383 7.77683 11.8965 8.10547 11.4766 8.10547C11.0566 8.10547 10.7148 7.77683 10.7148 7.37305C10.7148 6.96926 11.0566 6.64062 11.4766 6.64062Z"
                                            fill="#EFEFEF" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_310_302">
                                            <rect width="26" height="25" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Photos
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="" class="btn-blueprint">
                                <svg width="28" height="25" viewBox="0 0 28 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_310_308)">
                                        <path
                                            d="M27.2286 22.0703V2.92969C27.2286 1.31426 25.4688 0 23.3056 0C20.9878 0 19.4343 1.43105 19.4343 2.92969H0.800049V25H23.3056C25.4688 25 27.2286 23.6857 27.2286 22.0703ZM20.9828 2.92969C20.9828 2.13564 22.0465 1.46484 23.3056 1.46484C24.5705 1.46484 25.6801 2.14937 25.6801 2.92969V19.7396C25.0204 19.3639 24.1973 19.1406 23.3056 19.1406C22.4585 19.1406 21.6483 19.3446 20.9828 19.7204V2.92969ZM2.3486 4.39453H19.4343V5.85938H3.89715V8.78906H5.4457V7.32422H11.6915V10.3027H8.59441V11.7676H11.6915V16.1621H16.3372V14.6973H13.2401V7.32422H16.3372V10.3027H17.8857V7.32422H19.4343V19.1406H16.3372V20.6055H19.4343V22.0703H20.9828C20.9828 21.2763 22.0465 20.6055 23.3056 20.6055C24.5705 20.6055 25.6801 21.29 25.6801 22.0703C25.6801 22.8506 24.5705 23.5352 23.3056 23.5352H2.3486V4.39453Z"
                                            fill="#141414" />
                                        <path
                                            d="M5.44577 16.1621H8.59448V14.6973H5.44577V11.7676H3.89722V20.6055H13.2401V19.1406H5.44577V16.1621Z"
                                            fill="#141414" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_310_308">
                                            <rect width="26.4286" height="25" fill="white"
                                                transform="translate(0.800049)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                Blueprint
                            </a>
                        </div>
                    </div>
                    <div class="row property-diff-row">
                        <div class="col-6 col-12 property-diff-column">
                            <h2>Property Differentiators</h2>
                            <p>
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.25 13C3.25 18.3848 7.61523 22.75 13 22.75H20.5833C21.78 22.75 22.75 21.78 22.75 20.5833V13C22.75 7.61523 18.3848 3.25 13 3.25C7.61523 3.25 3.25 7.61523 3.25 13ZM8.66667 10.8333C8.66667 10.235 9.1517 9.75 9.75 9.75H16.25C16.8483 9.75 17.3333 10.235 17.3333 10.8333C17.3333 11.4317 16.8483 11.9167 16.25 11.9167H9.75C9.1517 11.9167 8.66667 11.4317 8.66667 10.8333ZM9.75 14.0833C9.1517 14.0833 8.66667 14.5683 8.66667 15.1667C8.66667 15.765 9.1517 16.25 9.75 16.25H13C13.5983 16.25 14.0833 15.765 14.0833 15.1667C14.0833 14.5683 13.5983 14.0833 13 14.0833H9.75Z"
                                        fill="#141414" />
                                </svg>
                                <span>Kitchen and Bathroom Ceramics</span>
                            </p>
                            <p>
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.25 13C3.25 18.3848 7.61523 22.75 13 22.75H20.5833C21.78 22.75 22.75 21.78 22.75 20.5833V13C22.75 7.61523 18.3848 3.25 13 3.25C7.61523 3.25 3.25 7.61523 3.25 13ZM8.66667 10.8333C8.66667 10.235 9.1517 9.75 9.75 9.75H16.25C16.8483 9.75 17.3333 10.235 17.3333 10.8333C17.3333 11.4317 16.8483 11.9167 16.25 11.9167H9.75C9.1517 11.9167 8.66667 11.4317 8.66667 10.8333ZM9.75 14.0833C9.1517 14.0833 8.66667 14.5683 8.66667 15.1667C8.66667 15.765 9.1517 16.25 9.75 16.25H13C13.5983 16.25 14.0833 15.765 14.0833 15.1667C14.0833 14.5683 13.5983 14.0833 13 14.0833H9.75Z"
                                        fill="#141414" />
                                </svg>
                                <span>Ceramic Flooring in the Bedroom</span>
                            </p>
                            <p>
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.25 13C3.25 18.3848 7.61523 22.75 13 22.75H20.5833C21.78 22.75 22.75 21.78 22.75 20.5833V13C22.75 7.61523 18.3848 3.25 13 3.25C7.61523 3.25 3.25 7.61523 3.25 13ZM8.66667 10.8333C8.66667 10.235 9.1517 9.75 9.75 9.75H16.25C16.8483 9.75 17.3333 10.235 17.3333 10.8333C17.3333 11.4317 16.8483 11.9167 16.25 11.9167H9.75C9.1517 11.9167 8.66667 11.4317 8.66667 10.8333ZM9.75 14.0833C9.1517 14.0833 8.66667 14.5683 8.66667 15.1667C8.66667 15.765 9.1517 16.25 9.75 16.25H13C13.5983 16.25 14.0833 15.765 14.0833 15.1667C14.0833 14.5683 13.5983 14.0833 13 14.0833H9.75Z"
                                        fill="#141414" />
                                </svg>
                                <span>Laminate Flooring in the Living Room</span>
                            </p>
                            <p>
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.25 13C3.25 18.3848 7.61523 22.75 13 22.75H20.5833C21.78 22.75 22.75 21.78 22.75 20.5833V13C22.75 7.61523 18.3848 3.25 13 3.25C7.61523 3.25 3.25 7.61523 3.25 13ZM8.66667 10.8333C8.66667 10.235 9.1517 9.75 9.75 9.75H16.25C16.8483 9.75 17.3333 10.235 17.3333 10.8333C17.3333 11.4317 16.8483 11.9167 16.25 11.9167H9.75C9.1517 11.9167 8.66667 11.4317 8.66667 10.8333ZM9.75 14.0833C9.1517 14.0833 8.66667 14.5683 8.66667 15.1667C8.66667 15.765 9.1517 16.25 9.75 16.25H13C13.5983 16.25 14.0833 15.765 14.0833 15.1667C14.0833 14.5683 13.5983 14.0833 13 14.0833H9.75Z"
                                        fill="#141414" />
                                </svg>
                                <span>Heater</span>
                            </p>
                            <p>
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.25 13C3.25 18.3848 7.61523 22.75 13 22.75H20.5833C21.78 22.75 22.75 21.78 22.75 20.5833V13C22.75 7.61523 18.3848 3.25 13 3.25C7.61523 3.25 3.25 7.61523 3.25 13ZM8.66667 10.8333C8.66667 10.235 9.1517 9.75 9.75 9.75H16.25C16.8483 9.75 17.3333 10.235 17.3333 10.8333C17.3333 11.4317 16.8483 11.9167 16.25 11.9167H9.75C9.1517 11.9167 8.66667 11.4317 8.66667 10.8333ZM9.75 14.0833C9.1517 14.0833 8.66667 14.5683 8.66667 15.1667C8.66667 15.765 9.1517 16.25 9.75 16.25H13C13.5983 16.25 14.0833 15.765 14.0833 15.1667C14.0833 14.5683 13.5983 14.0833 13 14.0833H9.75Z"
                                        fill="#141414" />
                                </svg>
                                <span>Pool</span>
                            </p>
                            <p>
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.25 13C3.25 18.3848 7.61523 22.75 13 22.75H20.5833C21.78 22.75 22.75 21.78 22.75 20.5833V13C22.75 7.61523 18.3848 3.25 13 3.25C7.61523 3.25 3.25 7.61523 3.25 13ZM8.66667 10.8333C8.66667 10.235 9.1517 9.75 9.75 9.75H16.25C16.8483 9.75 17.3333 10.235 17.3333 10.8333C17.3333 11.4317 16.8483 11.9167 16.25 11.9167H9.75C9.1517 11.9167 8.66667 11.4317 8.66667 10.8333ZM9.75 14.0833C9.1517 14.0833 8.66667 14.5683 8.66667 15.1667C8.66667 15.765 9.1517 16.25 9.75 16.25H13C13.5983 16.25 14.0833 15.765 14.0833 15.1667C14.0833 14.5683 13.5983 14.0833 13 14.0833H9.75Z"
                                        fill="#141414" />
                                </svg>
                                <span>Party Area</span>
                            </p>
                        </div>
                    </div>
                    <div class="row virtual-tour-row mt-4">
                        <div class="col-md-12">
                            <h1>
                                Get a better view of this property by clicking the button below:
                            </h1>
                            <a href="" class="btn-virtual-tour">Go on our virtual tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer-site')
</body>

</html>
