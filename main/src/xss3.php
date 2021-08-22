<?php
session_start();
if (!isset($_SESSION['uid'])) {
    $_SESSION['uid'] = md5(uniqid());
}
if (isset($_POST['xss3'])) {
    if ($_SESSION[$_SESSION['uid']]['up'] == 1) {
        exec("sudo /usr/local/bin/docker rm -rf " . $_SESSION['uid'] . "-xss3", $output, $retval);
        $_SESSION[$_SESSION['uid']]['up'] = 0;
    } else {
        exec("sudo /usr/local/bin/docker run --rm -d --name " . $_SESSION['uid'] . "-xss3 -p 0:80 xss3", $output, $retval);
        $_SESSION[$_SESSION['uid']]['up'] = 1;
    }
}
if ($_SESSION[$_SESSION['uid']]['up']) {
    exec("sudo /usr/local/bin/docker inspect --format='{{range \$p, \$conf := .NetworkSettings.Ports}}{{(index \$conf 0).HostPort}} {{end}}' " . $_SESSION['uid'] . "-xss3", $port, $retval);
}
?>

<?php
include "./layout/header.php";
?>

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mb-5 mb-lg-0">

                <div class="post-content post-single">


                    <div class="post-body">
                        <div class="entry-header">

                            <h2 class="entry-title">
                                XSS 3
                            </h2>
                            <!-- <div class="post-meta">
                                <span class="post-author">
                                    <i class="far fa-user"></i><a href="#"> Admin</a>
                                </span>
                                <span class="post-cat">
                                    <i class="far fa-folder-open"></i><a href="#"> News</a>
                                </span>
                                <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
                                <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#" class="comments-link">Comments</a></span>
                            </div> -->

                        </div><!-- header end -->

                        <div class="entry-content">

                            <!-- <blockquote>
                                <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.<cite>-
                                        Anger Mathe</cite></p>

                            </blockquote> -->

                            <p>lab tanıtımı burada olacak tanıtım tanıtım</p>
                        </div>


                    </div><!-- post-body end -->
                </div><!-- post content end -->

                <div class="comments-form border-box">

                    <form action="?" name="xss3" method="POST">
                        <div class="clearfix">

                        <?php
                            if (@$_COOKIE['userInfo']) {
                                if (!$_SESSION[$_SESSION['uid']]['up']) {
                            ?>
                                    <button class="btn btn-success" type="submit" aria-label="post-comment" name="fi1">Labı Başlat</button>
                                <?php
                                } else {
                                ?>
                                    <button class="btn btn-danger" type="submit" aria-label="post-comment" name="fi1">Labı Kapat</button>
                                <?php
                                }
                            } else {
                                ?>
                                <h4 style="color:#ff2600">Önce giriş yapmalısınız. <a style="text-decoration:none; color:#ffb600" href="login.php">Giriş Yap</a></h4>
                            <?php

                            }

                            ?>
                            
                        </div>
                    </form>
                    <br><br><br>
                    <?php
                    if ($_SESSION[$_SESSION['uid']]['up']) {
                    ?>
                        <h6>Aşağıdaki linkten laba gidiniz:</h6>
                        <a target="_blank"href="http://localhost:<?php echo $port[0]; ?>/xss3.php">http://localhost:<?php echo $port[0]; ?> </a>
                    <?php
                    }
                    ?>


                    <!-- <button><a href="http://localhost:8080" target="_blank">Admin Panel</a></button>
                    <button><a href="dbcontrol.php" target="_blank">VeriTabanı Bağlantı Kontrolü</a></button> -->


                </div><!-- Comments form end -->
            </div><!-- Content Col end -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="post-media post-image">
                    <img loading="lazy" src="assets/images/who.svg" class="img-fluid" alt="post-image">
                </div>
            </div>

        </div><!-- Main row end -->

    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php
include "./layout/footer.php";
?>