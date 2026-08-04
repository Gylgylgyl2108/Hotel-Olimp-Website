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
                            <h4 class="breadcrumb-contents-title">
                                Cerere de rezervare
                            </h4>
                            <ul class="breadcrumb-contents-list list-style-none">
                                <li class="breadcrumb-contents-list-item">
                                    <a
                                        href="index.php"
                                        class="breadcrumb-contents-list-item-link"
                                    >
                                        Acasa
                                    </a>
                                </li>
                                <li class="breadcrumb-contents-list-item">
                                    Cerere de rezervare
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area end -->

        <!-- Booking iframe -->
        <div class="container pat-50">
            <div class="row">
                <div class="col-lg-12 mt-0 mb-5">
                    <div class="contact-contents text-center section-title">
                        <h2 class="fw-bold">Rezervare - Hotel Olimp</h2>
                        <div class="section-title-shapes mb-4"></div>

                        <iframe
                            class="iframe booking-iframe"
                            src=""
                            id="zarezerwuj"
                            title="Motor de rezervări Hotel Olimp"
                            style="overflow: hidden; width: 100%; border: none"
                            scrolling="no"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.3.2/iframeResizer.min.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var iframe = document.getElementById("zarezerwuj");

                // GuestSage nu oferă momentan traducere în limba română.
                iframe.src = "https://be.guestsage.com/en/3edfc886-ae58-434c-acb6-b9e6a1ca636e";

                iFrameResize(
                    { log: false, autoResize: true, sizeWidth: false },
                    "#zarezerwuj"
                );
            });
        </script>

        <style>
            #zarezerwuj {
                width: 100%;
                height: 100%;
                min-height: 700px;
            }
        </style>
        <!-- Booking iframe end -->

    <!-- footer area start -->
    <?php require_once "./components/footer.php" ?>
    <!-- footer area end -->

    </body>
</html>
