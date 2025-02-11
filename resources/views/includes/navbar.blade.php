<header id="up" class="navbar navbar-expand-md d-print-none bg-nav"
    style="border-bottom: 2px solid #FF3A00; height: 90px;">
    <div class="container-xl">
        <div class="row w-100">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="skip-content btn" href="#main-content">Skip Content</a>
            <div class="col-md-4 text-center col-img-nav">
                <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="{{ route('home') }}" aria-label="Go To Home Page">
                        <img width="120" src="{{ asset('assets/images/Logo Mega_Contractor-03.webp') }}" alt="logo-header">
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="collapse navbar-collapse navbar-nav ms-auto" id="navbar-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ (Route::current()->getName() == 'home')  ? 'nav-active' : '' }}" aria-label="Go To Home Page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Route::current()->getName() == 'about-us')  ? 'nav-active' : '' }}" aria-label="Go To About Us Page" href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Route::current()->getName() == 'development')  ? 'nav-active' : '' }}" aria-label="Go To Development Page" href="{{ route('development') }}">Development</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Route::current()->getName() == 'constructions')  ? 'nav-active' : '' }}" aria-label="Go To Constructions Page" href="{{ route('constructions') }}">Construction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Route::current()->getName() == 'investment')  ? 'nav-active' : '' }}" aria-label="Go To Investment Page" href="{{ route('investment') }}">Investment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Route::current()->getName() == 'our-properties')  ? 'nav-active' : '' }}" aria-label="Go To Our Properties Page" href="{{ route('our-properties') }}">Our Properties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Route::current()->getName() == 'careers')  ? 'nav-active' : '' }}" aria-label="Go To Careers Page" href="{{ route('careers') }}">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Route::current()->getName() == 'contact-us')  ? 'nav-active' : '' }}" aria-label="Go To Contact Page" href="{{ route('contact-us') }}">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
</header>
