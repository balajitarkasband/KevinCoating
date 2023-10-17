<?php include('constants.php');?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--font logo link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Hello, world!</title>
  <link rel="stylesheet" href="products.css">
  <!--<style>
    body{ background-color: black;

    }
  </style>-->
</head>

<body>
<?php include('navbar.php'); ?>



  <div class="heading">
        <h1> Our products</h1>
        <p> kevin coating is service based company</p>
    </div>



    <!--products section2-->

    <div class="heading2">
      <h1> </h1>
      <p> </p>
    </div>
    <div class="container2">
      <section class="products">
        <div class="products-image">
        <?php
  $sql = "SELECT * FROM action WHERE imgcat='Img1'";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
  if($count>0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
    $img = $row['img'];
    $desc = $row['desc'];
    // if($img = "")
    // {
    //   echo "There is no image";
    // }
  }
}
?>
          <img
            src="images/<?php echo $img;?>">
        </div>
        <div class="products-content">
          <h2>One of the best coating company</h2>
          <p><?php echo $desc;?></p>
          <a href="" class="read-more"> read-more</a>
        </div>
      </section>
    </div>
  

  <div class="store">
    <div class="external">
    <?php
  $sql = "SELECT * FROM action WHERE imgcat='alloys'";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
  if($count>0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
    $img = $row['img'];
    $desc = $row['desc'];
    // if($img = "")
    // {
    //   echo "There is no image";
    // }
  }
}
?>
      <img src="images/<?php echo $img;?>">
      <h3>Alloys </h3>
    <p>
      <?php echo $desc;?>
    </p>
    <h6>7000</h6>
    <ul>
      <li><i class="fa fa-star checked"></i></li>
      <li><i class="fa fa-star checked"></i></li>
      <li><i class="fa fa-star checked"></i></li>
      <li><i class="fa fa-star checked"></i></li>
      <li><i class="fa fa-star "></i></li>
    </ul>
    <button class="buy-1">Buy Now </button>
  </div>

  <div class="external">
  <?php
  $sql = "SELECT * FROM action WHERE imgcat='tyres'";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
  if($count>0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
    $img = $row['img'];
    $desc = $row['desc'];
    // if($img = "")
    // {
    //   echo "There is no image";
    // }
  }
}
?>
    <img src="images/<?php echo $img;?>">
    <h3>Tyres </h3>
  <p><?php echo $desc;?></p>
  <h6>7000</h6>
  <ul>
    <li><i class="fa fa-star checked"></i></li>
    <li><i class="fa fa-star checked"></i></li>
    <li><i class="fa fa-star checked"></i></li>
    <li><i class="fa fa-star "></i></li>
    <li><i class="fa fa-star "></i></li>
  </ul>
  <button class="buy-2">Buy Now </button>
</div>


<div class="external">
<?php
  $sql = "SELECT * FROM action WHERE imgcat='headlight'";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
  if($count>0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
    $img = $row['img'];
    $desc = $row['desc'];
    // if($img = "")
    // {
    //   echo "There is no image";
    // }
  }
}
?>

  <img src="images/<?php echo $img;?>">
  <h3>Headlights </h3>
<p><?php echo $desc;?></p>
<h6>7000</h6>
<ul>
  <li><i class="fa fa-star checked"></i></li>
  <li><i class="fa fa-star checked"></i></li>
  <li><i class="fa fa-star checked"></i></li>
  <li><i class="fa fa-star "></i></li>
  <li><i class="fa fa-star "></i></li>
</ul>
<button class="buy-3">Buy Now </button>
</div>


<div class="external">
<?php
  $sql = "SELECT * FROM action WHERE imgcat='engineoil'";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
  if($count>0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
    $img = $row['img'];
    $desc = $row['desc'];
    // if($img = "")
    // {
    //   echo "There is no image";
    // }
  }
}
?>

  <img src="images/<?php echo $img;?>">
  <h3>Engine oil </h3>
<p><?php echo $desc;?></p>
<h6>7000</h6>
<ul>
  <li><i class="fa fa-star checked"></i></li>
  <li><i class="fa fa-star checked"></i></li>
  <li><i class="fa fa-star checked"></i></li>
  <li><i class="fa fa-star "></i></li>
  <li><i class="fa fa-star "></i></li>
</ul>
<button class="buy-4">Buy Now </button>
</div>
 </div>







  <!--products section2-->

  <div class="heading2">
    <h1> </h1>
    <p> </p>
  </div>
  <div class="container2">
    <section class="products">
      <div class="products-image">
      <?php
  $sql = "SELECT * FROM action WHERE imgcat='Img2'";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
  if($count>0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
    $img = $row['img'];
    $desc = $row['desc'];
    // if($img = "")
    // {
    //   echo "There is no image";
    // }
  }
}
?>
        <img
          src="images/<?php echo $img;?>">
      </div>
      <div class="products-content">
        <h2><?php echo $desc;?>.</p>
        <a href="" class="read-more"> read-more</a>
      </div>
    </section>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <section class="">

  </section>

  <?php include('footer1.php');?>
</body>

</html>