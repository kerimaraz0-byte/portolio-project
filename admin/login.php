<?php

session_start();

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username === "admin" && $password === "admin123"){

        $_SESSION["admin"] = $username;
        setcookie("admin_user", $username, time() + 3600, "/");

        header("Location: dashboard.php");
        exit;

    } else {

        $error = "Invalid credentials";

    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <style>
        body{
            background:#0b1020;
            font-family:Arial;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            color:white;
        }

        form{
            width:350px;
            display:flex;
            flex-direction:column;
            gap:15px;
            background:#1a2238;
            padding:30px;
            border-radius:15px;
        }

        input{
            padding:15px;
            border-radius:10px;
            border:none;
        }

        button{
            padding:15px;
            background:#38bdf8;
            border:none;
            border-radius:10px;
            font-weight:bold;
            cursor:pointer;
        }

        p{
            color:#f87171;
        }
    </style>
</head>

<body>

<form method="POST">
    <h1>Admin Login</h1>

    <input type="text" name="username" placeholder="Username" required>

    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Login</button>

    <p><?php echo $error; ?></p>
</form>

</body>
</html>