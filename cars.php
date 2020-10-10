<html>
<head>
<title>Carent</title>
	<link rel="stylesheet" href="CSS/style.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
input[type=text],input[type=password], input[type=date]{
  width: 300px;
  height:50px;
  padding: 12px 20px;
  margin: 2px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
  display: block;
  margin-right: auto;
  margin-left: auto;
}

input[type=text]:focus ,input[type=password]:focus, input[type=date]:focus{
  border: 3px solid #555;
}
#container {
    width:100%;
    text-align:center;
}
#right {
    margin-top:80px;
    float:right;
    margin-right:50px;
    margin-bot:50px;
    background-image:url("PIC/back.jpg");
    height:75%;
    width:27%;
    background-size:100% 100%;
}
#right:hover {
  border: 3px solid #000000;
}

#left {
    margin-top:80px;
    float:left;
    margin-left:50px;
    margin-bot:50px;
    background-color:#8d8d8d;
    height:80%;
    width:63%;
    background-size:100% 100%;
}
#left:hover {
  border: 3px solid #000000;
}
#left2 {
    margin-top:10px;
    float:left;
    margin-left:200px;
    margin-bot:50px;
    background-color:#8d8d8d;
    height:auto;
    width:auto;
    background-size:100% 100%;
}
#right2{
    margin-top:10px;
    float:right;
    margin-right:200px;
    margin-bot:50px;
    background-color:#8d8d8d;
    height:auto;
    width:auto;
    background-size:100% 100%;
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
  height:100%;
}
</style>
</head>
<body>
<form enctype="multipart/form-data" name="frm_cars" method="post" action="cars.php"> 
<div class="head">
	<a href="#"><img src="PIC/logo2.png" align="left" width="500px "style="padding-left: 150px;" height="150px"  alt="Örnek Resim" /></a>
	<a href="#"><img src="PIC/rent-a-car.png" align="right" width="600px" style="padding-right: 150px;" height="150px"  alt="Örnek Resim" /></a>
</div>
<div class="myDiv">
	<div class="w3-bar w3-black w3-xxlarge">
 		 <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
  		 <a href="cars.php" class="w3-bar-item w3-button  w3-green"><i class="fa fa-car"></i></a>
 		 <a href="showCar.php" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a>
 		 <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i></a>
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
	</div>
	<div id="container">
	<div id="left">
	<input style="margin-top:10px;font-family:'Times';color:white;font-size:16px" type="file" id="resim" name="myfile">
	<p style="font-family:'Times';color:white;font-size:16px"><input type="text" id="marka" name="marka" placeholder="Marka"></p>
	<p style="font-family:'Times';color:white;font-size:16px"><input type="text" id="model" name="model" placeholder="Model"></p>
	<p style="font-family:'Times';color:white;font-size:16px"><input type="text" id="konum" name="konum" placeholder="Konum"></p>
	<p style="font-family:'Times';color:white;font-size:16px"><input type="text" id="yil" name="yil" placeholder="Yıl"></p>
	<p style="font-family:'Times';color:white;font-size:16px"><input type="text" id="yakit" name="yakit" placeholder="Yakıt"></p>
	<p style="font-family:'Times';color:white;font-size:16px"><input type="text" id="tur" name="tur" placeholder="Tür"></p>
	<p style="font-family:'Times';color:white;font-size:16px"><input type="text" id="km" name="km" placeholder="KM"></p>
	<p style="font-family:'Times';color:white;font-size:16px"><input type="text" id="renk" name="renk" placeholder="Renk"></p>
	<p style="font-family:'Times';color:white;font-size:16px"><input type="text" id="tutar" name="tutar" placeholder="Günlük Kira Tutarı"></p>
	<input type="submit"  value="Kaydet">
	<?php 
	
	    if( isset($_POST["marka"]) AND isset($_POST["model"]))
	    {
	        if(isset($_SESSION["userName"]))
	       {
	        include("vt_baglanti.php");
	        $resimAdi=uniqid("arac_");
	        $resimYolu="ARAC/".$resimAdi;
	        $uzanti="jpg";
	        $aracKonum=$_POST["konum"];
	        $aracMarka=$_POST["marka"];
	        $aracModel=$_POST["model"];
	        $aracYil=$_POST["yil"];
	        $aracYakit=$_POST["yakit"];
	        $aracTur=$_POST["tur"];
	        $aracKM=$_POST["km"];
	        $aracRenk=$_POST["renk"];
	        $aracTutar=$_POST["tutar"];
	        if($resimYolu!="" && $aracMarka!="" && $aracModel!="" && $aracYil!="" && $aracYakit!="" && $aracTur!="" && $aracKM!="" && $aracRenk!="" && $aracTutar!="")
	        {
	            if($_SERVER["REQUEST_METHOD"] == "POST"){
	                if(isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] == 0){
	                    $filename = $_FILES["myfile"]["name"];
	                    $filetype = $_FILES["myfile"]["type"];
	                    $filesize = $_FILES["myfile"]["size"];
	                    if(file_exists("ARAC/" . $filename)){
	                        echo "<p style='color:yellow'>File is already exists.</p>";
	                    }
	                    $newArray=explode(".", $filename);
	                    $newName="ARAC/".$resimAdi.".".$newArray[1];
	                    move_uploaded_file($_FILES["myfile"]["tmp_name"],$newName );
	                }
	            }
	            $sqlCommand="INSERT INTO arac (resimYolu,
                                 aracMarka,
                                 aracModel,
                                 aracYil,
                                 aracYakit,
                                 aracTur,
                                 aracKm,
                                 aracRenk,
                                 aracTutar,
                                 aracSahibi,
                                 aracKonum
                                 )
         VALUES (
                                 '".$newName."',
                                 '".$aracMarka."',
                                 '".$aracModel."',
                                 '".$aracYil."',
                                 '".$aracYakit."',
                                 '".$aracTur."',
                                 '".$aracKM."',
                                 '".$aracRenk."',
                                 '".$aracTutar."',
                                 '".$_SESSION['userName']."',
                                 '".$aracKonum."'
                                 );
";
	            if ( mysqli_query($vt,$sqlCommand ) )
	            {
	                echo "<h4 style='color:green;'> <br>Kayıt başarılı.</h4>";
	            }
	            else
	                echo "<h4 style='color:red;'> <br>Kayıt işlemi sırasında hata oluştu.</h4>";
	        }
	        else
	            echo "<h6 style='color:red;'> <br>Boş alan bırakmayınız.</h6>";
	            
	    }
	    else
	        echo "<h6 style='color:red;'> <br>Araç kiralayabilmek için ilk olarak üye girişi yapmalısınız.</h6>";
	}
	
	



?>
	</div>
	
	
	</div>
  	<div id="right">
  	</div>
  	
  	</div>

	 <div class="alt">
 	<img src="PIC/reklam3.png"  width="750px"  height="150px"  alt="Örnek Resim" />
	</div>
</form>
</body>
</html>

