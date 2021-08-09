<?php
include "layout/header.php";


$categories = array(
  array("name" => "Command Exe", "labs" => array("c1", "c2", "c3")),
  array("name" => "File Injection", "labs" => array("f1", "f2", "f3")),
  array("name" => "HTMLi", "labs" => array("h1", "h2", "h3")),
  array("name" => "SQLi", "labs" => array("s1", "s2", "s3")),
  array("name" => "XSS", "labs" => array("x1", "x2", "x3"))

);
// print_r($categories);

// foreach($categories as $cat){
//   echo "<br>$cat[name]<br>";
//   foreach($cat["labs"] as $lab){
//     echo "$lab<br>";
//   }
// }

?>

<div id="banner-area" class="banner-area" style="background-image:url(assets/images/banner/banner0.jpg)">
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-heading">
            <h1 class="banner-title">Lab Listesi</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lab Listesi</li>
              </ol>
            </nav>
          </div>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">

        <div class="accordion accordion-group accordion-classic" id="construction-accordion">
          <div class="card">
            <?php
            $i = 0;
            foreach ($categories as $cat) :
            $i++;

            ?>

              <div class="card-header p-0 bg-transparent" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapseOne">
                    <?php echo "$cat[name]" ?>
                  </button>
                </h2>
              </div>

              <div id="collapse<?=$i?>" class="collapse" aria-labelledby="headingOne" data-parent="#construction-accordion">
                <div class="card-body">
                  <ul class="list-group">
                    <?php foreach ($cat["labs"] as $cat) : ?>
                      <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                          <span><?php echo "$cat" ?></span>
                          <button class="btn btn-outline-warning">çöz</button>
                        </div>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            <?php endforeach; ?>

          </div>

        </div>
        <!--/ Accordion end -->

        <div class="gap-40"></div>

      </div><!-- Col end -->

    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->
<?php
include "layout/footer.php";
?>