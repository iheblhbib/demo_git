 <?php
include('session.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
#mySidenav a {
    position: absolute; /* Position them relative to the browser window */
    left: -80px; /* Position them outside of the screen */
    transition: 0.3s; /* Add transition on hover */
    padding: 15px; /* 15px padding */
    width: 300px; /* Set a specific width */
    text-decoration: none; /* Remove underline */
    font-size: 14; /* Increase font size */
    color: white; /* White text color */
    border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
    left: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#acceuil {
    top: 20px;
    background-color:#666666 /* Light Black */
}
#about {
    top: 80px;
    background-color: #666666;
}

#blog {
    top: 140px;
    background-color: #666666; /* Blue */
}

#projects {
    top: 200px;
    background-color:#666666; /* Red */
}

#contact {
    top: 260px;
    background-color: #666666 /* Light Black */
}
#logout {
    top: 320px;
    background-color:#666666 /* Light Black */
}
</style>
<link rel="stylesheet" type="text/css" href="jqueryui1.8/development-bundle/themes/base/jquery.ui.core.css">
		<link rel="stylesheet" type="text/css" href="jqueryui1.8/development-bundle/themes/base/jquery.ui.theme.css">
		<link rel="stylesheet" type="text/css" href="jqueryui1.8/development-bundle/themes/base/jquery.ui.progressbar.css">
		<link href="custom.css" rel="stylesheet" type="text/css" />
		<link href="style.css" rel="stylesheet" type="text/css" />
		<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
		<link href="css/button.css" rel="stylesheet" type="text/css" />
		

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Acceuil </title>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.kwicks-1.5.1.pack.js" type="text/javascript"></script>

<script type="text/javascript">
	$().ready(function() {
		$('.slider').kwicks({
			max : 740,
			spacing : 1
		});
	});
</script>
<style type="text/css">
<!--
.Style2 {color: #29b2c2}
-->
</style>
.

</head>
<body bgcolor="#CCCCCC">

<div id="templatemo_top_wrapper">
	<div id="templatemo_top">
	  <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="profile.php" class="selected"><img src="home-150499_1280.png" width="50" height="50" /></a></li>
				<li><a href="gestion_des_commandes\index1.php">Gestion Commandes</a></li>
                <li><a href="gestion_des_produit\index2.php">Gestion Produits</a></li>
                <li><a href="gestion_des_sorties\index3.php"><span></span>Gestion Sorties</a></li>
		<li><a href="logout.php"><img src="118240-matte-blue-and-white-square-icon-symbols-shapes-power-button.png" width="50" height="50"/></a></li>
				
            </ul>
            <br style="clear: left" />
        </div> <!-- end of menu -->
    </div> <!-- end of top -->
</div> <!-- end of top wrapper -->

<div id="templatemo_main_top"></div>

<div id="templatemo_main_wrapper">
  <div id="templatemo_slider_wrapper">
   	  <div class="ex-form ui-helper-clearfix ui-corner-all">
	  <h3 align="center"><p style="text-align:left;"> Bienvenue:<?php echo $login_session;echo '--'.$login_profil ?> </p></h3><br><br>
        <center>
     <img src="logoiset.PNG" width="542" height="130"><br> <br> 
	<h1 class="Style2"> Gestion des stocks Magasin</h1>
</center>
      </div>
  </div>
    <div id="templatemo_main">
      <div class="cleaner"></div>
	  <h2 align="center"> institut Supérieur de sciences appliquées et de  technologie de MATEUR </h2>
    </div> <!-- end of main -->
</div> <!-- end of main wrapper -->
<div id="templatemo_footer">
  <div class="cleaner"></div>
</div> <!-- end of footer -->
<script type="text/javascript" src="jqueryui1.8/development-bundle/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="jqueryui1.8/development-bundle/ui/jquery.ui.core.js"></script>
		<script type="text/javascript" src="jqueryui1.8/development-bundle/ui/jquery-ui-1.8.20.custom.js"></script>
		
</body>
</html>