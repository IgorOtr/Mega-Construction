@include('includes.head')

<style>
    .alert {
        z-index: 999999999999;
    }

    .form-contact-us-column {
        background-color: #141414;
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

    <section class="careers-section">
        {{-- <img class="contact-us-vector" src="{{ asset('assets/images/Vector 5.webp') }}" alt=""> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-6 form-contact-us-column">
                    <h1>Careers</h1>
                    <p class="contact-us-paragraph">
                        Join one of the largest construction companies in the US. Be a part of our highly skilled team,
                        and help us build communities and shape futures.
                    </p>
                    <p class="contact-us-sub-paragraph">
                        Fill out the form below to apply for a position today!
                    </p>

                    <form action="{{ route('send-careers') }}" class="mt-3" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-label">NAME</div>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">EMAIL</div>
                                <input type="text" class="form-control" name="email" required>

                            </div>
                            <div class="col mb-3">

                                <div class="form-label">PHONE</div>
                                <input type="text" class="form-control" name="phone" required>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">SUBMIT RESUME</div>
                                <input type="file" id="file" class="form-control" name="resume" required>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">YOUR MESSAGE</div>
                                <textarea class="form-control" name="message" rows="6" required></textarea>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="g-recaptcha" data-sitekey="6LehDsYqAAAAAEvRweNISAz73_Zgyfc2qtqAztpN"></div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <button type="submit" class="btn-find-home">SUBMIT</button>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>

    </section>

    @include('includes.footer-site')
</body>

</html>
