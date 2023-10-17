
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--font logo link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Kevin Coating</title>
  <link rel="stylesheet" href="style.css">
  <!--<style>
    body{ background-color: black;

    }
  </style>-->
</head>

<body>
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3">
              <?php
              $sql = "SELECT * FROM footer WHERE imgcat='heading'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
              </i><?php echo $desc; ?>
            </h6>
            <?php
              $sql = "SELECT * FROM footer WHERE imgcat='description'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
            <p>
            <?php echo $desc; ?>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <?php
              $sql = "SELECT * FROM footer WHERE imgcat='heading1'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
            <h6 class="text-uppercase fw-bold mb-4">
            <?php echo $desc; ?>
            </h6>
            <p>
              <?php
              $sql = "SELECT * FROM footer WHERE imgcat='product1'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
              <a href="products.php" class="text-reset"><?php echo $desc; ?></a>
            </p>
            <p>
              <?php
              $sql = "SELECT * FROM footer WHERE imgcat='product2'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
              <a href="products.php" class="text-reset"><?php echo $desc; ?></a>
            </p>
            <p>
              <?php
              $sql = "SELECT * FROM footer WHERE imgcat='product3'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
              <a href="products.php" class="text-reset"><?php echo $desc; ?></a>
            </p>
            <p>
              <?php
              $sql = "SELECT * FROM footer WHERE imgcat='product4'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
              <a href="products.php" class="text-reset"><?php echo $desc; ?></a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <?php
              $sql = "SELECT * FROM footer WHERE imgcat='heading2'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
            <h6 class="text-uppercase fw-bold mb-4">
            <?php echo $desc; ?>
            </h6>
            <p>
              <?php
              $sql = "SELECT * FROM footer WHERE imgcat='link1'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
              <a href="admin/login.php" class="text-reset"><?php echo $desc; ?></a>
            </p>
            <p>
              <?php
              $sql = "SELECT * FROM footer WHERE imgcat='link2'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
              <a href="#!" class="text-reset"><?php echo $desc; ?></a>
            </p>
            <p>
              <?php
              $sql = "SELECT * FROM footer WHERE imgcat='link3'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
              <a href="#!" class="text-reset"><?php echo $desc; ?></a>
            </p>
            <p>
              <?php
              $sql = "SELECT * FROM footer WHERE imgcat='link4'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
              <a href="aboutus.php" class="text-reset"><?php echo $desc; ?></a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <?php
              $sql = "SELECT * FROM footer WHERE imgcat='heading3'";
              $result = mysqli_query($conn, $sql);

              $count = mysqli_num_rows($result);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $img = $row['img'];
                  $desc = $row['desc'];
                  // if($img = "")
                  // {
                  //   echo "There is no image";
                  // }
                }
              }
              ?>
            <h6 class="text-uppercase fw-bold mb-4"><?php echo $desc; ?></h6>

            <p>
              <i class="fas fa-home me-3">
                <?php
                $sql = "SELECT * FROM footer WHERE imgcat='address'";
                $result = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($result);
                if ($count > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $img = $row['img'];
                    $desc = $row['desc'];
                    // if($img = "")
                    // {
                    //   echo "There is no image";
                    // }
                  }
                }
                ?>
              </i> <?php echo $desc; ?>
            </p>
            <p>
              <i class="fas fa-envelope me-3">
                <?php
                $sql = "SELECT * FROM footer WHERE imgcat='mailid'";
                $result = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($result);
                if ($count > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $img = $row['img'];
                    $desc = $row['desc'];
                    // if($img = "")
                    // {
                    //   echo "There is no image";
                    // }
                  }
                }
                ?>

              </i>
              <?php echo $desc; ?>
            </p>
            <p><i class="fas fa-phone me-3">
                <?php
                $sql = "SELECT * FROM footer WHERE imgcat='contactno'";
                $result = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($result);
                if ($count > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $img = $row['img'];
                    $desc = $row['desc'];
                    // if($img = "")
                    // {
                    //   echo "There is no image";
                    // }
                  }
                }
                ?>
              </i> <?php echo $desc; ?></p>
            <p><i class="fas fa-print me-3">
                <?php
                $sql = "SELECT * FROM footer WHERE imgcat='faxno'";
                $result = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($result);
                if ($count > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $img = $row['img'];
                    $desc = $row['desc'];
                    // if($img = "")
                    // {
                    //   echo "There is no image";
                    // }
                  }
                }
                ?>
              </i> <?php echo $desc; ?></p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Kevincoating.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  </section>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>