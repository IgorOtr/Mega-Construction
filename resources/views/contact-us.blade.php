@include('includes.head')

<body>
    @include('includes.navbar')

    <section class="contact-us-section">
        <img class="contact-us-vector" src="{{ asset('assets/images/Vector 5.png') }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form-contact-us-column">
                    <h1>Contact Us</h1>
                    <p class="contact-us-paragraph">
                        If you're looking to get your project off the drawing board, you have come to the right place.
                        From start to finish, attention to detail and commitment is what moves us to shape communities
                        and build futures.
                    </p>
                    <p class="contact-us-sub-paragraph">
                        Fill out the form below to reach out to us about questions, inquiries, or projects:
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

                                <div class="form-label">SUBJECT</div>
                                <input type="text" class="form-control">

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

                                <button type="submit" class="btn-find-home">SAND MESSAGE</button>

                            </div>
                        </div>
                    </form>
                    <p class="social-text">
                        FOLLOW US ON OUR SOCIAL MEDIA:
                    </p>
                    <div class="row social-row">
                        <div class="col-md-6">
                            <a href="" class="">
                                <img src="{{ asset('assets/images/instagram 1.png') }}" alt="">
                            </a>
                            <a href="" class="">
                                <img src="{{ asset('assets/images/facebook 1.png') }}" alt="">
                            </a>
                            <a href="" class="">
                                <img src="{{ asset('assets/images/instagram 1.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>

    </section>

    @include('includes.footer-site')
</body>

</html>
