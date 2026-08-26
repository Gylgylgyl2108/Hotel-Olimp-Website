<?php 
$images_folder = '../images_hotel/rooms/Room_5_Twin';

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
                                            <a href="../images_hotel/rooms/Room_5_Twin/room_twin_1.jpg" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/rooms/Room_5_Twin/room_twin_1-main.jpg" alt="hotel room image"> </a>
                                        </div>
                                    <?php endif; ?>
                                <div class="details-contents-header-flex">
                                    <?php if ($number_of_photos >= 2) : ?>
                                        <div class="single-attraction-two-thumb">
                                            <a href="../images_hotel/rooms/Room_5_Twin/room_twin_2.jpg" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/rooms/Room_5_Twin/room_twin_2-main.jpg" alt="hotel room image"> </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($number_of_photos >= 3) : ?>
                                        <div class="single-attraction-two-thumb">
                                            <a href="../images_hotel/rooms/Room_5_Twin/room_twin_3.jpg" class="gallery-popup-two"> <img loading="lazy" src="../images_hotel/rooms/Room_5_Twin/room_twin_3-main.jpg" alt="hotel room image"> </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php for ($i = 4; $i <= $number_of_photos; $i++) : ?>
                                        <div class="single-attraction-two-thumb d-none">
                                            <a href="../images_hotel/rooms/Room_5_Twin/room_twin_<?php echo $i; ?>.jpg" class="gallery-popup-two"></a>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="hotel-view-contents">
                                <div class="hotel-view-contents-header">
                                    <h3 class="hotel-view-contents-title py-4 fs-36"> Camera Twin </h3>
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
                                            <h4 class="hotel-view-contents-bottom-title"> <?php echo $camera_twin ?> RON <sub>/ Noapte</sub> </h4>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="reservation.php?room=Room-Twin" class="cmn-btn btn-bg-1 btn-small"> Rezerva acum! </a>
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
                                        <p class="about-tab-contents-para">Camera Twin oferă cazare confortabilă și este dotată cu două paturi individuale, televizor, Wi-Fi gratuit, aer condiționat, prosoape, baie privată și articole de toaletă.</p>
                                        <p class="about-tab-contents-para mt-4">Tariful afișat este pentru întreaga cameră și include cazarea a maximum două persoane. Pentru cazarea unui număr mai mare de persoane se percep taxe suplimentare, în funcție de numărul oaspeților și de disponibilitate. Oaspeții beneficiază de parcare gratuită.</p>
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