<html>
<body>
<link rel="stylesheet" href="https://padded-bilge.000webhostapp.com/full.css">
<div class="autour">
<form>
<input id="montext" type="text" value="mon texte ou mon lien" />
<button>Créer le QRcode</button>
</form>
<?php
echo '<img id="imageQRcode" src="http://chart.apis.google.com/chart?cht=qr&chs=150x150&chl=www.scoco.fr" alt="QR Code" name="imageQRcode" />';
?>
</div>
</body>
</html>