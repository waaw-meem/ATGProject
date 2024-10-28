<!-- Vendors CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<link rel="icon" type="image/ico" href="/assets/favicon.ico">
<meta name="format-detection" content="telephone=no">
<!-- Custom CSS -->
<link href="/assets/css/custom.min.css" rel="stylesheet" type="text/css">

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