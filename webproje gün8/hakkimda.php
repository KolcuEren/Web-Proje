<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hakkında</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Özel stiller */
        .login-link,
        .signup-link {
            color: #ffcc00; /* Butonların rengi */
        }
        .profile img {
        max-width: 100%;
        height: auto;
        }
        p a  {
            text-decoration: underline;
            color: #000000;
        
        
        }
        p a  :hover{
            color : blue;
            text-decoration: none;
        }
        .sporlar {
             display: flex; /* Flex container */
             flex-wrap: wrap; /* Eğer sığmazsa alt satıra geç */
        }

        .sporlar a {
             flex: 1 0 150px; /* Öğelerin esneklik özellikleri: büyüme (1), büyüme dışı boyut (0), başlangıç boyutu (150px) */
              margin: 5px; /* Fotoğraflar arasında boşluk bırak */
        }

        .sporlar a img {
             width: 100%; /* Fotoğrafların genişliğini %100 yap */
             height: 200px; /* Orantılı olarak yükseklik ayarla */
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
    <div class="container">
        
        <div class="row">
            <div class="col-md-4 profile">
                <br><img class="wp-image-16 size-medium alignleft" title="kucukresim" src="erenkolcu.jpg" alt="" width="400" height="400">
            </div>
            <div class="col-md-8 profile-text">
                <br><p style="text-align: center;"><strong>          EREN KOLCU</strong></p>
                <p>   16 Aralık 2005 Sakarya doğumluyum. Babam emekli annem ise bir ev hanımıdır. Biz iki kardeşiz
                ve ben ilk çocuğum. Kardeşim ortaokul 6. Sınıf öğrencisi olarak eğitim hayatına devam etmektedir.
                </p>
                <h2> Eğitim Hayatım</h2>
                <p>    Anaokulunu mahallemizde bulunan <b><i>Cengiz Topel İlkokulunda</i></b> okudum. Daha sonra eğitimime yaşadığım ilin en çok tercih
                    edilen ilkokulu olan <i><b>Atatürk İlokulunda</b></i> devam ettim. Atatürk'te ortaokul bulunmadığından kaydımı <i><b>Ahmet Akkoç Ortaokuluna</b></i>
                    aldırdık ve ortaokul hayatımı burada geçirdikten sonra LGS sınavına girdim. Lgs sınavında iyi bir puan yaptıktan sonra
                    <i><b>Sakarya Anadolu Lisesini</b></i> tercih ettim ve burada iyi bir eğitim alıp üniversiteyi doğduğum ilde ve güzel bir bölümde okumayı
                    tercih ettim. Şuan <i><b>Sakarya Üniversitesi Bilgisayar Mühendisliği 1. Sınıf</b></i> öğrencisiyim.
                </p>
             </div>
             <div class="spor-hayatim">
                <h2>Spor Hayatım</h2>
                <p>
                    Eskiden sürekli futbolcu olmak isterken zamanla hedeflerim ve hobilerim değişti. İlkokul ve ortaokul zamanlarında 
                    sürekli bir <a href="https://tr.wikipedia.org/wiki/Futbol">futbol</a>  oynamak isteği vardı fakat ailevi sebepler ve bir yandan da dersler yüzünden bu isteğimi gerçekleştiremiyordum. 
                    Bu sebeple o yaşlarımda <a href="https://tr.wikipedia.org/wiki/Y%C3%BCzme">yüzmeye</a> gitme kararı aldım. Yaklaşık 2-3 sene boyunca yüzmede kendimi ilerlettim ve bu dönemde bir kaç yarışa katıldım.
                    Liseye geçtiğim zaman beden hocam sayesinde <a href="https://tr.wikipedia.org/wiki/Oryantiring">oryantiring</a>  ve <a href="https://tr.wikipedia.org/wiki/Voleybol">voleybol</a>  okul takımına katıldım ve kendimi bu spor dallarında fazlasıyla
                    geliştirdiğimi düşünüyorum. Özellikle oryantiring alanında okul takımımızla iki il birinciliğimiz ve bireysel olarak ise 1 derece
                    ödülüne sahibim. Üniversiteye geçtiğim andan itibaren ise dersler yüzünden spora olan ilgim azaldığı için vakit geçirmek amaçlı <a href="https://tr.wikipedia.org/wiki/V%C3%BCcut_geli%C5%9Ftirme">vücut 
                    gelşitirmeye</a> merak saldım ve bir kaç ay boyunca bu dal ile uğraştım.
                </p>
                <div class="sporlar">
                    <a href="https://tr.wikipedia.org/wiki/Futbol"><img src="futbol.jpg" alt="Futbol"></a>
                    <a href="https://tr.wikipedia.org/wiki/Y%C3%BCzme"><img src="yuzme.jpg" alt="Yüzme"></a>
                    <a href="https://tr.wikipedia.org/wiki/Oryantiring"><img src="oryantiring.jpg" alt="Oryantiring"></a>
                    <a href="https://tr.wikipedia.org/wiki/Voleybol"><img src="voleybol.jpg" alt="Voleybol"></a>
                    <a href="https://tr.wikipedia.org/wiki/V%C3%BCcut_geli%C5%9Ftirme"><img src="vucut-gelistirme.jpg" alt="Vücut Geliştirme"></a>
                </div>  
            </div>  
            
        </div>
    </div>
    
    

    <!-- Bootstrap JS ve jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript for showing success message -->
    <script>
        // Giriş başarılı olduğunda başarı mesajı göster
        <?php if(isset($_GET['success']) && $_GET['success'] == '1') { ?>
            $(document).ready(function(){
                $('#success-alert').fadeIn('slow');
                setTimeout(function(){
                    $('#success-alert').fadeOut('slow');
                }, 3000); // 3 saniye sonra başarı mesajını kapat
            });
        <?php } ?>
    </script>
</body>
</html>  