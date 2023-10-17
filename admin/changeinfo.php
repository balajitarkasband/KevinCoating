<?php include('../constants.php');?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Add Info</h1>

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
                        <td>Select Image for Card 1 </td>
                        <td>
                            <input type="file" name="img">
                        </td>
                    </tr>
                    <tr>
                    <label for="category">Choose a category:</label>
                        <select name="category" id="category">
                        <option value="Img1">Img1</option>
                        <option value="alloys">Alloys</option>
                        <option value="tyres">Tyres</option>
                        <option value="headlight">Headlight</option>
                        <option value="engineoil">Engine Oil</option>
                        <option value="Img2">Img2</option>
                        
                        </select>
                    </tr>
                    <tr>
                        <td>Description 1</td>
                        <td>
                            <textarea name="description1" cols="30" rows="5" placeholder="Descriptin of the card1"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add info" class="btn-secondary">
                        </td>
                    </tr>
                </table>

            </form>

            <?php

                //Check whether the button is clicked or not
                if(isset($_POST['submit']))
                {
                    //Add the info in database
                    
                    //Get the data from form
                    $description1 = $_POST['description1'];
                    $imgcat = $_POST['category'];
                    
                    //Check whether the radio button for featured and active is chekced or not
                    
                    //Upload the image if selected
                    //Check whether the select image is clicked or not and upload the image only if the image is selected
                    if(isset($_FILES['img']['name']))
                    {
                        //Get the details of the selected image
                        $img = $_FILES['img']['name'];

                        //Check wheher image is selected or not and upload the image only if selected
                        if($img!="")
                        {
                            //Image is selected
                            //Rename the image
                                $img_array = explode('.', $img);
                                //Get the extension of image (jpg, png, jpeg, etc. e.g. "product.jpg")
                                $ext = end($img_array);

                                //Create new name for image
                                $img = "Card1_Name_".rand(000, 999).'.'.$ext; //e.g. "product_Name_007.jpg"

                            //Upload the image
                            //Get the source path and destination path

                            //Src path is the current location of the image
                            $src = $_FILES['img']['tmp_name'];

                            //Destination path for the image to be uploaded
                            $dst = "../images/".$img;

                            //Finally upload the product image
                            $upload = move_uploaded_file($src, $dst);
                            
                            //Check whether image uploaded or not
                            if($upload==FALSE)
                            {
                                //Failed to upload the image
                                //Redirect to add-product page with error message
                                $_SESSION['upload'] = "<div class='error'>Failed to upload the image1.</div>".mysqli_error($conn);
                                header('location:newadminadd.php');
                                
                                //Stop the process
                                die();
                            }

                        }
                    }
                    else
                    {
                        $img = ""; //Setting default value as blank
                    }
                    //Insert to database
                    //Create a SQL Query to save our Add product
                    $sql2 = "INSERT INTO action(img, `desc`, imgcat) VALUES('$img','$description1','$imgcat')"; 

                    //Execute the Query
                    $res2 = mysqli_query($conn, $sql2);

                    //Check whether the data is inserted
                    if($res2==TRUE)
                    {
                        //Data inserted successfully
                        $_SESSION['add'] = "<div class='success'>Info Added Successfully.</div>";
                        header('location:addinfo.php');
                    }
                    else
                    {
                        //Failed to insert data
                        $_SESSION['add'] = "<div class='error'>Failed to Add Info.</div>";
                        header('location:addinfo.php');
                    }

                }

            ?>

        </div>
    </div>
    <?php include('footer.php');?>