<html>
<head>
<title>Carent</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<meta charset="utf-8">
<style>
#icBolme{
    float:left;
    width:300px;
    height:420px;
    border:solid 4px;
    background-color: #8d8d8d;
    margin-top:20px;
    margin-right: 10px;
    margin-left: 20px;
},
#icBolme:hover {
  border: 3px solid #000000;
}
    input[type=button], input[type=submit], input[type=reset] {
  width:150px;
  height:40px;
  background-color: #4CAF50;
  border: none;
  color: white;
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
    float:left;

}


#center {
    display: inline-block;
    margin-top:80px;
    margin-left:70px;
    margin-bot:50px;
    float:left;
    height:75%;
    width:100%;
}

#right {
    float:right;
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
  width:100%;
  height:1100px;
}

.imgclass
{
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    padding: 4px;
                    height:160px;
                    width: 250px;
                    margin-top:5px;
}

</style>
</head>
<body>
<div class="head">
<a href="#"><img src="PIC/logo2.png" align="left" width="500px "style="padding-left: 150px;" height="150px"  alt="Örnek Resim" /></a>
<a href="#"><img src="PIC/rent-a-car.png" align="right" width="600px" style="padding-right: 150px;" height="150px"  alt="Örnek Resim" /></a>
</div>
<div class="myDiv">
<div class="w3-bar w3-black w3-xxlarge">
  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
  <a href="cars.php" class="w3-bar-item w3-button"><i class="fa fa-car"></i></a>
  <a href="showCar.php" class="w3-bar-item w3-button  w3-green"><i class="fa fa-globe"></i></a>
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

  <div id="center">
<?php
echo "<h1 style='color:green;'> <br>Araç kiralama işleminiz başarıyla tamamlanmıştır.</h1>";
?>
	</div>	
 
 </div>
  <div class="alt">
 <img src="PIC/reklam3.png"  width="750px"  height="150px"  alt="Örnek Resim" />
 </div>

</body>
</html>

