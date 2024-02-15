

<!DOCTYPE html>
<html lang="ro">
<head>
<script src="https://www.google.com/recaptcha/api.js?render=6LeS_3MpAAAAAJFGCoV3kkAyT3eoKDA3fJnZypMc"></script>
<script>
    grecaptcha.ready(() => {
        grecaptcha.execute('6LeS_3MpAAAAAJFGCoV3kkAyT3eoKDA3fJnZypMc', { action: 'contact' }).then(token => {
            document.querySelector('#recaptchaResponse').value = token;
            console.log('reCAPTCHA token', token);
        });
    });
</script>
    
<!-- Header -->
    <?php require_once "./components/header.php" ?>
    <!-- Header end -->
    <!-- Breadcrumb area Starts -->
    <div class="breadcrumb-area breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-contents">
                        <h4 class="breadcrumb-contents-title"> Contacteaza-ne </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item"> <a href="index.php" class="breadcrumb-contents-list-item-link"> Acasa </a> </li>
                            <li class="breadcrumb-contents-list-item"> Contacteaza-ne </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->
    <!-- Contact Area Starts -->
    <section class="contact-area pat-25 pab-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-2 mb-5 custom--swap-order__mobile">
                    <div class="contact-thumb">
                        <img class="w-100 h-100" src="assets/img/logo_full.svg" alt="brandLogo">
                    </div>
                </div>
                <div class="col-lg-6 mt-2 mb-5">
                    <div class="contact-wrapper contact-padding bg-white radius-20">
                        <div class="contact-contents">
                            <h4 class="contact-contents-title"> Lasa-ne un mesaj aici </h4>
                            <p class="contact-contents-para mt-2">Ne bucuram sa va putem ajuta si sa va raspundem la orice intrebari aveti despre serviciile noastre la Hotel Olimp. Asteptam cu caldura mesajele dumneavoastra prin intermediul formularului de contact de mai jos.</p>
                            <div class="contact-contents-form custom-form">
                            <form action="contact_forms/process_contact.php" method="post" id="contactForm">
                                    <div class="single-flex-input mt-4">
                                        <div class="single-input mt-4">
                                            <input required type="text" name="surname" id="surname" class="form--control radius-5" placeholder="Prenume">
                                        </div>
                                        <div class="single-input mt-4">
                                            <input required type="text" name="name" id="name" class="form--control radius-5" placeholder="Nume">
                                        </div>
                                    </div>
                                    <div class="single-input mt-4">
                                        <input required type="text" name="email" id="email" class="form--control radius-5" placeholder="Email">
                                    </div>
                                    <div class="single-input mt-4">
                                        <input required type="tel" name="phone" id="phone" class="form--control radius-5" id="phone" placeholder="+40">
                                    </div>
                                    <div class="single-input mt-4">
                                        <textarea required name="message" id="message" class="form--control form-message radius-5" placeholder="Mesajul dumneavoastra..."></textarea>
                                    </div>
                                    <button type="submit" class="submit-btn radius-5 w-100"> Trimite </button>

                                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2733.5130468847706!2d23.583565537130628!3d46.754782906540925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490dd40fe359a5%3A0x21de90dac80f87d3!2sHotel%20Olimp!5e0!3m2!1sro!2sro!4v1672833633605!5m2!1sro!2sro" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Area end -->
    <!-- footer area start -->
    <?php require_once "./components/footer.php" ?>
    <!-- footer area end -->
    </body>
</html>
    