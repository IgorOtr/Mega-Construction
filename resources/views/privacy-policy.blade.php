@include('includes.head')

<style>
    h1 {
        color: #fb5000;
        font-size: 64px;
        font-weight: 700;
        margin-bottom: 60px;
    }

    h2 {
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 60px;
    }

    .link-privacy {
        color: #fb5000;
        text-decoration: underline;
    }

    @media screen and (max-width: 768px) {

        h1 {
            line-height: 60px;
        }
    }
</style>

<body>
    @include('includes.navbar')

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <h1 class="">Privacy Policy</h1>
                <h2>Effective Date: 27/01/2025</h2>
                <p>
                    <ol>
                        <li class="mb-4"><strong>Introduction</strong> This Privacy Policy explains how Mega Contractors (“we,” “us,” or “our”) collects, uses, and discloses personal information from users (“you”) of our website <a class="link-privacy" href="{{ route('home') }}">https://mega-contractors.com</a></li>
                        <li class="mb-4">
                            <strong>Information We Collect</strong>
                            <ul style="list-style: inside;">
                                <li><strong>Personal Information:</strong> We collect your name, email address, and phone number when you fill out our contact forms.</li>
                                <li><strong>Usage Data:</strong> We collect information on how you interact with our website using Google Analytics and other tracking technologies.</li>
                            </ul>
                        </li>
                        <li class="mb-4">
                            <strong>How We Use Your Information</strong>
                            <ul style="list-style: inside;">
                                <li><strong>To Provide Services:</strong> We use your information to respond to your inquiries and provide the services you request.</li>
                                <li><strong>To Improve Our Website:</strong> We analyze usage data to enhance user experience and site performance.</li>
                                <li><strong>For Marketing:</strong> We may use your contact information to send you updates and promotional materials.</li>
                            </ul>
                        </li>
                        <li class="mb-4">
                            <strong>Sharing Your Information</strong>
                            <ul style="list-style: inside;">
                                <li><strong>Third-Party Service Providers:</strong> We may share your information with third parties who perform services on our behalf, such as email marketing and data analysis.</li>
                                <li><strong>Legal Requirements:</strong> We may disclose your information if required by law or in response to legal requests.</li>
                            </ul>
                        </li>
                        <li class="mb-4">
                            <strong>Your Rights</strong>
                            <ul style="list-style: inside;">
                                <li><strong>Access and Correction:</strong> You have the right to access and correct your personal information.</li>
                                <li><strong>Opt-Out:</strong> You can opt out of receiving marketing communications at any time by following the unsubscribe link in our emails.</li>
                            </ul>
                        </li>

                        <li class="mb-4">
                            <strong>Data Security</strong> We implement security measures to protect your personal information from unauthorized access and use.
                        </li>

                        <li class="mb-4">
                            <strong>Changes to This Policy</strong> We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page.
                        </li>

                        <li class="mb-4">
                            <strong>Contact Us</strong> If you have any questions about this Privacy Policy, please contact us at contact@mega-contractors.com
                        </li>
                    </ol>
                </p>
            </div>

            <div class="col-md-2"></div>
        </div>
    </div>

    @include('includes.footer-site')
</body>

</html>
