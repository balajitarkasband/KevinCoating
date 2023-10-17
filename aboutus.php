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

    <title>Hello, world!</title>
    <link rel="stylesheet" href="aboutus.css">
    <!--<style>
    body{ background-color: black;

    }
  </style>-->

<script src="aboutus.js"></script>
  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("muBTIjuGn89ytA0jr");
   })();
</script>
</head>

<body>
<?php include('navbar.php'); ?>



    <div class="heading">
        <h1> About us</h1>
        <p> kevin coating is service based company</p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
            <?php
  $sql = "SELECT * FROM aboutus WHERE imgcat='Aboutus'";
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
            <div class="about-content">
                <h2>one of the best coating company</h2>
                <p><?php echo $desc;?></p>
                <a href="" class="read-more"> read-more</a>
            </div>
        </section>
    </div>

<!--contcat forn-->
    <div class="container1">
        <div class="contact">
            <div class="left"></div>
            <div class="right">
                <h2>Contact us</h2>
                <input type="text" class="field" id="name" placeholder="Your Name">
                <input type="text" class="field" id="email" placeholder="Youe Email">
                <input type="text" class="field" id="phone" placeholder="phone">
                <textarea id="message" placeholder="Message" class="field"></textarea>
                <button class="btn" onclick="sendMail()">Submit</button>
            </div>
        </div>
    </div>







   


    </section>
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
    
        <?php include('footer1.php');?>
</body>


</html>