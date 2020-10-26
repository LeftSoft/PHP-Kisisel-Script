<?php 
ob_start();
session_start();
include '../../baglan.php'; 
include 'fonksiyon.php';

if (isset($_POST['admingiris'])) {

  $kullanici_mail=$_POST['kullanici_mail'];
  $kullanici_password=$_POST['kullanici_password'];

  $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password");
  $kullanicisor->execute(array(
    'mail' => $kullanici_mail,
    'password' => $kullanici_password
    ));

   $say=$kullanicisor->rowCount();

  if ($say==1) {

    $_SESSION['kullanici_mail']=$kullanici_mail;
    header("Location:../sayfalar/index.php");
    exit;



  } else {

    header("Location:../index.php?durum=no");
    exit;
  }
  

}

if (isset($_POST['foviconguncelle'])) {
islemkontrol();
  $uploads_dir = '../../img';

  @$tmp_name = $_FILES['ayar_fovicon']["tmp_name"];
  @$name = $_FILES['ayar_fovicon']["name"];

  $benzersizsayi4=rand(20000,32000);
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

  
  $duzenle=$db->prepare("UPDATE ayar SET
    ayar_fovicon=:fov
    WHERE ayar_id=0");
  $update=$duzenle->execute(array(
    'fov' => $refimgyol
    ));



  if ($update) {

    $resimsilunlink=$_POST['eski_yol'];
    unlink("../../$resimsilunlink");

    Header("Location:../sayfalar/genel-ayar.php?durum=ok");

  } else {

    Header("Location:../sayfalar/genel-ayar.php?durum=no");
  }

}
if (isset($_POST['fovicokaydet'])) {
islemkontrol();

$uploads_dir = '../../img';

  @$tmp_name = $_FILES['ayar_fovicon']["tmp_name"];
  @$name = $_FILES['ayar_fovicon']["name"];

  $benzersizsayi4=rand(20000,32000);
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

  
  $duzenle=$db->prepare("UPDATE ayar SET
    ayar_fovicon=:logo
    WHERE ayar_id=0");
  $update=$duzenle->execute(array(
    'logo' => $refimgyol
    ));

  if ($update) {

    $resimsilunlink=$_POST['eski_yoll'];
    unlink("../../$resimsilunlink");

    Header("Location:../sayfalar/genel-ayar.php?durum=ok");

  } else {

    Header("Location:../sayfalar/genel-ayar.php?durum=no");
  }

}
if (isset($_POST['ayarlogokaydet'])) {
islemkontrol();

$uploads_dir = '../../img';

  @$tmp_name = $_FILES['ayar_logo']["tmp_name"];
  @$name = $_FILES['ayar_logo']["name"];

  $benzersizsayi4=rand(20000,32000);
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

  
  $duzenle=$db->prepare("UPDATE ayar SET
    ayar_logo=:logo
    WHERE ayar_id=0");
  $update=$duzenle->execute(array(
    'logo' => $refimgyol
    ));

  if ($update) {

    $resimsilunlink=$_POST['eski_yol'];
    unlink("../../$resimsilunlink");

    Header("Location:../sayfalar/genel-ayar.php?durum=ok");

  } else {

    Header("Location:../sayfalar/genel-ayar.php?durum=no");
  }

}
if (isset($_POST['resimduzenle'])) {
islemkontrol();


$uploads_dir = '../../img';

  @$tmp_name = $_FILES['hakkimda_resim']["tmp_name"];
  @$name = $_FILES['hakkimda_resim']["name"];

  $benzersizsayi4=rand(20000,32000);
  $refimg=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
  
@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");
  $hakkimda_id=$_POST['hakkimda_id'];
  $kaydet=$db->prepare("UPDATE hakkimda SET
    hakkimda_resim=:hakkimda_resim
    WHERE hakkimda_id={$_POST['hakkimda_id']}");
  $update=$kaydet->execute(array(
    'hakkimda_resim' => $refimg
    ));

  if ($update) {

    Header("Location:../sayfalar/hakkimda-duzenle.php?durum=ok&hakkimda_id=$hakkimda_id");

  } else {

    Header("Location:../sayfalar/hakkimda-duzenle.php?durum=no&hakkimda_id=$hakkimda_id");
  }

}
if (isset($_POST['cvduzenle'])) {
  if($_FILES["hakkimda_cv"]["type"] == "application/pdf")
{
islemkontrol();
$hakkimda_id=$_POST['hakkimda_id'];
$uploads_dir = '../../cv';

  @$tmp_name = $_FILES['hakkimda_cv']["tmp_name"];
  @$name = $_FILES['hakkimda_cv']["name"];

  $benzersizsayi4=rand(20000,32000);
  $cvyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
  
@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");
  $kaydet=$db->prepare("UPDATE hakkimda SET
    hakkimda_cv=:hakkimda_cv
    WHERE hakkimda_id={$_POST['hakkimda_id']}");
  $update=$kaydet->execute(array(
    'hakkimda_cv' => $cvyol

    ));

  if ($update) {

    Header("Location:../sayfalar/hakkimda-duzenle.php?durum=ok&hakkimda_id=$hakkimda_id");

  } else {

    Header("Location:../sayfalar/hakkimda-duzenle.php?durum=no&hakkimda_id=$hakkimda_id");
  }
}
else
{
  $hakkimda_id=$_POST['hakkimda_id'];
  Header("Location:../sayfalar/hakkimda-duzenle.php?durum=pdf&hakkimda_id=$hakkimda_id");
}

}
if (isset($_POST['hakkimdaduzenle'])) {
islemkontrol();
  $hakkimda_id=$_POST['hakkimda_id'];
  $kaydet=$db->prepare("UPDATE hakkimda SET
    hakkimda_ad=:hakkimda_ad,
    hakkimda_adres=:hakkimda_adres,
    hakkimda_aciklama=:hakkimda_aciklama,
    hakkimda_deneyim=:hakkimda_deneyim,
    hakkimda_proje=:hakkimda_proje,
    hakkimda_meslek=:hakkimda_meslek
    WHERE hakkimda_id={$_POST['hakkimda_id']}");
  $update=$kaydet->execute(array(
    'hakkimda_ad' => $_POST['hakkimda_ad'],
    'hakkimda_adres' => $_POST['hakkimda_adres'],
    'hakkimda_aciklama' => $_POST['hakkimda_aciklama'],
    'hakkimda_deneyim' => $_POST['hakkimda_deneyim'],
    'hakkimda_proje' => $_POST['hakkimda_proje'],
    'hakkimda_meslek' => $_POST['hakkimda_meslek']
    ));

  if ($update) {

    Header("Location:../sayfalar/hakkimda-duzenle.php?durum=ok&hakkimda_id=$hakkimda_id");

  } else {

    Header("Location:../sayfalar/hakkimda-duzenle.php?durum=no&hakkimda_id=$hakkimda_id");
  }



}
if (isset($_POST['hizmetduzenle'])) {
islemkontrol();
  $hizmet_id=$_POST['hizmet_id'];
  $kaydet=$db->prepare("UPDATE hizmetlerim SET
    hizmet_baslik=:hizmet_baslik,
    hizmet_aciklama=:hizmet_aciklama,
    hizmet_fa=:hizmet_fa
    WHERE hizmet_id={$_POST['hizmet_id']}");
  $update=$kaydet->execute(array(
    'hizmet_baslik' => $_POST['hizmet_baslik'],
    'hizmet_aciklama' => strip_tags($_POST['hizmet_aciklama']),
    'hizmet_fa' => $_POST['hizmet_fa']
    ));

  if ($update) {

    Header("Location:../sayfalar/hizmet-duzenle.php?durum=ok&hizmet_id=$hizmet_id");

  } else {

    Header("Location:../sayfalar/hizmet-duzenle.php?durum=no&hizmet_id=$hizmet_id");
  }

}
if (isset($_POST['hizmetekle'])) {

  $kaydet=$db->prepare("INSERT INTO hizmetlerim SET
    hizmet_baslik=:hizmet_baslik,
    hizmet_aciklama=:hizmet_aciklama,
    hizmet_fa=:hizmet_fa
    ");
  $insert=$kaydet->execute(array(
    'hizmet_baslik' => $_POST['hizmet_baslik'],
    'hizmet_aciklama' => strip_tags($_POST['hizmet_aciklama']),
    'hizmet_fa' => $_POST['hizmet_fa']
    ));

  if ($insert) {

    Header("Location:../sayfalar/hizmet-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/hizmet-listele.php?durum=no");
  }




}
if (isset($_POST['ilgiduzenle'])) {
islemkontrol();
  $ilgi_id=$_POST['ilgi_id'];
  $kaydet=$db->prepare("UPDATE ilgi SET
    ilgi_ad=:ilgi_ad,
    ilgi_fa=:ilgi_fa");
  $update=$kaydet->execute(array(
    'ilgi_ad' => $_POST['ilgi_ad'],
    'ilgi_fa' => $_POST['ilgi_fa']
    ));

  if ($update) {

    Header("Location:../sayfalar/ilgi-duzenle.php?durum=ok&ilgi_id=$ilgi_id");

  } else {

    Header("Location:../sayfalar/ilgi-duzenle.php?durum=no&ilgi_id=$ilgi_id");
  }

}
if (isset($_POST['ilgiekle'])) {

  $kaydet=$db->prepare("INSERT INTO ilgi SET
    ilgi_ad=:ilgi_ad,
    ilgi_fa=:ilgi_fa
    ");
  $insert=$kaydet->execute(array(
    'ilgi_ad' => $_POST['ilgi_ad'],
    'ilgi_fa' => $_POST['ilgi_fa']
    ));

  if ($insert) {

    Header("Location:../sayfalar/ilgi-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/ilgi-listele.php?durum=no");
  }




}

if (isset($_POST['projeekle'])) {


  $uploads_dir = '../../img';
  @$tmp_name = $_FILES['proje_resim']["tmp_name"];
  @$name = $_FILES['proje_resim']["name"];
  //resmin isminin benzersiz olması
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);  
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
  


  $kaydet=$db->prepare("INSERT INTO proje SET
    proje_name=:proje_name,
    proje_etiket=:proje_etiket,
    proje_resim=:proje_resim
    ");
  $insert=$kaydet->execute(array(
    'proje_name' => $_POST['proje_name'],
    'proje_etiket' => $_POST['proje_etiket'],
    'proje_resim' => $refimgyol
    ));

  if ($insert) {

    Header("Location:../sayfalar/proje-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/proje-listele.php?durum=no");
  }




}

if (isset($_POST['blogekle'])) {


  $uploads_dir = '../../img';
  @$tmp_name = $_FILES['blog_resim']["tmp_name"];
  @$name = $_FILES['blog_resim']["name"];
  //resmin isminin benzersiz olması
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);  
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
  


  $kaydet=$db->prepare("INSERT INTO blog SET
    blog_isim=:blog_isim,
    blog_aciklama=:blog_aciklama,
    blog_tarih=:blog_tarih,
    blog_resim=:blog_resim
    ");
  $insert=$kaydet->execute(array(
    'blog_isim' => $_POST['blog_isim'],
    'blog_aciklama' => $_POST['blog_aciklama'],
    'blog_tarih' => $_POST['blog_tarih'],
    'blog_resim' => $refimgyol
    ));

  if ($insert) {

    Header("Location:../sayfalar/blog-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/blog-listele.php?durum=no");
  }




}

if ($_GET['projesil']=="ok") {
islemkontrol();
  $sil=$db->prepare("DELETE from proje where proje_id=:proje_id");
  $kontrol=$sil->execute(array(
    'proje_id' => $_GET['proje_id']
    ));

  if ($kontrol) {

    Header("Location:../sayfalar/proje-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/proje-listele.php?durum=no");
  }

}
if ($_GET['hizmetsil']=="ok") {
islemkontrol();
  $sil=$db->prepare("DELETE from hizmetlerim where hizmet_id=:hizmet_id");
  $kontrol=$sil->execute(array(
    'hizmet_id' => $_GET['hizmet_id']
    ));

  if ($kontrol) {

    Header("Location:../sayfalar/hizmet-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/hizmet-listele.php?durum=no");
  }

}
if ($_GET['ilgisil']=="ok") {
islemkontrol();
  $sil=$db->prepare("DELETE from ilgi where ilgi_id=:ilgi_id");
  $kontrol=$sil->execute(array(
    'ilgi_id' => $_GET['ilgi_id']
    ));

  if ($kontrol) {

    Header("Location:../sayfalar/ilgi-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/ilgi-listele.php?durum=no");
  }

}
if ($_GET['blogsil']=="ok") {
islemkontrol();
  $sil=$db->prepare("DELETE from blog where blog_id=:blog_id");
  $kontrol=$sil->execute(array(
    'blog_id' => $_GET['blog_id']
    ));

  if ($kontrol) {

    Header("Location:../sayfalar/blog-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/blog-listele.php?durum=no");
  }

}

if (isset($_POST['kullaniciduzenle'])) {
islemkontrol();
  $kullanici_id=$_POST['kullanici_id'];
  

  $kaydet=$db->prepare("UPDATE kullanici SET
    kullanici_mail=:kullanici_mail,
    kullanici_password=:kullanici_password,
    kullanici_ad=:kullanici_ad
    WHERE kullanici_id={$_POST['kullanici_id']}");
  $update=$kaydet->execute(array(
    'kullanici_mail' => $_POST['kullanici_mail'],
    'kullanici_password' => $_POST['kullanici_password'],
    'kullanici_ad' => $_POST['kullanici_ad']
    ));

  if ($update) {

    Header("Location:../sayfalar/admin-duzenle.php?durum=ok&kullanici_id=$kullanici_id");

  } else {

    Header("Location:../sayfalar/admin-duzenle.php?durum=no&kullanici_id=$kullanici_id");
  }

}


if (isset($_POST['kullaniciekle'])) {
  islemkontrol();
  $kaydet=$db->prepare("INSERT INTO kullanici SET
   kullanici_mail=:kullanici_mail,
    kullanici_password=:kullanici_password,
    kullanici_ad=:kullanici_ad
    ");
  $insert=$kaydet->execute(array(
   'kullanici_mail' => $_POST['kullanici_mail'],
    'kullanici_password' => $_POST['kullanici_password'],
    'kullanici_ad' => $_POST['kullanici_ad']
    ));

  if ($insert) {

    Header("Location:../sayfalar/admin-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/admin-listele.php?durum=no");
  }
}

if (isset($_POST['genelayarkaydet'])) {
 islemkontrol();
  //Tablo güncelleme işlemi kodları...
  $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_title=:ayar_title,
    ayar_description=:ayar_description,
    ayar_keywords=:ayar_keywords,
    ayar_author=:ayar_author
    WHERE ayar_id=0");

  $update=$ayarkaydet->execute(array(
    'ayar_title' => $_POST['ayar_title'],
    'ayar_description' => $_POST['ayar_description'],
    'ayar_keywords' => $_POST['ayar_keywords'],
    'ayar_author' => $_POST['ayar_author']
    ));


  if ($update) {

    header("Location:../sayfalar/genel-ayar.php?durum=ok");

  } else {

    header("Location:../sayfalar/genel-ayar.php?durum=no");
  }
}

if (isset($_POST['sosyalkaydet'])) {
 islemkontrol();
  //Tablo güncelleme işlemi kodları...
  $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_facebook=:ayar_facebook,
    ayar_instagram=:ayar_instagram,
    ayar_twitter=:ayar_twitter,
    ayar_youtube=:ayar_youtube
    WHERE ayar_id=0");

  $update=$ayarkaydet->execute(array(
    'ayar_facebook' => $_POST['ayar_facebook'],
    'ayar_instagram' => $_POST['ayar_instagram'],
    'ayar_twitter' => $_POST['ayar_twitter'],
    'ayar_youtube' => $_POST['ayar_youtube']
    ));


  if ($update) {

    header("Location:../sayfalar/genel-ayar.php?durum=ok");

  } else {

    header("Location:../sayfalar/genel-ayar.php?durum=no");
  }
}
if (isset($_POST['iletisimkaydett'])) {
 islemkontrol();
  //Tablo güncelleme işlemi kodları...
  $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_mail=:ayar_mail,
    ayar_adres=:ayar_adres,
    ayar_tel=:ayar_tel,
    ayar_maps=:ayar_maps
    WHERE ayar_id=0");

  $update=$ayarkaydet->execute(array(
    'ayar_mail' => $_POST['ayar_mail'],
    'ayar_adres' => $_POST['ayar_adres'],
    'ayar_tel' => $_POST['ayar_tel'],
    'ayar_maps' => $_POST['ayar_maps']
    ));


  if ($update) {

    header("Location:../sayfalar/genel-ayar.php?durum=ok");

  } else {

    header("Location:../sayfalar/genel-ayar.php?durum=no");
  }
}

if (isset($_POST['logoduzenle'])) {
islemkontrol();

  $uploads_dir = '../../images';

  @$tmp_name = $_FILES['ayar_logo']["tmp_name"];
  @$name = $_FILES['ayar_logo']["name"];

  $benzersizsayi4=rand(20000,32000);
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

  
  $duzenle=$db->prepare("UPDATE ayar SET
    ayar_logo=:logo
    WHERE ayar_id=0");
  $update=$duzenle->execute(array(
    'logo' => $refimgyol
    ));



  if ($update) {

    $resimsilunlink=$_POST['eski_yol'];
    unlink("../../$resimsilunlink");

    Header("Location:../sayfalar/genel-ayar.php?durum=ok");

  } else {

    Header("Location:../sayfalar/genel-ayar.php?durum=no");
  }
}


if (isset($_POST['projeduzenle'])) {
islemkontrol();
  $uploads_dir = '../../img';

  @$tmp_name = $_FILES['proje_resim']["tmp_name"];
  @$name = $_FILES['proje_resim']["name"];

  $benzersizsayi4=rand(20000,32000);
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

  
  $duzenle=$db->prepare("UPDATE proje SET
      proje_name=:proje_name,
      proje_etiket=:proje_etiket,
      proje_resim=:proje_resim  
      WHERE proje_id={$_POST['proje_id']}");
  $update=$duzenle->execute(array(
      'proje_name' => $_POST['proje_name'],
      'proje_etiket' => $_POST['proje_etiket'],
      'proje_resim' => $refimgyol
    ));

   $proje_id=$_POST['proje_id'];

  if ($update) {

    $resimsilunlink=$_POST['eski_yol'];
    unlink("../../$resimsilunlink");

    Header("Location:../sayfalar/proje-duzenle.php?proje_id=$proje_id&durum=ok");

  } else {

    Header("Location:../sayfalar/proje-duzenle.php?proje_id=$proje_id&durum=no");
  }

}

if (isset($_POST['blogduzenle'])) {
islemkontrol();
  $uploads_dir = '../../img';

  @$tmp_name = $_FILES['blog_resim']["tmp_name"];
  @$name = $_FILES['blog_resim']["name"];

  $benzersizsayi4=rand(20000,32000);
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

  
  $duzenle=$db->prepare("UPDATE blog SET
      blog_isim=:blog_isim,
      blog_aciklama=:blog_aciklama,
      blog_tarih=:blog_tarih,
      blog_resim=:blog_resim  
      WHERE blog_id={$_POST['blog_id']}");
  $update=$duzenle->execute(array(
      'blog_isim' => $_POST['blog_isim'],
      'blog_aciklama' => $_POST['blog_aciklama'],
      'blog_tarih' => $_POST['blog_tarih'],
      'blog_resim' => $refimgyol
    ));

   $blog_id=$_POST['blog_id'];

  if ($update) {

    $resimsilunlink=$_POST['eski_yol'];
    unlink("../../$resimsilunlink");

    Header("Location:../sayfalar/blog-duzenle.php?blog_id=$blog_id&durum=ok");

  } else {

    Header("Location:../sayfalar/blog-duzenle.php?blog_id=$blog_id&durum=no");
  }

}





              if (isset($_POST['iletisimekle'])) {

                            $isim = $_POST['iletisim_isim'];
                            $mail = $_POST['iletisim_mail'];
                            $eposta = $_POST['iletisim_mail'];
                            $telefon = $_POST['iletisim_tel'];
                            $mesaj = $_POST['iletisim_mesaj'];
                            if($isim == "" || $mail =="" || $mesaj=="") {
                            Header("Location:../../contact.php");
                            }
                            
                            else if(!filter_var($eposta, FILTER_VALIDATE_EMAIL))
                            {
                                Header("Location:../../#contact");
                            }
                            else if(filter_var($eposta, FILTER_VALIDATE_EMAIL))
                            {
                              
                      
                            $ayarekle=$db->prepare("INSERT INTO iletisim SET
                              iletisim_isim=:iletisim_isim,
                              iletisim_mail=:iletisim_mail,
                              iletisim_mesaj=:iletisim_mesaj
                              ");

                            $insert=$ayarekle->execute(array(
                              'iletisim_isim' => $_POST['iletisim_isim'],
                              'iletisim_mail' => $_POST['iletisim_mail'],
                              'iletisim_mesaj' => $_POST['iletisim_mesaj']
                              ));


                            if ($insert) {
                           
                              Header("Location:../../#contact");


                            } else {

                              Header("Location:../../#contact");
                            }
              }
                          }
 ?>
