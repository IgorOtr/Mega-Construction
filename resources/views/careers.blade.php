@include('includes.head')

<body>
    @include('includes.navbar')

    <section class="careers-section">
        <img class="contact-us-vector" src="{{ asset('assets/images/Vector 5.png') }}" alt="">
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

                    <form action="" class="mt-3">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-label">NAME</div>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">EMAIL</div>
                                <input type="text" class="form-control">

                            </div>
                            <div class="col mb-3">

                                <div class="form-label">PHONE</div>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">SUBMIT RESUME</div>
                                <input type="file" class="form-control">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">

                                <div class="form-label">YOUR MESSAGE</div>
                                <textarea class="form-control" name="example-textarea-input" rows="6"></textarea>

                            </div>
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
