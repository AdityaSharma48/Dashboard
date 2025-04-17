<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<body class="flex items-center justify-center min-h-screen bg-[url('background1.jpg')] bg-cover bg-center bg-no-repeat">

<?php
$servername = "localhost";
$username = "root";
$password_db = ""; 
$database = "login"; 

$conn = new mysqli($servername, $username, $password_db, $database);

if ($conn->connect_error) {
    die("<script>alert('Connection failed: " . $conn->connect_error . "');</script>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    if ($password !== $confirmPassword) {
        echo "<script>alert('Error: Passwords do not match!');</script>";
        exit;
    }

    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('This email is already registered. Please sign in.');
                    window.location.href = 'signin.php';
        </script>";
        $checkEmail->close();
        $conn->close();
        exit;
    }

    $checkEmail->close();

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "<script>
            alert('Registration successful! Redirecting to login...');
            window.location.href = 'signin.php';
        </script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<div class="w-full max-w-md p-8 space-y-6 rounded-xl border border-white/30 backdrop-blur-2xl backdrop-saturate-200 bg-white/20 shadow-xl text-white">
  <div class="text-center">
    <h2 class="text-3xl font-bold text-orange-500">Create an Account</h2>
  </div>

  <form action="#" method="POST" class="space-y-6">

    <div class="relative w-full h-14">
      <input
        required
        id="name"
        name="name"
        type="text"
        class="peer w-full h-full px-4 pt-5 bg-transparent text-orange-400 border border-[#4070f4] rounded-xl outline-none focus:shadow-md placeholder-transparent"
        placeholder="Full Name"
      />
      <label
        for="name"
        class="absolute top-1/2 left-4 -translate-y-1/2 px-1 bg-[#fff9d9] text-base text-orange-400 
               peer-focus:top-0 peer-focus:text-sm peer-focus:text-[#4070f4] 
               peer-[&:not(:placeholder-shown)]:top-0 peer-[&:not(:placeholder-shown)]:text-sm peer-[&:not(:placeholder-shown)]:text-[#4070f4] 
               transition-all duration-200"
      >
        Full Name
      </label>
    </div>

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

    <div class="relative w-full h-14">
    <input
        required
        id="password"
        name="password"
        type="password"
        class="peer w-full h-full px-4 pt-5 bg-transparent text-orange-400 border border-[#4070f4] rounded-xl outline-none focus:shadow-md placeholder-transparent"
        placeholder="Password"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
        title="Password must contain at least 8 characters, including uppercase, lowercase, and a number"
/>

      <label
        for="password"
        class="bg-[#fff9d9] absolute top-1/2 left-4 -translate-y-1/2 px-1 text-base text-orange-400 
               peer-focus:top-0 peer-focus:text-sm peer-focus:text-[#4070f4] 
               peer-[&:not(:placeholder-shown)]:top-0 peer-[&:not(:placeholder-shown)]:text-sm peer-[&:not(:placeholder-shown)]:text-[#4070f4] 
               transition-all duration-200"
      >
        Password
      </label>
    </div>

    <div class="relative w-full h-14">
    <input
        required
        id="confirm-password"
        name="confirm-password"
        type="password"
        class="peer w-full h-full px-4 pt-5 bg-transparent text-orange-400 border border-[#4070f4] rounded-xl outline-none focus:shadow-md placeholder-transparent"
        placeholder="Confirm Password"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
        title="Password must contain at least 8 characters, including uppercase, lowercase, and a number"
/>

      <label
        for="confirm-password"
        class="absolute top-1/2 left-4 -translate-y-1/2 px-1 bg-[#fff9d9] text-base text-orange-400 
               peer-focus:top-0 peer-focus:text-sm peer-focus:text-[#4070f4] 
               peer-[&:not(:placeholder-shown)]:top-0 peer-[&:not(:placeholder-shown)]:text-sm peer-[&:not(:placeholder-shown)]:text-[#4070f4] 
               transition-all duration-200"
      >
        Confirm Password
      </label>
    </div>

    <button type="submit" class="w-full py-3 bg-blue-500 hover:bg-blue-600 rounded-md text-white font-semibold transition-all duration-300 text-lg shadow-lg">
      Submit
    </button>
  </form>

  <p class="text-center text-sm text-orange-400">
    Already have an account?
    <a href="signin.php" class="font-semibold text-orange-600 hover:underline">Sign in</a>
  </p>
</div>

</body>
</html>