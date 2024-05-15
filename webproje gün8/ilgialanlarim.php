<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakarya Hava Durumu</title>
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

    <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.collectapi.com/football/leaguesList",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: apikey your_token",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}?>

    <!-- Bootstrap JS ve jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript dosyası -->
    <script>
        const apiKey = 'f8b8a884d450d1cd7caed68d7a28ee00'; // API anahtarı
        const city = 'Sakarya'; // Şehir adı

        async function getWeather() {
            try {
                const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`);
                const data = await response.json();
                return data;
            } catch (error) {
                console.error('API isteği sırasında bir hata oluştu:', error);
            }
        }

        async function updatePage() {
            const weatherData = await getWeather();
            const weatherContainer = document.getElementById('weather-container');
            
            const weatherInfo = document.createElement('div');
            weatherInfo.innerHTML = `
                <p>Şehir: ${weatherData.name}</p>
                <p>Sıcaklık: ${weatherData.main.temp}°C</p>
                <p>Hissedilen Sıcaklık: ${weatherData.main.feels_like}°C</p>
                <p>Durum: ${weatherData.weather[0].description}</p>
            `;
            weatherContainer.appendChild(weatherInfo);
        }

        window.onload = updatePage;
    </script>
</body>
</html>