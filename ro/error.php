<!DOCTYPE html>
<html lang="ro">
<head>
<!-- Header -->
    <?php require_once "./components/header.php" ?>
    <!-- Header end -->
    <!-- Error Area starts -->
    <!-- Confirmation area Starts -->
    <section class="confirmation-area section-bg-2 pat-100 pab-100">
        <div class="container">
            <div class="confirmation-contents center-text">
                <div class="confirmation-contents-icon bg-danger">
                    <i class="las la-times"></i>
                </div>
                <h4 class="confirmation-contents-title text-danger"> Hopa! S-a intamplat o eroare in trimiterea formularului. </h4>
                <h4 class="confirmation-contents-title text-danger"> (sau site-ul nostru a detectat ca sunteti robot) </h4>
                <h2 class="error-contents-title pt-4"> Incercati sa ne contactati pe <a class="link-primary" href='mailto:office@hotel-olimp.ro'>office@hotel-olimp.ro</a></h2>
                <div class="btn-wrapper flex-btn mt-4 mt-lg-5">
                    <a href="index.php" class="cmn-btn btn-outline-1 color-one"> Inapoi acasa </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Error Area ends -->
    <!-- footer area start -->
    <?php require_once "./components/footer.php" ?>
    <!-- footer area end -->
    </body>
</html>
    