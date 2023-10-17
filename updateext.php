<?php include('constants.php');?>

<?php
    //Check whether id is set or not
    if(isset($_GET['id']))
    {
        //Get all the details
        $id = $_GET['id'];

        //SQL Query to get the selected food
        $sql2 = "SELECT * FROM exterior WHERE e_id=$id";

        //Execute the Query
        $res2 = mysqli_query($conn, $sql2);

        //Get the value based on query executed
        $row2 = mysqli_fetch_assoc($res2);

        //Get the individual values of selected food
        $title = $row2['e_products'];
        $current_image = $row2['eimage'];

    }
    else
    {
        //Redirect to manage-food
        header('location:addexteriorpro.php');
    }
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Exterior Products</h1>
        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">

        <table class="tbl-30">
            <tr>
                <td>Title </td>
                <td>
                    <input type="text" name="title" value="<?php echo $title;?>">
                </td>
            </tr>

            <tr>
                <td>Current Image </td>
                <td>
                    <?php
                    if($current_image=="")
                    {
                        //Image not available
                        echo "<div class='error'>Image not available.</div>";
                    }
                    else
                    {
                        //Image available
                        ?>
                        <img src="images/<?php echo $current_image;?>" width="150px">
                        <?php
                    }

                    ?>
                </td>
            </tr>

            <tr>
                <td>Select New Image </td>
                <td>
                    <input type="file" name="image">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="hidden" name="current_image" value="<?php echo $current_image?>">
                    
                    <input type="submit" name="submit" value="Update Exterior" class="btn-secondary">
                </td>
            </tr>

        </table>

        </form>

        <?php

            if(isset($_POST['submit']))
            {
                // echo "Button clicked";

                //GEt all the details from the form
                $id = $_POST['id'];
                $title = $_POST['title'];
                $current_image = $_POST['current_image'];

                //Upload the image if selected
                //Check whether upload button is clicked or not
                if(isset($_FILES['image']['name']))
                {
                    //Upload Button clicked
                    $image_name = $_FILES['image']['name']; //New Image name

                    //Check whether the file is available or not
                    if($image_name!="")
                    {
                        //Image is available
                        //Rename the image
                        $ext = end(explode('.', $image_name)); //Get the extention of image
                        $image_name = "Food_Name_".rand(0000, 9999).'.'.$ext;

                        //Get the source path and destination path
                        $src_path = $_FILES['image']['tmp_name']; //Source path
                        $dest_path = "images/".$image_name; //Destination path

                        //Upload the image
                        $upload = move_uploaded_file($src_path, $dest_path);

                        //Check whether the image is uploaded or not
                        if($upload==FALSE)
                        {
                            //Failed to upload
                            $_SESSION['upload'] = "<div class='error'>Failed to upload the image.</div>";
                            header('location:addexteriorpro.php');

                            die();
                        }

                        //Remove the current image if available
                        if($current_image!="")
                        {
                            //Image available
                            //Remove the image
                            $remove_path = "images/".$current_image;

                            $remove = unlink($remove_path);

                            //Check whether the image is removed or not
                            if($remove==FALSE)
                            {
                                //Failed to remove image
                                $_SESSION['remove-failed'] = "<div class='error'>Failed to remove current image.</div>";
                                header('location:addexteriorpro.php');

                                die();
                            }
                        }
                    }
                    else
                    {
                        $image_name = $current_image; //Default image when image is not selected    
                    }
                }
                else
                {
                    $image_name = $current_image; //Default image when button is not clicked
                }

                //Update the Product in database
                $sql3 = "UPDATE exterior SET
                    e_products = '$title',
                    eimage = '$image_name'
                    WHERE e_id =$id;
                ";

                //Execute the SQL Query
                $res3 = mysqli_query($conn, $sql3);

                //Check if the Query is executed or not
                if($res3==TRUE)
                {
                    //Query Executed and Product updated
                    $_SESSION['update'] = "<div class='success'>Product Update Successfully.</div>";
                    header('location:addexteriorpro.php');
                }
                else
                {
                    //Failed to update
                    $_SESSION['update'] = "<div class='error'>Failed to Update Food.</div>";
                    header('location:addexteriorpro.php');
                }

            }

        ?>

    </div>
</div>