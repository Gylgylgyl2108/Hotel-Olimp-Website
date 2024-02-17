<!DOCTYPE html>
<html lang="ro">
<head>
<!-- Header -->
    <?php require_once "./components/header.php" ?>
    <!-- Header end -->
    <!-- Breadcrumb area Starts -->
    <div class="breadcrumb-area breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-contents">
                        <h4 class="breadcrumb-contents-title"> Despre Noi </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item"> <a href="index.php" class="breadcrumb-contents-list-item-link"> Acasa </a> </li>
                            <li class="breadcrumb-contents-list-item"> Despre noi </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->
    <!-- About Area Starts -->
    <section class="about-area pat-50 pab-50">
        <div class="container">
            <div class="row">
                <div class="section-title center-text">
                    <h2 class="title"> Despre Hotel Olimp </h2>
                    <div class="section-title-shapes"> </div>
                    <p class="section-para"><strong>Situat la 10 minute de centrului istoric si cultural al orasului.</strong></p>
                    <p class="section-para">Hotel Olimp va sta la dispozitie cu <strong>25 de camere de cazare</strong> fiecare avand un <strong>design unic.</strong></p>
                    <p class="section-para">Datorita <strong>pozitiel sale pe drumul european E60</strong> (Bucuresti-Cluj-Oradea-Budapesta-Viena) este <strong>recomandat turismului tranzit sau afaceri</strong>, cat si pentru cei care doresc sa isi petreaca vacanta in frumosul oras Cluj.</p>
                    <p class="section-para">De asemenea Hotel Olimp creeaza <strong>spatiul ideal pentru turismul medical</strong> aflandu-se <strong>in apropierea Spitalului Clinic De Recuperare</strong> ,  si <strong>Centrului Medical Transilvania.</strong></p>
                    <ul class="list-group my-4 fs-18 ">
                        <li class="list-group-item mt-4 bg--main-color text-white text-capitalize fw-bold"> Cele mai apreciate facilitati </li>
                        <li class="list-group-item list-group-item-action text-start "> <i class="las la-check-circle text-primary"></i> Mic-dejun disponibil: <?php echo $mic_dejun ?></li>
                        <li class="list-group-item list-group-item-action text-start "> <i class="las la-check-circle text-primary"></i> Acces WI-FI gratuit - Internet de mare viteza</li>
                        <li class="list-group-item list-group-item-action text-start "> <i class="las la-check-circle text-primary"></i> Parcare gratuita</li>
                        <li class="list-group-item list-group-item-action text-start "> <i class="las la-check-circle text-primary"></i> Sala de Fitness <b>( se pot percepe taxe suplimentare )</b></li>
                        <li class="list-group-item list-group-item-action text-start "> <i class="las la-check-circle text-primary"></i> Barbar store & Crispy store</li>
                        <li class="list-group-item list-group-item-action text-start "> <i class="las la-check-circle text-primary"></i> Bar & Restaurant</li>
                        <li class="list-group-item list-group-item-action text-start "> <i class="las la-check-circle text-primary"></i> Facilitati pentru persoane cu mobilitate redusa</li>
                        <li class="list-group-item list-group-item-action text-start "> <i class="las la-check-circle text-primary"></i> Camere pentru nefumatori</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area end -->
    <!-- Partners area start -->
    <section class="partner-area pat-50 pab-100">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Partenerii Nostrii </h2>
                <div class="section-title-shapes"></div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider slider-inner-margin" data-slidesToShow="6" data-infinite="true" data-arrows="false" data-dots="false" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500" data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                        data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>' data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 5}},{"breakpoint": 1200,"settings": {"slidesToShow": 4}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 576, "settings": {"slidesToShow": 2} }]'>
                        <div class="single-brand">
                            <a href="https://www.booking.com/hotel/ro/olimp.ro.html" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo1.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="https://www.tripadvisor.com/" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo2.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="https://www.airbnb.com.ro/" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo3.png" alt="brandLogo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners Area end -->
        <!-- footer area start -->
        <?php require_once "./components/footer.php" ?>
    <!-- footer area end -->
    </body>
</html>
    