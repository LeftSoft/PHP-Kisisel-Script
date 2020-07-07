<?php 

function islemkontrol () {

    if (empty($_SESSION['kullanici_mail'])) {
        
        Header("Location:../..");
        exit;
    }
}

 ?>