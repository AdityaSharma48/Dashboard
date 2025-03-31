<?php
    $showerror = "false";
    $showalert = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        include '_dbconn.php';
        $user_email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        
        
        // Check whether this email is exist or not -------------------------------------------
        $existsql = "SELECT * FROM `users` where user_email = '$user_email'";
        $result = mysqli_query($conn,$existsql);
        $numRow = mysqli_num_rows($result);
        if($numRow > 0)
        {
            $showerror = "Email is already exists.";
            header("location: http://localhost/unit1/Project/signup.php");
        }
        else 
        {
            if($pass != $cpass)
            {
                $showerror = "Password do not match";
                header("location: http://localhost/unit1/Project/signup.php");
            }
            else
            {
                $hash = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` ( `user_email`, `password`) VALUES ('$user_email', '$hash')";
                $result = mysqli_query($conn,$sql);
                if($result)
                {
                    $showalert = true;
                    header("location: http://localhost/unit1/Project/login.php");
                    exit();
                }
            }
        }
    }
?>


