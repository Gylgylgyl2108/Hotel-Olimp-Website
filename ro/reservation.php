<?php $room = $_GET['room'] ?? 'Camera neselectata'; ?>

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
                            <h4 class="breadcrumb-contents-title">
                                Rezervare
                            </h4>
                            <ul
                                class="breadcrumb-contents-list list-style-none"
                            >
                                <li class="breadcrumb-contents-list-item">
                                    <a
                                        href="index.php"
                                        class="breadcrumb-contents-list-item-link"
                                    >
                                        Acasa
                                    </a>
                                </li>
                                <li class="breadcrumb-contents-list-item">
                                    Rezervare
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area end -->

        <!-- Rservation Form -->
        <div class="container pat-50">
            <div class="row">
                <div class="col-lg-12 mt-0 mb-5">
          
                        <div class="contact-contents text-center section-title">
                            <h2 class="fw-bold">Rezervare Camera Hotel Olimp</h2>
                            <div class="section-title-shapes mb-4"></div>
                            <div class="banner-location banner-location-one bg-white radius-20 mt-5 w-100 shadow-primary py-4">
                                <div class="contact-contents-form custom-form text-black">
                                    <form action="contact_forms/process_reservation.php" method="post">
                                        <div class="banner-location-flex">
                                            <div class="banner-location-single">
                                                <div class="banner-location-single-flex">
                                                    <div class="banner-location-single-contents">
                                                        <span class="banner-location-single-contents-subtitle"> 
                                                            Check In
                                                        </span>
                                                        <div class="banner-location-single-contents-dropdown custom-select custom--date-picker__relative">
                                                            <input required type="date" name="CheckInDate" id="CheckInDate" class="custom--nice_date radius-5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="banner-location-single">
                                                <div class="banner-location-single-flex">
                                                    <div class="banner-location-single-contents">
                                                        <span class="banner-location-single-contents-subtitle"> 
                                                            Check Out
                                                        </span>
                                                        <div class="banner-location-single-contents-dropdown custom-select custom--date-picker__relative">
                                                            <input required type="date" name="CheckOutDate" id="CheckOutDate" class="custom--nice_date radius-5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="banner-location-single">
                                                <div class="banner-location-single-flex">
                                                    <div class="banner-location-single-contents">
                                                        <span class="banner-location-single-contents-subtitle"> 
                                                           Oaspeti
                                                        </span>
                                                        <div class="details-sidebar-quantity-field">
                                                            <span class="minus"><i class="las la-minus"></i></span><input required name="oaspeti" id="oaspeti" class="quantity-input border-secondary" type="number" value="1"><span class="plus"><i class="las la-plus"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="banner-location-single">
                                                <div class="banner-location-single-flex">
                                                    <div class="banner-location-single-contents">
                                                        <span class="banner-location-single-contents-subtitle"> 
                                                            Copii
                                                        </span>
                                                        <div class="details-sidebar-quantity-field">
                                                            <span class="minus"><i class="las la-minus"></i></span><input required name="copii" id="copii" class="quantity-input" type="number" value="0"><span class="plus"><i class="las la-plus"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-flex-input mt-0">
                                            <div class="banner-location-single-contents pt-4">
                                                <span class="banner-location-single-contents-subtitle"> 
                                                    Camera Dorita
                                                </span>
                                                <div class="banner-location-single-contents-dropdown custom-select">
                                                    <select class="js-select select-style-two text-black" name="room" id="room">
                                                        <option value="Camera Single <?php echo $camera_single?>RON" <?php if ($_GET && $room == 'Room-Single' || $room == '') { echo 'selected';};?>>Camera Single <?php echo $camera_single?> RON/Noapte</option>
                                                        <option value="Camera Dubla Deluxe <?php echo $camera_double_deluxe?>RON" <?php if ($_GET && $room == 'Room-DoubleDeluxe') { echo 'selected';};?>>Camera Dubla Deluxe <?php echo $camera_double_deluxe?> RON/Noapte</option>
                                                        <option value="Camera Tripla <?php echo $camera_triple?>RON" <?php if ($_GET && $room == 'Room-Triple') { echo 'selected';};?>>Camera Tripla <?php echo $camera_triple?> RON/Noapte</option>
                                                        <option value="Camera Dubla Simpla <?php echo $camera_double_simple?>RON" <?php if ($_GET && $room == 'Room-DoubleSimple') { echo 'selected';};?>>Camera Dubla Simpla <?php echo $camera_double_simple?> RON/Noapte</option>
                                                        <option value="Camera Twin <?php echo $camera_twin?>RON" <?php if ($_GET && $room == 'Room-Twin') { echo 'selected';};?>>Camera Twin <?php echo $camera_twin?> RON/Noapte</option>
                                                        <option value="Camera Four Guests <?php echo $camera_four_guests?>RON" <?php if ($_GET && $room == 'Room-FourGuests') { echo 'selected';};?>>Camera Four Guests <?php echo $camera_four_guests?> RON/Noapte</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-flex-input mt-0">
                                            <div class="single-input mt-4">
                                                <span class="banner-location-single-contents-subtitle"><i class="fa-regular fa-address-card"></i> Prenume </span>
                                                <input
                                                    required
                                                    name="surname" id="surname"
                                                    type="text"
                                                    class="form--control radius-5 text-black"
                                                    placeholder="Prenume"
                                                />
                                            </div>
                                            <div class="single-input mt-4">
                                                <span class="banner-location-single-contents-subtitle"> Nume </span>
                                                <input
                                                    required
                                                    name="name" id="name"
                                                    type="text"
                                                    class="form--control radius-5 text-black"
                                                    placeholder="Nume"
                                                />
                                            </div>
                                        </div>
                                        <div class="single-flex-input mt-0">
                                            <div class="single-input mt-4">
                                                <span class="banner-location-single-contents-subtitle"> Email </span>
                                                <input
                                                    required
                                                    name="email" id="email"
                                                    type="text"
                                                    class="form--control radius-5 text-black"
                                                    placeholder="Email"
                                                />
                                            </div>
                                            <div class="single-input mt-4">
                                                <span class="banner-location-single-contents-subtitle"> Numar de Telefon </span>
                                                <input
                                                    required
                                                    name="phone"
                                                    id="phone"
                                                    type="tel"
                                                    class="form--control radius-5 text-black"
                                                    placeholder="+40"
                                                />
                                            </div>
                                        </div>
                                        <div class="single-input mt-4">
                                            <span class="banner-location-single-contents-subtitle"> Observatii (Optional) </span>
                                            
                                            <textarea
                                                name="message" id="message"
                                                class="form--control form-message radius-5 custom--textarea_height text-black"
                                                placeholder="Va rugam specificati datele in care doriti sa va cazati..."
                                            ></textarea>
                                        </div>
                                        <div class="checkbox-wrap mt-4">
                                            <div class="checkbox-inline">
                                                <input class="check-input" type="checkbox" id="agree" required>
                                                <label class="checkbox-label" for="agree"> Sunt de acord cu <a href="terms_and_conditions.php">Termenii si Conditiile</a>, <a href="privacy_policy.php">Prelucrarea datelor cu caracter personal</a> si <a href="cookies_policy.php">cookies.</a> </label>
                                            </div>
                                        </div>
                                        <button
                                            type="submit"
                                            class="submit-btn radius-5 w-100 fw-bold fs-20 py-3"
                                        >
                                            Confirma Rezervarea
                                        </button>

                                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>
        <!-- Rservation Form end -->

    <!-- footer area start -->
    <?php require_once "./components/footer.php" ?>
    <!-- footer area end -->
    <script>
        let today = new Date().toISOString().split('T')[0];
        document.getElementById('CheckInDate').setAttribute('min', today);

        document.getElementById('CheckInDate').addEventListener('change', function () {
            let selectedDate = this.value;
            
            let nextDay = new Date(selectedDate);
            nextDay.setDate(nextDay.getDate() + 1);

            let nextDayFormatted = nextDay.toISOString().split("T")[0];

            // Check if CheckInDate is greater than current CheckOutDate
            if (nextDayFormatted > document.getElementById('CheckOutDate').value) {
                // Reset CheckOutDate to default
                document.getElementById('CheckOutDate').value = '';
            }

            // Check if CheckInDate is smaller than current CheckOutDate
            if (selectedDate < document.getElementById('CheckOutDate').value) {
                // Reset CheckOutDate to default
                document.getElementById('CheckOutDate').value = '';
            }

            document.getElementById('CheckOutDate').setAttribute('min', nextDayFormatted);
        });

    </script>
    </body>
</html>