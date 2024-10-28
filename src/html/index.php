<!DOCTYPE html>
<html lang="en" class="homepage">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2">
    <meta name="description" content="A&T Group Interiors">
    <title>Home | A&T Group Interiors </title>
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="icon" type="image/ico" href="/assets/favicon.ico">
    <meta name="format-detection" content="telephone=no">
    <!-- home CSS -->
    <link rel="stylesheet" href="/assets/css/home.min.css">

    <style>
    .loader-first {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: rgba(250, 250, 250, 0.9);
        -webkit-backdrop-filter: saturate(180%) blur(5px);
        backdrop-filter: saturate(180%) blur(5px);

    }

    .loader-first img {
        animation: clipAnima 1s linear 0s infinite alternate;
    }

    @media (max-width: 576px) {
        .loader-first img {
            max-width: 60%;
        }
    }


    @keyframes clipAnima {
        from {
            clip-path: polygon(0 100%, 100% 100%, 100% 100%, 0% 100%);
        }

        to {
            clip-path: polygon(0 100%, 100% 100%, 100% 0, 0 0);
        }
    }

    .alert-warnning {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999999;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        font-size: 20px;
        text-transform: uppercase;
        text-align: center;
        line-height: 1.5em;
        font-weight: 700;
        color: #fff;
        background: #000;
        overflow: hidden;
    }

    .alert-warnning p {
        position: absolute;
        left: 50%;
        top: 50%;
        font-size: 18px;
        transform: translate(-50%, -50%);
        color: #fff;
    }
    </style>

</head>

