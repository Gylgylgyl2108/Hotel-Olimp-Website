<?php 
$images_folder = '../images_hotel/shots';

// Check if the folder exists
if (is_dir($images_folder)) {
    // Read the contents of the folder
    $files = scandir($images_folder);
    // Count the number of files (excluding '.' and '..')
    $number_of_photos = count(array_diff($files, array('.', '..')));
} else {
    echo "The specified folder does not exist.";
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
<!-- Header -->
    <?php require_once "./components/header.php" ?>
    <!-- Header end -->
    <!-- Banner area Starts -->
    <div class="banner-area banner-area-one">
        <div class="container-fluid p-0">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6">
                    <div class="banner-single banner-single-one md-px-12px percent-padding ">
                        <div class="banner-single-content">
                            <h1 class="banner-single-content-title custom--banner-single-content-title  fw-700"> Bucura-te de concediu, vacanta si timpul cu familia impreuna cu noi! </h1>
                            <h2 class="banner-single-content-para mt-3">Ne mandrim cu serviciile noastre de inalta calitate si cu personalul nostru amabil si profesionist, care se asigura ca oaspetii nostri sunt tratati cu atentie si respect in hotelul nostru din Cluj-Napoca.</h2>
                            <a class="submit-btn w-100 radius-10 custom--reservation-btn my-4" type="submit" href="reservation.php"> Rezerva Acum! </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-image banner-right-bg radius-20" style="background-image: url(assets/img/logo_full.svg);"></div>
            </div>
        </div>
    </div>
    <!-- Banner area end -->
    <!-- Booking Two area starts -->
    <section class="booking-two-area pat-50 pab-50">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="section-title-booking">
                        <div class="section-title-three">
                            <h2 class="title"> De ce Hotel Olimp este un hotel special? </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-why-two bg-white single-why-two-border radius-10">
                        <div class="single-why-two-flex">
                            <div class="single-why-two-icon">
                                <i class="las la-thumbs-up"></i>
                            </div>
                            <div class="single-why-two-contents">
                                <h4 class="single-why-two-contents-title"> <a href="#">Rezervare simpla</a> </h4>
                                <p class="single-why-two-contents-para mt-2">Rezervati camere direct de pe site-ul nostru!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-why-two bg-white single-why-two-border radius-10">
                        <div class="single-why-two-flex">
                            <div class="single-why-two-icon">
                                <i class="las la-star"></i>
                            </div>
                            <div class="single-why-two-contents">
                                <h4 class="single-why-two-contents-title"> <a href="#">+1.000 Recenzii pozitive </a> </h4>
                                <p class="single-why-two-contents-para mt-2">Clientii nostri sunt mereu satisfacuti.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-why-two bg-white single-why-two-border radius-10">
                        <div class="single-why-two-flex">
                            <div class="single-why-two-icon">
                                <i class="las la-ticket-alt "></i>
                            </div>
                            <div class="single-why-two-contents">
                                <h4 class="single-why-two-contents-title"> <a href="#"> Acceptam Tichete </a> </h4>
                                <p class="single-why-two-contents-para mt-2">Acceptam plata cu tichete de vacanta.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking Two area end -->
    <section class="attraction-area pat-50 pab-50">
        <div class="container">
            <div class="section-title text-center"><!-- append-flex -->
                <h2 class="title">Atractii turistice in apropiere</h2>
                <div class="section-title-line"> </div>
                <div class="append-attraction mt-4"></div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider nav-style-one slider-inner-margin" data-appendArrows=".append-attraction" data-infinite="true" data-arrows="true" data-dots="false" data-slidesToShow="4" data-swipeToSlide="true" data-autoplay="false" data-autoplaySpeed="2500"
                        data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>' data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>' data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 480, "settings": {"slidesToShow": 1} }]'>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <img loading="lazy" src="assets/img/attraction/a1.jpg" alt="image of touristic attraction nearby">
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title text-center"> <a href="https://maps.app.goo.gl/GC9dMfpeS9YM4uuY9" target="_blank"> Turnul Croitorilor <br></br></a> </h4>
                                    <p class="single-attraction-contents-para"><b>1.8km -</b> Bijuteria arhitecturala medievala din centrul Clujului, locul unde istoria prinde viata!</p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <img loading="lazy" src="assets/img/attraction/a2.jpg" alt="image of touristic attraction nearby">
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title text-center"> <a href="https://maps.app.goo.gl/oLR1jcyeBUAAH9Ne9" target="_blank"> Palatul Bánffy <br></br> </a> </h4>
                                    <p class="single-attraction-contents-para"><b>1.8km -</b> Simbolul rafinamentului aristocratic, impresioneaza prin expozitiile culturale de inalta clasa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <img loading="lazy" src="assets/img/attraction/a3.jpg" alt="image of touristic attraction nearby">
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title text-center"> <a href="https://maps.app.goo.gl/34LC3drQdkGh4m1b8" target="_blank">Muzeul National de Istorie a Transilvaniei</a> </h4>
                                    <p class="single-attraction-contents-para"><b>1.9km -</b> Fascinantul univers al istoriei locale si internationale, expus intr-un cadru impresionant!</p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <img loading="lazy" src="assets/img/attraction/a4.jpg" alt="image of touristic attraction nearby">
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title text-center"> <a href="https://maps.app.goo.gl/78wJYUBVhUFAsHe49" target="_blank"> Casino Parcul Central <br></br></a> </h4>
                                    <p class="single-attraction-contents-para"><b>1.9km -</b> Bijuteria arhitecturala Art Nouveau, un loc emblematic pentru cultura si distractie inima Clujului!</p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <img loading="lazy" src="assets/img/attraction/a5.jpg" alt="image of touristic attraction nearby">
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title text-center"> <a href="https://maps.app.goo.gl/GyLM8GEtStwVAgMi9" target="_blank"> Piata Muzeului <br></br></a> </h4>
                                    <p class="single-attraction-contents-para"><b>1.9km -</b> Locul vibrant și pitoresc din inima orașului, unde se întalnesc istoria, cultura și traditiile locale!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking area end -->
    <!-- Guest area starts -->
    <section class="guest-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title">Ce cred oaspetii nostri...</h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="custom-tab guest-wrapper mt-5">
                <div class="guest-wrapper-shapes">
                    <img loading="lazy" src="assets/img/guest/guest-shape.png" alt="shape">
                </div>
                <div class="custom-tab-menu">
                    <ul class="tab-menu guest-wrapper-images list-style-none">
                        <li class="guest-wrapper-images-single active">
                            <img loading="lazy" src="assets/img/guest/guest5.jpg" alt="guest image">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img loading="lazy" src="assets/img/guest/guest2.jpg" alt="guest image">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img loading="lazy" src="assets/img/guest/guest3.jpg" alt="guest image">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img loading="lazy" src="assets/img/guest/guest4.jpg" alt="guest image">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img loading="lazy" src="assets/img/guest/guest1.jpg" alt="guest image">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img loading="lazy" src="assets/img/guest/guest6.jpg" alt="guest image">
                        </li>
                    </ul>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-lg-6 col-md-8">
                        <div class="tab-area">
                            <div class="single-guest tab-item active center-text">
                                <div class="single-guest-thumb">
                                    <img loading="lazy" src="assets/img/guest/guest5.jpg" alt="guest image">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> <strong>Hotel Olimp</strong> este o alegere excelenta pentru oamenii de afaceri care <strong>viziteaza Cluj-Napoca.</strong> Am fost impresionat de facilitatile excelente, precum <strong>accesul la internet wireless</strong>, <strong>sala de fitness (se pot percepe taxe suplimentare)</strong>, <strong>restaurantul</strong> si <strong>parcarea gratuita</strong>. Iar Serviciile excelente au facut ca sejurul meu sa fie cat mai placut. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Georgian P. </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img loading="lazy" src="assets/img/guest/guest2.jpg" alt="guest image">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Am petrecut un weekend perfect la Hotel Olimp. Am fost <strong>impresionat de facilitatile excelente</strong>, precum <strong>centrul de fitness</strong> si <strong>restaurantul alaturi</strong>, care mi-au oferit o experienta de <strong>relaxare de neuitat</strong>. Camerele sunt <strong>elegante</strong> si <strong>confortabile</strong>, iar personalul a fost mereu pregatit sa ne ajute cu orice aveam nevoie. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Vlad P. </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img loading="lazy" src="assets/img/guest/guest3.jpg" alt="guest image">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Am avut parte de o <strong>experienta de neuitat</strong> la Hotelul Olimp. Am fost impresionati de <strong>atmosfera linistita si primitoare</strong> a hotelului si de <strong>confortul si eleganta camerei</strong>. Personalul a fost <strong>foarte amabil si serviabil</strong>, iar <strong>restaurantul Homemade Happiness</strong> ne-a oferit <strong>preparate culinare excelente</strong>. <strong>Recomand</strong> cu caldura acest hotel! </p>
                                    <h4 class="single-guest-contents-title mt-3"> Amalia V. </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img loading="lazy" src="assets/img/guest/guest4.jpg" alt="guest image">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Am avut o <strong>experienta minunata</strong> la Hotel Olimp! Personalul a fost <strong>extrem de primitor si amabil</strong>, camerele sunt <strong>spatioase si curate</strong>, iar restaurantul a oferit preparate <strong>culinare excelente.</strong>Plus facilitatile precum <strong>sala de fitness</strong> m-au facut sa ma simt bine in tot timpul sejurului <strong>Cu siguranta voi reveni</strong> la acest hotel! </p>
                                    <h4 class="single-guest-contents-title mt-3"> Ecaternia S. </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img loading="lazy" src="assets/img/guest/guest1.jpg" alt="guest image">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Hotelul Olimp este <strong>o alegere excelenta pentru oamenii de afaceri care viziteaza Cluj-Napoca</strong>. Am fost impresionat de facilitatile excelente, precum <strong>accesul la internet wireless si sala de fitness</strong>. Personalul a fost mereu la dispozitia mea, iar <strong>serviciile excelente</strong> au facut ca <strong>sejurul meu sa fie cat mai placut.</strong> </p>
                                    <h4 class="single-guest-contents-title mt-3"> Adrian P. </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img loading="lazy" src="assets/img/guest/guest6.jpg" alt="guest image">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Am ales Hotel Olimp pentru a petrece <strong>cateva zile in Cluj-Napoca</strong> si nu am putut fi mai multumit. Am fost impresionat de <strong>curatenia impecabila</strong> a camerei si de <strong>atentia la detalii</strong> a personalului. Hotelul este situat intr-o zona <strong>linistita si sigura</strong>, ceea ce mi-a oferit <strong>o noapte de somn odihnitoare si de neuitat.</strong> </p>
                                    <h4 class="single-guest-contents-title mt-3"> Arafat H. </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Guest area end -->
    <!-- shots area starts -->
    <section class="shots-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title">Cateva poze prin hotel</h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div id="gallery" class="row g-4 mt-4" >
                <?php for ($i = 1; $i <= $number_of_photos; $i++) : ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/shots/s<?php echo $i; ?>.jpg" class="gallery-popup-two"> <img src="../images_hotel/shots/s<?php echo $i; ?>.jpg" alt="image around the hotel"> </a>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <!-- shots area end -->
    <!-- Question area starts -->
    <section class="question-area pat-50 pab-0">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title">Intrebari puse frecvent</h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-12">
                    <div class="faq-wrapper">
                        <div class="faq-contents">
                            <div class="faq-item wow active open">
                                <h3 class="faq-title">
                                    Cum fac o rezervare?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Foarte simplu, direct de pe site-ul hotelului!<a href="contact.php" class="link-primary"> Da-ti click aici</a> si va vom redirectiona catre formularul de rezervare! </p>
                                </div>
                            </div>
                            <div class="faq-item wow ">
                                <h3 class="faq-title">
                                    Cat costa sejurul hotelului?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Tarifele de la Hotel Olimp <b>pot varia în functie de sejur</b> (de ex., in functie de intervalul selectat, de policile hotelului etc.). Aflati tarifele introducand datele dorite. </p>
                                </div>
                            </div>
                            <div class="faq-item wow ">
                                <h3 class="faq-title">
                                    Cat de departe este Hotel Olimp de centrul din Cluj-Napoca?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Hotel Olimp <strong>se afla la 1,8 km de centrul din Cluj-Napoca.</strong> </p>
                                </div>
                            </div>
                            <div class="faq-item wow ">
                                <h3 class="faq-title">
                                    Ce activitati se pot desfasura la Hotel Olimp?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para">Hotel Olimp <b>ofera urmatoarele activitati/servicii</b> (este posibil sa se perceapa costuri suplimentare):</p>
                                    <ul class="mb-0">
                                        <li>Sala de fitness</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faq-item wow ">
                                <h3 class="faq-title">
                                    În ce interval se poate face check-in și check-out la Hotel Olimp?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para">La Hotel Olimp se poate face <b>check-in incepand cu ora 15:00</b>, iar <b>check-out pana la ora 10:30.</b></p>
                                </div>
                            </div>
                            <div class="faq-item wow ">
                                <h3 class="faq-title">
                                    Ce fel de mic dejun se ofera la Hotel Olimp?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para">Oaspetii care se cazeaza la Hotel Olimp pot savura pe durata sejurului un mic dejun cu evaluari excelente (scorul din evaluarile oaspetilor: 7.8).</p>
                                    <p class="faq-para"><b>Varianta/variantele de mic dejun:</b></p>
                                    <ul class="mb-0">
                                        <li>continental</li>
                                        <li>american</li>
                                        <li>bufet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faq-item wow ">
                                <h3 class="faq-title">
                                    Ce tip de camere se pot rezerva la Hotel Olimp?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para">Printre <b>tipurile de camera</b> de la Hotel Olimp se numara:</p>
                                    <ul class="mb-0">
                                        <li>Camera Single</li>
                                        <li>Camera Twin</li>
                                        <li>Camera Dubla Simpla</li>
                                        <li>Camera Dubla Deluxe</li>
                                        <li>Camera Tripla</li>
                                        <li>Camera Camera Qvadrupla (4 persoane)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="faq-question-title text-center faq-more-questions">Inca aveti intrebari?<br></br>Va rugam <a class="link-primary" href="contact.php">nu ezitati sa ne contactati!</a></h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Question area end -->
    <!-- footer area start -->
    <?php require_once "./components/footer.php" ?>
    <!-- footer area end -->
    </body>
</html>
    