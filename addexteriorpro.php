    <?php include('constants.php');?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Add Exterior</h1>

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
                            <input type="submit" name="submit" value="Add Exterior" class="btn-secondary">
                        </td>
                    </tr>
                </table>

            </form>

            <?php

                //Check whether the button is clicked or not
                if(isset($_POST['submit']))
                {
                    //Add the exterior in database
                    //echo "exterior Added";

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
                                //Get the extension of image (jpg, png, jpeg, etc. e.g. "exterior.jpg")
                                $ext = end(explode('.', $image_name));

                                //Create new name for image
                                $image_name = "exterior_Name_".rand(000, 999).'.'.$ext; //e.g. "exterior_Name_007.jpg"

                            //Upload the image
                            //Get the source path and destination path

                            //Src path is the current location of the image
                            $src = $_FILES['image']['tmp_name'];

                            //Destination path for the image to be uploaded
                            $dst = "images/".$image_name;

                            //Finally upload the exterior image
                            $upload = move_uploaded_file($src, $dst);
                            
                            //Check whether image uploaded or not
                            if($upload==FALSE)
                            {
                                //Failed to upload the image
                                //Redirect to add-exterior page with error message
                                $_SESSION['upload'] = "<div class='error'>Failed to upload the image.</div>";
                                header('location:viewext.php');
                                
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
                    //Create a SQL Query to save our Add exterior
                    $sql2 = "INSERT INTO exterior SET
                        e_products = '$title',
                        eimage = '$image_name'
                    ";

                    //Execute the Query
                    $res2 = mysqli_query($conn, $sql2);

                    //Check whether the data is inserted
                    if($res2==TRUE)
                    {
                        //Data inserted successfully
                        $_SESSION['add'] = "<div class='success'>exterior Added Successfully.</div>";
                        header('location:addexteriorpro.php');
                    }
                    else
                    {
                        //Failed to insert data
                        $_SESSION['add'] = "<div class='error'>Failed to Add exterior.</div>";
                        header('location:admin.php');
                    }

                }

            ?>

        </div>
    </div>
