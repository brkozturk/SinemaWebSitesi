<?php require_once("baglanti_ac.php"); ?>
<html>
	<head>
    	<title>Yönetici Paneli</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/div.css" rel="stylesheet" type="text/css">
        <link href="css/video-js.css" rel="stylesheet" type="text/css">
        <script src="js/video.js"></script>    
	</head>

	<body bgcolor="#3b3e46" marginheight="0" marginwidth="0" style="font-family:Tahoma, Geneva, sans-serif">
   	
    	<div id="header_div">
    		<div id="menu_div">
        		<img src="images/header.jpg" alt="logo" width="370" height="200">
       			<ul>
           	  		<li><a href="index.php">Vizyonda</a></li>
               	 	<li><a href="yakinda.php">Yakında</a></li>
             	 	<li><a href="filmler.php">Filmler</a></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>   
                	<li><a href="admin.php" class="active">&nbsp;Yönetici Paneli&nbsp;</a></li>     
        		</ul>
        	</div>
  		</div>
        
   		<div id="icerik_ust"><img src="images/ust.jpg"></div>  
    	<div id="icerik">
    		<div id="ekle">
    			<h2 style="text-align:center; color:EF4A4A;">Yeni Film Ekle</h2><hr align="center" width="600px" size="4px" noshade color="EF4A4A">
                	<form name="yeni" enctype="multipart/form-data" action="admin.php" method="post">
                		<aciklama1>Filmin İsmi:</aciklama1><girdi1><input type="text" name="isim"  size="30" required/></girdi1>
                		<aciklama1>Puanı:</aciklama1><girdi1><input type="text" name="puan" size="30" required/></girdi1>
                    	<aciklama1>Süresi:</aciklama1><girdi1><input type="text" name="sure" size="30" required/></girdi1>
                        <aciklama1>Vizyon Tarihi:</aciklama1><girdi1><input type="text" name="tarih" size="30" required/></girdi1>
                        <aciklama1>Durumu:</aciklama1><girdi1><input type="radio" name="durum" value="vizyonda" size="30" required/>Vizyonda<input type="radio" name="durum" value="yakinda" size="30" required/>Yakında</girdi1>
                    	<aciklama2>Türü:</aciklama2><girdi2><textarea name="tur" cols="30" rows="4" required></textarea></girdi2>
                    	<aciklama2>Yönetmeni:</aciklama2><girdi2><textarea name="yonetmen" cols="30" rows="4" required></textarea></girdi2>
                    	<aciklama2>Oyuncuları:</aciklama2><girdi2><textarea name="oyuncu" cols="30" rows="4" required></textarea></girdi2>
                        <aciklama1>Posteri:</aciklama1><girdi1><input type="file" name="resim" id="resim" required></girdi1>
                        <aciklama1>Fragmani:</aciklama1><girdi1><input type="file" name="video" id="video" required></girdi1>
                		<p align="center"><input type="submit" name="gon" value="Filmi Ekle" style="font-size:18px; font-weight:bold; color:EF4A4A;"/></p>
                	</form>
      		</div>
        
			<?php
				if(isset($_POST["gon"])){
              		$dizin = "poster";
					move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name']}");
					$rsm = $_FILES['resim']['name'];
					$dizin = "fragman";
					move_uploaded_file($_FILES['video']['tmp_name'],"./$dizin/{$_FILES['video']['name']}");
					$vdo=       $_FILES['video']['name'];
					mysql_query("INSERT INTO film_detay (isim,puan,sure,tarih,durum,tur,yonetmen,oyuncu,resim,video) 
					VALUES ('$_POST[isim]','$_POST[puan]','$_POST[sure]','$_POST[tarih]','$_POST[durum]','$_POST[tur]','$_POST[yonetmen]','$_POST[oyuncu]','".$rsm."','".$vdo."')");
				}
			?>

       	</div>
       	<div id="icerik_alt"><img src="images/alt.jpg"></div>
        
        <div id="footer_div">
       		<div id="footer_icerik"><p>Copyright &copy; 2014 Cinema Cukurova</p></div>
    	</div>
        
    </body>
</html>
<?php include("baglanti_kapat.php"); ?>