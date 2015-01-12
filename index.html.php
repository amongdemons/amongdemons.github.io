<!DOCTYPE html>
<html lang="en">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){ //mygtuko spalvos keitimas 
  $("button").click(function(){
  	if(!($(this).hasClass("circle_red"))){
    $(this).toggleClass("circle_green");
    document.getElementById('vietosid').value = this.getAttribute('value'); //vietos rezervavimas
    if($(this).hasClass("circle_green")){
    $("button").attr('disabled','disabled');
    $(this).removeAttr('disabled');
    }
    else if($(this).hasClass("circle_blank")){
    $("button").removeAttr('disabled');
    }
 }
  });
});
</script>
<script>
function redFlag(){
if($("button").hasClass("circle_green"){
$("button").removeClass("circle_green");	
$("button").addClass("circle_red");
$("button").removeAttr('disabled');
}
}
</script>
	<title><?php echo $title; ?></title>   <!-- apskritimai lenteleje -->     
<style type="text/css">    
       .circle_blank{
       display:block;
       width:1%;
       margin:0 auto;
       padding:5px 5px;
       border:1px solid #000000;
       border-radius:50px;
       background:#98AFC7}
       .circle_green{
       display:block;
       width:1%;
       margin:0 auto;
       padding:5px 5px;
       border:1px solid #000000;
       border-radius:50px;
       background:green}
       .circle_red { 
       display:block;
       width:1%;
       margin:0 auto;
       padding:5px 5px;
       border:1px solid #000000;
       border-radius:50px;
       background:red}
</style>
</head>
<body>

<div id="container">
	<h2>REGISTRACIJA Į KONFERENCIJĄ</h2>
</div>
<div id="preview"> </div>
<?php //echo form_open("index.php/site/registration"); ?>
<div id="formbox">
<form  id="form" name="form">

<pre><b>Vardas*          Adresas*         Slaptazodis* </b></pre> 
<input type="text" name="vardas111" style="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30">
&nbsp;&nbsp;
<input type="text" name="adresas" style="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30"> 
&nbsp;&nbsp;
<input type="password" name="slaptazodis" style="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30"> <br>
<pre><b>El pastas*      Miestas*         Pakartokite slaptazodi*</b></pre>
<input type="email" name="epastas" style="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30"> 
&nbsp;&nbsp;
<select name="miestas" style="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;">
  <option value="Kaunas">Kaunas</option>
  <option value="Vilnius">Vilnius</option>
  <option value="Klaipeda">Klaipeda</option>
</select> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="pslaptazodis" style="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30"><br>
<input type="submit" name="submit" id="submit" onclick="return false" value=" Registruotis " style="position: fixed; top:500px; left: 16px; width: 145px; height: 21px;">
<input type="hidden" name="vietosid" value="" id="vietosid"> <!-- naudojama vietai issaugoti db-->
<h2> PASIRINKITE SEDEJIMO VIETA </h2>
<table border="1" width="17%" border="2" height ="200" align="left">
<tr>
<td style="background-color: #959090"></td>
<th style="background-color: #959090">A</th>
<th style="background-color: #959090">B</th>
<th style="background-color: #959090">C</th>
</tr>
<tr>
<th style="background-color: #959090">1</th>
<td><button type="button" id="myg1" name="A1" value="A1" class="circle_blank"></button></td>
<td><button type="button" id="myg2" name="B1" value="B1" class="circle_blank"></button></td>
<td><button type="button" id="myg3" name="C1" value="C1" class="circle_blank"></button></td>
</tr>
<tr>
<th style="background-color: #959090">2</th>
<td><button type="button" id="myg4" name="A2" value="A2" class="circle_blank"></button></td>
<td><button type="button" id="myg5" name="B2" value="B2" class="circle_blank"></button></td>       	
<td><button type="button" id="myg6" name="C2" value="C2" class="circle_blank"></button></td>
</tr>
<tr>
<th style="background-color: #959090">3</th>
<td><button type="button" id="myg7" name="A3" value="A3" class="circle_blank"></button></td>
<td><button type="button" id="myg8" name="B3" value="B3" class="circle_blank"></button></td>
<td><button type="button" id="myg9" name="C3" value="C3" class="circle_blank"></button></td>
</tr>
<tr>
<th style="background-color: #959090" >4</th>
<td><button type="button" id="myg10" name="A4" value="A4" class="circle_blank"></button></td>
<td><button type="button" id="myg11" name="B4" value="B4" class="circle_blank"></button></td>
<td><button type="button" id="myg12" name="C4" value="C4" class="circle_blank"></button></td>
</tr>
</table> <br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br>
<input class="circle_red" style="position: fixed; top:465px; left: 16px; width: 4px; height: 4px;"> 
<input style="position: fixed; top:465px; left: 40px; border: none; font-family: Verdana; font-weight: bold; font-size: 12px;" value="- vieta uzimta.">
<script type="text/javascript">
$(document).ready(function() {
$("#submit").click(function() {
var name = $("#vardas111").val();
var email = $("#epastas").val();
var adress = $("#adresas").val();
var psw = $("#slaptazodis").val();
if (name == null || email == null || adress == null || psw == null) {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
$('#form').submit(function (event) {
    dataString = $("#form").serialize();
    $.ajax({
        type:"POST",
        url:base_url + '/' + controller + '/registration',
        data:dataString,
		  dataType: 'json',
        success:function (data) {
            alert('test');
        }
        error:function(){
				alert('fail');        
        }

    });
    event.preventDefault();
});
}
});
});
</script>
<script type="text/javascript">
$( "#submit" ).click(function()  //pavertimas zaliu langeliu raudonais
{
 if($("#myg1").hasClass("circle_green")) {
 	$("#myg1").removeClass("circle_green");	
	$("#myg1").addClass("circle_red");
	$("button").removeAttr('disabled');
	$("#myg1").attr('disabled','disabled');
	var myg1 = $("#epastas").getAttribute('value');
}
else if($("#myg2").hasClass("circle_green")) {
 	$("#myg2").removeClass("circle_green");	
	$("#myg2").addClass("circle_red");
	$("button").removeAttr('disabled');
	$("#myg2").attr('disabled','disabled');
	var myg2 = $("#epastas").getAttribute('value');
}
else if($("#myg3").hasClass("circle_green")) {
 	$("#myg3").removeClass("circle_green");	
	$("#myg3").addClass("circle_red");
	$("button").removeAttr('disabled');
	$("#myg3").attr('disabled','disabled');
	var myg3 = $("#epastas").getAttribute('value');
}
else if($("#myg4").hasClass("circle_green")) {
 	$("#myg4").removeClass("circle_green");	
	$("#myg4").addClass("circle_red");
	$("button").removeAttr('disabled');
	$("#myg4").attr('disabled','disabled');
	var myg4 = $("#epastas").getAttribute('value');
}
else if($("#myg5").hasClass("circle_green")) {
 	$("#myg5").removeClass("circle_green");	
	$("#myg5").addClass("circle_red");
	$("button").removeAttr('disabled');
	$("#myg5").attr('disabled','disabled');
	var myg5 = $("#epastas").getAttribute('value');
}
else if($("#myg6").hasClass("circle_green")) {
 	$("#myg6").removeClass("circle_green");	
	$("#myg6").addClass("circle_red");
	$("button").removeAttr('disabled');
	$("#myg6").attr('disabled','disabled');
	var myg6 = $("#epastas").getAttribute('value');
}
else if($("#myg12").hasClass("circle_green")) {
 	$("#myg12").removeClass("circle_green");	
	$("#myg12").addClass("circle_red");
	$("button").removeAttr('disabled');
	$("#myg12").attr('disabled','disabled');
	var myg12 = $("#epastas").getAttribute('value');
}
else if($("#myg7").hasClass("circle_green")) {
 	$("#myg7").removeClass("circle_green");	
	$("#myg7").addClass("circle_red");
	$("button").removeAttr('disabled');	
	$("#myg7").attr('disabled','disabled');
	var myg7 = $("#epastas").getAttribute('value');
}
else if($("#myg8").hasClass("circle_green")) {
 	$("#myg8").removeClass("circle_green");	
	$("#myg8").addClass("circle_red");
	$("button").removeAttr('disabled');	
	$("#myg8").attr('disabled','disabled');
	var myg8 = $("#epastas").getAttribute('value');
}
else if($("#myg9").hasClass("circle_green")) {
	$("#myg9").removeClass("circle_green");	
	$("#myg9").addClass("circle_red");
	$("button").removeAttr('disabled');	
	$("#myg9").attr('disabled','disabled');
	var myg9 = $("#epastas").getAttribute('value');
}
else if($("#myg10").hasClass("circle_green")) {
	$("#myg10").removeClass("circle_green");	
	$("#myg10").addClass("circle_red");
	$("button").removeAttr('disabled');	
	$("#myg10").attr('disabled','disabled');
	var myg10 = $("#epastas").getAttribute('value');
}
else if($("#myg11").hasClass("circle_green")) {
	$("#myg11").removeClass("circle_green");	
	$("#myg11").addClass("circle_red");
	$("button").removeAttr('disabled');	
	$("#myg11").attr('disabled','disabled');
	var myg11 = $("#epastas").getAttribute('value');
}
});
</script>
<?php echo form_close(); ?>
</div>
<br><br><br>
<?php echo form_open("index.php/site/remove_user"); ?>
<b>Atsaukti registracija</b> <br><br>
<b>El. pastas: </b><br><input type="email" id="ptrinti" name='ptrinti'>  <input type="submit" id="trinti" onclick="return false" value="Pasalinti">
<script type="text/javascript">
("#trinti").click(function {
var pastasb = $("#ptrinti").getAttribute('value');
if(myg1 == pastasb){
	$("#myg1").removeClass("circle_red");	
	$("#myg1").addClass("circle_blank");
	$("#myg1").removeAttr('disabled');	
}
else if(myg2 == pastasb){
	$("#myg2").removeClass("circle_red");	
	$("#myg2").addClass("circle_blank");
	$("#myg2").removeAttr('disabled');	
}
else if(myg3 == pastasb){
	$("#myg3").removeClass("circle_red");	
	$("#myg3").addClass("circle_blank");
	$("#myg3").removeAttr('disabled');	
}
else if(myg4 == pastasb){
	$("#myg4").removeClass("circle_red");	
	$("#myg4").addClass("circle_blank");
	$("#myg4").removeAttr('disabled');	
}
else if(myg5 == pastasb){
	$("#myg5").removeClass("circle_red");	
	$("#myg5").addClass("circle_blank");
	$("#myg5").removeAttr('disabled');	
}
else if(myg6 == pastasb){
	$("#myg6").removeClass("circle_red");	
	$("#myg6").addClass("circle_blank");
	$("#myg6").removeAttr('disabled');	
}
else if(myg7 == pastasb){
	$("#myg7").removeClass("circle_red");	
	$("#myg7").addClass("circle_blank");
	$("#myg7").removeAttr('disabled');	
}
else if(myg8 == pastasb){
	$("#myg8").removeClass("circle_red");	
	$("#myg8").addClass("circle_blank");
	$("#myg8").removeAttr('disabled');	
}
else if(myg9 == pastasb){
	$("#myg9").removeClass("circle_red");	
	$("#myg9").addClass("circle_blank");
	$("#myg9").removeAttr('disabled');	
}
else if(myg10 == pastasb){
	$("#myg10").removeClass("circle_red");	
	$("#myg10").addClass("circle_blank");
	$("#myg10").removeAttr('disabled');	
}
else if(myg11 == pastasb){
	$("#myg11").removeClass("circle_red");	
	$("#myg11").addClass("circle_blank");
	$("#myg11").removeAttr('disabled');	
}
else if(myg12 == pastasb){
	$("#myg12").removeClass("circle_red");	
	$("#myg12").addClass("circle_blank");
	$("#myg12").removeAttr('disabled');	
}
});
</script>
<?php form_close(); ?>
</body>
</html>