<?php require_once("baglanti_ac.php"); ?>
<html>
	<head>
    	<title>Yakında</title>
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
                	<li><a href="yakinda.php" class="active">Yakında</a></li>
                	<li><a href="filmler.php">Filmler</a></li>    
                	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>   
                	<li><a href="admin.php">&nbsp;Yönetici Paneli&nbsp;</a></li>             
        		</ul>
        	</div>
  		</div>
		
		<?php
			$sorgu = mysql_query("SELECT * FROM film_detay");
			$dene=0;
			$satir_sayisi = mysql_num_rows($sorgu);				
			while( $satir_sayisi>=1 ){
				$sorgu = mysql_query("SELECT * FROM film_detay ORDER BY id ASC LIMIT $dene,1");
				$detay = mysql_fetch_array($sorgu);
				$film_isim = $detay['isim'];
				$film_tarih = $detay['tarih'];
				$film_sure = $detay['sure'];
				$film_durum = $detay['durum'];
				$film_tur = $detay['tur'];
				$film_yonetmen = $detay['yonetmen'];
				$film_oyuncu = $detay['oyuncu'];
				$film_poster = $detay['resim'];
				$film_fragman = $detay['video'];
			  if($film_durum == "yakinda"){
     			echo   "<div id=\"vizyonda\">
						 <div id=\"vizyonda_fragman\">
						  <video id=\"video1\" controls poster=\"poster/$film_poster\" preload=\"none\" width=\"400\" height=\"240\">
  						  <source src=\"fragman/$film_fragman\" type=\"video/mp4\">
						   Your browser does not support the video tag.
						  </video>
					 	 </div>
						 <div id=\"vizyonda_detay\">
          				  <a href=\"filmler.php#{$film_isim}\">{$film_isim}</a><br>
						  <detay1><br><detay2>Tarih</detay2><detay21>:</detay21><detay3>&nbsp;{$film_tarih} Tarihinde Sinemalarda</detay3></detay1>
						  <detay1><br><detay2>Süre</detay2><detay21>:</detay21><detay3>&nbsp;{$film_sure} Dakika</detay3></detay1>
						  <detay1><br><detay2>Tür</detay2><detay21>:</detay21><detay3>&nbsp;{$film_tur}</detay3></detay1>
						  <detay1><br><detay2>Yönetmen</detay2><detay21>:</detay21><detay3>&nbsp;{$film_yonetmen}</detay3></detay1>
						  <detay1><br><detay2>Oyuncular</detay2><detay21>:</detay21><detay3>&nbsp;{$film_oyuncu}</detay3></detay1>
        				 </div>
						<img src=\"images/serit.jpg\" width=\"980\" height=\"360\" alt=\"serit\">
						</div>";
			  }
			  $dene++;
      		  $satir_sayisi--;
   			}
		?>
        
       	<div id="footer_div">
       		<div id="footer_icerik"><p>Copyright &copy; 2014 Cinema Cukurova</p></div>
    	</div>
        
	</body>
</html>
<?php include("baglanti_kapat.php"); ?>
