
<?php
$conn=[
'host'=> 'localhost',
'user'=> 'root',
'database' =>'rebotic_arm'
];

$mysql= mysqli_connect($conn['host'],$conn['user'],'',$conn['database']);

if($mysql){
echo "connected";}
else{
echo "not connect";}
?>


<html>
<head>

<style>




.m1 , .m2 , .m3 ,.m4 ,.m5 , .m6 {
  text-align: center;
  width: 500px;
  background-color: white;
  margin:3em 30em
}
 .bod{
 padding: 20px 20px ;
 float: center ;
 text-align: center;
 background-color: #04DD6D ;
 width:550px;
 
 
 }


.m1 ,.m2 ,.m3 ,.m4 ,.m5 , .m6::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  
  background-color: white;
  cursor: pointer;
    

}
p{
  font-size: 100% ;
  font-weight: bold
}



h1{ background : lightbink;
text-align: center;
color: #04DD6D ;


}
#s,#o {
	background-color:lightblue;
	
	background: lightgray;
	font-weight: bold;
	font-size: 100%;
	width: 8%;
	padding: 10px 20px ;
	margin-right: 5%;
		border:none;
	border-radius:30px;
	margin-button: 20px;
}
	

}
</style>
</head>

<h1>ROBOTIC ARM's CONTROLLER</h1>
<body >

<form action="" method="post" id="kk">

<button type="submit" name="Save" id="s" onclick = "Save()" > Save </button>
<button type="submit" name="Save" id="o"  > on / off</button>

</form>
<div class="bod"   >
  <div class="m1">
  <p>Engine 1:</p>
  <input type="range" min="1" max="180" value="50" id="m1">
  <p>Angle : <span id="1"></span><style>background : blue ; font-size: 30 ;</style><p>
  </div>
  
  <div class="m2">
  <p>Engine 2:</p>
  <input type="range" min="1" max="180" value="50" id="m2">
  <p>Angle : <span id="2"></span> <p>
  </div>
   
   <div class="m3">
   <p>Engine 3:</p>
   <input type="range" min="1" max="180" value="50"  id="m3">
   <p>Angle : <span id="3"></span><p>
   </div>
  
  
  <div class="m4">
  <p>Engine 4:</p>
  <input type="range" min="1" max="180" value="50" id="m4" >
   <p>Angle : <span id="4"></span><p>
   </div>
  
  
  <div class="m5">
  <p>Engine 5</p>
  <input type="range" min="1" max="180" value="50"  id="m5">
  <p>Angle : <span id="5"></span><p>
  </div>
  
  
  <div class="m6">
  <p>Engine 6</p>
  <input type="range" min="1" max="180" value="50" id="m6" >
 <p>Angle : <span id="6"></span><p>
 </div>
 

</div>


<script>
function FillAngle(){
document.getElementById("1").innerHTML= document.getElementById("m1").value;

document.getElementById("2").innerHTML= document.getElementById("m2").value;
document.getElementById("3").innerHTML= document.getElementById("m3").value;
document.getElementById("4").innerHTML= document.getElementById("m4").value;
document.getElementById("5").innerHTML=document.getElementById("m5").value;
document.getElementById("6").innerHTML=document.getElementById("m6").value;

  document.getElementById("m2").oninput = function() {
     document.getElementById("2").innerHTML = this.value;
}

document.getElementById("m1").oninput = function() {
     document.getElementById("1").innerHTML = this.value;
}

document.getElementById("m3").oninput = function() {
     document.getElementById("3").innerHTML = this.value;
}
document.getElementById("m4").oninput = function() {
     document.getElementById("4").innerHTML = this.value;
}
document.getElementById("m5").oninput = function() {
     document.getElementById("5").innerHTML = this.value;
}
document.getElementById("m6").oninput = function() {
     document.getElementById("6").innerHTML = this.value;
}
}

</script>
<script>FillAngle()</script>

</body>


<script>
function Save(){
en1= document.getElementById("m1").value;

en2= document.getElementById("m2").value;
en3=document.getElementById("m3").value;
en4=document.getElementById("m4").value;
en5=document.getElementById("m5").value;
en6=document.getElementById("m6").value;
<?php

if(isset($_POST['Save'])){

	
   $s="INSERT INTO arm (Engine1 ,Engine2 ,Engine3 , Engine4 ,Engine5 ,Engine6 ) VALUES ('en1','en2', 'en3','en4','en5','en6')";
	if(mysqli_query($mysql,$s)){
	echo "inserted";}
	else{
	echo "there is some thing is wrong".mysqli_error($mysql);}
}
	

?>}	




</html>
<footer>


</footer>

<?php
mysqli_close($mysql);
?>