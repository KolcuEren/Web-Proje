<?php
// Giriş yapma işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifreyi al
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kullanıcı adı ve şifrenin doğruluğunu kontrol et
    $users = json_decode(file_get_contents("users.json"), true);
    foreach ($users as $user) {
        if ($user["username"] === $username && $user["password"] === $password) {
            header("Location: hakkimda.html"); // Başarılı giriş olursa hakkimda.html sayfasına yönlendir
            exit();
        }
    }

    // Giriş bilgileri hatalı ise kullanıcıyı tekrar giriş sayfasına yönlendir
    header("Location: girisyap.php?error=invalidlogin");
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
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Form genişliği */
        }
        input {
            display: block;
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
        }
        button:hover {
            background-color: #555;
        }

        /* Responsive düzen */
        @media (max-width: 768px) {
            form {
                width: 80%; /* Küçük ekranlarda formun genişliği */
            }
        }
    </style>
</head>
<body>
    <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Giriş Yap</h2>
        <?php
        // Hata mesajlarını göster
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "invalidlogin") {
                echo "<p style='color: red;'>Hatalı kullanıcı adı veya şifre!</p>";
            }
        }
        ?>
        <input type="text" id="username" name="username" placeholder="Kullanıcı Adı" required>
        <input type="password" id="password" name="password" placeholder="Şifre" required>
        <button type="submit">Giriş Yap</button>
    </form>
</body>
</html>