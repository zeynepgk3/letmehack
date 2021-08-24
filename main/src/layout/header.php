<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>LetMeHack</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="assets/images/logo.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="assets/plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="assets/plugins/slick/slick.css">
  <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="assets/plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    function get_cookie(name) {
      console.log("getcookie");
      return document.cookie.split(';').some(c => {
        return c.trim().startsWith(name + '=');
      });
    }

    function delete_cookie(name, path, domain) {
      console.log("delete cookie");
      if (get_cookie(name)) {
        document.cookie = name + "=" +
          ((path) ? ";path=" + path : "") +
          ((domain) ? ";domain=" + domain : "") +
          ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
      }
      location.reload();
    }
  </script>

</head>

<body>
  <div class="body-inner">

    <!-- Header start -->
    <header id="header" class="header-two">
      <div class="site-navigation">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">

                <div class="logo">
                  <a class="d-block" href="index.php">
                    <h1>LetMeHack</h1>
                  </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>


                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav ml-auto align-items-center">
                    <li class="nav-item dropdown">
                      <a href="lablist.php" class="nav-link" style="color:#ffb600!important ">Tüm Lablar</a>
                    </li>
                    <li class="nav-item dropdown">
                      <p>         </p>
                    </li>
                    <!-- <li class="nav-item"><a class="nav-link" href="contact.html">Anasayfa</a></li> -->
                    <?php if (isset($_COOKIE["userInfo"])) {
                    ?>

                      <li class="nav-item dropdown">
                        <a class="nav-link disabled" style="color:blue">
                          <?php
                          $userInfo = unserialize($_COOKIE['userInfo']);
                          echo $userInfo["nickname"];
                          ?>
                        </a>
                      </li>

                      <li class="header-get-a-quote">
                        <button class="btn btn-danger" onclick="delete_cookie('userInfo')">Çıkış Yap</button>
                      </li>
                    <?php
                    } else {
                    ?>
                      <li class="header-get-a-quote">
                        <button class="btn btn-primary"><a href="register.php">Kayıt</a></button>
                      </li>
                      <li class="header-get-a-quote">
                      <button class="btn btn-primary"><a href="login.php">Giriş</a></button>
                      </li>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
              </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->
        </div>
        <!--/ Container end -->

      </div>
      <!--/ Navigation end -->
    </header>
    <!--/ Header end -->