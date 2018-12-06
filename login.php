<?php
session_start();
$error='';
if (isset($_POST['submit']))
{ if(empty ($_POST['username']) || empty ($_POST['password']))
	{
		$error="Ecrire votre Login et Mot de passe ";
	}	
else 
{
	$username=$_POST['username'];

	$mdp=$_POST['password'];
	$cnx=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($cnx,"gest_stock");
	$query=mysqli_query($cnx,"select * from personne where password='$mdp' and username='$username'");
	$rows= mysqli_num_rows($query);
	if ($rows == 1 )
	{$_SESSION['login_user']=$username;
		header ("location: profile.php");	}
	else {
	echo '<script>alert("Login ou Mot de passe est incorrect ");</script>';}
	//mysql_close($cnx);
}}

//if(isset($_SESSION['login_user']))
//	{header("location:menu.php");}
?>
<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "gest_stock";
try {

$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
} catch(PDOException $e) {
echo $e->getMessage();
}


if(isset($_POST['submit'])) {
$username = $_POST['username'];
$mdp = $_POST['password'];
try {

$req = $DB_con->prepare("SELECT * FROM personne WHERE username='$username' LIMIT 1");

$req->execute(array('$username'=>$username));

$ligne=$req->fetch(PDO::FETCH_ASSOC);

if($req->rowCount() > 0) {

if($mdp == $ligne['password']) {
	
//$_SESSION['nom']= $nom;
$_SESSION['profil']= $ligne['profil'];
if ($ligne['profil']=='magasinier'){
header("Location: profile.php");}
elseif ($ligne['profil']=='admin')
 {header("Location: profile2.php");}
 elseif($ligne['profil']=='enseignant')
  {header("Location: profile3.php");}
 


}
}
}catch(PDOException $e) {
echo $e->getMessage();
}
}

?>