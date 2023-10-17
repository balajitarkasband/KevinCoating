<?php include('constants.php');?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Add Products</h1>

            <br><br>

            <?php
                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }

            ?>

            <form action="" method="POST" enctype="multipart/form-data">

                <table class="tbl-30">
                    <tr>
                        <td>Title </td>
                        <td>
                            <input type="text" name="title" placeholder="Title of the product">
                        </td>
                    </tr>

                    <tr>
                        <td>Select Image </td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>

                   
                    <tr>
                        <td colspan="1">
                            <input type="submit" name="submit" value="Add Products" class="btn-secondary">
                        </td>
                    </tr>
                </table>

            </form>

            <?php

                //Check whether the button is clicked or not
                if(isset($_POST['submit']))
                {
                    //Add the products in database
                    //echo "products Added";

                    //Get the data from form
                    $title = $_POST['title'];

                    
                    //Upload the image if selected
                    //Check whether the select image is clicked or not and upload the image only if the image is selected
                    if(isset($_FILES['image']['name']))
                    {
                        //Get the details of the selected image
                        $image_name = $_FILES['image']['name'];

                        //Check wheher image is selected or not and upload the image only if selected
                        if($image_name!="")
                        {
                            //Image is selected
                            //Rename the image
                                //Get the extension of image (jpg, png, jpeg, etc. e.g. "products.jpg")
                                $ext = end(explode('.', $image_name));

                                //Create new name for image
                                $image_name = "Product_Name_".rand(000, 999).'.'.$ext; //e.g. "products_Name_007.jpg"

                            //Upload the image
                            //Get the source path and destination path

                            //Src path is the current location of the image
                            $src = $_FILES['image']['tmp_name'];

                            //Destination path for the image to be uploaded
                            $dst = "images/".$image_name;

                            //Finally upload the products image
                            $upload = move_uploaded_file($src, $dst);
                            
                            //Check whether image uploaded or not
                            if($upload==FALSE)
                            {
                                //Failed to upload the image
                                //Redirect to add-products page with error message
                                $_SESSION['upload'] = "<div class='error'>Failed to upload the image.</div>";
                                header('location:viewpro.php');
                                
                                //Stop the process
                                die();
                            }

                        }
                    }
                    else
                    {
                        $image_name = ""; //Setting default value as blank
                    }

                    //Insert to database
                    //Create a SQL Query to save our Add products
                    $sql2 = "INSERT INTO products SET
                        products = '$title',
                        p_images = '$image_name'
                    ";

                    //Execute the Query
                    $res2 = mysqli_query($conn, $sql2);

                    //Check whether the data is inserted
                    if($res2==TRUE)
                    {
                        //Data inserted successfully
                        $_SESSION['add'] = "<div class='success'>Product Added Successfully.</div>";
                        header('location:addproducts.php');
                    }
                    else
                    {
                        //Failed to insert data
                        $_SESSION['add'] = "<div class='error'>Failed to Add Product.</div>";
                        header('location:admin.php');
                    }

                }

            ?>

        </div>
    </div>
