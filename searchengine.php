<html>
<head>
<style>


body{

background-color: beige;
font-family:tahoma;
font-size:25px;
background-position: center;

}
a{
    text-decoration: none;
    font-family:arial;
    font-weight:bold;
    color:black;
 
}
a:hover{
   text-decoration: underline;
    font-family:arial;
    color:darkslateblue;
    background: -webkit-linear-gradient( top, lime 36%, blue);
            background: linear-gradient( top, lime 36%, blue);
          
            -webkit-background-clip: text;
            background-clip:text;
}
h1{
   text-align:center;
   position:relative;
   background-position: center;
    font-family:agelast;
    font-size:50px;
    background: -webkit-linear-gradient( top, gold 36%, blue);
            background: linear-gradient( top, gold 36%, blue);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip:text;
    background-position:center;
}

.name{
color:black;
font-family:alien league;
font-size:30px;
text-align:center;
background-position:center;
}
li{
    font-family:alien league;
    font-size:25px;
    color:black;
}
</style>



<body>
<h1>|People, The Web,Ideas,& Gamertainment|</h1>
</body>
</head>
</html>


<?php 
$connect = mysqli_connect("localhost","root","","searchengine");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}




  else{

$search = $_GET['q'];

$results = explode(" " , $search);


$x = 0;
$construct = "";
  
$construct  =  "SELECT * from results where Name like '%$search%' OR URL like '%$search%' OR 
Description LIKE '%$search%'";

$results=$connect->query($construct);

$count_rows = mysqli_num_rows($results);
  
echo  $count_rows  .' results found! ' ;
 

while($row=$results->fetch_assoc())

echo '<body><a href="https://' . $row['URL'] . '"><br><br><br>https://'. $row['URL'].'</a><br><br> '. $row['URL'].' <br><br><br>'. $row['Description'].'</body>';



  }	

?>

  
  
