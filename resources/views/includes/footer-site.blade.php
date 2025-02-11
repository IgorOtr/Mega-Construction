<section class="footer-mega">
    <div class="container">
        <div class="row">

            <div class="col-md-4 text-center logo-and-social-column">
                <a href="{{ route('home') }}" aria-label="Go To Home Page"><img class="logo-footer" src="{{ asset('assets/images/Logo Mega_Contractor-02.webp') }}"
                        alt="logo-footer"></a>
                <ul class="d-flex">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=61566933914298" target="_blank" aria-label="Go To Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor"
                                class="icon icon-tabler icons-tabler-filled icon-tabler-brand-facebook">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M18 2a1 1 0 0 1 .993 .883l.007 .117v4a1 1 0 0 1 -.883 .993l-.117 .007h-3v1h3a1 1 0 0 1 .991 1.131l-.02 .112l-1 4a1 1 0 0 1 -.858 .75l-.113 .007h-2v6a1 1 0 0 1 -.883 .993l-.117 .007h-4a1 1 0 0 1 -.993 -.883l-.007 -.117v-6h-2a1 1 0 0 1 -.993 -.883l-.007 -.117v-4a1 1 0 0 1 .883 -.993l.117 -.007h2v-1a6 6 0 0 1 5.775 -5.996l.225 -.004h3z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/megacontractorsinc/" target="_blank" aria-label="Go To Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M16.5 7.5v.01" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/@MegaContractorsinc" target="_blank" aria-label="Go To Youtube">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor"
                                class="icon icon-tabler icons-tabler-filled icon-tabler-brand-youtube">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M18 3a5 5 0 0 1 5 5v8a5 5 0 0 1 -5 5h-12a5 5 0 0 1 -5 -5v-8a5 5 0 0 1 5 -5zm-9 6v6a1 1 0 0 0 1.514 .857l5 -3a1 1 0 0 0 0 -1.714l-5 -3a1 1 0 0 0 -1.514 .857z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/mega-contractors/" target="_blank" aria-label="Go To Linkedin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 11v5" />
                                <path d="M8 8v.01" />
                                <path d="M12 16v-5" />
                                <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 link-column">
                <h4>
                    QUICK LINKS
                </h4>
                <ul>
                    <li><a href="{{ route('about-us') }}" aria-label="Go To About Us Page">About Us</a></li>
                    <li><a href="{{ route('development') }}" aria-label="Go To Development Page">Development</a></li>
                    <li><a href="{{ route('constructions') }}" aria-label="Go To Constructions Page">Construction</a></li>
                    <li><a href="{{ route('investment') }}" aria-label="Go To Investment Page">Investment</a></li>
                    <li><a href="{{ route('our-properties') }}">Our Properties</a></li>
                    <li><a href="{{ route('careers') }}" aria-label="Go To Careers Page">Careers</a></li>
                    <li><a href="#estimate">Estimate</a></li>
                    <li><a href="{{ route('contact-us') }}" aria-label="Go To Contact Page">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 office-column">
                <h4>
                    OFFICE
                </h4>
                <ul>
                    {{-- <li><a href="https://maps.app.goo.gl/FHo2ZxXW6J1q8EeT8" target="_blank" aria-label="Go To Address">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-map-pin">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" />
                            </svg>
                            923 Haddonfield Rd., Suite 300, Cherry Hill, New Jersey, 08002, United States of America
                        </a></li>
                    <li><a href="tel:+18563248232" aria-label="Call To Mega">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-phone">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M9 3a1 1 0 0 1 .877 .519l.051 .11l2 5a1 1 0 0 1 -.313 1.16l-.1 .068l-1.674 1.004l.063 .103a10 10 0 0 0 3.132 3.132l.102 .062l1.005 -1.672a1 1 0 0 1 1.113 -.453l.115 .039l5 2a1 1 0 0 1 .622 .807l.007 .121v4c0 1.657 -1.343 3 -3.06 2.998c-8.579 -.521 -15.418 -7.36 -15.94 -15.998a3 3 0 0 1 2.824 -2.995l.176 -.005h4z" />
                            </svg>
                            +1 (856) 324-8332 
                        </a></li> --}}
                    <li><a href="mailto:contact@mega-contractors.com" aria-label="Send Email to Mega">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-mail">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" />
                                <path
                                    d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" />
                            </svg>
                            Contact@mega-contractors.com

                        </a></li>
                </ul>
            </div>
            <div class="col-md-1"></div>

        </div>
        <div class="row mt-5">
            <div class="col-md-12 pt-4 developed-column text-center" style="border-top: 1px solid #efefef">
                <p>
                    © 2025 Mega Construction. All Rights Reserved. | Developed by: <a href="https://adaptcrew.com/" aria-label="Go To Adapt Crew Site" target="_blank"><img src="{{ asset('assets/images/Adapt_ADVERTISING.webp') }}" alt="Adapt Crew logo"></a>
                </p>
                <buton type="button" class="up-arrow" onclick="toUpSide()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-up">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M16 9l-4 -4" />
                        <path d="M8 9l4 -4" />
                    </svg>
                </buton>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>

<script src="https://cdn.userway.org/widget.js" data-account="RvRhNC3g25"></script>

<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
    const tooltipTriggerList = document.querySelectorAll('[data-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

<script>
    $(function() {

        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img height="120" width="120" class="p-1">')).attr('src', event
                            .target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#gallery-photo-add').on('change', function() {
            imagesPreview(this, 'div.gallery');
        });
    });
</script>

<script>
    const toUpSide = () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

<script>
    var myFile = "";

    $('#file').on('change', function() {

        myFile = $("#file").val();
        console.log(myFile);
        var upld = myFile.split('.').pop();
        if (upld != 'pdf') {
            alert("Only PDF are allowed")
            window.location.reload();
        }

    })
</script>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 40,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items:3,
                nav: true,
                loop: true
            }
        }
    })
</script>







