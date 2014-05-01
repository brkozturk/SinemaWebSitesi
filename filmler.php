<?php require_once("baglanti_ac.php"); ?>
<html>
	<head>
    	<title>Filmler</title>
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
            	    <li><a href="filmler.php" class="active">Filmler</a></li>    
            	    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>   
                	<li><a href="admin.php">&nbsp;Yönetici Paneli&nbsp;</a></li>     
        		</ul>
        	</div>
  		</div>
   
   		<div id="icerik_ust"><img src="images/ust.jpg"></div>  
    	<div id="icerik">
    		<div id="listele">
            	<ul style="height:30px; color:EF4A4A; font-weight:bold; font-size:15px;">
                	<li style="font-size:14px;">Filmin İsmi</li>
                    <li style="font-size:14px;">Vizyon Durumu</li>
                    <li style="font-size:14px;">Puan & V.Tarihi</li>
                    <li style="font-size:14px;">Süre</li>
                    <li style="font-size:14px;">Tür</li>
                    <li style="font-size:14px;">Yönetmen</li>
                    <li style="font-size:14px;">Oyuncular</li>
                    <hr align="center" width="740px" size="3px" noshade color="EF4A4A">
                </ul><br>
    		<?php
				$cek = mysql_query("SELECT * FROM film_detay");
					
				while($yaz = mysql_fetch_array($cek)){
					if($yaz['durum'] == "vizyonda"){
						echo "<ul><li><a name=\"{$yaz['isim']}\"/>{$yaz['isim']}</li><li>Vizyonda</li><li>{$yaz['puan']}</li><li>{$yaz['sure']}</li><li>{$yaz['tur']}</li><li>{$yaz['yonetmen']}</li><li>{$yaz['oyuncu']}</li></ul>";}
					else {
						echo "<ul><li><a name=\"{$yaz['isim']}\"/>{$yaz['isim']}</li><li>Yakında</li><li>{$yaz['tarih']}</li><li>{$yaz['sure']}</li><li>{$yaz['tur']}</li><li>{$yaz['yonetmen']}</li><li>{$yaz['oyuncu']}</li></ul>";}
					}
				?>
      		</div>
        </div>
       	
        <div id="icerik_alt"><img src="images/alt.jpg"></div>
        
        <div id="footer_div">
       		<div id="footer_icerik"><p>Copyright &copy; 2014 Cinema Cukurova</p></div>
    	</div>
        
    </body>
</html>
<?php include("baglanti_kapat.php"); ?>