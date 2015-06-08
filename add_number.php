<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/HeadersManager.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\Headings\HeaderManager;
$asosphone = new View("ArcherSys OS Phone",function(){
?>
<style>
*{
font-family: Segoe UI;
font-family: 21px;

text-align: center;
}
input, textarea{
display: block;
position: relative;
margin-left: 400px;
top: 50px;

}
::-webkit-input-placeholder {
  font-family: Segoe UI;
}
h1{
margin-bottom: 50px;
text-align: center;
}
input[type=tel]{
width: 25%;
position: relative;
left: -75px;
margin-bottom: 25px;
height: 45px;
}
textarea{
width: 25%;
position: relative;
left: -75px;
height: 75px;
margin-bottom: 25px;
border:5px solid bluegreen;
border-radius: 4px;
webkit-tap-highlight-color: blue;
}
.asos-phone-send{
color: white;
background-color: #558ee4;
width: 25%;
height: 40px;
border-radius: 3px;
font-weight: bold;
font-size: 20px;

position: relative;
left: -75px;
}
</style>
<?php
},function(){
HeaderManager::addH1("ArcherSys OS Phone");
?>
<form action="https://archersysosphone-acosf.c9.io/textme.php" method="GET">



<input name="From" placeholder="From" type="tel">

<input name="To" required placeholder="To" type="tel"> 
<textarea required name="Text">Text Message Here</textarea>
<input type="submit" class="asos-phone-send" value="Send Text"!>
</form>
<?php
});
?>