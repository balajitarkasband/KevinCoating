<?php include('../constants.php');?>
<html>
    <head>
        <title>
            Login 
        </title>
        <link rel="stylesheet" href="login.css">
  
    </head>
    <body>
        <div class="login">
            <h1 class="text-center">Admin Login</h1>
            <br>

            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

            <!-- login form starts here -->
            <form action="" method="POST" class="text-center">
                Username: <br>
                <input type="email" name="email" placeholder="Enter email" class="btn-primary"><br><br>

                Password:<br>
                <input type="password" name="password" placeholder="Enter password" class="btn-primary">
                    <br><br>
                <input type="submit" name="submit" value="Login" class="btn-primary">
                <br><br>
            </form>
            <!-- login form ends here -->
            
        </div>
    </body>
</html>

<?php
    //Check whether the submit button is clicked or not
    if(isset($_POST['submit']))
    {
        //Process for login
        //Get the data from login form
        $email = $_POST['email'];
        $password = $_POST['password']; //md5($_POST['password'])

        //SQL to check whether the user with username and password exist or not
        $sql = "SELECT * FROM admin WHERE email = '$email' AND pass='$password'";

        //Execute the query
        $res = mysqli_query($conn, $sql);

        //Count the rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User available and login success
            $_SESSION['login'] = "<div class='success'>Login Successful</div>";

            $_SESSION['user'] = $email; //to check whether the user is logged in or not and log out will unset it.
            echo "Welcome" .$email;
            header('location:adminhome.php');
        }
        else
        {
            //User not available and login fail
            $_SESSION['login'] = "<div class='error text-center'>Login failed</div>";
            header('location:login.php');
        }

    }
?>