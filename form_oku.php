<!DOCTYPE html> 
<html>
   <header> </header>
   <body> 
    <?php 
      $_ad=$_POST['ad']; 
      $_soyad=$_POST['soyad']; 
	  $_email=$_POST['email'];
	  $_tel=$_POST['tel'];
      echo "Ad :  $_ad";
      echo "<br>";
	  echo "Soyad :  $_soyad";
      echo "<br>";
	  echo "E-Mail :  $_email";
      echo "<br>";
	  echo "Telefon Numarası :  $_tel";
      echo "<br>";
	  if(empty($_POST['cinsiyet'])){
         echo "Lütfen Cinsiyet seçiniz";
      }
      elseif(isset($_POST['cinsiyet'])){
      $_cinsiyet = $_POST['cinsiyet'];
      echo "Cinsiyet : $_cinsiyet";
      echo "<br>";
	  }
     $_sehir = $_POST['sehir'];
 
    echo 'Seçtiğiniz Şehir :'.$_sehir;
    if(isset($_POST['dil'])) {
    $_dil = $_POST['dil'];
 
    echo '<br/> Seçtiğiniz diller: <br/>';
 
    foreach($_dil as $_diller) {
        echo $_diller . ' <br/>';
    }
    } else {
        echo '<br/> Hiç Dil Seçmediniz.<br/>';
    }
    $_text = $_POST["text"]; 
    echo "Mesaj : $_text <br/>";
    ?> 
   </body>
</html>