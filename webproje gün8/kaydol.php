<?php
session_start();

// Yeni bir kullanıcıyı kaydet
function kayitOl($username, $password) {
    $users = json_decode(file_get_contents("users.json"), true);

    // Eğer kullanıcılar dosyası henüz yoksa, boş bir dizi oluştur
    if(!$users) {
        $users = [];
    }

    // Yeni bir kullanıcı nesnesi oluştur
    $user = array(
        "username" => $username,
        "password" => $password
    );

    // Yeni kullanıcıyı kullanıcılar dizisine ekle
    $users[] = $user;

    // Kullanıcıları güncel JSON dosyasına yaz
    file_put_contents("users.json", json_encode($users));
}

// E-posta geçerliliğini kontrol et
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Post edilen kullanıcı adı ve şifreyi kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifreyi al
    $username = $_POST["username"];
    $password = $_POST["password"];

    // E-posta geçerliliğini kontrol et
    if (!isValidEmail($username)) {
        header("Location: kaydol.php?error=invalidemail");
        exit();
    }

    // Kayıt işlemini gerçekleştir
    kayitOl($username, $password);

    // Başarılı kayıt olduğunda kullanıcıyı giriş sayfasına yönlendir ve mesaj göster
    header("Location: girisyap.php?success=registered");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kayıt Ol</title>
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
        .login-link {
            text-align: center;
        }
        .login-link a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        .login-link a:hover {
            color: #555;
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kayıt Ol</h2>
        <?php
        // Hata mesajlarını göster
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "invalidemail") {
                echo "<p class='error-message'>Lütfen geçerli bir e-posta adresi giriniz!</p>";
            }
        }
        ?>
        <form id="register-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" id="username" name="username" placeholder="E-posta Adresi" required>
            <input type="password" id="password" name="password" placeholder="Şifre" required>
            <button type="submit">Kayıt Ol</button>
        </form>
        <div class="login-link">
            <p>Hesabınız varsa <a href="girisyap.php">Giriş Yapın</a></p>
        </div>
    </div>
</body>
</html>
