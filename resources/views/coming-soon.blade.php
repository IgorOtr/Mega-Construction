@include('includes.head')

<body>
    @include('includes.nav')

    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('assets/videos/-1ff4-4e02-9182-542e635521ac.mp4') }}" type="video/mp4">
    </video>

    <div class="container position-relative mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 text-center d-flex align-items-center flex-column justify-content-center">
                <h1
                class="mb-3"
                    style="font-size: 100px; font-weight: 800; line-height: 100px; color: #FF3A00; text-transform: uppercase; text-shadow: 5px 5px 5px #000000;">
                    Coming<br>Soon</h1>
                <p style="text-align: justify; color: #000000; font-size: 18px; font-weight: 800; width: 80%;">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                </p>
            </div>
            <div class="col-md-6">
                <div class="card rounded-3" style="background-color: black; border: none; color: #ffffff; box-shadow: 10px 10px 0px #ff3c00;">
                    <div class="card-body">
                        <h2 class="text-center mb-3">GET IN TOUCH</h2>
                        <form action="./" method="get" autocomplete="off" novalidate="">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input style="color: black;" type="text" class="form-control" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input style="color: black;" type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input style="color: black;" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input style="color: black;" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <input style="color: black;" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea style="color: black;" rows="5" class="form-control"></textarea>
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


</body>

@include('includes.footer')
