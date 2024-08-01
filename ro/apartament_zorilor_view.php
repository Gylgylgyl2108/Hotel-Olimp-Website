<!DOCTYPE html>
<html lang="ro">
<script src="https://www.google.com/recaptcha/api.js?render=6LeS_3MpAAAAAJFGCoV3kkAyT3eoKDA3fJnZypMc"></script>
<script>
    grecaptcha.ready(() => {
        grecaptcha.execute('6LeS_3MpAAAAAJFGCoV3kkAyT3eoKDA3fJnZypMc', { action: 'contact' }).then(token => {
            document.querySelector('#recaptchaResponse').value = token;
        });
    });
</script>
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
                      <h4 class="breadcrumb-contents-title notranslate"> Apartament Zorilor View </h4>
                      <ul class="breadcrumb-contents-list list-style-none">
                          <li class="breadcrumb-contents-list-item"> <a href="index.php" class="breadcrumb-contents-list-item-link"> Acasa </a> </li>
                          <li class="breadcrumb-contents-list-item notranslate"> Apartament Zorilor View </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- Breadcrumb area end -->
    <!-- <h1 class="banner-single-content-title fw-bold text-center mb-4 text-primary">Apartament in Regim Hotelier</h1> -->
    <div class="mb-4 newsletter-wrapper newsletter-bg radius-20 newsletter-wrapper-padding radius-0" >
        <div class="newsletter-wrapper-shapes">
            <img src="assets/img/single-page/newsletter-shape1.png" alt="shapes">
            <img src="assets/img/single-page/newsletter-shape2.png" alt="shapes">
        </div>
        <div class="section-title">
            <h1 class="text-white fw-bold center-text title"> Apartament in Regim Hotelier </h1>
        </div>
    </div>
    <div class="container pat-50">
        <div class="row">
            <div class="col-lg-12 mt-0 mb-5">
                <div class="contact-wrapper contact-padding bg-white radius-20 shadow-primary">
                    <div class="contact-contents text-center section-title">
                        <h2 class="fw-bold">Apartament Zorilor View</h2>
                        <div class="section-title-shapes mb-4"></div>
                        <p class="single-para my-3 fs-20"><strong>Pentru a face o rezervare</strong>, va rugam sa <strong>completati formularul de mai jos</strong> si sa specificati<strong> perioada dorita si numarul de persoane</strong></p>
                        <p class="single-para my-3 fs-20 fw-bold">Pentru apartamente rezervarile se fac prin <a href="mailto:office@hotel-olimp.ro" class="link-primary">Email</a>, sau prin Formularul de Contact de mai jos.</p>
                        <p class="single-para my-3 fs-20"><b>Va vom contacta</b> in cel mai scurt timp posibil pentru a va confirma rezervarea si a va oferi toate detaliile necesare. </p>
                            <div class="contact-contents-form custom-form">
                            <form action="contact_forms/process_apartament_zorilor_view.php" method="post">
                                <div class="single-flex-input mt-4">
                                    <div class="single-input mt-4">
                                        <input required name="surname" id="surname" type="text" class="form--control radius-5" placeholder="Prenume">
                                    </div>
                                    <div class="single-input mt-4">
                                        <input required name="name" id="name" type="text" class="form--control radius-5" placeholder="Nume">
                                    </div>
                                </div>
                                <div class="single-flex-input mt-0">
                                    <div class="single-input mt-4">
                                        <input required name="email" id="email" type="text" class="form--control radius-5" placeholder="Email">
                                    </div>
                                    <div class="single-input mt-4">
                                        <input required name="phone" id="phone" type="tel" class="form--control radius-5" id="phone" placeholder="Numar de telefon">
                                    </div>
                                </div>
                                
                                <div class="single-input mt-4">
                                    <textarea required name="message" id="message" class="form--control form-message radius-5 custom--textarea_height" placeholder="Va rugam specificati datele in care doriti sa va cazati..."></textarea>
                                </div>
                                <button type="submit" class="submit-btn radius-5 w-100 fw-bold fs-20 py-3"> Trimite </button>

                                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shots area starts -->
    <section class="attraction-area pat-0 pab-50">
        <div class="container">
            <div class="center-text">
                <h2 class="title"> Despre Apartament Zorilor View </h2>
                <div class="section-title-line"></div>
                <p class="single-para my-3 fs-18"><strong>Zorilor View</strong> este pentru noi, sansa de a fi mai aproape de voi prietenii nostri.</p>
                <p class="single-para my-3 fs-18">Cu un design modern acest apartament vine in intampinarea clientilor cu dotari de ultima generatie precum <strong>TV cu ecran plat</strong> cu canale prin cablu - digital  , <strong>acces internet WIFI</strong> , <strong>bucatarie complet utilata cu vesela si frigider</strong> , <strong>expresor de cafea</strong>, <strong>masina spalat rufe</strong>. </p>
                <p class="single-para my-3 fs-18"><strong>Minunata priveliste va incanta orice turist</strong>, iar terasa acestuia va fi un loc pe care probabil <strong>nu il veti uita prea repede.</strong></p>
                <p class="single-para my-3 fs-18">Acest apartament este situat <strong>langa Spitalul Clinic de Recuperare</strong>, in <strong>apropierea Strazii Observatorului</strong>, intr-o <strong>zona linistita si cu o priveliste deosebita.</strong> </p>
            </div>
            <div id="gallery" class="row g-4 mt-4" >
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap5.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap5.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap2.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap2.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap3.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap3.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap4.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap4.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap1.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap1.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap6.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap6.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap7.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap7.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap8.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap8.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap9.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap9.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap10.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap10.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap11.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap11.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap12.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap12.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap13.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap13.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 gallery-item">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="../images_hotel/apartments/zorilor_view/ap14.webp" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/apartments/zorilor_view/ap14.webp" alt="image for apartment zorilor view"> </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="contact-map mt-5 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2733.5201091080507!2d23.579347057404146!3d46.75464367913751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490db76ae653e5%3A0x2e90006679b84db1!2sApartament%20Zorilor%20View%20-%20RegimHotelier!5e0!3m2!1sro!2sro!4v1678793045698!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </div>
    </section>
    <!-- shots area end -->
    
        <!-- footer area start -->
        <?php require_once "./components/footer.php" ?>
    <!-- footer area end -->
    </body>
</html>
    