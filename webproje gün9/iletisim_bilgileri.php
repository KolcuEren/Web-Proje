<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>İletişim Bilgileri</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Gönderilen İletişim Bilgileri</h1>
        <div>
            <?php
            // Formdan gelen verileri bir diziye al
            $formData = array(
                'name' => isset($_POST['name']) ? $_POST['name'] : '',
                'email' => isset($_POST['email']) ? $_POST['email'] : '',
                'message' => isset($_POST['message']) ? $_POST['message'] : '',
                'gender' => isset($_POST['gender']) ? $_POST['gender'] : '' // Cinsiyet bilgisi eklendi
            );

            // Her bir form elemanını ekrana yazdır
            foreach ($formData as $key => $value) {
                echo "<p><strong>$key:</strong> $value</p>";
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS ve jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
