<?php include('menu.php');?>
<?php include('../constants.php');?>

<?php
    // Check whether id is set or not
    if(isset($_GET['id']))
    {
        // Get all the details
        $id = $_GET['id'];

        // SQL Query to get the selected products
        $sql2 = "SELECT * FROM Home WHERE id=$id";

        // Execute the Query
        $res2 = mysqli_query($conn, $sql2);

        // Get the value based on the executed query
        $row2 = mysqli_fetch_assoc($res2);

        // Get the individual values of the selected products
        $description = $row2['desc'];
        $current_image = $row2['img'];
        $imgcat = $row2['imgcat'];
    }
    else
    {
        // Redirect to manage-products
        // header('location:addinfo.php');
        echo mysqli_error($conn);
    }
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Info</h1>
        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">

        <table class="tbl-30">
            <tr>
                <td>Description </td>
                <td>
                    <input type="text" name="description" value="<?php echo $description;?>">
                </td>
            </tr>

            <tr>
                <td>Category </td>
                <td>
                    <input type="text" name="imgcat" value="<?php echo $imgcat;?>">
                </td>
            </tr>
            
            <tr>
                <td>Current Image </td>
                <td>
                    <?php
                    if($current_image=="img")
                    {
                        // Image not available
                        echo "<div class='error'>Image not available.</div>";
                    }
                    else
                    {
                        // Image available
                        ?>
                        <img src="../images/<?php echo $current_image;?>" width="150px">
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
                <td>Category </td>
                <td>
                    <select name="category">

                        <?php

                            // Query to get active categories
                            $sql = "SELECT * FROM Home";

                            // Execute the Query
                            $res = mysqli_query($conn, $sql);

                            // Count rows
                            $count = mysqli_num_rows($res);

                            // Check whether the category is available or not
                            if($count>0)
                            {
                                // Category available
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $category_title = $row['imgcat'];
                                    $category_id = $row['id'];

                                    // echo "<option value='$category_id'>$category_title</option>";
                                    ?>

                                    <option <?php if($imgcat==$category_id){echo "selected";} ?> value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>

                                    <?php
                                }
                            }
                            else
                            {
                                // Category not available
                                echo "<option value='0'>Category not available.</option>";
                            }
                        ?>

                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="hidden" name="current_image" value="<?php echo $current_image?>">
                    
                    <input type="submit" name="submit" value="Update Info" class="btn-secondary">
                </td>
            </tr>

        </table>

        </form>

        <?php

            if(isset($_POST['submit']))
            {
                // echo "Button clicked";

                // Get all the details from the form
                $id = $_POST['id'];
                $description = $_POST['description'];
                $current_image = $_POST['current_image'];
                $category = $_POST['imgcat'];

                // Upload the image if selected
                // Check whether the upload button is clicked or not
                if(isset($_FILES['image']['name']))
                {
                    // Upload button clicked
                    $image_name = $_FILES['image']['name']; // New Image name

                    // Check whether the file is available or not
                    if($image_name!="")
                    {
                        // Image is available
                        // Rename the image
                        $img_array = explode('.', $image_name);

                        $ext = end($img_array);
                        $image_name = "img".rand(0000, 9999).'.'.$ext;

                        // Get the source path and destination path
                        $src_path = $_FILES['image']['tmp_name']; // Source path
                        $dest_path = "../images/".$image_name; // Destination path

                        // Upload the image
                        $upload = move_uploaded_file($src_path, $dest_path);

                        // Check whether the image is uploaded or not
                        if($upload==FALSE)
                        {
                            // Failed to upload
                            // $_SESSION['upload'] = "<div class='error'>Failed to upload the image.</div>";
                            echo "Failed to upload the image";
                            header('location:adminhome1.php');

                            die();
                        }

                        // Remove the current image if available
                        if($current_image!="")
                        {
                            // Image available
                            // Remove the image
                            $remove_path = "../images/".$current_image;

                            $remove = unlink($remove_path);

                            // Check whether the image is removed or not
                            if($remove==FALSE)
                            {
                                // Failed to remove image
                                // $_SESSION['remove-failed'] = "<div class='error'>Failed to remove the current image.</div>";
                                echo "Failed to remove the current image";
                                header('location:updatehome.php');

                                die();
                            }
                        }
                    }
                    else
                    {
                        $image_name = $current_image; // Default image when image is not selected    
                    }
                }
                else
                {
                    $image_name = $current_image; // Default image when button is not clicked
                }

                // Update the products in the database
                $sql3 = "UPDATE Home SET
                    `desc` = '$description',
                    img = '$image_name',
                    imgcat = '$category'
                    WHERE id=$id;
                ";

                //Execute the SQL Query
                $res3 = mysqli_query($conn, $sql3);

                //Check if the Query is executed or not
                if($res3==TRUE)
                {
                    //Query Executed and products updated
                    $_SESSION['update'] = "<div class='success'>products Update Successfully.</div>";
                    header('location:adminhome1.php');
                }
                else
                {
                    //Failed to update
                    echo "Failed to update the record.";
                    header('location:adminhome1.php');
                }

            }

        ?>

    </div>
</div>


<?php include('footer.php');?>