@include('includes.head')

<style>
    h1 {
        color: #fb5000;
        font-size: 64px;
        font-weight: 700;
        margin-bottom: 60px;
    }

    h2 {
        font-size: 24px;
        font-weight: 800;
        margin-bottom: 60px;
    }

    h3 {
        font-size: 14px;
        font-weight: 600;
    }

    .link-privacy {
        color: #fb5000;
        text-decoration: underline;
    }

    .form-control {
        border: none;
    }

    .form-control {
        border-bottom: 1px solid #fb5000;
        border-radius: 0px
    }

    .form-control:focus {
        box-shadow: 0 0 0 0 rgba(32, 106, 196, 0);
        border-bottom: 1px solid #fb5000;
    }

    .btn-primary {
        background: #fb5000;
    }

    .btn-primary:hover {
        background: #e84900;
    }

    @media screen and (max-width: 768px) {

        h1 {
            line-height: 60px;
        }
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

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <h1 class="">Cookies</h1>
                <p class="mb-4">
                    <i>This page was last changed on January 27, 2025, last checked on January 27, 2025 and applies to
                        citizens and legal permanent residents of the United States.</i>
                </p>
                <h2 class="mb-4">1. Introduction</h2>

                <p class="mb-4">
                    Our website, <a class="link-privacy" href="{{ route('home') }}">https://mega-contractors.com</a>
                    (hereinafter: "the website") uses cookies and other related
                    technologies (for convenience all technologies are referred to as "cookies"). Cookies are also
                    placed by third parties we have engaged. In the document below we inform you about the use of
                    cookies on our website.
                </p>

                <p class="mb-4">
                    We do not sell or share personal information to third parties for monetary consideration; however,
                    we may disclose certain personal information to third parties under circumstances that might be
                    deemed a “sale” or ”Sharing” for residents of Colorado (CPA), California (CPRA), Connecticut
                    (CTDPA), Nevada (NRS 603A), Utah (UCPA) and Virginia (CDPA). We respect and understand that you may
                    want to be sure that your personal information is not being sold or shared. You may request that we
                    exclude your personal information from such arrangements, or direct us to limit the use and
                    disclosure of possible sensitive personal information, by entering your name and email address
                    below. You may need to provide additional identifying information before we can process your
                    request.
                </p>

                <form class="mb-5" action="{{ route('send-cookies') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-label">NAME</div>
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="mb-3">
                                <div class="form-label">EMAIL</div>
                                <input type="text" class="form-control" placeholder="email@email.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-label">Global opt-out from selling and sharing my personal
                                        information and limiting the use or disclosure of sensitive personal
                                        information.</span>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-label">Do not sell my personal information for cross-context
                                        behavioral advertising</span>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-label">Limit the use of my sensitive personal
                                        information</span>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-label">Request for access</span>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-label">Right to be Forgotten</span>
                                </label>
                            </div>
                            <div class="mb-4">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-label">Right to Data Portability</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">SEND</button>
                        </div>
                    </div>
                </form>

                <h2 class="mb-4">2. Cookies</h2>
                <p class="mb-4">
                    When you visit our website it can be necessary to store and/or read certain data from your device by
                    using technologies such as cookies.
                </p>

                <h3 class="mb-3">2.1 Technical or functional cookies</h3>
                <p class="mb-4">
                    Some cookies ensure that certain parts of the website work properly and that your user preferences
                    remain known. By placing functional cookies, we make it easier for you to visit our website. This
                    way, you do not need to repeatedly enter the same information when visiting our website and, for
                    example, the items remain in your shopping cart until you have paid. We may place these cookies
                    without your consent.
                </p>

                <h3 class="mb-3">2.2 Statistics cookies</h3>
                <p class="mb-4">
                    We use statistics cookies to optimize the website experience for our users. With these statistics
                    cookies we get insights in the usage of our website.
                </p>

                <h3 class="mb-3">2.3 Marketing/Tracking cookies</h3>
                <p class="mb-4">
                    Marketing/Tracking cookies are cookies or any other form of local storage, used to create user
                    profiles to display advertising or to track the user on this website or across several websites for
                    similar marketing purposes.
                </p>

                <h3 class="mb-3">2.4 Social media</h3>
                <p class="mb-4">
                    On our website, we have included content from Instagram, LinkedIn and Facebook to promote web pages
                    (e.g. “like”, “pin”) or share (e.g. “tweet”) on social networks like Instagram, LinkedIn and
                    Facebook. This content is embedded with code derived from Instagram, LinkedIn and Facebook and
                    places cookies. This content might store and process certain information for personalized
                    advertising.
                    <br><br>
                    Please read the privacy statement of these social networks (which can change regularly) to read what
                    they do with your (personal) data which they process using these cookies. The data that is retrieved
                    is anonymized as much as possible. Instagram, LinkedIn and Facebook are located in the United
                    States.
                </p>

                <h2 class="mb-4">3. Placed cookies</h2>
                <p class="mb-4">
                    Most of these technologies have a function, a purpose, and an expiration period.
                </p>

                <ol class="mb-4">
                    <li>A function is a particular task a technology has. So a function can be to "store certain data."
                    </li>
                    <li>Purpose is "the Why" behind the function. Maybe the data is stored because it is needed for
                        statistics.</li>
                    <li>The expiration period shows the length of the period the used technology can “store or read
                        certain data."</li>
                </ol>

                <h2 class="mb-4">4. Browser and Device based Consent</h2>
                <p class="mb-4">
                    When you visit our website for the first time, we will show you a pop-up with an explanation about
                    cookies. You do have the right to opt-out and to object against the further use of non-functional
                    cookies.
                </p>

                <h3 class="mb-4">4.1 Manage your opt-out preferences</h3>

                <h2 class="mb-4">5. Enabling/disabling and deleting cookies</h2>
                <p class="mb-4">
                    You can use your internet browser to automatically or manually delete cookies. You can also specify
                    that certain cookies may not be placed. Another option is to change the settings of your internet
                    browser so that you receive a message each time a cookie is placed. For more information about these
                    options, please refer to the instructions in the Help section of your browser.
                    <br><br>
                    Please note that our website may not work properly if all cookies are disabled. If you do delete the
                    cookies in your browser, they will be placed again after your consent when you visit our website
                    again.
                </p>

                <h2 class="mb-4">6. Your rights with respect to personal data</h2>
                <p class="mb-4">
                    You have the following rights with respect to your personal data:
                </p>
                <ol style="list-style: inside;" class="mb-4">
                    <li>You may submit a request for access to the data we process about you;</li>
                    <li>You may object to the processing;</li>
                    <li>You may request an overview, in a commonly used format, of the data we process about you;</li>
                    <li>You may request correction or deletion of the data if it is incorrect or not or no longer
                        relevant, or to ask to restrict the processing of the data.</li>
                </ol>
                <p class="mb-4">
                    To exercise these rights, please contact us. Please refer to the contact details at the bottom of
                    this Cookie Policy. If you have a complaint about how we handle your data, we would like to hear
                    from you.
                    <br><br>
                    For more information about your rights with respect to personal data, please refer to our <a href="{{ route('privacy-policy') }}" class="link-privacy">Privacy Statement</a>
                </p>

                <h2 class="mb-4">7. Contact details</h2>
                <p class="mb-4">
                    For questions and/or comments about our Cookie Policy and this statement, please contact us by using the following contact details:
                </p>
                <p class="mb-2">Mega Contractor</p>
                <p class="mb-2">Address</p>
                <p class="mb-2">Address</p>
                <p class="mb-2">Website: <a href="{{ route('home') }}" class="link-privacy">https://mega-contractors.com</a></p>
                <p class="mb-2">Email: contact@mega-contractors.com</p>
                <p class="mb-2">Phone number:</p>


            </div>

            <div class="col-md-2"></div>
        </div>
    </div>

    @include('includes.footer-site')
</body>

</html>
