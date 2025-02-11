<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @switch(Route::current()->getName())
            @case('home')
                Mega Contractor - Home
            @break

            @case('about-us')
                Mega Contractor - About Us
            @break

            @case('development')
                Mega Contractor - Development
            @break

            @case('constructions')
                Mega Contractor - Constructions
            @break

            @case('investment')
                Mega Contractor - Investment
            @break

            @case('our-properties')
                Mega Contractor - Our Properties
            @break

            @case('careers')
                Mega Contractor - Careers
            @break

            @case('contact-us')
                Mega Contractor - Contact Us
            @break

            @default
                Mega Contractor
        @endswitch
    </title>

    <meta name="keywords"
        content="general contractors, construction services, commercial construction, residential construction, renovation services, remodeling contractors, custom home builders, property maintenance, construction management, building contractors, commercial renovations, residential renovations, custom construction projects, professional contractors, quality construction services">

    <meta name="description"
        content="MEGA Contractors provides top-quality construction, renovation, and custom building services for residential and commercial projects. Trusted experts for your construction needs.">
    <meta name="robots" content="index, follow">
    <meta name="og:url" content="https://ttobsteakhouse.com/">
    <meta name="og:title" content="The Taste of Brazil Steakhouse">
    <meta name="og:description"
        content="Welcome to The Taste of Brazil Steakhouse, your destination for authentic Brazilian cuisine in Newark, Nj - Hillside, NJ - Philadelphia, PA. Experience our famous Rodízio and indulge in our mouth-watering selection of meats and side dishes. Book your table today and savor the rich flavors of Brazil.">
    <meta property="og:image" content="https://ttobsteakhouse.com/images/share.jpg" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.webp') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-flags.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-payments.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-vendors.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="dns-prefetch" href="//maps.googleapis.com" />
    <link rel="dns-prefetch" href="//userway.org" />
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
    <link rel="dns-prefetch" href="//www.opentable.com" />
    <link rel="dns-prefetch" href="//otstatic.com" />
    <link rel="dns-prefetch" href="//maps.gstatic.com" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//ajax.googleapis.com" />
    <link rel="dns-prefetch" href="//apis.google.com" />
    <link rel="dns-prefetch" href="//google-analytics.com" />
    <link rel="dns-prefetch" href="//www.google-analytics.com" />
    <link rel="dns-prefetch" href="//ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="//youtube.com" />
    <link rel="dns-prefetch" href="//api.pinterest.com" />
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="//connect.facebook.net" />
    <link rel="dns-prefetch" href="//platform.twitter.com" />
    <link rel="dns-prefetch" href="//syndication.twitter.com" />
    <link rel="dns-prefetch" href="//platform.instagram.com" />
    <link rel="dns-prefetch" href="//disqus.com" />
    <link rel="dns-prefetch" href="//sitename.disqus.com" />
    <link rel="dns-prefetch" href="//s7.addthis.com" />
    <link rel="dns-prefetch" href="//platform.linkedin.com" />
    <link rel="dns-prefetch" href="//w.sharethis.com" />
    <link rel="dns-prefetch" href="//i0.wp.com" />
    <link rel="dns-prefetch" href="//i1.wp.com" />
    <link rel="dns-prefetch" href="//i2.wp.com" />
    <link rel="dns-prefetch" href="//stats.wp.com" />
    <link rel="dns-prefetch" href="//pixel.wp.com" />
    <link rel="dns-prefetch" href="//s.gravatar.com" />
    <link rel="dns-prefetch" href="//0.gravatar.com" />
    <link rel="dns-prefetch" href="//2.gravatar.com" />
    <link rel="dns-prefetch" href="//1.gravatar.com" />
    <link rel="dns-prefetch" href="//www.googletagmanager.com" />
    <link rel="dns-prefetch" href="//googletagmanager.com" />
    <link rel="dns-prefetch" href="//www.google.com/recaptcha" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') . '?v=' . rand(1, 999999999) }}">

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

    <meta name="adopt-website-id" content="cd6133bd-749a-4062-925f-9484777b5cc8" />
    <script src="//tag.goadopt.io/injector.js?website_code=cd6133bd-749a-4062-925f-9484777b5cc8" class="adopt-injector">
    </script>

</head>
