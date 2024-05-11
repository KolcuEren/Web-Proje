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
        .login-link {
            text-align: center;
            margin-top: 10px;
        }
        .login-link a {
            color: #333;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
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
    <form id="signup-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Kayıt Ol</h2>
        <?php
        // Hata mesajlarını göster
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "invalid") {
                echo "<p style='color: red;'>Geçersiz e-posta adresi veya boş şifre!</p>";
            }
        }
        ?>
        <input type="text" id="username" name="username" placeholder="E-posta Adresi (Öğrenci Numarası)" required>
        <input type="password" id="password" name="password" placeholder="Şifre" required>
        <button type="submit">Kayıt Ol</button>
        <div class="login-link">
            <p>Hesabınız var mı? <a href="girisyap.php">Giriş Yap</a>.</p>
        </div>
    </form>
</body>
</html>