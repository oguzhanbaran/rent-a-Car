<html>
<head>
<title>Carent</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<meta charset="utf-8">
<style>
    input[type=button], input[type=submit], input[type=reset] {
  width:400px;
  height:75px;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=text],input[type=password] {
  width: 500px;
  padding: 6px 10px;
  margin: 2px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
.orta
{
text-align: center;
}
.alt
{
text-align: center;
background-color:#8d8d8d;
}
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
.head
{
background-color:#8d8d8d;
height:150px;
border: 1px  #454545;
}
.ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.myDiv {
  border: 1px #454545;
  background-color:#444444;
  text-align: center;
  height:68%;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 5%;
  border-radius: 5%;
}
</style>
</head>
<body>
<form name="frm_Login" method="post" action="login.php"> 
<div class="head">
<a href="#"><img src="PIC/logo2.png" align="left" width="500px "style="padding-left: 150px;" height="150px"  alt="Örnek Resim" /></a>
<a href="#"><img src="PIC/rent-a-car.png" align="right" width="600px" style="padding-right: 150px;" height="150px"  alt="Örnek Resim" /></a>
</div>
<div class="myDiv">
<div class="w3-bar w3-black w3-xxlarge">
  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
  <a href="cars.php" class="w3-bar-item w3-button"><i class="fa fa-car"></i></a>
  <a href="showCar.php" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a> 
  <a href="login.php" class="w3-bar-item w3-button  w3-green"><i class="fa fa-sign-in"></i></a>
  <a href="newuser.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
  <a href="exit.php" style='float:right;' class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
  <p  style='float:right;font-size:25px;font-family:Helvatica;align:center;margin:5px;' >
  <?php
  session_start();
  if(isset($_SESSION['userName']))
  {
      
      echo "".$_SESSION['userName']."";
  }
 
?>
</p>
</div>
<div class="orta">

<div class="imgcontainer">
    <img src="PIC/avatar.png" alt="Avatar" class="avatar">
  </div>
<p style="font-family:'Times';color:white;font-size:16px">Kullanıcı Adı:</p>
<input type="text" id="uname" name="uname"><br><br>
<p style="font-family:'Times';color:white;font-size:16px">Şifre:</p>
<input type="password" id="pass"  name="pass"><br><br>
<input type="submit" style="margin-top: 20px" value="Giriş">
<?php 
include("vt_baglanti.php"); 

if( isset($_POST["uname"]) AND isset($_POST["pass"]))
{
    $userName=$_POST["uname"];
    $userPass=$_POST["pass"];
    $sqlCommand="SELECT * FROM kullanicilar
                WHERE userName='$userName' AND userPass='$userPass'";
    $result=mysqli_query($vt, $sqlCommand);
    $resultCount=mysqli_num_rows($result);
    if($resultCount>0)
    {
        echo "<h6 style='color:green;'> <br>Giriş başarılı.</h6>";
        $_SESSION["userName"]=$userName;
        header('location:index.php');
    }  
    else
        echo "<h6 style='color:red;'> <br>Kullanıcı adı veya şifre hatalı.</h6>";
}

?>
</div>
 </div>
 <div class="alt">
 <img src="PIC/reklam3.png"  width="750px"  height="150px"  alt="Örnek Resim" />
</div>
</form>
</body>
</html>
