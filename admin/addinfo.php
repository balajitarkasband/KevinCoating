<?php include('../constants.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">
    <style>
        table, th, td{
            padding:20px;
        }
    </style>
</head>
<body class ="container">

        <form action="" method="POST">
        <table class="tbl-full">
    <tr>
        <th>S.N.</th>
        <th>Desc1</th>
        <th>Img1</th>
        <th>Img cat</th>
        <th colspan=2>Actions</th>
        <th><a href="changeinfo.php">Add Info</a></th>
    </tr>

    <?php
        //Create SQL Query to get all the products
        $sql = "SELECT * FROM action";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Count rows to check whether we have products or not
        $count = mysqli_num_rows($res);

        //Create Serial Number variable and set deault value as 1
        $sn = 1;

        if($count>0)
        {
            //WE have products in database
            //GEt the products from database and display
            while($row=mysqli_fetch_assoc($res))
            {
                //get the value from individual columns
                $id = $row['id'];
                $description1 = $row['desc'];
                $img1 = $row['img'];
                $imgcat = $row['imgcat'];
                ?>
                <tr>
                        <td><?php echo $sn++;?>.</td>
                        <td><?php echo $description1;?></td>
                        <td>
                            <?php 
                                //Check whether we have image or not
                                if($img1=="")
                                {
                                    //We don't have image
                                    echo "<div class='error'>Image not added.</div>";
                                }
                                else
                                {
                                    ?>
                                        <img src="../images/<?php echo $img1;?>" width="100px">
                                    <?php    
                                }
                            
                            ?>
                        </td>
                        <td><?php echo $imgcat;?></td>
                        <td>
                            <a href="infoupdate.php?id=<?php echo $id;?>" class="btn-secondary">Update</a>
                            <a href="infodelete.php?id=<?php echo $id; ?>&image_name=<?php echo $img1; ?>" class="btn-danger">Delete</a>
                        </td>
                </tr>

                <?php
            }
        }
        else
        {
            //products not added in database
            echo "<tr><td colspan='7' class='error'>Empty Table.</td></tr>";
        }
    ?>

</table>
</form>
<?php include('footer.php');?>
</body>
</html>