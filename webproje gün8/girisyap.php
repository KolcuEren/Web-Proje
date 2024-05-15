<?php
// Session başlat
session_start();

// Kullanıcı adı ve şifre
$username = "kullanici";
$password = "sifre";

// Formdan gelen kullanıcı adı ve şifre
$user_input = $_POST["username"];
$pass_input = $_POST["password"];

// Kullanıcı adı ve şifreyi kontrol et
if ($user_input == $username && $pass_input == $password) {
    // Başarılı giriş
    $_SESSION["username"] = $username;
    header("Location: hakkimda.php"); // Başarılı giriş durumunda hakkimda.php'ye yönlendir
    exit();
} else {
    // Başarısız giriş
    header("Location: girisyap.php?error=1"); // Hatalı giriş durumunda tekrar girisyap.php'ye yönlendir
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Yap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            margin-bottom: 10px;
        }
        button:hover {
            background-color: #555;
        }
        .register-link {
            text-align: center;
        }
        .register-link a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        .register-link a:hover {
            color: #555;
        }
        .success-message {
            color: green;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Giriş Yap</h2>
        <?php
        // Hata mesajlarını göster
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "invalidlogin") {
                echo "<p class='error-message'>Hatalı kullanıcı adı veya şifre!</p>";
            }
        }
        ?>
        <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" id="username" name="username" placeholder="Kullanıcı Adı" required>
            <input type="password" id="password" name="password" placeholder="Şifre" required>
            <button type="submit">Giriş Yap</button>
        </form>
        <div class="register-link">
            <p>Hesabınız yoksa <a href="kaydol.php">Kayıt Olun</a></p>
        </div>
    </div>
</body>
</html>
