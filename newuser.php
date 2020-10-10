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
input[type=text],input[type=password],input[type=date] {
  
  width: 500px;
  padding: 12px 20px;
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
#center {
    width:200px;
    height:200px;
    background-color: #FFFFFF;
    margin-top:80px;
    margin-left:70px;
    margin-bot:50px;
    float:center;
    
}
#center:hover {
  border: 3px solid #ffffff;
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
#container {
    width:100%;
    text-align:center;
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
<form name="frm_Login" method="post" action="newuser.php"> 
<div class="head">
<a href="#"><img src="PIC/logo2.png" align="left" width="500px "style="padding-left: 150px;" height="150px"  alt="Örnek Resim" /></a>
<a href="#"><img src="PIC/rent-a-car.png" align="right" width="600px" style="padding-right: 150px;" height="150px"  alt="Örnek Resim" /></a>
</div>
<div class="myDiv">
<div class="w3-bar w3-black w3-xxlarge">
  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
  <a href="cars.php" class="w3-bar-item w3-button"><i class="fa fa-car"></i></a>
  <a href="showCar.php" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a>
  <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i></a>
  <a href="newuser.php" class="w3-bar-item w3-button  w3-green"><i class="fa fa-user"></i></a>
  <a href="exit.php" style='float:right;' class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
  <p  style='float:right;font-size:25px;font-family:Helvatica;align:center;margin:5px;' >
  <?php
  session_start();
  if(isset($_SESSION['userName']))
  {
      
      echo "".$_SESSION['userName']."";
  }
 
?>
</div> 
<div class="center">
<div id="container">
<p  style='float:center;color:white;font-size:25px;font-family:Helvatica;align:center;margin-bot:5px;' >Kullanıcı Adı:  <input type="text" style="margin-left:10px;" id="uname" name="uname"><br></p>
<p  style='float:center;color:white;font-size:25px;font-family:Helvatica;align:center;margin-bot:5px;' >Şifre :  <input type="password" style="margin-left:87px;" id="upass" name="upass"><br></p>
<p  style='float:center;color:white;font-size:25px;font-family:Helvatica;align:center;margin-bot:5px;' >Doğum Tarihi:  <input  type="date" style="margin-left:8px;" id="date" name="date"><br></p>
<p  style='float:center;color:white;font-size:25px;font-family:Helvatica;align:center;margin-bot:5px;' >TC Kimlik No:  <input type="text" id="tc" name="tc" pattern="[0-9]{11}"><br></p>
<input type="submit" style="margin-top: 20px" value="Kayıt"><br>
<?php 
include("vt_baglanti.php");
if(isset($_POST["uname"]) AND isset($_POST["upass"]) AND isset($_POST["date"]) AND isset($_POST["tc"]))
{
    $uname=$_POST["uname"];
    $upass=$_POST["upass"];
    $date=$_POST["date"];
    $tcNo=$_POST["tc"];
    if($tcNo!="" && $uname!="" && $upass!="" && $tcNo!="")
    {
        $sqlCommand="INSERT INTO kullanicilar (userName,
                                 userPass,
                                 tcNo,
                                 birthDate,
                                 authority
                                 )
         VALUES (
                                 '".$uname."',
                                 '".$upass."',
                                 '".$tcNo."',
                                 '".$date."',
                                 '2'
                                 );
";
        if ( mysqli_query($vt,$sqlCommand ) )
        {
            echo "<h6 style='color:green;'> <br>Kayıt başarılı.</h6>";
        }
        else 
            echo "<h6 style='color:red;'> <br>Kayıt işlemi sırasında hata oluştu.</h6>";
    }
    else 
        echo "<h6 style='color:red;'> <br>Boş alan bırakmayınız.</h6>";
            
        
}
?>
</div>
</div>
</div>


 <div class="alt">
 <img src="PIC/reklam3.png"  width="750px"  height="150px"  alt="Örnek Resim" />
</div>
</form>
</body>
</html>