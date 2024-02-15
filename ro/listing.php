<!DOCTYPE html>
<html lang="ro">
<head>
<!-- Header -->
    <?php require_once "./components/header.php" ?>
    <!-- Header end -->
    <!-- Breadcrumb area Starts -->
    <div class="breadcrumb-area section-bg-2 breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-contents">
                        <h4 class="breadcrumb-contents-title"> Camere </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item"> <a href="index.php" class="breadcrumb-contents-list-item-link"> Acasa </a> </li>
                            <li class="breadcrumb-contents-list-item"> Camere </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->
    <!-- Hotel List area start -->
    <div class="responsive-overlay"></div>
    <section class="hotel-list-area section-bg-2 pt-1 pab-75">
        <div class="container">
            <div class="shop-contents-wrapper mt-5">
                <div class="shop-grid-contents ">
                    <div class="grid-list-contents">
                        <div class="grid-list-contents-flex">
                            <p class="grid-list-contents-para">1-6 din 6 rezultate </p>
                        </div>
                        <!-- 471x220 -->
                    </div>
                    <div id="tab-grid" class="tab-content-item active mt-4">
                        <div class="row gy-4">
                            <!-- Room #1 -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="hotel-view bg-white radius-20">
                                    <a href="room_1_single.php" class="hotel-view-thumb hotel-view-grid-thumb bg-image" style="background-image: url(assets/images_hotel/rooms/Room_1_Single/cover.jpg);">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <h3 class="hotel-view-contents-title text-center"> <a href="room_1_single.php"> Camera Single </a> </h3>
                                        </div>
                                        <div class="hotel-view-contents-middle">
                                            <div class="hotel-view-contents-flex">
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Parcare">
                                                    <i class="las la-parking"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wifi Gratuit">
                                                    <i class="las la-wifi"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Servicii Curatenie">
                                                    <i class="las la-quidditch"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Sala Fitness">
                                                    <i class="las la-dumbbell"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Receptie">
                                                    <i class="las la-receipt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-view-contents-bottom">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents">
                                                    <h4 class="hotel-view-contents-bottom-title"> <?php echo $camera_single ?> RON <sub>/ Noapte</sub> </h4>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="reservation.php?room=Room-Single" class="cmn-btn btn-bg-1 btn-small"> Rezerva acum </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Room #2 -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="hotel-view bg-white radius-20">
                                    <a href="room_2_double_deluxe.php" class="hotel-view-thumb hotel-view-grid-thumb bg-image" style="background-image: url(assets/images_hotel/rooms/Room_2_Double_Deluxe/cover.jpg);">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <h3 class="hotel-view-contents-title text-center"> <a href="room_2_double_deluxe.php"> Camera Dubla Deluxe </a> </h3>
                                        </div>
                                        <div class="hotel-view-contents-middle">
                                            <div class="hotel-view-contents-flex">
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Parcare">
                                                    <i class="las la-parking"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wifi Gratuit">
                                                    <i class="las la-wifi"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Servicii Curatenie">
                                                    <i class="las la-quidditch"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Sala Fitness">
                                                    <i class="las la-dumbbell"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Receptie">
                                                    <i class="las la-receipt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-view-contents-bottom">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents">
                                                    <h4 class="hotel-view-contents-bottom-title"> <?php echo $camera_double_deluxe ?> RON <sub>/ Noapte</sub> </h4>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="reservation.php?room=Room-DoubleDeluxe" class="cmn-btn btn-bg-1 btn-small"> Rezerva acum </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Room #3 -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="hotel-view bg-white radius-20">
                                    <a href="room_3_triple.php" class="hotel-view-thumb hotel-view-grid-thumb bg-image" style="background-image: url(assets/images_hotel/rooms/Room_3_Triple/cover.jpg);">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <h3 class="hotel-view-contents-title text-center"> <a href="room_3_triple.php"> Camera Tripla </a> </h3>
                                        </div>
                                        <div class="hotel-view-contents-middle">
                                            <div class="hotel-view-contents-flex">
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Parcare">
                                                    <i class="las la-parking"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wifi Gratuit">
                                                    <i class="las la-wifi"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Servicii Curatenie">
                                                    <i class="las la-quidditch"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Sala Fitness">
                                                    <i class="las la-dumbbell"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Receptie">
                                                    <i class="las la-receipt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-view-contents-bottom">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents">
                                                    <h4 class="hotel-view-contents-bottom-title"> <?php echo $camera_triple ?> RON <sub>/ Noapte</sub> </h4>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="reservation.php?room=Room-Triple" class="cmn-btn btn-bg-1 btn-small"> Rezerva acum </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Room #4 -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="hotel-view bg-white radius-20">
                                    <a href="room_4_double_simple.php" class="hotel-view-thumb hotel-view-grid-thumb bg-image" style="background-image: url(assets/images_hotel/rooms/Room_4_Double_Simple/cover.jpg);">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <h3 class="hotel-view-contents-title text-center"> <a href="room_4_double_simple.php"> Camera Dubla Simpla </a> </h3>
                                        </div>
                                        <div class="hotel-view-contents-middle">
                                            <div class="hotel-view-contents-flex">
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Parcare">
                                                    <i class="las la-parking"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wifi Gratuit">
                                                    <i class="las la-wifi"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Servicii Curatenie">
                                                    <i class="las la-quidditch"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Sala Fitness">
                                                    <i class="las la-dumbbell"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Receptie">
                                                    <i class="las la-receipt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-view-contents-bottom">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents">
                                                    <h4 class="hotel-view-contents-bottom-title"> <?php echo $camera_double_simple ?> <sub>/ Noapte</sub> </h4>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="reservation.php?room=Room-DoubleSimple" class="cmn-btn btn-bg-1 btn-small"> Rezerva acum </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Room #5 -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="hotel-view bg-white radius-20">
                                    <a href="room_5_twin.php" class="hotel-view-thumb hotel-view-grid-thumb bg-image" style="background-image: url(assets/images_hotel/rooms/Room_5_Twin/cover.jpg);">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <h3 class="hotel-view-contents-title text-center"> <a href="room_5_twin.php"> Camera Twin </a> </h3>
                                        </div>
                                        <div class="hotel-view-contents-middle">
                                            <div class="hotel-view-contents-flex">
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Parcare">
                                                    <i class="las la-parking"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wifi Gratuit">
                                                    <i class="las la-wifi"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Servicii Curatenie">
                                                    <i class="las la-quidditch"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Sala Fitness">
                                                    <i class="las la-dumbbell"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Receptie">
                                                    <i class="las la-receipt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-view-contents-bottom">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents">
                                                    <h4 class="hotel-view-contents-bottom-title"> <?php echo $camera_twin ?> RON <sub>/ Noapte</sub> </h4>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="reservation.php?room=Room-Twin" class="cmn-btn btn-bg-1 btn-small"> Rezerva acum </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Room #6 -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="hotel-view bg-white radius-20">
                                    <a href="room_6_4_guests.php" class="hotel-view-thumb hotel-view-grid-thumb bg-image" style="background-image: url(assets/images_hotel/rooms/Room_6_4_Guests/cover.jpg);">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <h3 class="hotel-view-contents-title text-center"> <a href="room_6_4_guests.php"> Camera 4 Persoane </a> </h3>
                                        </div>
                                        <div class="hotel-view-contents-middle">
                                            <div class="hotel-view-contents-flex">
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Parcare">
                                                    <i class="las la-parking"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wifi Gratuit">
                                                    <i class="las la-wifi"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Servicii Curatenie">
                                                    <i class="las la-quidditch"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Sala Fitness">
                                                    <i class="las la-dumbbell"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Receptie">
                                                    <i class="las la-receipt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-view-contents-bottom">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents">
                                                    <h4 class="hotel-view-contents-bottom-title"> <?php echo $camera_four_guests ?> RON <sub>/ Noapte</sub> </h4>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="reservation.php?room=Room-FourGuests" class="cmn-btn btn-bg-1 btn-small"> Rezerva acum </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotel List area end -->
        <!-- footer area start -->
        <?php require_once "./components/footer.php" ?>
    <!-- footer area end -->
    </body>
</html>
    