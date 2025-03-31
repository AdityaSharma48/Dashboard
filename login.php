<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="login_style.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container">
            <div class="manage">
                <div class="H1">
                    <div
                        style="height: 70%;display:flex; align-items:center; flex-direction:column">
                        <h1 style="padding-bottom: 15px;">Login</h1>
                        <div class="icon5">
                            <div class="common"><i
                                    class="fa-brands fa-facebook"></i></div>
                            <div class="common"><i
                                    class="fa-brands fa-instagram"></i></div>
                            <div class="common"><i
                                    class="fa-brands fa-google"></i></div>
                            <div class="common"><i
                                    class="fa-brands fa-github"></i></div>
                        </div>

                        <p
                            style="padding-bottom: 15px;font-size: 16px;font-weight: lighter;">or
                            use email password</p>
                        <div style="height: 50%;">
                            <form action="/UNIT1/Project/_handlelogin.php" method="POST">
                                <input type="email" placeholder="Email"
                                    name="email" required
                                    style="height: 30px; background-color: #f9f7f7; margin-bottom:10px; border-radius: 5px; border: none; outline: none; padding: 4px 0px 4px 10px">

                                <input type="password" placeholder="Password"
                                    name="pass" 
                                    style="height: 30px; background-color: #f9f7f7; margin-bottom:15px; border-radius: 5px; border: none; outline: none;padding: 4px 0px 4px 10px">

                                <p style="text-align:center;">Forgot
                                    Password</p>
                                <button type="submit" class="btn">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="H2">
                    <h1 style="margin-top: 175px; font-size: 30px;">Hello, User!</h1>
                    <p style="font-size: 16px; padding-top: 12px;">you don't have an account</p>
                    <div class="btn1"><a href="http://localhost/unit1/Project/signup.php" style="text-decoration: none; color:white;">SignUp</a></div>
                </div>
            </div>
        </div>
    </body>
</html>