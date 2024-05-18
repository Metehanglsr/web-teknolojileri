<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Metehan</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="z-index: 100; width: 100%;">
        <div class="container">
            <a href="index.html" class="navbar-brand" id="nav-logo">
                Metehan GÜLŞER
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="mobile" class="collapse navbar-collapse">               
          
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link active">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a href="ozgecmis.html" class="nav-link">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a href="sehrim.html" class="nav-link">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a href="takimimiz.html" class="nav-link">Takım</a>
                    </li>
                    <li class="nav-item">
                        <a href="ilgialanlari.html" class="nav-link">İlgiAlanlarım</a>
                    </li>
                    
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Daha Fazla
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a href="#" class="dropdown-item">İletişim <i class="fa-solid fa-address-book"></i></a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Giriş Sayfası <i class="fa-solid fa-right-to-bracket fa-lg"></i></a>
                            </li>
                        </ul>
                      </li>
                </ul>
                
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $adi = $_POST["name"];
                    $soyadi= $_POST["surname"];
                    $mail= $_POST["mail"];
                    $hobiler = $_POST["hobiler"];
                    $sehir = $_POST['sehir'];
                    $egitim = $_POST["egitim"];
                    $mesaj = $_POST["message"];


                    echo "<p><strong>Adınız :</strong> " . $adi . "</p>";
                    echo "<p><strong>Soyadınız :</strong> " . $soyadi . "</p>";
                    echo "<p><strong>E-postanız :</strong> " . $mail . "</p>";
                    echo "<p><strong>Hobileriniz :</strong></p>";
                    echo "<ul>";
                    foreach ($hobiler as $hobi) {
                        echo "<li>" . $hobi . "</li>";
                    }
                    echo "</ul>";
                    echo "<p><strong>Yaşadığınız Şehir :</strong> " . $sehir. "</p>";
                    echo "<p><strong>Eğitim Durumunuz :</strong> " . $egitim. "</p>";
                    echo "<p><strong>Mesajınız:</strong> " . $mesaj . "</p>";
                }
             ?>
             <form action="../iletisim.html">
                <button class="btn btn-warning" type = "submit">İletisim sayfasina don</button>
            </form>
            </div>
        </div>
    </div>
    <footer class="py-4 bg-dark text-white">
        <div class="container text-center">
            <span style="font-size: larger;">Metehan GÜLŞER</span>
        </div>
    </footer>
</body>
</html>