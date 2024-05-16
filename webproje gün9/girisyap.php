<?php
session_start();

// Kayıtlı kullanıcıları al
function getRegisteredUsers() {
    return json_decode(file_get_contents("users.json"), true);
}

// Kullanıcıyı doğrula
function authenticateUser($username, $password, $users) {
    foreach ($users as $user) {
        if ($user["username"] === $username && $user["password"] === $password) {
            return true;
        }
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kayıtlı kullanıcıları al
    $users = getRegisteredUsers();

    // Kullanıcı adı ve şifreyi al
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kullanıcıyı doğrula
    if (authenticateUser($username, $password, $users)) {
        $_SESSION["username"] = $username;
        header("Location: hakkimda.php?success=1");
        exit();
    } else {
        header("Location: girisyap.php?error=1");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Yap</title>
   <link rel="stylesheet" href="girisyap.css">
</head>
<body>
    <div class="container">
        <h2>Giriş Yap</h2>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "1") {
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