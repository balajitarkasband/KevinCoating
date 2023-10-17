<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">

    <title>Document</title>
</head>

<body>
    <!--navbar starts-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php
                    $sql = "SELECT * FROM navbar WHERE imgcat='title'";
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
        <a  class="navbar-brand"> <!--<img class="img-responsive" src="images/<?php echo $img;?>" width="50" height="50">--><?php echo $desc; ?>

</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <?php
                    $sql = "SELECT * FROM navbar WHERE imgcat='home'";
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
                    <a class="nav-link" href="home.php"><?php echo $desc; ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <?php
                    $sql = "SELECT * FROM navbar WHERE imgcat='products'";
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
                    <a class="nav-link" href="products.php"><?php echo $desc; ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <?php
                    $sql = "SELECT * FROM navbar WHERE imgcat='services'";
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
                    <a class="nav-link" href="services.php"><?php echo $desc; ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <?php
                    $sql = "SELECT * FROM navbar WHERE imgcat='aboutus'";
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
                    <a class="nav-link" href="aboutus.php"><?php echo $desc; ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <?php
                    $sql = "SELECT * FROM navbar WHERE imgcat='logout'";
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
                    <a class="nav-link" href="logout.php"><?php echo $desc; ?> </a>
                </li>


                <!-- <li class="nav-item active">
          <a class="nav-link" href="admin.php">Login <span class="sr-only">(current)</span></a>
        </li> -->
            </ul>

        </div>
    </nav>
    <!--navbar ends-->
</body>

</html>