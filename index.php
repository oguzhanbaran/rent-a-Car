<html>
<head>
<title>Carent</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
#left {
    margin-top:80px;
    margin-left:70px;
    margin-bot:50px;
    background-image:url("PIC/leftdiv2.jpg");
    float:left;
    height:75%;
    width:600px;
    background-size:100% 100%;
}
#left:hover {
  border: 3px solid #ffffff;
}

#center {
    display: inline-block;
    margin-top:80px;
    margin-left:70px;
    margin-bot:50px;
    float:left;
    height:75%;
    width:1000px;
}

#right {
    float:right;
    width:100px;
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
<form enctype="multipart/form-data" name="frm_index" method="post" action="carFilter.php"> 
<div class="head">
<a href="#"><img src="PIC/logo2.png" align="left" width="500px "style="padding-left: 150px;" height="150px"  alt="Örnek Resim" /></a>
<a href="#"><img src="PIC/rent-a-car.png" align="right" width="600px" style="padding-right: 150px;" height="150px"  alt="Örnek Resim" /></a>
</div>
<div class="myDiv">
<div class="w3-bar w3-black w3-xxlarge">
  <a href="index.php" class="w3-bar-item w3-button w3-green"><i class="fa fa-home"></i></a>
  <a href="cars.php" class="w3-bar-item w3-button"><i class="fa fa-car"></i></a>
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
</p>
</div>
<div id="container">
  <div id="left">

  <p style="margin-top:75px;font-family:'Impact';color:black;font-size:22px">Alış yeri:
   <input type="text" id="konum" name="konum"></p>
   
   
<p style="font-family:'Impact';color:black;font-size:17px"> Alış tarihi:
 <input  type="date" id="start" name="start"
       value="2020-06-29"
       min="2020-01-01" max="2025-12-31">
       
       
<p style="font-family:'Impact';color:black;font-size:17px">Teslim tarihi:
 <input  type="date" id="stop" name="stop"
       value="2020-06-30"
       min="2020-01-01" max="2025-12-31">

<input type="submit" style="margin-top: 20px" value="Kirala">
  </div>
  <div id="center">
  <img src="PIC/bannerr.jpg"  width="1000px"  height="300px"  alt="Örnek Resim" /><br>
  <p style="margin-top:35px;font-family:'Impact';color:white;font-size:22px">Araç kiralamalarında %20 indirim!</p>
  <img src="PIC/banner4.png" style="margin-top:15px;"  width="1000px"  height="300px"  alt="Örnek Resim" />
  </div>
  <div id="right"></div>
  </div>
  </div>
  <div class="alt">
 <img src="PIC/reklam3.png"  width="750px"  height="150px"  alt="Örnek Resim" />
 </div>
 </form>
</body>
</html>
