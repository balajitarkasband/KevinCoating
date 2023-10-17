<html>
    <head>
        <title>
            Admin Panel
        </title>
    </head>
    <body>
<?php include('menu.php');?>

        
        <!-- Main Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Dashboard</h1>
                <br>
                <img src="https://t3.ftcdn.net/jpg/03/48/55/20/360_F_348552050_uSbrANL65DNj21FbaCeswpM33mat1Wll.jpg"  width="1520" height="800">

               <!-- <?php
                //if(isset($_SESSION['login']))
                //{
                  //  echo $_SESSION['login'];
                    //unset($_SESSION['login']);
                //}
                ?>
                <br>

                //<div class="col-4 text-center">
                  //  <?php
                        //SQL Query
                     //   $sql="SELECT * FROM tbl_category";

                        //Execute Query
                       // $res=mysqli_query($conn, $sql);

                        //Count the rows
                       // $count=mysqli_num_rows($res);
                    ?>
                   
                    <br>
                    Categories
                </div>

                <div class="col-4 text-center">
                <?php
                        //SQL Query
                       // $sql2="SELECT * FROM ";

                        //Execute Query
                        //$res2=mysqli_query($conn, $sql2);

                        //Count the rows
                        //$count2=mysqli_num_rows($res2);
                    ?>
                    <h1><?php echo $count2;?></h1>
                    <br>
                  Products
                </div>
                
              

                <div class="col-4 text-center">
                    <?php
                        //Create SQL Query to get total revenue generated
                        //Aggregate function in SQL
                       // $sql4 = "SELECT SUM(TOTAL) AS Total FROM tbl_order WHERE STATUS='Delivered'";

                        //$res4 = mysqli_query($conn, $sql4);

                        //Get the value
                        //$row4=mysqli_fetch_assoc($res4);
                        
                        //GEt the Total Revenue
                        //$total_revenue=$row4['Total'];

                    ?>
                    
                    //<h1><?php echo $total_revenue;?> </h1>
                    <br>
                    
                </div>
                -->

                <div class="clear-fix"></div>
            </div>
        </div>
        <!-- Main Section ends -->
<?php include('footer.php');?>
    </body>
</html>