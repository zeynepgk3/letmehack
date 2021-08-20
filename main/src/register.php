<?php
include "./layout/header.php";
?>

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12 m-auto text-center">

                <div class="comments-form border-box">
                    <h3 class="title-normal">Kayıt Ol</h3>

                    <form role="form" method="post" accept-charset="utf-8" action="register_script.php">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname" class="w-100"><input class="form-control" name="firstname" id="firstname" placeholder="Ad" type="text" required></label>
                                </div>
                            </div><!-- Col 4 end -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname" class="w-100"><input class="form-control" name="lastname" id="lastname" placeholder="Soyad" type="text" required></label>
                                </div>
                            </div><!-- Col 4 end -->

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nickname" class="w-100"><input class="form-control" name="nickname" id="nickname" placeholder="Kullanıcı Adı" type="text" required></label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email" class="w-100"><input class="form-control" name="email" id="email" placeholder="Email" type="email" required></label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password" class="w-100"><input class="form-control" name="password" id="password" placeholder="Parola" type="password" required></label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="confirmPassword" class="w-100"><input class="form-control" name="confirmPassword" placeholder="Parolanı Doğrula" type="password" required></label>
                                </div>
                            </div>

                        </div><!-- Form row end -->
                        <div class="clearfix">
                            <button class="btn btn-primary" type="submit" aria-label="register">Kaydol</button>
                        </div>
                    </form><!-- Form end -->
                </div><!-- Comments form end -->

            </div><!-- Main row end -->

        </div><!-- Conatiner end -->
</section><!-- Main container end -->
