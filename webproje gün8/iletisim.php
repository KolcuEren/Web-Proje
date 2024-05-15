<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>İletişim Formu</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Özel stiller */
        .login-link,
        .signup-link {
            color: #ffcc00; /* Butonların rengi */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="hakkimda.php">Ana Sayfa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="hakkimda.php">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.php">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link signup-link" href="kaydol.php">Kaydol</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-link" href="girisyap.php">Giriş Yap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="app" class="container mt-5">
        <h1 class="text-center">İletişim Formu</h1>
        <form method="post" action="iletisim_bilgileri.php">
            <div class="form-group">
                <label for="name">Ad Soyad</label>
                <input type="text" class="form-control" id="name" name="name" v-model="formData.name" required>
            </div>
            <div class="form-group">
                <label for="email">E-Posta Adresi</label>
                <input type="email" class="form-control" id="email" name="email" v-model="formData.email" required>
            </div>
            <div class="form-group">
                <label for="message">Mesajınız</label>
                <textarea class="form-control" id="message" name="message" v-model="formData.message" rows="5" required></textarea>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary mr-3" @click="checkJavaScriptValidation">JavaScript ile Kontrol Et</button>
                <button type="button" class="btn btn-success" @click="checkVueValidation">Vue.js ile Kontrol Et</button>
                <button type="submit" class="btn btn-primary mr-3">Gönder</button>
                <button type="button" class="btn btn-secondary" @click="clearForm">Temizle</button>
            </div>
        </form>
        <div v-if="submitted">
            <h2 class="mt-5">Gönderilen Form Bilgileri</h2>
            <p><strong>Ad Soyad:</strong> {{ formData.name }}</p>
            <p><strong>E-Posta Adresi:</strong> {{ formData.email }}</p>
            <p><strong>Mesaj:</strong> {{ formData.message }}</p>
        </div>
    </div>

    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>

    <script>
        new Vue({
            el: '#app',
            data: {
                formData: {
                    name: '',
                    email: '',
                    message: ''
                },
                submitted: false
            },
            methods: {
                submitForm() {
                    this.submitted = true;
                },
                checkJavaScriptValidation() {
                    var name = document.getElementById('name').value;
                    var email = document.getElementById('email').value;
                    var message = document.getElementById('message').value;

                    if (name.trim() === '' || email.trim() === '' || message.trim() === '') {
                        alert('Lütfen tüm alanları doldurun!');
                        return;
                    }

                    if (!/\S+@\S+\.\S+/.test(email)) {
                        alert('Geçersiz e-posta adresi!');
                        return;
                    }

                    alert('JavaScript ile kontrol başarılı!');
                },
                checkVueValidation() {
                    if (this.formData.name.trim() === '' || this.formData.email.trim() === '' || this.formData.message.trim() === '') {
                        alert('Lütfen tüm alanları doldurun!');
                        return;
                    }

                    if (!/\S+@\S+\.\S+/.test(this.formData.email)) {
                        alert('Geçersiz e-posta adresi!');
                        return;
                    }

                    alert('Vue.js ile kontrol başarılı!');
                },
                clearForm() {
                    this.formData.name = '';
                    this.formData.email = '';
                    this.formData.message = '';
                    this.submitted = false;
                }
            }
        });
    </script>
    <!-- Bootstrap JS ve jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>