<?php
include "./layout/header.php";
?>

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12 m-auto text-center">

                <div class="comments-form border-box">
                    <h3 class="title-normal">Giriş Yap</h3>

                    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email" class="w-100"><input class="form-control" name="email" id="email" placeholder="Email" type="email" required></label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password" class="w-100"><input class="form-control" id="password" placeholder="Parola" type="password" required></label>
                                </div>
                            </div>

                        </div><!-- Form row end -->
                        <div class="clearfix">
                            <button class="btn btn-primary" type="submit" aria-label="register">Giriş Yap</button>
                        </div>
                    </form><!-- Form end -->
                </div><!-- Comments form end -->

            </div><!-- Main row end -->

        </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php
if ($_POST["password"] === $_POST["confirm_password"]) {
    echo "<h1>doğru girdiniz</h1>";
    }
    else {
        echo "yanlış girdiniz";
}

include "./layout/footer.php";
?>