<?php

    include('../constants.php');

    // echo "delete info ...";

    if(isset($_GET['id']) && isset($_GET['image_name']))
    {
        //Process to delete
        //Get id and image_name
        $id= $_GET['id'];
        $image_name = $_GET['image_name'];

        //Remove the image if available
        //Check whether the image is available or not and delete only if available
        if($image_name!="")
        {
            //It has image and need to remove from folder
            //Get the image path
            $path = "../images/".$image_name;

            //REmove image file from folder
            $remove = unlink($path);

            //Check whether the image is removed or not
            if($remove==FALSE)
            {
                //Failed to remove image
                $_SESSION['upload'] = "<div class='error'>Failed to remove image file.</div>";
                header('location:addinfo.php');

                //Stop the process of deleting product
                die();
            }
        }

        //Delete product from database
        $sql = "DELETE FROM Home WHERE id = $id";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the Query is executed or not and set the sessiob accordingly
        if($res==TRUE)
        {
            //info deleted
            echo "Info deleted successfully.";
            header('location:addinfo.php');
        }
        else
        {
            //Failed to delete product
            echo "Failed to delete info.";
            header('location:addinfo.php');
        }

    }
    else
    {
        //Redirect to manage-product page
        echo "Unauthorized access.";
        header('location:addinfo.php');
    }
?>