<?php include('constants.php');?>
<html>
    <head>
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>
           Interior Products
        </title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">kevin Coating</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="products.php">products <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="services.php">services <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="aboutus.php">aboutus <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
         <!-- <li class="nav-item active">
          <a class="nav-link" href="admin.php">Login <span class="sr-only">(current)</span></a>
        </li> -->
      </ul>
      
      </div>
    </nav>





    <!-- Main Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage interior products</h1>
                <br><br><br>

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //Displaying session message...
                        unset($_SESSION['add']); //Removing the session message after refreshing the page...
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);
                    }

                    if(isset($_SESSION['pwd-not-match']))
                    {
                        echo $_SESSION['pwd-not-match'];
                        unset($_SESSION['pwd-not-match']);
                    }

                    if(isset($_SESSION['change-pwd']))
                    {
                        echo $_SESSION['change-pwd'];
                        unset($_SESSION['change-pwd']);
                    }

                ?>
                <br><br><br>

                <!-- Button to Add Admin-->
                <a href="addinteriorpro.php" class="btn-primary">Add Interior Products</a>
                
                <br><br><br>

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Product</th>
                        <th>Images</th>
                        <th>Actions</th>
                    </tr>

                        <?php
                            //Query to get all table
                            $sql = "SELECT * FROM interior";

                            //Execute the query
                            $res = mysqli_query($conn, $sql);

                            //Check whether the query is executed or not
                            if($res==TRUE)
                            {
                                //Count Rows to check whether we have the data in database or not
                                $count = mysqli_num_rows($res);

                                $sn =  1; //Create variable and assign value 1

                                //Check number of rows
                                if($count>0)
                                {
                                    //WE have data in database
                                    while($rows=mysqli_fetch_assoc($res))
                                    {
                                        //Using while loop to get all the data from database
                                        //And while loop will execute as long as we have data in database

                                        //Get individual data
                                        $id=$rows['i_id'];
                                        $products=$rows['i_products'];
                                        $image_name=$rows['i_images'];

                                        //Display the values in table
                                        ?>
                                         
                                         <tr>
                                            <td><?php echo $sn++; ?></td>
                                            <td><?php echo $products; ?></td>
                                            <td><?php echo $image_name; ?></td>
                                            <td>
                                                <a href="updateint.php?id=<?php echo $id;?>" class="btn-secondary">Update Interior</a>
                                                <a href="deleteint.php?id=<?php echo $id;?>&image_name=<?php echo $image_name;?>" class="btn-danger">Delete Interior</a>
                                            </td>
                                        </tr>                     
                                         
                                        <?php
                                    }
                                }
                                else
                                {
                                    //We don't have data in database
                                }
                            }
                        ?>
                </table>
                
                <div class="clear-fix"></div>
            </div>
        </div>
        <!-- Main Section ends -->


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

</body>
</html>