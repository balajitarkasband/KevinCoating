<?php include('constants.php'); ?>
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

  <?php
  if (isset($_SESSION['login'])) {
    echo $_SESSION['login'];
    unset($_SESSION['login']);
  }

  if (isset($_SESSION['no-login-message'])) {
    echo $_SESSION['no-login-message'];
    unset($_SESSION['no-login-message']);
  }
  
  ?>
  <?php include('navbar.php'); ?>

  
  
 


  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <?php
        $sql = "SELECT * FROM Home WHERE imgcat='Corosol1'";
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
        <img class="d-block w-100" src="images/<?php echo $img; ?>" alt="First slide">

      </div>
      <div class="carousel-item">
        <?php
        $sql = "SELECT * FROM Home WHERE imgcat='Corosol2'";
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
        <img class="d-block w-100" src="images/<?php echo $img; ?>" alt="Second slide">
      </div>
      <div class="carousel-item">
        <?php
        $sql = "SELECT * FROM Home WHERE imgcat='Corosol3'";
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
        <img class="d-block w-100" src="images/<?php echo $img; ?>" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>






  <div class="heading1">
    <h1> </h1>
    <p> </p>
  </div>
  <div class="container1">
    <section class="home">
      <div class="home-image">
        <?php
        $sql = "SELECT * FROM Home WHERE imgcat='Home'";
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
        <img src="images/<?php echo $img; ?>">
      </div>
      <div class="home-content">
        <h2>one of the best coating company</h2>
        <p><?php echo $desc; ?></p>
        <a href="" class="read-more"> read-more</a>
      </div>
    </section>
  </div>


  </section>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <?php include('footer1.php');?>
</body>

</html>