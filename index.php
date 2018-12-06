<?php
include('login.php'); // Includes Login Script

?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<!--------------------
LOGIN FORM
by: Amit Jakhu
www.amitjakhu.com
--------------------->

<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href="style.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>
<link rel="stylesheet" type="text/css" href="jqueryui1.8/development-bundle/themes/base/jquery.ui.core.css">
		<link rel="stylesheet" type="text/css" href="jqueryui1.8/development-bundle/themes/base/jquery.ui.theme.css">
		<link rel="stylesheet" type="text/css" href="jqueryui1.8/development-bundle/themes/base/jquery.ui.progressbar.css">
		<link rel="stylesheet" type="text/css" href="custom.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>page de connexion </title>
<meta name="keywords" content="accordion theme, homepage, templatemo, free template, jquery kwicks, slider" />
<meta name="description" content="Accordion Theme, homepage, free CSS template from templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

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

</head>
<body bgcolor="#CCCCCC">



<div id="templatemo_main_top"></div>

<div id="templatemo_main_wrapper">
	<div id="templatemo_slider_wrapper">
   	  <div class="ex-form ui-helper-clearfix ui-corner-all">
       <form name="login-form" class="login-form" method="post">

	<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>Connectez-Vous</h1><!--END TITLE-->
    <!--DESCRIPTION--><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	 
	    <table>
		<tr>
		<td>
	    Nom d'utilisateur:</td>
		<td><input name="username" type="text" class="input username"  /></td></tr>
	
	     
	    <tr><td> Password: </td>
		<td><input name="password" type="password" class="input password"  /></td>
		</tr>
		</table>
	    
    </div>
   
    <div class="footer">
      <input type="submit" name="submit" value="connexion" class="button" />
<!--LOGIN BUTTON-->
<!--END LOGIN BUTTON-->
    <!--REGISTER BUTTON-->
    <!--END REGISTER BUTTON-->
    </div>
    <!--END FOOTER-->

</form>
     <br>
   	  </div>
    <!-- end of main -->
</div> <!-- end of main wrapper -->
    <div id="templatemo_main">
      <div class="cleaner"></div>
	  <h2 align="center"> Gestion de stock Magasin de l'ISET </h2>
    </div> <!-- end of main -->
</div> <!-- end of main wrapper -->
<div id="templatemo_footer">
  <div class="cleaner"></div>
</div> <!-- end of footer -->

<!-- end of footer -->

			
</body>
</html>