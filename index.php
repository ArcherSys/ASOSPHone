<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/StyleSheetManager.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/HeadersManager.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\Styles\StyleSheetManager;
use ArcherSys\Headings\HeaderManager;
$asosphone = new View("ArcherSys OS Phone",function(){
StyleSheetManager::addStyle("style");

},function(){
HeaderManager::addH1("ArcherSys OS Phone");
?>
<script>
function sendToPhone(){
  window.setTimeout(function(){
     (window.document.forms.reminders.submit);
},window.document.forms.reminders.elements.gotime.valueToNumber);
}

</script>
<div class="iphone-container">
<form name="reminders" id="trgrid" action="https://archersysosphone-acosf.c9.io/textme.php" method="GET">


<input name="From" placeholder="From" type="tel">
<input name="To" required placeholder="To" type="tel">

<textarea required spellcheck name="Text">Text Message Here</textarea>
<input type="submit" class="asos-phone-send" value="Send To Phone" id="sender" >
</form>
</div>
<?php
});
?>