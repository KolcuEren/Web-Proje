<?php
session_start();

// Giriş yapma fonksiyonu
function girisYap($email, $password) {
    $users = json_decode(file_get_contents("users.json"), true);

    // Eğer kullanıcılar dosyası yoksa veya boşsa hata mesajı döndür
    if (!$users) {
        return false;
    }

    // Kullanıcıları döngü ile kontrol et
    foreach ($users as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            $_SESSION['username'] = $user['username'];
            return true;
        }
    }

    return false;
}

// Post edilen e-posta ve şifreyi kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // E-posta ve şifreyi al
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Giriş işlemini gerçekleştir
    if (girisYap($email, $password)) {
        // Başarılı giriş olduğunda kullanıcıyı ana sayfaya yönlendir ve mesaj göster
        header("Location: hakkimda.php?success=1");
        exit();
    } else {
        // Başarısız girişte hata mesajı göster
        header("Location: girisyap.php?error=loginfailed");
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
    <link rel="stylesheet" href="Girisyap.css">
</head>
<body>
    <div class="container">
        <h2>Giriş Yap</h2>
        <?php
        // Hata mesajlarını göster
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "loginfailed") {
                echo "<p class='error-message'>E-posta veya şifre hatalı!</p>";
            }
        }
        ?>
        <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="email" id="email" name="email" placeholder="E-posta Adresi" required>
            <input type="password" id="password" name="password" placeholder="Şifre" required>
            <button type="submit">Giriş Yap</button>
        </form>
        <div class="register-link">
            <p>Hesabınız yok mu? <a href="kaydol.php">Kaydolun</a></p>
        </div>
    </div>
</body>
</html>