<body class="home">

    <!-- Loader -->
    <?php include 'includes/loader.php';?>
    <!-- Header -->
    <?php include 'includes/header.php';?>

    <main>
        <!-- Home Hero -->
        <section class="home-hero section">
            <!-- for speed optimization -->
            <div class="home-hero__optimize-figure">
                <picture>
                    <source media="(min-width:576px)" srcset="/assets/images/home/hero-2.jpg" width="480" height="980">
                    <img src="/assets/images/home/hero-2-mob.jpg" alt="hero" class="img-hack" width="1920" height="980">
                </picture>
            </div>
            <!-- img slider or video -->
            <div class="swiper home-hero__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="home-hero__video">
                            <div class="img-wrapper">
                                <picture>
                                    <source media="(min-width:576px)" srcset="/assets/images/home/hero-1.jpg"
                                        width="480" height="980">
                                    <img src="/assets/images/dot.jpg" data-src-hero="/assets/images/home/hero-1-mob.jpg"
                                        alt="hero" class="lazy-img" width="1920" height="980">
                                </picture>
                            </div>
                        </div>
                        <div class="container-s">
                            <div class="home-hero__title">
                                <div class="home-hero__title__main">
                                    <h1 class="h1 description">The Story is in the Details</h1>
                                    <div class="home-hero__title-btn">
                                        <a href="/our-projects.php" class="btnn btnn--white-outline">
                                            <span class="btnn__text">See Our Projects</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                    width="12" height="14" class="svg-convert" />
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="home-hero__video">
                            <div class="img-wrapper">
                                <picture>
                                    <source media="(min-width:576px)" srcset="/assets/images/home/hero-2.jpg"
                                        width="480" height="980">
                                    <img src="/assets/images/dot.jpg" data-src-hero="/assets/images/home/hero-2-mob.jpg"
                                        alt="hero" class="lazy-img" width="1920" height="980">
                                </picture>
                            </div>
                        </div>
                        <div class="container-s">
                            <div class="home-hero__title">
                                <div class="home-hero__title__main">
                                    <h1 class="h1 description">The Story is in the Details</h1>
                                    <div class="home-hero__title-btn">
                                        <a href="/our-projects.php" class="btnn btnn--white-outline">
                                            <span class="btnn__text">See Our Projects</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                    width="12" height="14" class="svg-convert" />
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="home-hero__video">
                            <div class="img-wrapper">
                                <picture>
                                    <source media="(min-width:576px)" srcset="/assets/images/home/hero-1.jpg"
                                        width="480" height="980">
                                    <img src="/assets/images/dot.jpg" data-src-hero="/assets/images/home/hero-1-mob.jpg"
                                        alt="hero" class="lazy-img" width="1920" height="980">
                                </picture>
                            </div>
                        </div>
                        <div class="container-s">
                            <div class="home-hero__title">
                                <div class="home-hero__title__main">
                                    <h1 class="h1 description">The Story is in the Details</h1>
                                    <div class="home-hero__title-btn">
                                        <a href="/our-projects.php" class="btnn btnn--white-outline">
                                            <span class="btnn__text">See Our Projects</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                    width="12" height="14" class="svg-convert" />
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home-hero__custom-drag">
                    <div class="swiper-scrollbar-wrapper">
                        <div class="swiper-scrollbar"></div>
                    </div>
                    <div class="swiper-slider-pagination">
                        <div class="custom-sliderfractions"></div>
                    </div>
                </div>
            </div>

            <!-- content slider -->
            <div class="home-hero__content-slider ">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p class="slider-content-item">At A&T Group Interiors, we are proud to be recognized as
                                one of the top interior fit-out companies in Dubai today!
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <p class="slider-content-item">At A&T Group Interiors, we are proud to be recognized as
                                one of the top interior fit-out companies in Dubai today!
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <p class="slider-content-item">At A&T Group Interiors, we are proud to be recognized as
                                one of the top interior fit-out companies in Dubai today!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slider-navigation">
                    <div class="swiper-button-prev white-left-nav"></div>
                    <div class="swiper-button-next white-right-nav"></div>
                </div>
            </div>
        </section>
        <!-- who we are -->
        <section class="who-we-are section-py">
            <div class="container-s">
                <div class="generic-panel generic-panel--center ">
                    <span class="generic-panel__small__title animate fadein-Up" data-delay="0.2s">Who Are We</span>
                    <h2 class="h2 animate fadein-Up" data-delay="0.3s">Creating timeless interiors.</h2>
                    <p class=" animate fadein-Up" data-delay="0.4s">Since 2009 we have been delivering premier
                        interior fit out for your venues
                    </p>
                </div>
                <div class="who-we-are__slider-wrapper">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card__header">
                                        <div class="card__figure">
                                            <img src="/assets/images/dot.jpg"
                                                data-src="/assets/images/cards/who-we-are/card-1.jpg" alt="who we are"
                                                width="570" height="621" class="img-hack lazy-img">
                                        </div>
                                    </div>
                                    <div class="card__body">
                                        <h5 class="h5 font-22 title-arrow">Design & Build</h5>
                                        <p class="p card__desc line-clamp-3">A project delivery system whereby our team
                                            works alongside your architect, designer and/or project manager to deliver
                                            high-quality interior fit-out services.</p>
                                        <a href="/strength-and-capability.php" class="btnn btnn-stretched">
                                            <span class="btnn__text">Read More</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                    width="12" height="14" class="svg-convert">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card__header">
                                        <div class="card__figure">
                                            <img src="/assets/images/dot.jpg"
                                                data-src="/assets/images/cards/who-we-are/card-2.jpg" alt="who we are"
                                                width="570" height="621" class="img-hack lazy-img">
                                        </div>
                                    </div>
                                    <div class="card__body">
                                        <h5 class="h5 font-22 title-arrow">FF&E</h5>
                                        <p class="p card__desc line-clamp-3">A project delivery system whereby our team
                                            works alongside your architect, designer and/or project manager to deliver
                                            high-quality interior fit-out services.</p>
                                        <a href="strength-and-capability.php" class="btnn btnn-stretched">
                                            <span class="btnn__text">Read More</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                    width="12" height="14" class="svg-convert">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card__header">
                                        <div class="card__figure">
                                            <img src="/assets/images/dot.jpg"
                                                data-src="/assets/images/cards/who-we-are/card-3.jpg" alt="who we are"
                                                width="570" height="621" class="img-hack lazy-img">
                                        </div>
                                    </div>
                                    <div class="card__body">
                                        <h5 class="h5 font-22 title-arrow">Fit Out</h5>
                                        <p class="p card__desc line-clamp-3">A project delivery system whereby our team
                                            works alongside your architect, designer and/or project manager to deliver
                                            high-quality interior fit-out services.</p>
                                        <a href="strength-and-capability.php" class="btnn btnn-stretched">
                                            <span class="btnn__text">Read More</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                    width="12" height="14" class="svg-convert">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card__header">
                                        <div class="card__figure">
                                            <img src="/assets/images/dot.jpg"
                                                data-src="/assets/images/cards/who-we-are/card-1.jpg" alt="who we are"
                                                width="570" height="621" class="img-hack lazy-img">
                                        </div>
                                    </div>
                                    <div class="card__body">
                                        <h5 class="h5 font-22 title-arrow">Fit Out</h5>
                                        <p class="p card__desc line-clamp-3">A project delivery system whereby our team
                                            works alongside your architect, designer and/or project manager to deliver
                                            high-quality interior fit-out services.</p>
                                        <a href="strength-and-capability.php" class="btnn btnn-stretched">
                                            <span class="btnn__text">Read More</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                    width="12" height="14" class="svg-convert">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our sectors -->
        <section class="our-sectors light-gray-color-bg">
            <div class="container-s">
                <div class="custom-row">
                    <div class="col_12 col_md_6">
                        <div class="our-sectors__two-slider-wrapper">
                            <div class="generic-panel">
                                <span class="generic-panel__small__title animate fadein-Up" data-delay="0.2s">Our
                                    Sectors</span>
                                <h2 class="h2 animate fadein-Up" data-delay="0.3s">Elevating environments with
                                    design expertise
                                </h2>
                            </div>
                            <div class="our-sectors__inner-two-slier-wrapper">
                                <div class="our-sectors__thumb-slider">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="our-sectors__thumb__item title-arrow">
                                                    <h4 class="h4 font-34 w-uline">Restaurant</h4>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="our-sectors__thumb__item title-arrow">
                                                    <h4 class="h4 font-34 w-uline">Hospitality</h4>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="our-sectors__thumb__item title-arrow">
                                                    <h4 class="h4 font-34 w-uline">Retail</h4>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="our-sectors__thumb__item title-arrow">
                                                    <h4 class="h4 font-34 w-uline">Office</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-sectors__text-slider">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <p class="p m-0">Our interior designers redefine diverse sectors
                                                    with
                                                    innovative and stylish bespoke designs.
                                                </p>
                                            </div>
                                            <div class="swiper-slide">
                                                <p class="p m-0">Transform dining experiences with the artistry of
                                                    our restaurant interior designers.
                                                </p>
                                            </div>
                                            <div class="swiper-slide">
                                                <p class="p m-0">Elevate guest experiences with the distinctive
                                                    touch of our hospitality interior designers.
                                                </p>
                                            </div>
                                            <div class="swiper-slide">
                                                <p class="p m-0">Revitalize retail spaces with the creative flair of
                                                    our expert interior designers.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_12 col_md_6">
                        <div class="our-sectors__figure-slider element-lg-right-zero">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="img-wrapper">
                                            <img src="/assets/images/dot.jpg"
                                                data-src="/assets/images/home/sector-1.jpg" alt="our sector" width="946"
                                                height="981" class="img-hack lazy-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrapper">
                                            <img src="/assets/images/dot.jpg"
                                                data-src="/assets/images/home/sector-2.jpg" alt="our sector" width="946"
                                                height="981" class="img-hack lazy-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrapper">
                                            <img src="/assets/images/dot.jpg"
                                                data-src="/assets/images/home/sector-3.jpg" alt="our sector" width="946"
                                                height="981" class="img-hack lazy-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrapper">
                                            <img src="/assets/images/dot.jpg"
                                                data-src="/assets/images/home/sector-5.jpg" alt="our sector" width="946"
                                                height="981" class="img-hack lazy-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our projects -->
        <section class="our-projects section-py">
            <div class="container-s">
                <div class="generic-panel">
                    <span class="generic-panel__small__title animate fadein-Up" data-delay="0.2s">Our
                        Projects</span>
                    <h2 class="h2 animate fadein-Up" data-delay="0.3s">Redesigning Spaces</h2>
                </div>
                <div class="our-projects__slider-wrapper">
                    <div class="element-lg-right-zero">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="/project-detail.php">
                                        <div class="card card--title-only" data-project="hotels">
                                            <div class="card__header">
                                                <div class="card__figure">
                                                    <img src="/assets/images/dot.jpg"
                                                        data-src="/assets/images/cards/our-projects/our-project-card-1.jpg"
                                                        alt="our project card" width="680" height="501"
                                                        class="img-hack lazy-img">
                                                </div>
                                            </div>
                                            <div class="card__body">
                                                <h5 class="h5 title-arrow">MELIÁ Hotels & Resorts</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="/project-detail.php">
                                        <div class="card card--title-only" data-project="caffe">
                                            <div class="card__header">
                                                <div class="card__figure">
                                                    <img src="/assets/images/dot.jpg"
                                                        data-src="/assets/images/cards/our-projects/our-project-card-2.jpg"
                                                        alt="our project card" width="680" height="501"
                                                        class="img-hack lazy-img">
                                                </div>
                                            </div>
                                            <div class="card__body">
                                                <h5 class="h5 title-arrow">MELIÁ Hotels & Resorts</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="/project-detail.php">
                                        <div class="card card--title-only" data-project="mitts">
                                            <div class="card__header">
                                                <div class="card__figure">
                                                    <img src="/assets/images/dot.jpg"
                                                        data-src="/assets/images/cards/our-projects/our-project-card-3.jpg"
                                                        alt="our project card" width="680" height="501"
                                                        class="img-hack lazy-img">
                                                </div>
                                            </div>
                                            <div class="card__body">
                                                <h5 class="h5 title-arrow">MELIÁ Hotels & Resorts</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="/project-detail.php">
                                        <div class="card card--title-only" data-project="mitts">
                                            <div class="card__header">
                                                <div class="card__figure">
                                                    <img src="/assets/images/dot.jpg"
                                                        data-src="/assets/images/cards/our-projects/our-project-card-3.jpg"
                                                        alt="our project card" width="680" height="501"
                                                        class="img-hack lazy-img">
                                                </div>
                                            </div>
                                            <div class="card__body">
                                                <h5 class="h5 title-arrow">MELIÁ Hotels & Resorts</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="/project-detail.php">
                                        <div class="card card--title-only" data-project="caffe">
                                            <div class="card__header">
                                                <div class="card__figure">
                                                    <img src="/assets/images/dot.jpg"
                                                        data-src="/assets/images/cards/our-projects/our-project-card-2.jpg"
                                                        alt="our project card" width="680" height="501"
                                                        class="img-hack lazy-img">
                                                </div>
                                            </div>
                                            <div class="card__body">
                                                <h5 class="h5 title-arrow">MELIÁ Hotels & Resorts</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-scrollbar-wrapper">
                        <span class="title">Drag to explore</span>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="absolute-btn-wrapper animate fadein-Up" data-delay="0.2s">
                    <a href="/our-projects.php" class="btnn">
                        <span class="btnn__text">View All Projects</span>
                        <span class="btnn__icon">
                            <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon" width="12" height="14"
                                class="svg-convert" />
                        </span>
                    </a>
                </div>
                <div class="our-projects__popup section-py">
                    <div class="our-projects__popup__container">
                        <div class="our-projects__popup__close-icon">
                            <img src="/assets/svg/popup-close.svg" alt="popup close" width="50" height="50">
                        </div>
                        <div class="generic-panel">
                            <span class="generic-panel__small__title animate fadein-Up" data-delay="0.2s">Our
                                Projects</span>
                            <h2 class="h2 animate fadein-Up" data-delay="0.3s">Redesigning Spaces</h2>
                        </div>
                        <div class="custom-row">
                            <div class="col_12 col_lg_7">
                                <div class="our-projects__figure">
                                    <img src="/assets/images/home/popup-card-1.jpg" alt="popup card" width="1001"
                                        height="623" class="img-hack">
                                </div>
                            </div>
                            <div class="col_12 col_lg_5">
                                <div class="our-projects__content-wrapper">
                                    <div class="our-projects__content">
                                        <p>This glamorous brasserie with it’s fabulous chic fit-out features
                                            Instagram -worthy interiors including a neon light fixture against a
                                            brilliant flower-covered wall, feather chandeliers, pastel pink velvet
                                            seats, pearl-white Italian marble tables and gold accents throughout for
                                            an eye-catching dining experience.
                                        </p>
                                        <a href="javascript:;" class="btnn">
                                            <span class="btnn__text">Read More</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                    width="12" height="14" class="svg-convert" />
                                            </span>
                                        </a>
                                    </div>
                                    <div class="our-projects__popup__side-design">
                                        <span class="counter">01</span>
                                        <span class="vertical-line"></span>
                                        <span class="vertical-title">Our Project</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest news and updates -->
        <section class="latest-news section-py light-gray-color-bg">
            <div class="container-s">
                <div class="generic-panel animate fadein-Up" data-delay="0.2s">
                    <h2 class="h2">Latest news and updates</h2>
                </div>
                <div class="latest-news__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="/news-detail.php">
                                    <div class="card card--news ">
                                        <div class="card__header">
                                            <div class="card__figure">
                                                <img src="/assets/images/dot.jpg"
                                                    data-src="/assets/images/cards/latest-news/news-card-1.jpg"
                                                    alt="news card" width="419" height="481" class="img-hack lazy-img">
                                            </div>
                                        </div>
                                        <div class="card__body">
                                            <h6 class="h6 fw-500 line-clamp-2">A beginner’s guide to design and build
                                                services
                                            </h6>
                                            <a href="/news-detail.php" class="btnn btnn-stretched">
                                                <span class="btnn__text">Read More</span>
                                                <span class="btnn__icon">
                                                    <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                        width="12" height="14" class="svg-convert" />
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/news-detail.php">
                                    <div class="card card--news ">
                                        <div class="card__header">
                                            <div class="card__figure">
                                                <img src="/assets/images/dot.jpg"
                                                    data-src="/assets/images/cards/latest-news/news-card-2.jpg"
                                                    alt="news card" width="419" height="481" class="img-hack lazy-img">
                                            </div>
                                        </div>
                                        <div class="card__body">
                                            <h6 class="h6 line-clamp-2">A beginner’s guide to design and build
                                                services
                                            </h6>
                                            <a href="/news-detail.php" class="btnn btnn-stretched">
                                                <span class="btnn__text">Read More</span>
                                                <span class="btnn__icon">
                                                    <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                        width="12" height="14" class="svg-convert" />
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/news-detail.php">
                                    <div class="card card--news ">
                                        <div class="card__header">
                                            <div class="card__figure">
                                                <img src="/assets/images/dot.jpg"
                                                    data-src="/assets/images/cards/latest-news/news-card-3.jpg"
                                                    alt="news card" width="419" height="481" class="img-hack lazy-img">
                                            </div>
                                        </div>
                                        <div class="card__body">
                                            <h6 class="h6 line-clamp-2">A beginner’s guide to design and build
                                                services
                                            </h6>
                                            <a href="/news-detail.php" class="btnn btnn-stretched">
                                                <span class="btnn__text">Read More</span>
                                                <span class="btnn__icon">
                                                    <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                        width="12" height="14" class="svg-convert" />
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- key growth -->
        <section class="key-growth section-my">
            <div class="container-s">
                <div class="generic-panel generic-panel--center animate fadein-Up" data-delay="0.2s">
                    <span class="generic-panel__small__title">Key Growth Numbers</span>
                    <h2 class="h2">A&T Group Interiors and the numbers that truly count</h2>
                </div>
                <div class="key-growth__projects-count">
                    <div class="custom-row">
                        <div class="col_12 col_sm_4">
                            <div class="key-growth__card">
                                <h3 class="h3 count whole" data-target="500">500</h3>
                                <p class="p">Projects completed</p>
                            </div>
                        </div>
                        <div class="col_12 col_sm_4">
                            <div class="key-growth__card">
                                <h3 class="h3 count whole" data-target="50">50</h3>
                                <p class="p">Ongoing Projects</p>
                            </div>
                        </div>
                        <div class="col_12 col_sm_4">
                            <div class="key-growth__card">
                                <h3 class="h3 count whole" data-target="2">2</h3>
                                <p class="p">Presence in major countries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials -->
        <section class="testimonials section-my-60">
            <div class="container-s">
                <div class="generic-panel generic-panel--testimonials">
                    <span class="generic-panel__small__title animate fadein-Up" data-delay="0.2s">Testimonials</span>
                    <h2 class="h2 animate fadein-Up" data-delay="0.3s">Real Stories of Success & Satisfaction</h2>
                </div>
            </div>
            <div class="testimonials__slider-wrapper light-gray-color-bg">
                <div class="custom-row">
                    <div class="col_12 col_md_6">
                        <div class="testimonials__figure-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="img-wrapper">
                                            <img src="/assets/images/dot.jpg"
                                                data-src="/assets/images/home/testimonial-1.jpg" alt="testimonial"
                                                width="948" height="720" class="img-hack lazy-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrapper">
                                            <img src="/assets/images/dot.jpg"
                                                data-src="/assets/images/home/testimonial-1.jpg" alt="testimonial"
                                                width="948" height="720" class="img-hack lazy-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_12 col_md_6">
                        <div class="testimonials__content-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonials__content">
                                            <div class="img-wrapper">
                                                <img src="/assets/svg/group-interior-svgs/quate.svg"
                                                    alt="vector quatation" width="141" height="100" class="img-hack">
                                            </div>
                                            <h4 class="h4 font-30 fw-700">Ashley Bundhun</h4>
                                            <p class="p">Client Representative, Dubai Holding</p>
                                            <div class="text-editor">
                                                <p>A&T Group Interiors completed full build work for our
                                                    World-famous restaurant, CÉ LA VI Dubai at the Address Sky View
                                                    Hotel. A&T Group Interiors demonstrate excellent technical
                                                    knowledge, provide clear solutions and can tackle any design and
                                                    build challenge.
                                                </p>
                                                <img src="/assets/images/home/testimonial-logo.png"
                                                    alt="testimonial logo" width="205" height="110">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials__content">
                                            <div class="img-wrapper">
                                                <img src="/assets/svg/group-interior-svgs/quate.svg"
                                                    alt="vector quatation" width="141" height="100" class="img-hack">
                                            </div>
                                            <h4 class="h4 font-30 fw-700">Ashley Bundhun</h4>
                                            <p class="p">Client Representative, Dubai Holding</p>
                                            <div class="text-editor">
                                                <p>A&T Group Interiors completed full build work for our
                                                    World-famous restaurant, CÉ LA VI Dubai at the Address Sky View
                                                    Hotel. A&T Group Interiors demonstrate excellent technical
                                                    knowledge, provide clear solutions and can tackle any design and
                                                    build challenge.
                                                </p>
                                                <img src="/assets/images/home/testimonial-logo.png"
                                                    alt="testimonial logo" width="205" height="110">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slider-pagination">
                                <div class="custom-sliderfractions"></div>
                            </div>
                            <div class="swiper-slider-navigation">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute-btn-wrapper animate fadein-Up" data-delay="0.2s">
                    <a href="/testimonials.php" class="btnn">
                        <span class="btnn__text">View All Testimonials</span>
                        <span class="btnn__icon">
                            <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon" width="12" height="14"
                                class="svg-convert" />
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- sponsership logoes -->
        <section class="sponsership-logoes section-py">
            <div class="container-s">
                <div class="sponsership-logoes__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img-wrapper">
                                    <img src="/assets/images/home/logo-1.png" alt="sponsor" width="260" height="59">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-wrapper">
                                    <img src="/assets/images/home/logo-2.png" alt="sponsor" width="260" height="59">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-wrapper">
                                    <img src="/assets/images/home/logo-3.png" alt="sponsor" width="260" height="59">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-wrapper">
                                    <img src="/assets/images/home/logo-4.png" alt="sponsor" width="260" height="59">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-wrapper">
                                    <img src="/assets/images/home/logo-5.png" alt="sponsor" width="260" height="59">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- get in touch -->
        <section class="get-in-touch section-py-60 light-gray-color-bg">
            <div class="container-s">
                <div class="generic-panel generic-panel--center">
                    <span class="generic-panel__small__title animate fadein-Up" data-delay="0.2s">Get in
                        touch</span>
                    <h2 class="h2 animate fadein-Up" data-delay="0.3s">Let’s build a project together</h2>
                </div>
                <div class="get-in-touch__main-wrapper animate fadein-Up" data-delay="0.4s">
                    <div class="get-in-touch__tabs">
                        <button class="btnn btnn--without-icon active" data-form-tab="estimateProject">
                            <span class="btnn__text">estimate project</span>
                            <span class="btnn__icon">
                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon" width="12"
                                    height="14" class="svg-convert" />
                            </span>
                        </button>
                        <button class="btnn btnn--without-icon" data-form-tab="talk">
                            <span class="btnn__text">let’s talk</span>
                            <span class="btnn__icon">
                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon" width="12"
                                    height="14" class="svg-convert" />
                            </span>
                        </button>
                    </div>
                    <div class="get-in-touch__content active" id="estimateProject">
                        <div class="get-in-touch__looking-for">
                            <h4 class="h4 font-30">I’m Looking For</h4>
                            <div class="custom-radio-group">
                                <input type="radio" id="fitout-option" name="radio-group" class="custom-radio"
                                    value="fitout" />
                                <label for="fitout-option">
                                    <div class="btnn">
                                        <span class="btnn__text">fit out</span>
                                        <span class="btnn__icon">
                                            <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                width="12" height="14" class="svg-convert" />
                                        </span>
                                    </div>
                                </label>
                            </div>

                            <div class="custom-radio-group">
                                <input type="radio" id="design-option" name="radio-group" class="custom-radio"
                                    value="design" />
                                <label for="design-option">
                                    <div class="btnn">
                                        <span class="btnn__text">design & build</span>
                                        <span class="btnn__icon">
                                            <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                width="12" height="14" class="svg-convert" />
                                        </span>
                                    </div>
                                </label>
                            </div>

                            <div class="custom-radio-group">
                                <input type="radio" id="ffe-option" name="radio-group" class="custom-radio"
                                    value="ffe" />
                                <label for="ffe-option">
                                    <div class="btnn">
                                        <span class="btnn__text">FF&E</span>
                                        <span class="btnn__icon">
                                            <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                width="12" height="14" class="svg-convert" />
                                        </span>
                                    </div>
                                </label>
                            </div>

                        </div>
                        <div class="get-in-touch__form">
                            <form action="">
                                <div class="custom-row">
                                    <div class="col_12 col_lg_4">
                                        <div class="c_form-field">
                                            <input type="text" class="c_form-field__control" name="yourname">
                                            <label for="yourname" class="c_label">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_4">
                                        <div class="c_form-field">
                                            <input type="text" class="c_form-field__control" placeholder=""
                                                name="email">
                                            <label for="email" class="c_label">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_4">
                                        <div class="c_form-field">
                                            <input type="text" class="c_form-field__control" placeholder=""
                                                name="phone">
                                            <label for="phone" class="c_label">Phone number</label>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_12">
                                        <div class="c_form-field">
                                            <!-- <input type="text" > -->
                                            <textarea name="" id="" rows="0" class="c_form-field__control"
                                                placeholder="" name="tell-project"></textarea>
                                            <label for="tell-project" class="c_label">About Your Project</label>
                                        </div>
                                    </div>
                                    <div class="col_12">
                                        <button type="submit" class="btnn">
                                            <span class="btnn__text">Send Request</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                    width="12" height="14" class="svg-convert" />
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- talk -->
                    <div class="get-in-touch__content" id="talk">
                        <div class="get-in-touch__form">
                            <form action="">
                                <div class="custom-row">
                                    <div class="col_12 col_lg_4">
                                        <div class="c_form-field">
                                            <input type="text" class="c_form-field__control" name="yourname">
                                            <label for="yourname" class="c_label">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_4">
                                        <div class="c_form-field">
                                            <input type="text" class="c_form-field__control" placeholder=""
                                                name="email">
                                            <label for="email" class="c_label">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_4">
                                        <div class="c_form-field">
                                            <input type="text" class="c_form-field__control" placeholder=""
                                                name="phone">
                                            <label for="phone" class="c_label">Phone number</label>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_12">
                                        <div class="c_form-field">
                                            <!-- <input type="text" > -->
                                            <textarea name="" id="" rows="0" class="c_form-field__control"
                                                placeholder="" name="tell-project"></textarea>
                                            <label for="tell-project" class="c_label">About Your Project</label>
                                        </div>
                                    </div>
                                    <div class="col_12">
                                        <button type="submit" class="btnn">
                                            <span class="btnn__text">Send Request</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/group-interior-svgs/btn-arrow.svg" alt="icon"
                                                    width="12" height="14" class="svg-convert" />
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="back-to-top">
            <a href="javascript:;" class="back-to-top__icon">
                <img src="/assets/svg/back-top.svg" alt="back to top" width="15" height="18" class="svg-convert">
            </a>
            <span class="back-to-top__title">Back to the top</span>
        </div>
    </main>




    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- home JS Files -->
    <script src="/assets/js/home.min.js"></script>



</body>

</html>