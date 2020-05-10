<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
        body{margin:0; padding:0;}
          #kayıt_formu{padding:10px; width:500px; margin:50px auto; background:#ddd; border-radius:5px;}
          input{padding:10px; border:1px; solid:#ccc; border-radius:3px;}
          #button{background-color:#fa3636;cursor:pointer;color:#fff;}
    </style>
</head>
<body>
    <div id="kayıt_formu">
        
    <form action="?" method="POST">
        <table>
            <tr>
                <td>Kullanıcı adı:</td><td><input type="text" name="kadi"></td>
            </tr>
            <tr>
                <td>Şifre:</td><td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Mail adresi:</td><td><input type="text" name="mail"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" id="button" value="Kayıt ol"></td>
            </tr>
        </table>
    </form>

     <?php 
if($_POST){
    $kadi = $_POST['kadi'];
    $sifre = $_POST['pass'];
    $mail = $_POST['mail'];

    if($kadi == "" || $sifre == "" || $mail == "" ){
        echo "Lütfen boş alan bırakmayınız";
    }else{error_reporting(0);
       $baglan = mysql_connect("localhost","root");
        mysql_select_db("webteknolojileri-projesi1",$baglan) or die("Mysql'e bağlanamadı!");
        

        $kayit = mysql_query("INSERT INTO uyeler (kadi,pass,mail) VALUES ('$kadi','$sifre','$mail')");
        if($kayit){
            echo "Kayıt başarılı!";
        } else{
            echo "Bir hata oluştu.";
        }
    }
}
?>

    </div>
</body>
</html>