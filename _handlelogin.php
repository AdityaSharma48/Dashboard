<?php
    $login = false;
    $showerror = "true";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // include '_dbconn.php';
        include '_dbconn.php';
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $sql = "SELECT * FROM `users` where user_email = '$email'";
        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($pass, $row['password']))
            {    
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['useremail'] = $email;
                
                header("location:http://localhost/unit1/Project/index.php");
                exit();
            }
            else
            {
                $showerror = "Invalid Credentails";
                header("location:http://localhost/unit1/Project/login.php");
            }
        }
        else 
        {
            $showerror = "User credentials is not valid";
            header("location:http://localhost/unit1/Project/login.php");
        }
    }
?>