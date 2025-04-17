<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<body class="flex items-center justify-center h-screen bg-[url('background1.jpg')] bg-cover bg-center bg-no-repeat">

<?php
session_start();
$servername = "localhost";
$username = "root";
$password_db = ""; 
$database = "login"; 

$conn = new mysqli($servername, $username, $password_db, $database);

if ($conn->connect_error) {
    die("<script>alert('Connection failed: " . $conn->connect_error . "');</script>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            echo "<script>
                alert('Login Successful! Redirecting to Dashboard...');
                window.location.href = 'welcome.php';
            </script>";
        } else {
            echo "<script>alert('Invalid Credentials');</script>";
        }
    } else {
        echo "<script>alert('Invalid Credentials');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<div class="w-full max-w-md p-8 space-y-6 rounded-xl border border-white/30 backdrop-blur-2xl backdrop-saturate-200 bg-white/20 shadow-xl text-white">
  <div class="text-center">
    <h2 class="text-3xl font-bold text-orange-500">Login</h2>
  </div>

  <form action="#" method="POST" class="space-y-6">

    <!-- Email -->
    <div class="relative w-full h-14">
      <input
        required
        id="email"
        name="email"
        type="email"
        class="peer w-full h-full px-4 pt-5 bg-transparent text-orange-400 border border-[#4070f4] rounded-xl outline-none focus:shadow-md placeholder-transparent"
        placeholder="Email Address"
      />
      <label
        for="email"
        class="absolute top-1/2 left-4 -translate-y-1/2 px-1 bg-[#fff9d9] text-base text-orange-400 
               peer-focus:top-0 peer-focus:text-sm peer-focus:text-[#4070f4] 
               peer-[&:not(:placeholder-shown)]:top-0 peer-[&:not(:placeholder-shown)]:text-sm peer-[&:not(:placeholder-shown)]:text-[#4070f4] 
               transition-all duration-200"
      >
        Email Address
      </label>
    </div>

    <!-- Password -->
    <div class="relative w-full h-14">
      <input
        required
        id="password"
        name="password"
        type="password"
        class="peer w-full h-full px-4 pt-5 bg-transparent text-orange-400 border border-[#4070f4] rounded-xl outline-none focus:shadow-md placeholder-transparent"
        placeholder="Password"
      />
      <label
        for="password"
        class="absolute top-1/2 left-4 -translate-y-1/2 px-1 bg-[#fff9d9] text-base text-orange-400 
               peer-focus:top-0 peer-focus:text-sm peer-focus:text-[#4070f4] 
               peer-[&:not(:placeholder-shown)]:top-0 peer-[&:not(:placeholder-shown)]:text-sm peer-[&:not(:placeholder-shown)]:text-[#4070f4] 
               transition-all duration-200"
      >
        Password
      </label>
    </div>

    <button type="submit" class="w-full py-3 bg-blue-500 hover:bg-blue-600 rounded-md text-white font-semibold transition-all duration-300 text-lg shadow-lg">
      Submit
    </button>
  </form>

  <p class="text-center text-sm text-orange-400">
    New User? 
    <a href="signup.php" class="font-semibold text-orange-600 hover:underline">Sign Up</a>
  </p>
</div>

</body>
</html>
