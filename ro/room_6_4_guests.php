<?php 
$images_folder = '../images_hotel/rooms/Room_6_4_Guests';

// Check if the folder exists
if (is_dir($images_folder)) {
    // Read the contents of the folder
    $files = scandir($images_folder);
    // Count the number of files (excluding '.' and '..')
    $number_of_photos = count(array_diff($files, array('.', '..')));

    if ($number_of_photos == 1) {
        $number_of_photos -= 1;
    } elseif ($number_of_photos == 3) {
        $number_of_photos -= 2;
    } elseif ($number_of_photos == 5) {
        $number_of_photos -= 3;
    } elseif ($number_of_photos >= 7) {
        $number_of_photos -= 4;
    } else {
        echo "<h1 class='text-danger'>EROARE CEVA NU E BINE!</h1>";
    }
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
    <!-- Breadcrumb area Starts -->
    <div class="breadcrumb-area breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-contents">
                        <h4 class="breadcrumb-contents-title"> Detalii Camera </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item"> <a href="index.php" class="breadcrumb-contents-list-item-link"> Acasa </a> </li>
                            <li class="breadcrumb-contents-list-item"> <a href="listing.php" class="breadcrumb-contents-list-item-link"> Camere </a> </li>
                            <li class="breadcrumb-contents-list-item"> Detalii Camera </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->
    <!-- Hotel Details area Starts -->
    <section class="hotel-details-area section-bg-2 pat-50 pab-50">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-12 col-lg-7">
                    <div class="details-left-wrapper">
                        <div class="details-contents bg-white radius-10">
                            <div class="details-contents-header">
                                    <?php if ($number_of_photos >= 1) : ?>
                                        <div class="single-attraction-two-thumb flex-center">
                                            <a href="../images_hotel/rooms/Room_6_4_Guests/room_quadro_1.jpg" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/rooms/Room_6_4_Guests/room_quadro_1-main.jpg" alt="hotel room image"> </a>
                                        </div>
                                    <?php endif; ?>
                                <div class="details-contents-header-flex">
                                    <?php if ($number_of_photos >= 2) : ?>
                                        <div class="single-attraction-two-thumb">
                                            <a href="../images_hotel/rooms/Room_6_4_Guests/room_quadro_2.jpg" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/rooms/Room_6_4_Guests/room_quadro_2-main.jpg" alt="hotel room image"> </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($number_of_photos >= 3) : ?>
                                        <div class="single-attraction-two-thumb">
                                            <a href="../images_hotel/rooms/Room_6_4_Guests/room_quadro_3.jpg" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/rooms/Room_6_4_Guests/room_quadro_3-main.jpg" alt="hotel room image"> </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php for ($i = 4; $i <= $number_of_photos; $i++) : ?>
                                        <div class="single-attraction-two-thumb d-none">
                                            <a href="../images_hotel/rooms/Room_6_4_Guests/room_quadro_<?php echo $i; ?>.jpg" class="gallery-popup-two"></a>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="hotel-view-contents">
                                <div class="hotel-view-contents-header">
                                    <h3 class="hotel-view-contents-title py-4 fs-36"> Camera 4 Persoane </h3>
                                </div>
                                <div class="hotel-view-contents-middle">
                                    <div class="hotel-view-contents-flex">
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-parking"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Parcare </p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-wifi"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Wifi Gratuit</p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-quidditch"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Servicii Curatenie </p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-receipt"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Receptie </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hotel-view-contents-bottom">
                                    <div class="hotel-view-contents-bottom-flex">
                                        <div class="hotel-view-contents-bottom-contents">
                                            <h4 class="hotel-view-contents-bottom-title"> <?php echo $camera_four_guests ?> RON <sub>/ Noapte</sub> </h4>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="reservation.php?room=Room-FourGuests" class="cmn-btn btn-bg-1 btn-small"> Rezerva acum! </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="details-contents-tab">
                                <ul class="list-style-none details-tab details-tab-border">
                                    <li data-tab="about"> Descriere </li>
                                </ul>
                                <div id="about" class="tab-content-item active">
                                    <div class="about-tab-contents">
                                        <p class="about-tab-contents-para">Situat la mai puțin de 10 minute cu mașina de centrul orașului, în cartierul Zorilor, Hotelul Olimp din Cluj-Napoca oferă camere și suite cu aer condiționat și WiFi gratuit, precum și un restaurant cu o terasă în aer liber.                                        </p>
                                        <p class="about-tab-contents-para mt-4">Toate camerele și suitele hotelului includ un minibar, un TV cu ecran plat cu canale prin cablu și o baie privată cu duș sau cadă, articole de toaletă gratuite și uscător de păr.</p>
                                        <p class="about-tab-contents-para mt-4">Puteți să vă parcați mașina gratuit. La doar 30 m de hotel se găsește o stație de taxi. În vecinătate există un centru comercial, grădina botanică și diverse clinici medicale.</p>
                                        <p class="about-tab-contents-para mt-4">Cuplurile apreciază în mod deosebit această locaţie. I-au dat scorul 8,7 pentru un sejur pentru 2 persoane.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotel Details area end -->

    <!-- footer area start -->
    <?php require_once "./components/footer.php" ?>
    <!-- footer area end -->
    </body>
</html>