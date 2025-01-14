@include('includes.head')

<style>
    #myVideo {
        position: fixed;
        display: block;
        object-fit: cover;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100vh;
        z-index: -1;
    }

    .alert {
        width: 100%;
        position: absolute;
        left: 0px;
        top: auto;
        z-index: 2;
    }

    .bg-overlay {
        background-color: #141414cf;
        position: fixed;
        top: 0px;
        width: 100%;
        height: 100%;
    }

    .form-coming-soon {
        margin-bottom: 90px;
    }

    @media screen and (max-width: 768px) {
        .coming-soon-title {
            font-size: 80px !important;
            position: relative;
            z-index: 3;
        }

        .form-coming-soon {
            box-shadow: none !important;
            margin-bottom: 90px !important;
        }

        .bg-overlay {
            z-index: 0;
        }

        #myVideo {
            position: fixed;
            display: block;
            object-fit: cover;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100vh;
            z-index: -1;
        }

    }
</style>

<body>
    @include('includes.nav')

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

    <div class="bg-overlay"></div>

    <video autoplay muted loop preload="metadata" playsinline id="myVideo">
        <source src="{{ asset('assets/videos/-1ff4-4e02-9182-542e635521ac.webm') }}">
    </video>

    <div class="container position-relative mt-5 mb-5 main-container-coming-soon">
        <div class="row">
            <div class="col-md-6 text-center d-flex align-items-center flex-column justify-content-center">
                <h1 class="mb-3 coming-soon-title"
                    style="font-size: 100px; font-weight: 600; line-height: 100px; color: #fb5000; text-transform: uppercase;">
                    Website<br>Coming<br>Soon</h1>
                <p style="text-align: justify; color: #ffffff; font-size: 18px; font-weight: 800; width: 80%;">
                    At Mega Contractors, we work flawlessly with our clients in residential and commercial projects on
                    five fronts across the East Coast: Development, Construction, Investment, Architecture & Design, and
                    General Contractor.
                    <br><br>
                    Fill out the form to learn more about our portfolio & get your project off the ground.

                </p>
            </div>
            <div class="col-md-6">
                <div class="card form-coming-soon rounded-3"
                    style="background-color: black; border: none; color: #ffffff; box-shadow: 10px 10px 0px #ff3c00;">
                    <div class="card-body">
                        <h2 class="text-center mb-3">GET IN TOUCH</h2>
                        <form action="{{ route('send-email-from-coming-soon') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input style="color: black;" type="text" class="form-control" name="name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input style="color: black;" type="email" class="form-control" name="email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input style="color: black;" type="text" class="form-control" name="phone"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input style="color: black;" type="text" class="form-control" name="city"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <input style="color: black;" type="text" class="form-control" name="state"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea style="color: black;" rows="5" class="form-control" name="message" required></textarea>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-warning w-100 mb-3">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @include('includes.footer')
</body>

</html>
