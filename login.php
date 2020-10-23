<?php
include 'komutlar.php';
if ($_SESSION['user_instaname']) {
  Header("Location: index.php");
}
 ?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Giriş - Kişisel Arama Motoru</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>


        <div style="margin:auto;text-align:center;height:50px;" class="main-container">

        <form action="db/islem.php" method="post">
          <div style="top:50%;margin:auto;text-align:center" class="account block"> <!-- ACCOUNT (RIGHT-CONTAINER) -->
              <h2 class="titular">Giriş Yapınız</h2>
              <div class="input-container">
                  <input type="text" name="user_instaname" placeholder="Instagram Kullanıcı Adı" class="email text-input">
              </div>

              <input type="submit" name="user_kayit" class="sign-in button" value="Giriş Yap">


          </div>
        </form>
        </div>


  </body>
</html>
