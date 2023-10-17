<?php

    include('constants.php');

    // echo "delete Exterior Products...";

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
            $path = "images/".$image_name;

            //REmove image file from folder
            $remove = unlink($path);

            //Check whether the image is removed or not
            if($remove==FALSE)
            {
                //Failed to remove image
                $_SESSION['upload'] = "<div class='error'>Failed to remove image file.</div>";
                header('location:admin.php');

                //Stop the process of deleting food
                die();
            }
        }

        //Delete Exterior Productsfrom database
        $sql = "DELETE FROM exterior WHERE e_id = $id";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the Query is executed or not and set the sessiob accordingly
        if($res==TRUE)
        {
            //Exterior Productsdeleted
            $_SESSION['delete'] = "<div class='success'>Record Deleted Successfully.</div>";
            header('location:viewext.php');
        }
        else
        {
            //Failed to delete food
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Record.</div>";
            header('location:home.php');
        }

    }
    else
    {
        //Redirect to manage-Exterior Productspage
        $_SESSION['unauthorized'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:viewext.php');
    }
?>